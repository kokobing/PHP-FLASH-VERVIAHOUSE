<? require "conn.php"; ?>
<?
$sql="select * from member where username='$_POST[username]' and level=1";
$records=mysql_query($sql,$myconn);
$row=mysql_fetch_array($records);
$pass=$_POST[password];
if($row[password]==$pass)
{
	setcookie("c_name",$_POST[username],Time()+36000,"/");
	$sm="Login OK<meta http-equiv='refresh' content='1;url=main.php'>";

}
else
{
	setcookie("c_name","",0,"/");
	$sm="User name or Password were wrong,please back to input again...<br>To activate your username and password please contact <a href='mailto:info@m-craftgroup.com'>info@m-craftgroup.com </a><br><a href='javascript:history.go(-1)'><strong>&lt;&lt; BACK</strong></a>";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><? echo "$website" ?></title>
<link href="en.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="100"  border="0">
      <tr>
        <td><img src="img/logo.gif" width="379" height="104"></td>
      </tr>
    </table>
      <br>
      <br>
      <br>
      <span class="link_01"><? echo $sm;?></span></td>
  </tr>
  <tr>
    <td height="10">&nbsp;</td>
  </tr>
</table>
</body>
</html>
