<?php
namespace Model;

use \Exception;
use Core\Utils;
use \Manager\UserManager;

class User extends \Core\Model {

	private $id;
	protected $pseudo;
	protected $user_picture;
	protected $login;
	protected $password;
	protected $date_user;
	protected $role;

	/* Getters */
	public function getId() {
		return $this->id;
	}
	public function getPseudo() {
		return $this->pseudo;
	}
	public function getUserPicture() {
		if (empty($this->user_picture)) {
			return 'default.png';
		}
		return $this->user_picture;
	}
	public function getLogin() {
		return $this->login;
	}
	public function getPassword() {
		return $this->password;
	}
	public function getDateUser() {
		return $this->date_user;
	}
	public function getRole() {
		return $this->role;
	}

	/* Setters */
	public function setId($id) {
		$this->id = $id;
	}
	public function setPseudo($pseudo) {
		$this->pseudo = $pseudo;
	}
	public function setUserPicture($user_picture) {
		$this->user_picture = $user_picture;
	}
	public function setLogin($login) {
		$this->login = $login;
	}
	public function setPassword($password) {
		$this->password = $password;
	}
	public function setDateUser($date_user) {
		$this->date_user = $date_user;
	}
	public function setRole($role) {
		$this->role = $role;
	}

}
