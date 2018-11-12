<?php
include_once("functions/comon_functions.php");
include_once('config.php');
$con = connect_db();
 $sql = 'INSERT INTO manager VALUES(NULL, "'.$_REQUEST['mess_title'].'", "'.$_REQUEST['mng_first_name'].'",
									  "'.$_REQUEST['mng_last_name'].'", "'.$_REQUEST['country'].'",
									  	"'.$_REQUEST['mng_email'].'", "'.$_REQUEST['mng_user_name'].'",
										"'.$_REQUEST['mng_password'].'", NULL, "'.$_SERVER['REMOTE_ADDR'].'")';

$check = mysql_query('SELECT mng_user_name FROM manager WHERE mng_user_name = "'.$_REQUEST['mng_user_name'].'"');
$check2 =mysql_num_rows($check);

if($check2 !=0){
	//die('Sorry, the username '.$_REQUEST['mng_user_name'].' is already in use.');
	// header('location: subscribe.php?mng_user_name='.$_REQUEST['mng_user_name'].'&y=success'); 
	header('location: subscribe.php?y=user_exist');
	exit();
	}

$result = mysql_query($sql,$con);
if($result) {
	header('location: subscribe_confirm.php?=success');
	}
	else {
	header('location: subscribe.php?=failed');	
		}

?>