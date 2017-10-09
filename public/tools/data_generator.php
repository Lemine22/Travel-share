<?php
set_time_limit(0);

//autochargement des classes
require("../../vendor/autoload.php");

//configuration
require("../../app/config.php");

//rares fonctions globales
require("../../W/globals.php");

use \Core\Db;
use \Core\Utils;

//instancie notre appli en lui passant la config et les routes
$app = new W\App($w_routes, $w_config);

require_once 'data.php';

// dump($cities);
$types = array('hebergement' => 'hostel', 'restaurant' => '', 'bar' => '', 'night-club' => 'boite de nuit', 'shopping' => '', 'patrimoine' => 'legacy', 'loisir' => 'hobby');
$qui_list = array('famille', 'solo', 'couple', 'amis');

$faker = Faker\Factory::create();
$posts = array();

// generate data by accessing properties
for ($i=0; $i < 50; $i++) {

	$type = array_rand($types);

	$name = $faker->name;
	$date = $faker->date;
	$title = $faker->text(50);
	$text = $faker->paragraph(5, true);
	$qui = $qui_list[array_rand($qui_list)];
	$adresse = $faker->address;

	$random_data_key = array_rand($data);

	$city = $data[$random_data_key]->city;
	$country = $data[$random_data_key]->country;

	$geocoder_results = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($city.' '.$country).'&key='.$w_config['google_api_key']));
	//dump($geocoder_results);

	$lat = $geocoder_results->results[0]->geometry->location->lat + (float) '0.0'.rand(0, 3);
	$lng = $geocoder_results->results[0]->geometry->location->lng  + (float) '0.0'.rand(0, 3);

	/*$avatars=glob('../assets/avatar/*');

	$avatar_key = array_rand($avatars);
	$avatar = basename($avatars[$avatar_key]);*/

	//echo $name.'<br>';
	//echo $date.'<br>';
	//echo $text.'<br>';

	//$image_tags = !empty($types[$type]) ? $types[$type] : $type;

    $image = 'http://loremflickr.com/640/480/'.urlencode($city.' '.$country);

	$posts[] = array(
		'type' => $type,
		'name_bp' => $name,
		'date' => $date,
		'qui' => $qui,
		'title' => $title,
		'description' => $text,
		'adresse' => $adresse,
		'city' => $city,
		'country' => $country,
		'image'=> $image,
		'lat' => (float) $lat,
		'lng' => (float) $lng,
		/*'avatar'=>$avatar,*/
	);
}


//dump($posts);
//exit();

$users = array();
$results = Db::select('SELECT id FROM user');
foreach($results as $result) {
	$users[] = $result['id'];
	/*$avatars[] = $result['user_picture'];*/
}

/*
$img=array();
$results=Db::select('SELECT src FROM photo');
foreach ($results as $result){
	$photos[]=$result['src'];
}
*/

$count = 0;
foreach($posts as $key => $post) {

	$bindings = array(
		':user_id' => $users[array_rand($users)],
		':name_bp' => $post['name_bp'],
		':type' => $post['type'],
		':title' => $post['title'],
		':description' => $post['description'],
		':qui' => $post['qui'],
		//':image' => $photo['src'],
		':date' => $post['date'],
		':city' => $post['city'],
		':country' => $post['country'],
		':adresse' => $post['adresse'],
		':lat' => $post['lat'],
		':lng' => $post['lng'],
		/*':avatar'=>$avatars[array_rand($avatars)],*/
	);

	$insert_id = Db::insert('INSERT INTO post SET user_id = :user_id, name_bp = :name_bp, qui = :qui, type = :type, title = :title, description = :description,  adresse = :adresse, city = :city, country = :country, lat = :lat, lng = :lng, date = :date', $bindings);

	if (!empty($insert_id)) {

		$image_url = $post['image'];
		$image_src = file_get_contents($image_url);
		$image_filename = Utils::cleanString($post['name_bp']).'.jpg';

		$image_path = '../assets/images/bp/'.$insert_id.'/';
		if (!is_dir($image_path)) {
			mkdir($image_path);
		}

		file_put_contents($image_path.$image_filename, $image_src);

	 	$result = Db::insert('INSERT INTO photo SET src = :src, post_id = :post_id', array(
	 		':src' => $image_filename,
	 		':post_id' => $insert_id
	 	));

      /* $result = Db::insert('INSERT INTO user SET user_picture = :avatar', array(
	 		':avatar' => $avatars,

	 	));*/

	 	$count++;
	}
}

echo $count.' post(s) inséré(s)';