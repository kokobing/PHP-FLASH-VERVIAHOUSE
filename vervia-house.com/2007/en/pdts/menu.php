
<table width="172" border="0" cellspacing="0" cellpadding="0" class="m_02">
  <tr>
    <td width="158"><img src="../include/img/i_003.gif" width="186" height="47"></td>
  </tr>
  <tr>
    <td>

<?
//列出Vervia下级菜单 
$strSQL="select s040_01_01,id_s040 from s040 where s040_08_03=189 and s040_08_04=2";
$objDB->Execute($strSQL);
$allmenus=$objDB->GetRows();


?>
<table width="186" border="0" cellpadding="0" cellspacing="0" class="m_02">
     <? for($i=0;$i<sizeof($allmenus);$i++){?>
      <tr>
        <td width="4" height="25" bgcolor="#00A94F">&nbsp;</td>
		<td width="165" background="../include/img/i_005.gif" >&nbsp;&nbsp;<a href="index.php?sc_n2=189&sc_n3=<?=$allmenus[$i][id_s040]?>&pdtsname=Vervia&pdtsname2=<?=$allmenus[$i][s040_01_01]?>" class="m_02"><?=$allmenus[$i][s040_01_01]?></a></td>
		<td height="25" width="17"><img src="../include/img/i_006.gif" width="19" height="25"></td>
      </tr>
	  <? }?>
    </table> 

   </td>
  </tr>
</table>






