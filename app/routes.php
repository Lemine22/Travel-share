<?php

$w_routes = array(
	['GET', '/404', 'Default#page404', '404'],
	['GET', '/', 'Default#home', 'home'],

	['GET', '/map', 'Default#map', 'map'],
	/*['GET', '/country/[:country]', 'Default#country', 'country'],
	['GET', '/country', 'Default#country', 'countrytest'],*/
	['GET', '/city/', 'City#view', 'city_'],
	['GET', '/city/[:city]', 'City#view', 'city'],
	/*['GET', '/city/[:city]', 'City#pagination', 'city'],*/
	['GET', '/city/[:city]/bon_plans', 'City#bon_plans', 'city_bon_plans'],
	['GET', '/city/[:city]/json_bp', 'City#json_bp', 'city_json_bp'],

	['GET', '/bon_plan/[:id]', 'Default#bon_plan', 'modal_bon_plan'],

	['GET', '/country/[:country]', 'Country#view', 'country'],
	['GET', '/country/[:country]/bon_plans', 'Country#bon_plans', 'country_bon_plans'],
	['GET', '/country/[:country]/json_bp', 'Country#json_bp', 'country_json_bp'],
	['GET', '/country/[:country]/count', 'Country#countBonPlans', 'country_count'],

	['GET', '/world', 'Default#world', 'world'],

	['GET', '/description', 'Default#description', 'description'],
	['GET', '/liens', 'Default#liens', 'liens'],
	['GET', '/qui', 'Default#qui', 'default_qui'],

	['GET', '/search/[:search]', 'Default#search', 'search'],

	/*['GET', '/movie/view/[i:id]', 'Movie#view', 'movie_view'],
	['GET', '/movie/catalog', 'Movie#catalog', 'movie_catalog', 'nav_title' => 'Liste des films'],
	['GET', '/movie/random', 'Movie#random', 'movie_random', 'nav_title' => 'Film aléatoire'],
	['GET', '/movie/search', 'Movie#search', 'movie_search', 'nav_title' => 'Recherche'],
	['GET|POST', '/movie/add', 'Movie#add', 'movie_add', 'nav_title' => 'Ajouter un film'],*/

	['GET', '/admin', 'Admin#dashboard', 'admin'],
	['GET', '/admin/dashboard', 'Admin#dashboard', 'admin_dashboard'],
	['GET', '/admin/post/list', 'Post#_list', 'admin_post_list'],
	['GET|POST', '/admin/post/edit/[i:id]', 'Post#edit', 'admin_post_edit'],
	['GET|POST', '/admin/post/delete/[i:id]', 'Post#delete', 'admin_post_delete'],

	['GET', '/admin/photo/list', 'Photo#_list', 'admin_photo_list'],
	['GET|POST', '/admin/photo/edit/[i:id]', 'Photo#edit', 'admin_photo_edit'],
	['GET|POST', '/admin/photo/delete/[i:id]', 'Photo#delete', 'admin_photo_delete'],


	['GET', '/admin/user/list', 'User#_list', 'admin_user_list'],
	['GET|POST', '/admin/user/edit/[i:id]', 'User#edit', 'admin_user_edit'],
	['GET|POST', '/admin/user/delete/[i:id]', 'User#delete', 'admin_user_delete'],


	['GET|POST', '/register', 'User#register', 'user_register'],
	['GET|POST', '/login', 'User#login', 'user_login'],
	['GET|POST', '/login', 'User#login2', 'login'],
	['GET|POST', '/logout', 'User#logout', 'user_logout'],

	['GET|POST', '/post/add', 'Post#add', 'post_add'],
	['GET', '/post/view/[i:id]', 'Post#view', 'post_view'],

	['GET', '/geocoding/[:address]', 'Default#geocoding', 'geocoding'],
);