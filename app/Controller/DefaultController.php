<?php

namespace Controller;

use \W\Controller\Controller;
use \Controller\PostController;
use \Manager\PostManager;

class DefaultController extends Controller
{
	/*	private $manager;

	public function __construct() {
		$this->manager = new CountryManager();
	}*/

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function description()
	{
		$this->show('default/description');
	}


	public function liens()
	{
		$this->show('default/liens');
	}

	public function world()
	{
		$mode = 'world';
		$this->show('default/world', array('mode' => $mode));
	}

	public function country()
	{
		$mode = 'country';

		$this->show('default/country', array('mode' => $mode));
	}

	public function city()
	{
		$this->show('default/city');
	}

	public function bon_plan($id) {
		$post_manager = new PostManager();
		$bon_plan = $post_manager->find($id);
		$this->show('default/partials/modal-bon-plan', array('bon_plan' => $bon_plan));
	}

	public function page404()
	{
		$this->show('w_errors/404');
	}

	public function post(){
		$this->show('default/formbp');
	}

	public function qui(){
		$this->show('default/qui');
	}

	public function search($search){

		$post_manager = new PostManager();
		$search_results = $post_manager->search($search);
		$count_search_results = count($search_results);

		//dump($search_results);

		$this->show('default/search', array('search' => $search, 'search_results' => $search_results, 'count_search_results' => $count_search_results));
	}

	public function geocoding($address) {
		$app = getApp();
		$result = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode(urldecode($address)).'&key='.$app->getConfig('google_api_key'));
		//debug($result);
		echo $result;
	}

}