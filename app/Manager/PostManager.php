<?php /* app/Manager/PostManager.php */
namespace Manager;

use Core\Db;
use Core\Utils;
use Model\Post;
//use Model\Photo;
use Manager\PhotoManager;

class PostManager extends \W\Manager\Manager
{
	public function find($id) {
		$post = parent::find($id);
		if (!empty($post)) {
			return new Post($post);
		}
		return false;
	}

	public function findAll($orderBy = '', $orderDir = 'ASC', $limit = NULL, $offset = NULL) {
		$results = parent::findAll($orderBy, $orderDir, $limit, $offset);
		$items = array();
		foreach($results as $result) {
			$items[] = new Post($result);
		}
		return $items;
	}

	public function search($search) {

			$search_results = Post::getList('SELECT * FROM post WHERE city LIKE :search OR country LIKE :search OR name_bp LIKE :search OR title LIKE :search' , array(':search' => '%'.$search.'%'));

			return $search_results;
		/*} else if (!empty($advanced_search)) {
			$sql = 'SELECT * FROM post WHERE 1 ';
			$bindings = array();
			if (!empty($post)) {
				$sql .= 'AND (title LIKE :recipe OR content LIKE :recipe) ';
				$bindings[':recipe'] = '%'.$recipe.'%';
			}
			if ($type != -1) {
				$sql .= 'AND type = :type ';
				$bindings[':type'] = $type;
			}
			if (!empty($ingredients)) {
				$sql .= 'AND ingredients LIKE :ingredients ';
				$bindings[':ingredients'] = '%'.$ingredients.'%';
			}
		}*/
	}


	public function save(Post $post) {


		$bindings = array();
		foreach($post->getProperties() as $field => $value) {
			$bindings[$field] = $value;
		}


		$bindings = array(
			':id' => $post->id,
			':user_id' => $post->user_id,
			':title' => $post->title,
			':name_bp' => $post->name_bp,
			':qui' => $post->qui,
			':type' => $post->type,
			':adresse' => $post->adresse,
			':city' => $post->city,
			':country' => $post->country,
			':description' => $post->description,
			':status' => $post->status,
			//':date' => $post->date,
			':lat' => $post ->lat,
			':lng' => $post ->lng,
		);

		return Db::insert('INSERT INTO '.$this->table.' SET id = :id, user_id = :user_id, title = :title, name_bp = :name_bp, qui = :qui, type = :type, adresse = :adresse, city = :city, country = :country, lat = :lat, lng = :lng, description = :description, status = :status, date = NOW()
						   ON DUPLICATE KEY UPDATE user_id = :user_id, title = :title, name_bp = :name_bp, qui = :qui, type = :type, adresse = :adresse, city = :city, country = :country, lat = :lat, lng = :lng, description = :description, status = :status, date = NOW()', $bindings);
	}

	public function delete($id) {

		$assetUrl = __DIR__.'/../../public/assets/';

		$result = Db::delete('
		BEGIN;
			DELETE FROM photo WHERE post_id = :post_id;
			DELETE FROM post  WHERE id = :post_id;
		COMMIT;
		', array(':post_id' => $id));

		$photos_path = $assetUrl.'images/bp/'.$id;
		if (is_dir($photos_path)) {
			Utils::recursive_rmdir($photos_path);
		}

		return true;
	}

}



