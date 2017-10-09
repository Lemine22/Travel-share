<?php
namespace Model;

use \Exception;
use Core\Utils;
use \Manager\PostManager;
use \Manager\PhotoManager;
use \Manager\UserManager;

class Post extends \Core\Model {

	private $id;
	protected $user_id;
	protected $title;
	protected $name_bp;
	protected $qui;
	protected $type;
	protected $adresse;
	protected $city;
	protected $country;
	protected $description;
	protected $status;
	protected $date;
	protected $lat;
	protected $lng;

	public static $default_photo = 'logo-travel-share.png';

	private $photos = array();
	private $user;

	public function __construct($data = array()) {
		parent::__construct($data);

		if (!empty($this->id)) {
			$photo_manager = new PhotoManager();
			$this->photos = $photo_manager->getList($this->id);
		}

		if (!empty($this->user_id)) {
			$user_manager = new UserManager();
			$this->user = $user_manager->find($this->user_id);
		}

	}

	/* Getters */
	public function getId() {
		return $this->id;
	}
	public function getUserId() {
		return $this->user_id;
	}
	public function getTitle() {
		return $this->title;
	}
	public function getNameBp() {
		return $this->name_bp;
	}
	public function getQui() {
		return $this->qui;
	}
	public function getType() {
		return $this->type;
	}
	public function getAdresse() {
		return $this->adresse;
	}
	public function getCity() {
		return $this->city;
	}
	public function getCountry() {
		return $this->country;
	}
	public function getDescription($max_length = 0, $end = '...') {
		if ($max_length === 0) {
			return nl2br($this->description);
		}
		return Utils::cutString($this->description, $max_length, $end);
	}
	public function getStatus() {
		return $this->status;
	}
	public function getDate() {
		return $this->date;
	}
	public function getPhotos() {
		/*$post_manager = new PostManager();
		$photos = $post_manager->getPhotos($this->id);

		if (empty($photos)) {

			$photo = new Photo();
			$photo->post_id = $this->id;
			$photo->src = self::$default_photo;

			$photos = array($photo);
		}

		return $photos;*/
		return $this->photos;
	}
	public function getUser() {
		return $this->user;
	}
	public function getLat() {
		return $this->lat;
	}
	public function getLng() {
		return $this->lng;
	}

	/* Setters */
	public function setId($id) {
		$this->id = $id;
	}
	public function setUserId($user_id) {
		$this->user_id = $user_id;
	}
	public function setTitle($title) {
		if (empty($title)) {
			throw new Exception('Le titre de ton bon plan est obligatoire.');
		}
		$this->title = $title;
	}
	public function setNameBp($name_bp) {
		if (empty($name_bp)) {
			throw new Exception('Le nom de ton bon plan est obligatoire.');
		}
		$this->name_bp = $name_bp;
	}
	public function setQui($qui) {
		if (empty($qui)) {
			throw new Exception('Merci de cocher à qui s\'adresse votre bon plan.');
		}
		$this->qui = $qui;
	}
	public function setType($type) {
		if (empty($type)) {
			throw new Exception('Merci de cocher le type de bon plan.');
		}
		$this->type = $type;
	}
	public function setAdresse($adresse) {
		if (empty($adresse)) {
			throw new Exception('Merci de renseigner une adresse valide.');
		}
		$this->adresse = $adresse;
	}
	public function setCity($city) {
		if (empty($city)) {
			throw new Exception('Merci de renseigner la ville concernée.');
		}
		$this->city = $city;
	}
	public function setCountry($country) {
	if (empty($country)) {
			throw new Exception('Merci de renseigner le pays concerné.');
		}
		$this->country = $country;
	}
	public function setDescription($description) {
			if (empty($description)) {
			throw new Exception('Merci de decrire votre bon plan en quelques mots...');
		}
		$this->description = $description;
	}
	public function setStatus($status) {
		$this->status = $status;
	}
	public function setDate($date) {
		$this->date = $date;
	}
	public function setLat($lat) {
		$this->lat = $lat;
	}
	public function setLng($lng) {
		$this->lng = $lng;
	}

}
