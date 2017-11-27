<?
require_once("../include/config.php");

//get
if(isset($_GET["page"])){
	$intCurPage=$_GET["page"];
}else{
	$intCurPage=1;
}


$intRows = 20;
$strSQLNum = "SELECT COUNT(*) as num from s031 left join s030 on s031.id_s030=s030.id_s030 
			where s031.id_s030=5";
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);
$strNavigate = $objPage->GetLink();
$intStartNum = $objPage->GetStartNum();

//取出新闻
$strSQL = "select * from s031 left join s030 on s031.id_s030=s030.id_s030 
			where s031.id_s030=5 order by s031_09_01 desc" ;//id为5，即为s030表 News & Events
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$allNews=$objDB->GetRows();
$intNews=sizeof($allNews);



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
                  <td><?		if($intNews){
			?>
			
            <table width="100%" border="0" cellpadding="0" cellspacing="4" >
			  <? for($i=0;$i<$intNews;$i++){?>
              <tr>
                <td width="13">&nbsp;</td>
                <td width="509"><a href="page?id=<?=$allNews[$i]["id_s031"];?>" class="link_01">
                  <?=$allNews[$i]["s031_01_01"];?>
                  </a>                  <? if($allNews[$i]["s031_08_03"]=='1'){?>
                  <img src="/cn/include/img/i_043.gif">
                <? }?></td>
                <td width="94" class="link_01"><?=$allNews[$i]["s031_09_01"];?></td>
                </tr>
			  <tr bgcolor="#F5F5F5">
                <td height="1" colspan="3"></td>
              </tr>
			   <? }?>
		    </table>
           
			<? }?></td>
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
