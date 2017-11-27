<? require "../cn/include/config.php"; 



if(isset($_REQUEST["page"])){
	$intCurPage=$_REQUEST["page"];
}else{
	$intCurPage=1;
}

$intRows = 48;
$strSQLNum = "SELECT COUNT(*) as num from s036 
			left join s035 on s036.id_s035=s035.id_s035  where s036.id_s035=3 and  s036.s036_08_01='1'";
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

//取出图库
$strSQL = "select * from s036 left join s035 on s036.id_s035=s035.id_s035 
			where s036.id_s035=3  and s036.s036_08_01='1' order by s036_09_01 desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$allgallery=$objDB->GetRows();
$intgallery=sizeof($allgallery);



?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Press coverage</title>
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
-->
</style>
</head>

<body>
<div align="center">
  <table width="780" border="0" cellpadding="0" cellspacing="0" class="txt">
    <tr>
      <td><img src="../img/i_004.gif" width="412" height="122">
       
          <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="txt">
            <tr>
              <td valign="top"><p><strong class="title">Press coverage</strong> <br>
                <br>
Below you will find a selection of articles in the press about Vervia. </p>
              <p>&nbsp;</p>
              
			  
			  <table width="100%"  border="0" cellpadding="8" cellspacing="0" class="txt">
				
                  <tr>
				   <?
  for($i=0;$i<sizeof($allgallery);$i++){
 
 	 if($i!=0 && $i%4==0){?></tr><tr><? }?>		
                    <td  width="25%" align="center">
				    <table width="100%">
                         <tr>
                           <td><div align="center"><a href="<? if($allgallery[$i][s036_02_02]==""){
						  echo $allgallery[$i][s036_02_01];
						  }elseif($allgallery[$i][s036_02_02]!=""){
						  echo  $allgallery[$i][s036_02_02];
						   }
						   
						   ?>" target="_blank">
                           <img src="http://www.m-craftgroup.com/cn/vervia-house/<?=$allgallery[$i][s036_05_01]; ?>" width="100" height="129" border="0"></a></div></td>
                              </tr>
                         </table>				  
					  <p> <strong align="center" class="title"><?=$allgallery[$i][s036_01_01]; ?></strong>
					   <br align="center"><?=$allgallery[$i][s036_01_02]; ?></br>
					  </td>
					<? }?>		
                  </tr>
                </table>
			  
			  
			  
			  
			  
            				         <table width="100%" border="0" cellspacing="0" cellpadding="4" class="txt">
              <tr>
                <td align="center" class="txt">                <FONT 
                  color=#ff0000><A 
                  class=link_01 
                  href="http://www.vervia-house.com/news/press_coverage.php?&page=1">1</A></FONT>&nbsp;&nbsp;<A 
                  class=link_01 
                  href="http://www.vervia-house.com/news/press_coverage.php?&page=2">2</A>&nbsp;&nbsp; 
                  <A class=link_01 
                  href="http://www.vervia-house.com/news/press_coverage.php?&page=2">下一页</A> 
                  <A class=link_01 
                  href="http://www.vervia-house.com/news/press_coverage.php?page=2">末页</A> 
                  共85条2页 
                 </td>
              </tr>
            </table></td>
            </tr>
        </table>
        
      </td></tr>
  </table>
</div>
</body>
</html>
