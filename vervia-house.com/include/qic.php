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
  <td height="8" bgcolor="#CCCCCC"></td>
  <td height="35">&nbsp;</td>
</tr>
<tr>
  <td height="8" bgcolor="#CCCCCC"></td>
  <td height="20">&nbsp;
  </td>
</tr>
<tr>
  <td height="8" bgcolor="#CCCCCC"></td>
  <td height="35"></td>
</tr>
<tr>
<td width="1" height="8"></td>
<td height="20"></td>
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