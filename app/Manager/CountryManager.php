<?php /* app/Manager/MovieManager.php */
namespace Manager;

use \Core\Db;
use \Core\Utils;
use \Model\Post;
use \Model\Photo;


class CountryManager extends \W\Manager\Manager
{
	public function getPosts($country) {

		$sql = 'SELECT * FROM post WHERE country = :country';
		$bindings = array(':country' => $country);

		return Post::getList($sql, $bindings);
	}

	public function getCities($country) {
		$results = Db::select('SELECT DISTINCT(city) FROM post WHERE country = :country', array(':country' => $country));

		$cities = array();
		foreach($results as $result) {
			$cities[] = $result['city'];
		}
		return $cities;
	}

	public function countBonPlans($country) {
		$result = Db::selectOne('SELECT COUNT(id) as count_bon_plans FROM post WHERE country = :country', array(':country' => $country));
		echo (int) $result['count_bon_plans'];
	}
}
