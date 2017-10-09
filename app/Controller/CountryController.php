<?php

namespace Controller;

use \Exception;
use \W\Controller\Controller;
use \Manager\CountryManager;
use \Core\Utils;

class CountryController extends Controller
{
	private $manager;

	public function __construct() {
		$this->manager = new CountryManager();
	}

	public function view($country, $tpl = 'country')
	{
		$bon_plans = $this->manager->getPosts($country);
		$cities = $this->manager->getCities($country);

		$this->show('default/'.$tpl, array('country' => $country, 'bon_plans' => $bon_plans, 'json_bp' => $this->json_bp($country), 'cities' => $cities));
	}

	public function bon_plans($country)
	{
		return $this->view($country, 'partials/country-bon-plans');
	}

	public function json_bp($country) {

		$bon_plans = $this->manager->getPosts($country);

		//debug($bon_plans)

		$json_bp = array();
		foreach($bon_plans as $bon_plan) {
			$json_bp[] = array(
				'type' => $bon_plan->type,
				'label' => $bon_plan->title,
				'position' => $bon_plan->lat, $bon_plan->lng,
				'desc' => $bon_plan->description,
			);
		}

		$json_bp = json_encode($json_bp);

		if (Utils::isAjax()) {
			echo $json_bp;
		}
		return $json_bp;
		//echo $json_bp;
	}

	public function countBonPlans($country) {
		return $this->manager->countBonPlans($country);
	}
}