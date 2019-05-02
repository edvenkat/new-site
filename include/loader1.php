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

$sticky_post_id_query = "SELECT option_value FROM `wp_cfj679vm3q_options` where option_name = 'sticky_posts'";
$sticky_post_id_result = $sqlobj->getdatalistfromquery($sticky_post_id_query);



	$details = array();
	$details['comment_post_ID']        = $comment_post_ID;
	$details['comment_author']         = $comment_author;
	$details['comment_author_email']   = $comment_author_email;
	$details['comment_author_url']     = $comment_author_url;
	$details['comment_author_IP']      = $comment_author_IP;
	$details['comment_date']           = $comment_date;
	$details['comment_date_gmt']       = $comment_date_gmt;
	$details['comment_content']        = $comment_content;
	$details['comment_karma']          = $comment_karma;
	$details['comment_approved']       = $comment_approved;
	$details['comment_agent']          = $comment_agent;
	$details['comment_type']           = $comment_type;
	$details['comment_parent']         = $comment_parent;
	$details['user_id']                = $user_id;
	
/*
echo "<pre>";
print_r($details);
echo "</pre>";
die;
*/
	$inserted_id = $sqlobj->save("wpcw_comments",$details);

?>
