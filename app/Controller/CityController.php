<?php

namespace Controller;

use \Exception;
use \W\Controller\Controller;
use \Manager\CityManager;
use \Core\Utils;

class CityController extends Controller
{
	private $manager;

	public function __construct() {
		$this->manager = new CityManager();
	}

	public function view($city, $tpl = 'city')
	{
		$bon_plans = $this->manager->getPosts($city);

		$this->show('default/'.$tpl, array('city' => $city, 'bon_plans' => $bon_plans, 'json_bp' => $this->json_bp($city, false)));
	}

	public function bon_plans($city)
	{
		return $this->view($city, 'partials/city-bon-plans');
	}

	/*public function user($id,$tpl='city-bon-plans'){
		$users = $this->manager->getUser($id);
		$this->show('default/'.$tpl, array('user_id'=>$id($user,false)));

	}*/

	/*public function pagination($city,$tpl = 'city'){
		$paginations = $this->manager->getPage($city);
		$this->show('default/'.$tpl, array('city' => $city, 'paginations' => $paginations));


	}
*/
	public function json_bp($city, $display = true) {

		$bon_plans = $this->manager->getPosts($city);

		$json_bp = array();
		foreach($bon_plans as $bon_plan) {
			$json_bp[] = array(
				'type' => $bon_plan->type,
				'label' => $bon_plan->title,
				'position' => array('lat' => (float) $bon_plan->lat, 'lng' => (float) $bon_plan->lng),
				'desc' => $bon_plan->description,
			);
		}

		$json_bp = json_encode($json_bp);

		if (Utils::isAjax() && $display) {
			echo $json_bp;
		}
		return $json_bp;
		//echo $json_bp;
	}
}