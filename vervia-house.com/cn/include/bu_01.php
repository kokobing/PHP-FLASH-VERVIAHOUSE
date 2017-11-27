<? 
$strSql = "select * from etn01 order by id_n01" ;
$result = mysql_query($strSql,$myconn) ;
$rsNum = mysql_num_rows($result) ;

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="m_02">
  <?
if ($rsNum==0)  {
?>
  <tr>
    <td height="24"> 暂无新闻目录</td>
  </tr>
  <tr>        
    <td>&nbsp;</td>
  </tr>
<?
} else {
	while($row=mysql_fetch_array($result))  {
?>
  
  <tr>
    <td height="24"><a href="news.php?id=<?=$row["id_n01"] ?>" class="link_01"><?=$row["n01"];?>
    </a></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  </tr>
<?
	}
}
?>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
