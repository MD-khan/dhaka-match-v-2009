<?php 
include_once('functions/comon_functions.php');
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




<table width="774" height="509" border="1" align="center" >
  <tr>
    <td width="147" height="40">&nbsp;</td>
    <td colspan="3" valign="top"><?php include_once('manue/header.php') ?></td>
    <td width="140">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td width="145"><a href="subscribe.php"><strong>Subscribe Form </strong></a></td>
    <td width="136">&nbsp;</td>
    <td width="172">Today is: <?php echo date("D j M Y"); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="148" valign="top">Login as Mess Member:
    
    <form >
         User ID:<br />
      <input name="MessMember_id" type="text" id="MessMember_id" size="20" maxlength="20" />
      Password:<br />
      <input name="LoginPassword" type="password" id="LoginPassword" size="20" maxlength="20" /><br />
      <input type="submit" value="Login" />
      </form>
    
    </td>
    <td colspan="3" valign="top"><h3><strong>Why You Subscribe Thise Site:</strong></h3>
      <ol>
        <li>First of all manager subscribe on this site</li>
        <li>Login as a manager</li>
        <li>Manager will be add mess members</li>
<li>Give  unique ID and temporay password to the members</li>
<li>Member login this site by ID and password</li>
<li>Member must change the password.</li>
 
      </ol>
    <p>Members Can Do the flowing tasks..</p>
    <ul>
      <li>Login</li>
      <li>Send meal request to the manager</li>
      <li>Send meal stop request</li>
      <li>Meal status (how many meal member took till date)</li>
      <li>Today’s per meal cost</li>
      <li>Account status (how much money member have or  not)</li>
      <li>Request for special menu</li>
      <li>Leave comments on menu</li>
      <li>Chat with others members and  manager </li>
 
    </ul></td>
    <td valign="top">Login as Manager
    
     <form action="login_manager_action.php" method="post" >
         User ID:<br />
       <?php if($_REQUEST['y']=='incorrect_pass'){ ?>
         
       <font color="#FF0000"> Incorrect Password</font >
      
       <?php }?>
       
       <?php if($_REQUEST['y']=='not_in_database'){ ?>
         
       <font color="#FF0000"> You are not Subsciber <a href="subscribe.php">Subscribe Now</a></font >
      
       <?php }?>
    <input name="manager_id" type="text" id="manager_id" size="20" maxlength="20" />
      Password:<br />
      <input name="password" type="password" id="password" size="20" maxlength="20" /><br />
      <input name="submit" type="submit" id="submit" value="Login" />
      </form>
    <p>Not a Subscriber ?<br />
    First Subscribe as a Mess Manager. Then Manage your Mess.</p>
    <h3><a href="subscribe.php"><strong>Subscribe Form</strong></a></h3></td>
    
    
    
     
  </tr>
  <tr>
    <td height="23" colspan="5" align="center"><?php include_once('manue/footer.php') ?></td>
  </tr>
</table>
</body>
</html>