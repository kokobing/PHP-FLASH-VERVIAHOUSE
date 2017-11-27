<?
require_once("../include/config.php");


//取出新闻
$strSQL = "select * from s031 
			where id_s031=$_GET[id] " ;
$objDB->Execute($strSQL);
$oneNews=$objDB->fields();




?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>:: M-CRAFT GROUP ::</title>

<link href="../include/en.css" rel="stylesheet" type="text/css">
</head>

<body>
<? require "../include/top.php"; ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" background="../include/img/i_008.gif">
  <tr>
    <td height="189" valign="top"><table width="862" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="166" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="862" height="167">
            <param name="movie" value="../include/img/fla/f_001.swf">
            <param name="quality" value="high">
            <embed src="../include/img/fla/f_001.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="862" height="167"></embed>
          </object></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="txt">
            <tr valign="bottom">
              <td height="10" colspan="2"></td>
            </tr>
            <tr valign="bottom">
              <td width="61%"><? require "../include/state.php"; ?></td>
              <td width="39%" align="right"><img src="../include/img/i_011.gif" width="10" height="9"> <a href="/index.php" class="m_02">Home</a> <img src="../include/img/i_012.gif" width="10" height="9">News & Events</a></td>
            </tr>
            <tr bgcolor="#EBEBEB">
              <td height="1" colspan="2"></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="862"><table width="862" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="182" align="right" valign="top" bgcolor="#F1F2F2"><? require "menu.php"; ?></td>
      <td width="680" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center"><table width="632" border="0" cellpadding="0" cellspacing="0" class="txt">
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <table width="632" border="0" cellpadding="0" cellspacing="0" class="txt">
                <tr>
                  <td>
			
            <table width="100%" border="0" cellpadding="0" cellspacing="0" >
			 
              <tr>
                <td><div align="center" class="txt"><strong><?=$oneNews[s031_01_01];?>
</strong></div></td>
              </tr>
              <tr>
                <td><div align="center" class="txt"><?=$oneNews[s031_09_01];?>
</div></td>
              </tr>
              <tr>
                <td class="txt">
                  <?=$oneNews[s031_01_02];?>
</td>
                </tr>
			  <tr bgcolor="#F5F5F5">
                <td height="1"></td>
              </tr>
			 
		    </table>
           
</td>
                </tr>
              </table>
              <table width="632" border="0" cellpadding="0" cellspacing="0" class="txt">
                <tr>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
        </tr>
      </table></td>
      </tr>
    </table></td>
    <td><? require "../include/qic.php"; ?></td>
  </tr>
</table>
<? require "../include/end.php"; ?>
</body>
</html>
