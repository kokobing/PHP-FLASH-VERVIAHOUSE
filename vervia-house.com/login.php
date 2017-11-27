<? require "conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><? echo "$website" ?></title>
<link href="../include/en.css" rel="stylesheet" type="text/css">
<SCRIPT language=JavaScript><!--
function check()  {
	if (login.username.value=="")  {
		alert("Please input user name!");
		login.username.focus();
		return false;
	}
	if (login.password.value=="")  {
		alert("Please input password!");
		login.password.focus();
		return false;
	}
	
}
//-->
</SCRIPT>
</head>

<body>
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td align="right">&nbsp;</td>
      </tr>
      <tr>
        <td width="200" valign="top">&nbsp;</td>
        <td width="560" align="right" valign="top"><table width="550" border="0" cellpadding="0" cellspacing="0" class="txt">
          <tr>
            <td height="27" align="right">Home : Member : Login </td>
          </tr>
          <tr>
            <td align="right"><img src="../include/img/i_011.gif" width="550" height="19"></td>
          </tr>
        </table>
          <table width="550" border="0" cellpadding="0" cellspacing="0" class="txt">
            <tr>
              <td>
			  <?
	if($_COOKIE[c_name]==""){
	?>
		      <table width="282" border="0" cellpadding="0" cellspacing="0" class="txt">
			  <form action="login_s.php" method="post" onsubmit="return check()" name="login">
                <tr>
                  <td width="92" class="link_03">User Name: </td>
                  <td width="190"><input name="username" type="text" id="username"></td>
                </tr>
                <tr>
                  <td class="link_03">Password:</td>
                  <td><input name="password" type="password" id="password"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input name="imageField" type="image" src="../include/img/login.gif" width="60" height="20" border="0">
                      <a href="register.php"><img src="../include/img/register.gif" width="60" height="20" border="0"></a></td>
                </tr>
				</form>
              </table>
		      <?
	}else{?>
		      <table width="282" border="0" cellpadding="0" cellspacing="0" class="txt">
                <tr align="center">
                  <td class="link_03"><span class="texttitle"><? echo $_COOKIE[c_name];?></span></td>
                  </tr>
                <tr>
                  <td align="center">Welcome to our website! </td>
                  </tr>
              </table>
		      <?
	}
	?>
			  
			  
			  </td>
            </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="10">&nbsp;</td>
  </tr>
</table>
</body>
</html>
