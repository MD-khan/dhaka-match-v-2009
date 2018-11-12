 <?php 
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
    <td width="147" height="40">&nbsp;</td>
    <td colspan="3" valign="top"><?php include_once('manue/header.php') ?></td>
    <td width="140">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td width="145"><a href="index.php">Back 2 Main Page</a></td>
    <td width="136">&nbsp;</td>
    <td width="172">Today is: <?php echo date("D j M Y"); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="328" valign="top">&nbsp;</td>
   
<?php    
$sql = 'SELECT * FROM manager ORDER BY manager_id desc';

$con = connect_db();
$result = mysql_query($sql, $con);
$data = mysql_fetch_array($result);  
?>
    <td colspan="3" valign="top"><h2>Thanks Manager <?php echo $data['mng_first_name']?></h2>
    <p> <?php echo $data['mng_first_name']?> You are now subscriber in this site as a Manager. Now take flowing  steps:</p>
    <ul>
      <li>Login as a Manager.</li>
      <li>Add all mess members.</li>
      <li>Give them unique ID &amp; temporary password.</li>
      <li>Member must change their Password, but not ID.</li>
    </ul></td>
    <td valign="top">
    Login as Manager
      <form action="login_manager_action.php" method="post" >
         User ID:<br />
       <?php if($_REQUEST['y']=='incorrect_pass'){ ?>
       <font color="#FF0000"> Incorrect Password</font> 
        
        <?php }?>
    <input name="manager_id" type="text" id="manager_id" size="20" maxlength="20" />
      Password:<br />
      <input name="password" type="password" id="password" size="20" maxlength="20" /><br />
      <input name="submit" type="submit" id="submit" value="Login" />
      </form>
    
    </td>
  </tr>
  <tr>
    <td height="48" colspan="5" align="center"><?php include_once('manue/footer.php') ?></td>
  </tr>
</table>
</body>
</html>