<?php 
session_start();

if( !isset( $_SESSION['is_logged_in'] ) || empty( $_SESSION['is_logged_in'] ) ) {
	header('Location: index.php');
}
include_once("functions/comon_functions.php");
include_once('config.php');

$con = connect_db();
$sql = 'INSERT INTO members VALUES( NULL, "'.$_REQUEST['member_first_name'].'","'.$_REQUEST['member_last_name'].'",															  
									  "'.$_REQUEST['permanent_address'].'", "'.$_REQUEST['emai'].'",
									  	"'.$_REQUEST['mbr_user_name'].'", "'.$_REQUEST['password'].'",
										  NULL, "'.$_SERVER['REMOTE_ADDR'].'")';
or die("dsfdsf");
//exit($sql);
//$check = mysql_query('SELECT mbr_user_name FROM members WHERE mbr_user_name = "'.$_REQUEST['user_name'].'" ');
//''$check2 =mysql_num_rows($check);

//if($check2 !=0){
	//die('Sorry, the username '.$_REQUEST['mng_user_name'].' is already in use.');
	// header('location: subscribe.php?mng_user_name='.$_REQUEST['mng_user_name'].'&y=success'); 
	//''header('location: member_add.php?y=user_exist');
	//''exit();
	//}

$result = mysql_query($sql,$con);
if($result) {
	header('location: member_add.php?y=success');
	}
	else {
	header('location: member_add.php?y=failed');	
		}

?>