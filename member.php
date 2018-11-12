<?php 
session_start();

if( !isset( $_SESSION['is_logged_in'] ) || empty( $_SESSION['is_logged_in'] ) ) {
	header('Location: index.php');
}
include_once("functions/comon_functions.php");
include_once('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Mess Management System</title>
</head>

<body>

<p>
  <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
  <script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11574290-1");
pageTracker._trackPageview();
} catch(err) {}</script>
  
  
</p>
 
<table width="774" height="457" border="1" align="center" >
  <tr>
    <td width="144" height="40">&nbsp;</td>
    <?php
    
    $sql = 'SELECT * FROM manager where mng_user_name = "'.$_COOKIE['ID_my_site'].'" ';
	$con =connect_db();
	$result = mysql_query($sql, $con);
	$data = mysql_fetch_array($result); 
	 $space= " ";
    ?>
    <td valign="top"><h1 align="center">Welcome To <?php  echo $data['mess_title']; ?> </h1>
    						 </td>
    <td width="140">Manager <?php  echo $data['mng_first_name']. $space. $data['mng_last_name']; ?></td>
  </tr>
  
  <tr>
    <td height="23"><a href="index.php">Back2mainpage</a></td>
    <td><a href="member.php">Member</a> | Meal | Account | Spend | Messaage Box | Your Profile | Report</td>
    <td><a href="logout.php">Logout</a></td>
  </tr>
  <tr>
    <td height="328" valign="top"><table width="103%" border="1" cellspacing="0" cellpadding="2">
      <tr>
        <td><a href="member_add.php">Add Member</a></td>
      </tr>
      <tr>
        <td>Delete Member</td>
      </tr>
      <tr>
        <td>Send Message</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="27">&nbsp;</td>
      </tr>
    </table></td>
   

    <td valign="top"></p></td>
    <td valign="top">&nbsp;
       
    
    </td>
  </tr>
  <tr>
    <td height="48" colspan="3" align="center"><?php include_once('manue/footer.php') ?></td>
  </tr>
</table>
</body>
</html>