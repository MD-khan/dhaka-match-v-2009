<?php 
session_start();
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
    <td valign="top"><h1 align="center">Welcome To<?php echo $_COOKIE['Mess_title'] ?>Dhaka Mess</h1></td>
    <td width="140">&nbsp;</td>
  </tr>
  <tr>
    <td height="23"><a href="index.php">Back2main page</a></td>
    <td>Add Member | Meal | Account | Spend </td>
    <td>Logout</td>
  </tr>
  <tr>
    <td height="328" valign="top"><table width="103%" border="1" cellspacing="0" cellpadding="2">
      <tr>
        <td>Add Member</td>
      </tr>
      <tr>
        <td> Meal</td>
      </tr>
      <tr>
        <td> Account</td>
      </tr>
      <tr>
        <td>Spend</td>
      </tr>
      <tr>
        <td height="27">&nbsp;</td>
      </tr>
    </table></td>
   

    <td valign="top"><p>Manager <?php  echo $_COOKIE['ID_my_site'];?> !</p>
    <p>Now Start Manage Your Dhaka Mess. First Add all of your Members and Give them unique Id and Temporary Password. Tell Members to change their Password.</p>
    <p>In Meal Link, You can add daily Meal like Breakfast, Lunch and Dinner.Account Link give you a form that you can use to input members account; like how much they owe to you or from you.By the Spend Link you can add every day market cost as well as others Cost</p></td>
    <td valign="top">&nbsp;
       
    
    </td>
  </tr>
  <tr>
    <td height="48" colspan="3" align="center"><?php include_once('manue/footer.php') ?></td>
  </tr>
</table>
</body>
</html>