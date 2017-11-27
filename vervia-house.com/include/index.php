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
<title>:: COSMOS - hand tools for professionals ::</title>

<link href="include/en.css" rel="stylesheet" type="text/css">
</head>

<body>
<? require "include/top.php"; ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="862"><table width="862" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><img src="p_003.jpg" width="399" height="530"></td>
        <td width="462" valign="top"><table border="0" cellpadding="0" cellspacing="0" class="txt">
          <tr>
            <td><img src="p_004.jpg" width="461" height="23"></td>
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
              <td><img src="p_001.jpg" width="462" height="21"></td>
            </tr>
            <tr>
              <td><img src="p_002.jpg" width="461" height="210"></td>
            </tr>
            <tr>
              <td><img src="p_005.jpg" width="460" height="22"></td>
            </tr>
            <tr>
              <td><p>The brand new atomica hexagonic series is the ultimate screwdriver system, engineered to set new standards in its field. <br>
                Feeling is believing. Forget all other drivers – this is the only one any serious professional needs to bring to work!<strong>more&gt;</strong></p></td>
            </tr>
          </table></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>
<? require "include/end.php"; ?>
</body>
</html>
