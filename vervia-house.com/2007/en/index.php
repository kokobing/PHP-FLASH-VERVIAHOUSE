<?
require_once("include/config.php");

//get
if(isset($_GET["page"])){
	$intCurPage=$_GET["page"];
}else{
	$intCurPage=1;
}


$intRows = 5;
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
<META NAME=”keywords” CONTENT=”Mastercraft, hardware, hardware manufacturers, China, sourcing, industrial supplies, innovation”>
<title>:: m-craft group :: industrial supplies</title>

<link href="include/en.css" rel="stylesheet" type="text/css">
</head>

<body>
<? require "include/top.php"; ?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" background="include/img/i_008.gif">
  <tr>
    <td height="189" valign="top"><table width="862" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="166" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="862" height="167">
            <param name="movie" value="include/img/fla/f_001.swf">
            <param name="quality" value="high">
            <embed src="include/img/fla/f_001.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="862" height="167"></embed>
          </object></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="862"><table width="862" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center"><table width="522" border="0" cellpadding="0" cellspacing="4" class="txt">
                <tr>
                  <td width="514" height="30"><img src="include/img/i_016.gif" width="514" height="21"></td>
                </tr>
              </table>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="txt">
                  <tr>
                    <td><?		if($intNews){
			?>
                        <table width="100%" border="0" cellpadding="0" cellspacing="4" class="txt" >
                          <? for($i=0;$i<$intNews;$i++){?>
                          <tr>
                            <td width="74%"><img src="include/img/i_012.gif" width="10" height="9"><a href="news/page?id=<?=$allNews[$i]["id_s031"];?>" class="m_01">
                              <?=$allNews[$i]["s031_01_01"];?>
                              </a>
                                <? if($allNews[$i]["s031_08_03"]=='1'){?>
                                <img src="/cn/include/img/i_043.gif">
                                <? }?></td>
                            <td width="26%" align="right" class="link_01"><?=$allNews[$i]["s031_09_01"];?></td>
                          </tr>
                          <tr bgcolor="#F5F5F5">
                            <td height="1" colspan="2"></td>
                          </tr>
                          <? }?>
                        </table>
                        <? }?></td>
                  </tr>
                </table>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="txt">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
              </table></td>
          </tr>
        </table></td>
        <td width="274" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="338" height="200">
          <param name="movie" value="include/img/affiliates.swf">
          <param name="quality" value="high">
          <embed src="include/img/affiliates.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="338" height="200"></embed>
        </object></td>
      </tr>
    </table></td>
    <td><? require "include/qic.php"; ?></td>
  </tr>
</table>
<? require "include/end.php"; ?>
</body>
</html>
