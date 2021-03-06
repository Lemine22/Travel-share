<?php
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

$table = !empty($_GET['table']) ? $_GET['table'] : '';

if (empty($table)) {
	exit('Undefined table to generate');
}

$debug = !empty($_GET['debug']) ? $_GET['debug'] : 0;
$overwrite = !empty($_GET['overwrite']) ? $_GET['overwrite'] : 0;

$class_name = ucfirst($table);

$results = Db::select('DESC '.$table);

if (empty($results)) {
	exit('Table '.$table.' doesn\'t exist');
}

$columns = array();
foreach($results as $result) {
	$columns[] = $result['Field'];
}

//Utils::debug($columns);

$class = '<?php'.PHP_EOL;

$class .= 'class '.$class_name.' {'.PHP_EOL.PHP_EOL;

foreach($columns as $column) {
	$class .= "\tprotected $".$column.';'.PHP_EOL;
}
$class .= PHP_EOL;

$class .= "\t/* Getters */".PHP_EOL;
foreach($columns as $column) {
	$class .= "\t".'public function '.Utils::getCamelCase('get'.ucfirst($column)).'() {'.PHP_EOL;
	$class .= "\t".'	return $this->'.$column.';'.PHP_EOL;
	$class .= "\t".'}'.PHP_EOL;
}
$class .= PHP_EOL;

$class .= "\t/* Setters */".PHP_EOL;
foreach($columns as $column) {
	$class .= "\t".'public function '.Utils::getCamelCase('set'.ucfirst($column)).'($'.$column.') {'.PHP_EOL;
	$class .= "\t".'	$this->'.$column.' = $'.$column.';'.PHP_EOL;
	$class .= "\t".'}'.PHP_EOL;
}
$class .= PHP_EOL;

$class .= '}'.PHP_EOL;

if (!$debug) {

	$class_path = '../../app/Model/'.$class_name.'.php';
	if (file_exists($class_path) && !$overwrite) {
		echo 'class '.$class_name.' already exists in '.$class_path.' (&overwrite=1) :<br><br>';
	} else {
		$class_write = file_put_contents($class_path, $class);
		if ($class_write) {
			echo 'class '.$class_name.' successfully written to '.$class_path.'<br><br>';
		}
	}
}

highlight_string($class);