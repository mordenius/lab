<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('HOST_LOC', __DIR__.'/');

$module = 'index';
$action = 'index';

$params = array();
include_once (HOST_LOC.'/gate/facade/header.php');
if ($_SERVER['REQUEST_URI'] != '/') {
	try {

		$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		$uri_parts = explode('/', trim($url_path, ' /'));
		// if (count($uri_parts) % 2) {
		// 	throw new Exception();
		// }
		 
		$module = array_shift($uri_parts); 
		$action = array_shift($uri_parts); 

		for ($i=0; $i < count($uri_parts); $i++) {
			$params[$uri_parts[$i]] = $uri_parts[++$i];
		}
		include_once (HOST_LOC.'/gate/chambers/'.$module.'/'.$action.'/index.php');
	} catch (Exception $e) {
		$module = '404';
		$action = 'main';
	}
}else{
	include_once (HOST_LOC.'/gate/chambers/home.php');
}
include_once (HOST_LOC.'/gate/facade/footer.php');
//echo "\$module: $module\n";
//echo "\$action: $action\n";
//echo "\$params:\n";
//print_r($params);
 
?> 
  