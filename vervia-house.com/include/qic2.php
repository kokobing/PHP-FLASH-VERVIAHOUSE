<? require_once($_SERVER['DOCUMENT_ROOT']."/cn/include/config.php");?>
<SCRIPT LANGUAGE="JavaScript">
<!--
var isDOM = (document.getElementById ? true : false); 
var isIE4 = ((document.all && !isDOM) ? true : false); 
var isNS4 = (document.layers ? true : false); 

function getRef(id) { 
if (isDOM) return document.getElementById(id); 
if (isIE4) return document.all[id]; 
if (isNS4) return document.layers[id]; 
} 

var isNS = navigator.appName == "Netscape"; 

function moveRightEdge() { 
var yMenuFrom, yMenuTo, yOffset, timeoutNextCheck; 
if (isNS4) { 
yMenuFrom = divMenu.top; 
yMenuTo = windows.pageYOffset+0; 
} else if (isDOM) { 
yMenuFrom = parseInt (divMenu.style.top, 10); 
//yMenuTo = (isNS ? window.pageYOffset : document.body.scrollTop) + 72; 
yMenuTo = (isNS ? window.pageYOffset : document.body.scrollTop)+0; 
} 
if(yMenuTo<98) yMenuTo = 98; 

timeoutNextCheck = 1000; 

if (yMenuFrom != yMenuTo) { 
yOffset = Math.ceil(Math.abs(yMenuTo - yMenuFrom) / 10); 
if (yMenuTo < yMenuFrom) 
yOffset = -yOffset; 
if (isNS4) divMenu.top += yOffset; 
else if (isDOM) divMenu.style.top = parseInt (divMenu.style.top, 10) + yOffset; 
timeoutNextCheck = 10; 
} 
setTimeout ("moveRightEdge()", timeoutNextCheck); 
}
//-->
</SCRIPT>
<DIV id="divMenu" style="position:absolute; visibility:visible; left: 872px;"> 
<table width="120" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td height="8" bgcolor="#F4D6D6"></td>
  <td height="35">&nbsp;</td>
</tr>
<tr>
  <td height="8" bgcolor="#F4D6D6"></td>
  <td height="20"><br>
<? echo $_SESSION["UserName"];?>
  <?
  if ($_SESSION["UserName"]!="")
  {
  ?>
  
  <table width="89"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><img src="/cn/include/img/i_014.gif" width="89" height="66"></td>
    </tr>
    <tr>
      <td background="/cn/include/img/i_015.gif">
        <table width="89" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="5">&nbsp;</td>
          <td height="30"><img src="/cn/include/img/i_037.gif" width="7" height="7"> <a href="/cn/my/my.php" class="m_02">MY PAGE</a></td>
          </tr>
        </table>
        <table width="89" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="5">&nbsp;</td>
            <td height="30"><img src="/cn/include/img/i_037.gif" width="7" height="7"> <a href="/cn/member/login.php?act=out" class="m_02">退出</a></td>
          </tr>
        </table>
        </td>
    </tr>
    <tr>
      <td><img src="/cn/include/img/i_016.gif" width="89" height="31"></td>
    </tr>
  </table>
   <? }
   else{ ?>
    <table width="89"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="/cn/include/img/i_014.gif" width="89" height="66"></td>
      </tr>
      <tr>
        <td background="/cn/include/img/i_015.gif"><table width="89" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="5">&nbsp;</td>
              <td height="30"><img src="/cn/include/img/i_037.gif" width="7" height="7"> <a href="/cn/member/login.php" class="m_02">会员登录</a></td>
            </tr>
          </table>
            <table width="89" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="5">&nbsp;</td>
                <td height="30"><img src="/cn/include/img/i_037.gif" width="7" height="7"> <a href="/cn/member/reg.php" class="m_02">会员注册</a></td>
              </tr>
          </table></td>
      </tr>
      <tr>
        <td><img src="/cn/include/img/i_016.gif" width="89" height="31"></td>
      </tr>
    </table>
	<? }?>
	</td>
</tr>
<tr>
  <td height="8" bgcolor="#F4D6D6"></td>
  <td height="35"></td>
</tr>
<tr>
<td width="1" height="8"></td>
<td height="20"><a href="#"><img src="/cn/include/img/i_017.gif" width="28" height="14" border="0"></a></td>
</tr>					
</table>
</div>
<SCRIPT language=javascript> 
<!-- // 
if (isNS4) {
var divMenu = document["divMenu"]; 
divMenu.top = top.pageYOffset + 98;
divMenu.visibility = "visible";
moveRightEdge();
} 
else if (isDOM) {
var divMenu = getRef('divMenu');
divMenu.style.top = (isNS ? window.pageYOffset : document.body.scrollTop) + 98;
divMenu.style.visibility = "visible";
moveRightEdge();
}
//--> 
</SCRIPT>