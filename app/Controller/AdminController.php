<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use Core\Db;
use Core\Utils;
use Model\Post;
use Model\Photo;
use Manager\PostManager;
use Manager\PhotoManager;
use Manager\UserManager;

class AdminController extends Controller
{

	private $manager;

	public function dashboard()
	{
		$loggedUser = $this->getUser();

		if (empty($loggedUser)) {
			$this->redirectToRoute('user_login');
		}

		$post_manager = new PostManager();
		$total_posts = count($post_manager->findAll());

		$photo_manager = new PostManager();
		$total_photos = count($photo_manager->findAll());

		$user_manager = new UserManager();
		$total_users = count($user_manager->findAll());

		$stat_cities = Db::select('SELECT city as label, count(city) as value FROM post GROUP BY city HAVING value > 0');

		$stat_countries = Db::select('SELECT country as label, count(country) as value FROM post GROUP BY country HAVING value > 0');


		$this->show('admin/dashboard', array(
			'loggedUser' => $loggedUser,
			'total_posts' => $total_posts,
			'total_photos' => $total_photos,
			'total_users' => $total_users,

			'stat_cities' => $stat_cities,
			'stat_countries' => $stat_countries,
		));
	}
}