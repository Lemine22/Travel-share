<?php /* app/Manager/PhotoManager.php */
namespace Manager;

use \Core\Db;
use \Core\Utils;
use \Model\Photo;
use \Model\Post;

use Manager\PhotoManager;

class PhotoManager extends \W\Manager\Manager
{
	public function find($id) {
		$photo = parent::find($id);
		if (!empty($photo)) {
			return new Photo($photo);
		}
		return false;
	}

	public function findAll($orderBy = '', $orderDir = 'ASC', $limit = NULL, $offset = NULL) {
		$results = parent::findAll($orderBy, $orderDir, $limit, $offset);
		$items = array();
		foreach($results as $result) {
			$items[] = new Photo($result);
		}
		return $items;
	}

	public function getList($id) {
		return Photo::getList('SELECT * FROM photo WHERE post_id = :post_id', array('post_id' => $id));
	}

	public function save(Photo $photo) {

		$bindings = array();
		foreach($photo->getProperties() as $field => $value) {
			$bindings[$field] = $value;
		}


		$bindings = array(
			':post_id' => $photo->post_id,
			':src' => $photo->src
		);

		return Db::insert('INSERT INTO '.$this->table.' SET post_id = :post_id, src = :src, date = NOW()', $bindings);
	}

}



