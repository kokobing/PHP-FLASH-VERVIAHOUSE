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
<DIV id="divMenu" style="position:absolute; visibility:visible; left: 806px;"> 
<table width="120" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="180" height="116">
    <param name="movie" value="news/fla/n_20061012_1.swf">
    <param name="quality" value="high">
    <embed src="news/fla/n_20061012_1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="180" height="116"></embed>
  </object></td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
<tr>
  <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="180" height="116">
    <param name="movie" value="news/fla/n_20060913_1.swf">
    <param name="quality" value="high">
    <embed src="news/fla/n_20060913_1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="180" height="116"></embed>
  </object></td>
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