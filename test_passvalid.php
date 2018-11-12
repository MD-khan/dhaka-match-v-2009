<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script language="javascript">
function validpass(){
	var re =document.frm.mess_title
var re = /^\w*(?=\w*\d)(?=\w*[a-z])(?=\w*[A-Z])\w*$/
if (!re.test(myString)) { alert("Please enter a valid password!"); }

}
</script>



</head>

<body>
<form  name="frm"method="post" onsubmit="validpass()">
<table width="524" border="1">
  <tr>
    <td width="32">&nbsp;</td>
    <td width="142"><input type="text" name="textfield" id="textfield" /></td>
    <td width="85">&nbsp;</td>
    <td width="7">&nbsp;</td>
    <td width="224">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Submit" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table></form>
</body>
</html>