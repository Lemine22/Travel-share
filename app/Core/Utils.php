<?php
namespace Core;

class Utils {

	public static function debug($array) {
		echo '<pre>'.print_r($array, true).'</pre>';
	}

	public static function cleanString($str, $delimiter='-') {
	    // Convertit en caractères unicode
	    // Et transforme les accents (Ex: é => e, Ç => c)
	    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', trim($str))  ;
	    // Supprime tous ce qui n'est pas des lettres, nombres et "_+ -"
	    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	    // Mets en minuscule et supprime les tirets en début/fin de chaine
	    $clean = strtolower(trim($clean, '-'));
	    // Remplace tous les caractères "/_|+ -" par $delimiter
	    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	    return $clean;
	}

	/*
		Transforme une chaîne du type "setCreation_date" en "setCreationDate"
	*/
	public static function getCamelCase($str) {
		return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $str))));
	}


	public static function redirectJS($url, $delay = 1) {
	    echo '<script>
	          setTimeout(function() {
	                location.href = "'.$url.'"; }
	          , '.($delay * 1000).');
	          </script>';
	}

	public static function cutString($text, $max_length = 0, $end = '...', $sep = '[@]') {

	    if ($max_length > 0 && strlen($text) > $max_length) {
	        $text = wordwrap($text, $max_length, $sep);
	        $text = explode($sep, $text);
	        return $text[0].$end;
	    }

	    return $text;
	}

	public static function formatAmount($amount, $currency = '&euro;') {
	    return number_format($amount, 2, ',', '&nbsp;').' '.$currency;
	}

	public function isAjax() {
        return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') ? true : false;
    }

    function recursive_rmdir($dir) {
    	if (is_dir($dir)) {
    		$objects = scandir($dir);
    		foreach ($objects as $object) {
    			if ($object != "." && $object != "..") {
    				if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
    			}
    		}
    		reset($objects);
    		rmdir($dir);
    	}
    }
}