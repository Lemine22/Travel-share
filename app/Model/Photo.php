<?php
namespace Model;

use \Exception;
use Core\Utils;
use Manager\PhotoManager;

class Photo extends \Core\Model {

	private $id;
	protected $post_id;
	protected $src;
	protected $date;

	/* Getters */
	public function getId() {
		return $this->id;
	}
	public function getPostId() {
		return $this->post_id;
	}
	public function getSrc() {
		return $this->src;
	}
	public function getDate($format = 'd-m-Y H:i:s') {
		if (strtotime($this->date) === false) {
			return 'N/A';
		}
		return date($format, strtotime($this->date));
	}

	/* Setters */
	public function setId($id) {
		$this->id = $id;
	}
	public function setPostId($post_id) {
		$this->post_id = $post_id;
	}
	public function setSrc($src) {
		$this->src = $src;
	}
	public function setDate($date) {
		$this->date = $date;
	}

}
