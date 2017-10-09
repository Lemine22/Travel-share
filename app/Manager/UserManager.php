<?php /* app/Manager/UserManager.php */
namespace Manager;

use Core\Db;
use Core\Utils;
use Model\User;
use Model\Post;

class UserManager extends \W\Manager\UserManager
{
	public function find($id) {
		$user = parent::find($id);
		if (!empty($user)) {
			return new User($user);
		}
		return false;
	}

	public function findAll($orderBy = '', $orderDir = 'ASC', $limit = NULL, $offset = NULL) {
		$results = parent::findAll($orderBy, $orderDir, $limit, $offset);
		$items = array();
		foreach($results as $result) {
			$items[] = new User($result);
		}
		return $items;
	}


	public function save(User $user) {

		/*$bindings = array();
		foreach($photo->getProperties() as $field => $value) {
			$bindings[$field] = $value;
		}*/

		$bindings = array(
			':id' => $user->id,
			':pseudo' => $user->pseudo,
			':user_picture' => $user->user_picture,
			':role' => $user->role,
			':login' => $user->login,
		);

		return Db::insert('INSERT INTO '.$this->table.' SET id = :id, pseudo = :pseudo, user_picture = :user_picture, role = :role, login = :login, date_user = NOW()
						   ON DUPLICATE KEY UPDATE id = :id, pseudo = :pseudo, user_picture = :user_picture, role = :role, login = :login, date_user = NOW()', $bindings);
	}

	public function delete($id) {

		$user_posts = Post::getList('SELECT * FROM post WHERE user_id = :user_id', array(':user_id' => $id));

		$result = Db::delete('
		BEGIN;

		DELETE FROM photo WHERE post_id IN (SELECT id FROM post WHERE user_id = :user_id);
		DELETE FROM post  WHERE user_id = :user_id;
		DELETE FROM user  WHERE id = :user_id;

		COMMIT;
		', array(':user_id' => $id));

		$assetUrl = __DIR__.'/../../public/assets/';

		foreach($user_posts as $post) {
			$photos_path = $assetUrl.'images/bp/'.$post->id;
			if (is_dir($photos_path)) {
				Utils::recursive_rmdir($photos_path);
			}
		}

		return true;
	}

}