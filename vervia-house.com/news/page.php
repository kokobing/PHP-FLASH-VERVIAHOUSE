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
<title>Vervia Grand Opening Invitation</title>
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
}
-->
</style>
</head>

<body>
<div align="center">
  <table width="740" border="0" cellpadding="0" cellspacing="0" class="txt">
    <tr>
      <td><img src="../img/i_004.gif" width="412" height="122">
        <h3 align="center"><span class="style3"><strong>      <br>
      <br>
      </strong></span><table width="632" border="0" cellpadding="0" cellspacing="0" class="txt">
                <tr>
                  <td>
			
            <table width="100%" border="0" cellpadding="0" cellspacing="0" >
			 
              <tr>
                <td><div align="center" class="txt"><strong><?=$oneNews[s031_01_01];?>
</strong></div></td>
              </tr>
			  			  <tr >
                <td height="10"></td>
              </tr>
              <tr>
                <td><div align="center" class="txt"><strong><?=$oneNews[s031_09_01];?></strong>
</div></td>
              </tr>
			    <tr >
                <td height="10"></td>
              </tr>
              <tr>
                <td class="txt">
                  <?=$oneNews[s031_01_02];?>
</td>
                </tr>
			  <tr>
                <td height="1"></td>
              </tr>
			 
		    </table>
           
</td>
                </tr>
              </table><br>
        <br>
        </p>
        <p></p></td></tr>
  </table>
</div>
</body>
</html>
