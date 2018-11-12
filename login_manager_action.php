<?php 
session_start();
include_once('functions/comon_functions.php');
include_once('config.php');
$con = connect_db();
 
 //Checks if there is a login cookie
if(isset($_COOKIE['ID_my_site'])){
 
//if there is, it logs you in and directes you to the members page
$username =$_COOKIE['ID_my_site'];
$pass = $_COOKIE['Key_my_site'];
$check = mysql_query("SELECT * FROM manager WHERE manager_id = '$username'")or die(mysql_error());
while($info = mysql_fetch_array( $check )){

if ($pass != $info['mng_password']) {
header('location: index.php?=failed');
      }

else
{
header("Location: manager_main_page.php?y=succesW");
}
}
}
//if the login form is submitted
if (isset($_POST['submit'])) { // if form has been submitted

// makes sure they filled it in
//if(!$_POST['manager_id'] | !$_POST['password']) {
//header('location: index.php?y=empty_field');

//die('You did not fill in a required field.');
//}



// checks it against the database

if (!get_magic_quotes_gpc()) {
$_POST['manager_id'] = addslashes($_POST['manager_id']);
}
$check = mysql_query("SELECT * FROM manager WHERE mng_user_name = '".$_POST['manager_id']."'") or die(mysql_error());

//Gives error if user dosen't exist
$check2 = mysql_num_rows($check);
if ($check2 == 0) {
//die('That user does not exist in our database. <a href=index.php</a>');
header('location: index.php?y=not_in_database');


}
while($info = mysql_fetch_array( $check ))
{
$_POST['password'] = addslashes($_POST['password']);
$info['mng_password'] = addslashes($info['mng_password']);
$_POST['password'] = ($_POST['password']);

//gives error if the password is wrong
    if ($_POST['password'] != $info['mng_password']) {
     //die('Incorrect password, please try again.');
     header('location: index.php?y=incorrect_pass');
	 
	 
	 }


else{
// if login is ok then we add a cookie
$_POST['manager_id'] = stripslashes($_POST['manager_id']);
$hour = time() + 36;
setcookie(ID_my_site, $_POST['manager_id'], $hour);
setcookie(Key_my_site, $_POST['password'], $hour);

//then redirect them to the members area
header('location: manager_main_page.php?y=succes');


}
    }
}
?>