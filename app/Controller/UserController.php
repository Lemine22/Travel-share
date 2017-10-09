<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use Manager\UserManager;
use \Manager\PostManager;
use \Manager\PhotoManager;
use \Model\User;
use \Core\Utils;


class UserController extends Controller
{
	private $manager;
	private $authent;

	public function __construct() {
		$this->manager = new UserManager();
		$this->authent = new AuthentificationManager();
	}

	public function register()
	{
		// On réceptionne les données du formulaire
		$login = !empty($_POST['login']) ? strip_tags(trim($_POST['login'])) : '';
		$pseudo = !empty($_POST['pseudo']) ? strip_tags(trim($_POST['pseudo'])) : '';
		$password = !empty($_POST['password']) ? strip_tags(trim($_POST['password'])) : '';
		$confirm_password = !empty($_POST['confirm_password']) ? strip_tags($_POST['confirm_password']) : '';
		$picture = !empty($_POST['picture']) ? strip_tags($_POST['picture']) : '';

		$errors = array();
		$result = false;

		// Le formulaire a ete soumis, on a appuye sur le bouton Envoyer
		if (!empty($_POST)) {

			// On check les erreurs possibles
			if (empty($login) || !filter_var($login, FILTER_VALIDATE_EMAIL)) {
				$errors['login'] = 'Veuillez renseigner un email valide';
			}
			if (empty($pseudo)) {
				$errors['pseudo'] = 'Veuillez renseigner un pseudo valide';
			}
			if (empty($password)) {
				$errors['password'] = 'Veuillez renseigner un mot de passe';
			} else if (strlen($password) < 8) {
				$errors['password'] = 'Votre mot de passe doit comporter au moins 8 caractères';
			}
			if (!empty($password) && $password !== $confirm_password) {
				$errors['confirm_password'] = 'Les 2 mots de passe ne correspondent pas';
			}

			//debug($errors);

			// Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
			if (empty($errors)) {

				$email_exists = $this->manager->emailExists($login);
				$pseudo_exists = $this->manager->usernameExists($pseudo);

				if (!empty($email_exists)) {
					$errors['login'] = 'Cet email est deja pris';
				}
				if(!empty($pseudo_exists)) {
					$errors['pseudo'] = 'Ce pseudo est deja pris';
				}


					$crypted_password = password_hash($password, PASSWORD_BCRYPT);

					$user = $this->manager->insert(array(
						'login' => $login,
						'pseudo' => $pseudo,
						'user_picture' => $picture,
						'password' => $crypted_password,
						'date_user' => date('Y-m-d H:i:s'),
						'role' => 'user',
					));

					if (!empty($user)) {
						$this->authent->logUserIn($user);
						$result = true;

						$this->redirectToRoute('world');
					} else {
						$errors['db_error'] = 'Erreur interne, merci de reessayer ulterieurement';
					}
				}
			}

		$this->show('default/register', array(
			'errors' => $errors,
			'result' => $result,
			'login' => $login,
			'pseudo' => $pseudo,
			'password' => $password
		));
	}

	public function login()
	{
		// On réceptionne les données du formulaire
		$pseudo = !empty($_POST['pseudo']) ? strip_tags(trim($_POST['pseudo'])) : '';
		$password = !empty($_POST['password']) ? strip_tags(trim($_POST['password'])) : '';

		$errors = array();
		$result = false;

		// Le formulaire a ete soumis, on a appuye sur le bouton Envoyer
		if (!empty($_POST)) {

			// On check les erreurs possibles
			if (empty($pseudo) || empty($password)) {
				$errors['pseudo'] = 'Identifiants incorrects';
			}

			// Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
			if (empty($errors)) {

				$user_id = $this->authent->isValidLoginInfo($pseudo, $password);

				if (empty($user_id)) {
					$errors['pseudo'] = 'Identifiants incorrects';
				} else {

					$user = $this->manager->find($user_id);

					if (!empty($user)) {
						$this->authent->logUserIn($user);
						$result = true;

						$this->redirectToRoute('world');

					} else {
						$errors['db_error'] = 'Erreur interne, merci de reessayer ulterieurement';
					}
				}
			}
		}

		$this->show('default/register', array(
			'errors' => $errors,
			'result' => $result,
			'pseudo' => $pseudo
		));
	}
	public function login2()
	{
		// On réceptionne les données du formulaire
		$pseudo = !empty($_POST['pseudo']) ? strip_tags(trim($_POST['pseudo'])) : '';
		$password = !empty($_POST['password']) ? strip_tags(trim($_POST['password'])) : '';

		$errors = array();
		$result = false;

		// Le formulaire a ete soumis, on a appuye sur le bouton Envoyer
		if (!empty($_POST)) {

			// On check les erreurs possibles
			if (empty($pseudo) || empty($password)) {
				$errors['pseudo'] = 'Identifiants incorrects';
			}

			// Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
			if (empty($errors)) {

				$user_id = $this->authent->isValidLoginInfo($pseudo, $password);

				if (empty($user_id)) {
					$errors['pseudo'] = 'Identifiants incorrects';
				} else {

					$user = $this->manager->find($user_id);

					if (!empty($user)) {
						$this->authent->logUserIn($user);
						$result = true;
					} else {
						$errors['db_error'] = 'Erreur interne, merci de reessayer ulterieurement';
					}
				}
			}
		}

		$this->show('default/login', array(
			'errors' => $errors,
			'result' => $result,
			'pseudo' => $pseudo
		));
	}

	public function logout()
	{
		// On détruit seulement les données user en session
		$this->authent->logUserOut();

		// On détruit toutes les variables dans $_SESSION
		session_unset();

		// On détruit la session côté serveur
		session_destroy();

		// On détruit le cookie de session côté client
		setcookie(session_name(), false, 1, '/');

		$this->redirectToRoute('login');
	}


	public function _list() {

		$users = $this->manager->findAll();

		$this->show('admin/user/list', array(
			'users' => $users
		));

	}


	public function edit($id = null, $tpl = 'admin/user/edit')
	{
		$loggedUser = $this->getUser();

		if (empty($loggedUser)) {
			$this->redirectToRoute('user_login');
		}

		$errors = array();
		$result = false;

		if (!empty($id)) {
			$user = $this->manager->find($id);
		} else {
			$user = new user();
		}

		if (!empty($_POST)) {

			foreach($user->getProperties() as $field => $_value) {
				try {
					$value = !empty($_POST[$field]) ? strip_tags($_POST[$field]) : '';
					$user->$field = $value;
				} catch (Exception $e) {
					$errors[$field] = $e->getMessage();
				}
			}

			if (empty($errors)) {
				$result = $this->manager->save($user);
				if (empty($result)) {
					$errors['db'] = 'Erreur interne, merci de réessayer ultérieurement';
				} else {

					$id = $result;

				}
			}
		}

		$this->show($tpl, array(
			'errors' => $errors,
			'result' => $result,
			'user' => $user,
		));
	}

	public function delete($id) {
	 	$result = $this->manager->delete($id);

	 	$this->redirectToRoute('admin_user_list');
	}

}