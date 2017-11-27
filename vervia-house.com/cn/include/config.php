<?php
/**
系统配置文件；
最后编辑人：koko
编辑时间：2007-08-23
**/
session_start();


//调用文件
require_once($_SERVER['DOCUMENT_ROOT']."/cn/include/mysql.class.php");//数据库
require_once($_SERVER['DOCUMENT_ROOT']."/cn/include/pagenav.class.php");//翻页
//数据库
$db_hostname="localhost"; //服务器
$db_username="m-craft"; //用户名
$db_password="craft112233"; //密码
$db_database="erp2007"; //数据库
$db_pre="";//数据库表前缀
$objDB=new mysql($db_hostname,$db_username,$db_password,$db_database);
//系统图片路径
$strImgDir="/cn/include/img";

//网站名称
$website="::PURTER.cn";
//网站logo
$logo="Administrator";
//网站搜索关键词
$google="";
$baidu="";

?>