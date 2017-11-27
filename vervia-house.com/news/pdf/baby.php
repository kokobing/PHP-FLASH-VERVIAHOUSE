<?
require_once($_SERVER['DOCUMENT_ROOT']."/cn/include/config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>::贝亲婴儿用品(上海)有限公司::</title>
<link href="../include/cn.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-color: #FEDEDF;
}
-->
</style></head>
<body>
<?
$allow_sep = "30"; 
if (isset($_SESSION["post_sep"])) { 
	if (time() - $_SESSION["post_sep"] < $allow_sep) { 
        echo "<table width=\"100%\"  border=0 cellpadding=0 cellspacing=0 class=txt><tr><td height=100 align=center>您的页面访问速度太快，请在30秒后刷新该页面</td></tr></table>";
        exit(" "); 
	}else{ 
		$_SESSION["post_sep"] = time(); 
	} 
}else{ 
	$_SESSION["post_sep"] = time(); 
}

if(isset($_POST["Submit"])){
	if($_SESSION["pigeon_login_ok"]=='1'){
		if($_GET["act"]=="week"){
			$strSQL="select * from s102 where id_s101='".$_GET["id"]."' and id_s020='".$_SESSION["UserID"]."' and s102_08_01='1'";
		}elseif($_GET["act"]=="month"){
			$strSQL="select * from s102 where id_s101='".$_GET["id"]."' and id_s020='".$_SESSION["UserID"]."' and s102_08_01='2'";
		}elseif($_GET["act"]=="year"){
			$strSQL="select * from s102 where id_s101='".$_GET["id"]."' and id_s020='".$_SESSION["UserID"]."' and s102_08_01='3'";
		}
		$objDB->Execute($strSQL);
		$arr=$objDB->getRows();
		
		if(count($arr)==0){
			if($_GET["act"]=="week"){
				$strSQL="insert into  s102(id_s101,id_s020,s102_08_01,s102_08_02,s102_09_02) values('".$_GET["id"]."','".$_SESSION["UserID"]."','1','".$_SERVER["REMOTE_ADDR"]."',now())";
				$objDB->Execute($strSQL);
				$strSQL="update s101 set s101_10_02=s101_10_02+1 where id_s101='".$_GET["id"]."'";
				$objDB->Execute($strSQL);
				$str="week_ok";
			}elseif($_GET["act"]=="month"){
				$strSQL="insert into  s102(id_s101,id_s020,s102_08_01,s102_08_02,s102_09_02) values('".$_GET["id"]."','".$_SESSION["UserID"]."','2','".$_SERVER["REMOTE_ADDR"]."',now())";
				$objDB->Execute($strSQL);
				$strSQL="update s101 set s101_10_03=s101_10_03+1 where id_s101='".$_GET["id"]."'";
				$objDB->Execute($strSQL);
				$str="month_ok";
			}elseif($_GET["act"]=="year"){
				$strSQL="insert into  s102(id_s101,id_s020,s102_08_01,s102_08_02,s102_09_02) values('".$_GET["id"]."','".$_SESSION["UserID"]."','3','".$_SERVER["REMOTE_ADDR"]."',now())";
				$objDB->Execute($strSQL);
				$strSQL="update s101 set s101_10_04=s101_10_04+1 where id_s101='".$_GET["id"]."'";
				$objDB->Execute($strSQL);
				$str="year_ok";
			}
		}else{
			$str="voted";
		}		
	}else{
		$str="login";
	}
}else{
	//if (time() - $_SESSION["post_sep"] > $allow_sep){
	$strSQL = "update s101 set s101_10_01=s101_10_01+1 where id_s101='".$_GET["id"]."' ";
	$objDB->Execute($strSQL);
	//}
	
	$strSQL = "SELECT *  from s101 where id_s101='".$_GET["id"]."' ";
	$objDB->Execute($strSQL);
	$onebaby=$objDB->fields();
	

	$str="";
}

$strSQL="select * from s101 where id_s101='".$_GET["id"]."' ";
$objDB->Execute($strSQL);
$arr2=$objDB->fields();
if($_GET["act"]=="week"){
	$intVot="已获投票数：".$arr2["s101_10_02"];
}elseif($_GET["act"]=="month"){
	$intVot="已获投票数：".$arr2["s101_10_03"];
}elseif($_GET["act"]=="year"){
	$intVot="已获投票数：".$arr2["s101_10_04"];
}



?>

<? if($str=="login"){?>
<table width="100%" height="100%" border="0" cellpadding="8" cellspacing="0" bgcolor="#FEDEDF" class="txt">
  <tr><td align="center">
	对不起您还没登录，只有登录用户才能投票！</br>
	  <br>
	  <br>
	  正在返回，如系统不能自动跳转，请点击<a href="./baby.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>">这里</a>
	<meta http-equiv="refresh" content="3;url=./baby.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>">
<? }elseif($str=="voted"){?>
	对不您已经对此照片投过票了！</br>
	  <br>
	  <br>
	正在返回，如系统不能自动跳转，请点击<a href="./baby.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>">这里</a>
	<meta http-equiv="refresh" content="3;url=./baby.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>">
<? }elseif($str=="week_ok"){?>
	对周赛投票成功！</br>
	  <br>
	  <br>
	正在返回，如系统不能自动跳转，请点击<a href="./baby.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>">这里</a>
	<meta http-equiv="refresh" content="3;url=./baby.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>">
<? }elseif($str=="month_ok"){?>
	对月赛投票成功！</br>
	  <br>
	  <br>
	正在返回，如系统不能自动跳转，请点击<a href="./baby.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>">这里</a>
	<meta http-equiv="refresh" content="3;url=./baby.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>">
<? }elseif($str=="year_ok"){?>
	对年赛投票成功！</br>
	  <br>
	  <br>
	  正在返回，如系统不能自动跳转，请点击<a href="./baby.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>">这里</a>
	<meta http-equiv="refresh" content="3;url=./baby.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>">
</td></tr></table>
<? }else{?>
<table width="100%" border="0" cellpadding="8" cellspacing="0" >
  <tr bgcolor="#FEDEDF">
    <td height="20" colspan="2" align="right" valign="top"><div align="center"><img src="../my/UploadPic/<?=$onebaby[s101_05_02];?>" height="343"></div></td>
  </tr>
  <form action="baby2.php?id=<?=$_GET["id"];?>&act=<?=$_GET["act"];?>" method="post" name="form1">
    <tr>
      <td width="50%" align="right" bgcolor="#FFFFFF" class="txt">浏览次数：<?=$onebaby[s101_10_01];?>&nbsp;&nbsp;&nbsp;<?=$intVot;?></td>
    <td width="50%" bgcolor="#FFFFFF" class="txt"><?   if(isset($_GET["act"]) && $_GET["act"]=="week"){ ?>
    <? //<input type="submit" name="Submit" value="周赛投票">?>周赛投票已经结束
      <?  }elseif(isset($_GET["act"]) && $_GET["act"]=="month"){?>
      <input type="submit" name="Submit" value="月赛投票">      <?  }elseif(isset($_GET["act"]) && $_GET["act"]=="year"){ ?>
      <? //<input type="submit" name="Submit" value="年赛投票"> ?> 2007年贝亲宝宝秀年赛投票暂未开始
      <? }?></td>
    </tr>
  </form>
  <? }?>
</table>
<div id=scripthiddle><script language="javascript" src="http://count3.51yes.com/click.aspx?id=36630264&logo=6"></script></div>
</body>
</html>