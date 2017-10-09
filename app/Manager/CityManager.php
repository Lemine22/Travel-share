<?php /* app/Manager/MovieManager.php */
namespace Manager;

use \Core\Db;
use \Core\Utils;
use \Model\Post;
use \Model\Photo;
use \Model\User;


class CityManager extends \W\Manager\Manager{

	public function getPosts($city) {

		$qui = !empty($_GET['qui']) ? $_GET['qui'] : '';
		$type = !empty($_GET['type']) ? $_GET['type'] : '';

		$sql = ('SELECT * FROM post WHERE city LIKE :city ');

		$bindings = array(':city' => $city);

		if (!empty($qui)) {
			$sql .= 'AND qui = :qui ';
			$bindings[':qui'] = $qui;
		}

		if (!empty($type)) {
			$sql .= 'AND type LIKE :type ';
			$bindings[':type'] = '%'.$type.'%';
		}

		$results = Db::selectAll($sql, $bindings);

		$posts = array();
		foreach($results as $result) {
			$posts[] = new Post($result);
		}

		return $posts;
	}
}