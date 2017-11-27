<?php
session_start();

$_SESSION["login_ok"]='1';

require_once($_SERVER['DOCUMENT_ROOT']."/2007/en/include/mysql.class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/2007/en/include/pagenav.class.php");

$db_hostname="localhost"; 
$db_username="m-craft"; 
$db_password="craft112233"; 
$db_database="erp2007"; 
$prefix="mpb_";

$DocumentRoot=$_SERVER['DOCUMENT_ROOT']."/en";

$objDB=new mysql($db_hostname,$db_username,$db_password,$db_database);
?>