<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use Manager\UserManager;
use \Manager\PostManager;
use \Manager\PhotoManager;
use \Model\Post;
use \Model\Photo;
use \Core\Utils;


class PhotoController extends Controller
{
	private $manager;

	public function __construct() {
		$this->manager = new PhotoManager();
	}

	public function _list() {

		$photos = $this->manager->findAll();

		$this->show('admin/photo/list', array(
			'photos' => $photos,
		));

	}



	public function edit($id = null, $tpl = 'admin/photo/edit')
	{
		$loggedUser = $this->getUser();

		if (empty($loggedUser)) {
			$this->redirectToRoute('user_login');
		}

		$errors = array();
		$result = false;

		if (!empty($id)) {
			$photo = $this->manager->find($id);
		} else {
			$photo = new photo();
		}

		if (!empty($_POST)) {

			foreach($photo->getProperties() as $field => $_value) {
				try {
					$value = !empty($_POST[$field]) ? strip_tags($_POST[$field]) : '';
					$photo->$field = $value;
				} catch (Exception $e) {
					$errors[$field] = $e->getMessage();
				}
			}

			if (empty($errors)) {
				$result = $this->manager->save($photo);
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
			'photo' => $photo,
		));
	}

	public function delete($id) {
	 	$result = $this->manager->delete($id);

	 	$this->redirectToRoute('admin_photo_list');
	}

}