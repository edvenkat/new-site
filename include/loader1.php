<?php
include_once("config.php");

/** Load Class Filess */
require_once("mysql.inc");
require_once("db1.inc");
require_once("paging.inc");
require_once("functions.php");
require_once("userfunctions.inc");

/** Create database object */
$sqlobj=new dbconn(_HOSTNAME, _USERNAME, _PASSWORD, _DATABASE);


/** Create Pageing Object */
$pageobj=new Pageing('5');

/** Create UserFunctions object */
$userobj=new UserFunctions();

define("HTTPS_URL", "http://192.168.2.14//ilovemywaitress/");
define("HTTP_URL", "http://192.168.2.14/ilovemywaitress/");


include_once("JSON.php");
$json = new Services_JSON();
if(!function_exists("json_decode")) {
	function json_decode($str) {
		global $json;
		return $json->decode($str);
	}
}
if(!function_exists("json_encode")) {
	function json_encode($str) {
		global $json;
		return $json->encode($str);
	}
}



?>