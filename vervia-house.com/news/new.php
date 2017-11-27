<?
require_once("../include/config.php");

//get
if(isset($_GET["page"])){
	$intCurPage=$_GET["page"];
}else{
	$intCurPage=1;
}


$intRows = 20;
$strSQLNum = "SELECT COUNT(*) as num from s031 left join s030 on s031.id_s030=s030.id_s030  and s031_08_01=1
			where s031.id_s030=21";
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);
$strNavigate = $objPage->GetLink();
$intStartNum = $objPage->GetStartNum();

//取出新闻
$strSQL = "select * from s031 left join s030 on s031.id_s030=s030.id_s030 
			where s031.id_s030=21  and s031_08_01=1 order by s031_09_01 desc" ;//id为5，即为s030表 News & Events
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$allNews=$objDB->GetRows();
$intNews=sizeof($allNews);



?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Vervia news</title>
<style type="text/css">
<!--
body {
	background-image: url();
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #00A94F;
}
.title {
	color: #FFFFFF;
	font-family: Arial;
	font-size: 14px;
}
.txt {
	font-family: Arial;
	font-weight: normal;
	color: #FFFFFF;
	font-size: 12px;
}
a.txt:hover {  color: #FFCC99; text-decoration: none}

-->
</style>
</head>

<body>
<div align="center">
  <table width="789" border="0" cellpadding="0" cellspacing="0" class="txt">
    <tr>
      <td><img src="../img/i_004.gif" width="412" height="122">
       
          <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="txt">
            <tr>
              <td valign="top"><p>&nbsp;</p>
                <p class="title"><strong>Vervia news</strong></p>
				  
			    <table width="791" border="0" cellpadding="0" cellspacing="0" class="txt">
                <tr>
                  <td><?		if($intNews){
			?>
			
            <table width="100%" border="0" cellpadding="0" cellspacing="4"  class="txt">
			  <? for($i=0;$i<$intNews;$i++){?>
              <tr>
			   <td> <p class="title"><img src="../include/img/i_012.gif" width="10" height="9"><a href="page?id=<?=$allNews[$i]["id_s031"];?>" class="txt"><?=$allNews[$i]["s031_09_01"];?> &nbsp; <?=$allNews[$i]["s031_01_01"];?>
                  </a><? if($allNews[$i]["s031_08_03"]=='1'){?>
                  <img src="/include/img/i_043.gif"><br></p>
                  <? }?></td>
                </tr>
			  <tr>
                <td height="10" colspan="2"></td>
              </tr>
			   <? }?>
		    </table>
           
			<? }?></td>
                </tr>
              </table>
				  
				         <table width="100%" border="0" cellspacing="0" cellpadding="4" class="txt">
              <tr>
                <td align="right" class="txt"><? echo $strNavigate;?></td>
              </tr>
            </table>
				  
				                
                </p>
              </td>
            </tr>
        </table>
        
      </td></tr>
  </table>
</div>
</body>
</html>
