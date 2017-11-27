<?
require_once("../include/config.php");




if(isset($_REQUEST[sc_n1])){ $sc_n1=$_REQUEST[sc_n1]; }else{ $sc_n1=7;}//取出 品牌id,如果不存在则取出默认，默认Vervia
if(isset($_REQUEST[sc_n2])){ $sc_n2=$_REQUEST[sc_n2]; }else{ $sc_n2=189;}//取出一级目录id,如果不存在则取出默认，默认列出Vervia
if(isset($_REQUEST[sc_n3])){ $sc_n3=$_REQUEST[sc_n3]; }else{ $sc_n3="";}//取出二级目录id
if(isset($_POST[sc_t1])){ 
	$sc_t1=$_POST[sc_t1];
}elseif(isset($_GET[sc_t1])){
	$sc_t1=urldecode($_GET[sc_t1]);
	$sc_t1=str_replace("'","&acute;",$sc_t1);
}else{ 
	$sc_t1="";
}

$arrParam[0][name]="sc_n1";
$arrParam[0][value]=$sc_n1;
$arrParam[1][name]="sc_n2";
$arrParam[1][value]=$sc_n2;
$arrParam[2][name]="sc_n3";
$arrParam[2][value]=$sc_n3;
$arrParam[3][name]="sc_t1";
$arrParam[3][value]=$sc_t1;
$arrParam[4][name]="menuid";
$arrParam[4][value]=$menuid;


if(isset($_GET["page"])){
	$intCurPage=$_GET["page"];
}else{
	$intCurPage=1;
}
$intRows = 10;

if($sc_n1!=""){
	$strWhere.="and s041.id_s042='".$sc_n1."' ";//列出品牌
}
if($sc_n2!=""){
	$strWhere.="and s040.s040_08_03='".$sc_n2."' ";//列出一级目录
}
if($sc_n3!=""){
	$strWhere.="and s040.id_s040='".$sc_n3."' ";//列出二级目录
}
if($sc_t1!=""){
	$strWhere.="and (s041.s041_01_01 like '%".$sc_t1."%' or s041.s041_01_02 
	like '%".$sc_t1."%' or s041.s041_01_05 like '%".$sc_t1."%')";
}
$strSQLNum = "SELECT COUNT(*) as num from s041 left join s040 on  
		   s040.id_s040=s041.id_s040  where s041.s041_08_01='1' ";
$strSQLNum.=$strWhere;

$objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);
$strNavigate = $objPage->GetLinkParamMul($arrParam);
$intStartNum = $objPage->GetStartNum();
//取出产品
$strSQL = "select s041.*,s040.s040_08_03  as intMenu1 from s041 left join s040 on  
		   s040.id_s040=s041.id_s040 where s041.s041_08_01='1' " ;
$strSQL.=$strWhere;
$strSQL.=" order by s041.s041_01_05 ASC";
//echo $strSQL;
	
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$allpdts=$objDB->GetRows();
$intpdts=sizeof($allpdts);



//取出产品目录
$strSQL="select * from s040  order by s040_08_03 asc";
$objDB->Execute($strSQL);
$arrMenu=$objDB->GetRows();
//print_r($arrMenu);
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
              <td width="39%" align="right"><img src="../include/img/i_011.gif" width="10" height="9"> <a href="/index.php" class="m_02">Home</a> <img src="../include/img/i_012.gif" width="10" height="9"> <a href="/cn/about/index.php" class="m_02">Products</a> <img src="../include/img/i_012.gif" width="10" height="9"> <span class="m_02"><?=$_GET[pdtsname]?>
              </span></td>
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
          <td align="center">
			  
           <table width="100%" border="0" cellspacing="4" cellpadding="0" class="txt">
			<form action="index.php" method="post" name="news" >
              <tr>
                <td width="36%" bgcolor="#F5F5F5">
                <select name="sc_n2" class="input_01" onChange="onChangeMenu()">
					<option value="" selected>Choose First Catalog</option>
					<? for($i=0;$i<sizeof($arrMenu);$i++){?>
					<? if($arrMenu[$i][s040_08_04]=='1'&&$arrMenu[$i][id_s040] ==189){?>
			<option value="<?=$arrMenu[$i][id_s040];?>" <? if($arrMenu[$i][id_s040]==$sc_n2){?>selected<? }?>><?=$arrMenu[$i][s040_01_01];?></option>
					<? }?>
					<? }?>
				</select>&nbsp;
				<select name="sc_n3" class="input_01" id="sc_n3">
					<? for($i=0;$i<sizeof($arrMenu);$i++){?>
					<? if($arrMenu[$i][s040_08_04]=='2'&&$arrMenu[$i][s040_08_03] ==189){?>
			<option value="<?=$arrMenu[$i][id_s040];?>" <? if($arrMenu[$i][id_s040]==$sc_n3){?>selected<? }?>><?=$arrMenu[$i][s040_01_01];?></option>
					<? }?>
					<? }?>
				</select>
				<input name="sc_t1" type="text" class="input_01" id="sc_t1" value="<?=$sc_t1;?>" size="20">
				<input name="search" type="submit" class="input_01" value="Search" >				</td>
              </tr>
			  <tr>
                <td height="1" bgcolor="#CCCCCC"></td>
              </tr> 
			</form>
            </table>
			<?	
			if($intpdts){
			?>
			<table width="100%" border="0" cellspacing="4" cellpadding="0" class="txt">
              <tr bgcolor="#F5F5F5">
                <td width="100">Picture</td>
                <td width="506" bgcolor="#F5F5F5">SN/Porduct/Intro</td>
                </tr>
              <? for($i=0;$i<$intpdts;$i++){?>
              <tr onMouseOver="setPointer(this, <?=$i;?>, 'over', '#FFFFFF', '#FAFFE8', '#FFEEDD');" onMouseOut="setPointer(this, <?=$i;?>, 'out', '#FFFFFF', '#FAFFE8', '#FFEEDD');" onMouseDown="setPointer(this, <?=$i;?>, 'click', '#FFFFFF', '#FAFFE8', '#FFEEDD');">
                <td><table width="80" height="80" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><a href="page.php?id=<?=$allpdts[$i]["id_s041"];?>" class="m_03"><img src="http://192.168.0.205/ERP2007/en/pdts/images/
				<?
				if ($allpdts[$i]["s041_05_02"]!=""){
				echo $allpdts[$i]["s041_05_02"];
				}else{
				echo "no.gif";
				}
				?>" alt="<?=$allpdts[$i]["s041_01_01"];?>" width="100" border="0" ></a></td>
                  </tr>
                </table>
                </td>
                <td><strong><a href="page.php?id=<?=$allpdts[$i]["id_s041"];?>" class="m_03"><?=$allpdts[$i]["s041_01_05"];?></a></strong><br>
                <?=$allpdts[$i]["s041_01_01"];?>
                <br>
                <?=$allpdts[$i]["s041_01_02"];?></td>
                </tr>
              <tr bgcolor="#F5F5F5">
                <td colspan="2" height="1"></td>
              </tr>
              <? }?>
            </table>
			<table width="100%" border="0" cellspacing="4" cellpadding="0" class="txt">
              <tr>
                <td align="right"><? echo $strNavigate;?></td>
              </tr>
            </table>
			<? }?>
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
