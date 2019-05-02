<?php 
function getState() {
	global $sqlobj;
	$query = "select * from tbl_states";
	$result = $sqlobj->getdatalistfromquery($query);
	return $result;
}
function loginRedirect() {
	echo "<script language = 'JavaScript'>window.location.href = 'index.php'</script>";die;
}
function createTagHistoryField($tag_des_arr,$tag_type,$status="success") {
	if($tag_type == "res_tags")
		$type= "res";
	$result_arr = $tag_des_arr;
	krsort($result_arr,SORT_NUMERIC);
	$display_text = "";
	if(count($result_arr) > 0) {
		foreach($result_arr as $k => $v) {
			$key = $k;
			if($v != '') {
				$display_text = $display_text.'<div class="button_tag"><span class="button_text">'. stripslashes($v).'</span><span class="button_img"><span value='.$key.' id="tag_remove" field="'.$tag_type.'" name="tag_remove"><img src="img/close_icon.png" title="Remove" style="cursor:pointer;"></span><input type="hidden" name="'.$type.'_tag_hidden" id="'.$type.'_tag_hidden" value='.$key.'></span></div>';
			}
		}
	}
	$html = '';
	if($status="success") { $html .= $display_text; }
	return $html;
}

function add_activity($user_id, $sub, $desc) {
	global $sqlobj;
	$data = array();
	$data["created_by"] = $user_id;
	$data["activity_subject"] = $sub;
	$data["activity_desc"] = $desc;
	$data["inserted_date"] = time();
	$sqlobj->save("tbl_activity", $data);
}

function getUser($user_id) {
	global $sqlobj;
	$query = "select f_name, l_name, user_type from tbl_user where id = ".$user_id."";
	$res_user = $sqlobj->getdatalistfromquery($query);
	return $res_user;
}

function getResname($res_id) {
	global $sqlobj;
	$query = "select res_name from tbl_restaurant where res_id = ".$res_id."";
	$res_name = $sqlobj->getdatalistfromquery($query);
	return $res_name[0]["res_name"];
}

function sendMail($message, $bcc_array, $from, $to, $subject) {
	$m1= new Mail;
	$m1->From($from);
	$m1->To($to);
	$m1->Bcc($bcc_array);
	$m1->Subject($subject);
	$m1->Body($message);
	$m1->Priority(2);
	$m1->Send();
}

function datediff1($time) {
	$time = time() - "1377598833";
	$day = floor($time/3600/24);
	$hour = floor(gmdate("H", $time));
	$min = floor(gmdate("i", $time));
	$sec = floor(gmdate("s", $time));

	if($day > 0)
		$ago_str = $day=="1"?$day." day ago":$day." days ago";
	elseif($hour != "0")
		$ago_str = $hour=="1"?$hour." hour ago":$hour." hours ago";
	elseif($min != "0")
		$ago_str = $min=="1"?$min." minute ago":$min." minutes ago";
	elseif($sec != "0")
		$ago_str = $sec=="1"?$sec." second ago":$sec." seconds ago";
	return $ago_str;
}
?>