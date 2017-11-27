<? require "conn.php"; ?>
<?
$sql="select * from member where username='$_POST[username]'";
$records=mysql_query($sql,$myconn);	
$row=mysql_fetch_array($records);
if(!empty($row)){
	$sm="This username already used,please change another one...<br><br><a href='javascript:history.go(-1)'><strong>&lt;&lt; BACK</strong></a>";
}else{
$id=$_POST[id];
$username=$_POST[username];
$password=$_POST[password];
$fname=$_POST[fname];
$lname=$_POST[lname];
$sex=$_POST[sex];
$year=$_POST[year];
$month=$_POST[month];
$day=$_POST[day];
$company=$_POST[company];
$type=$_POST[type];
$job=$_POST[job];
$markets=$_POST[markets];
$omarkets=$_POST[omarkets];
$employees=$_POST[employees];
$ceo=$_POST[ceo];
$volume=$_POST[volume];
$established=$_POST[established];
$certifications=$_POST[certifications];
$introduction=$_POST[introduction];
$country=$_POST[country];
$state=$_POST[state];
$city=$_POST[city];
$street=$_POST[street];
$zip=$_POST[zip];
$tel1=$_POST[tel1];
$tel2=$_POST[tel2];
$tel3=$_POST[fax3];
$fax1=$_POST[fax1];
$fax2=$_POST[fax2];
$fax3=$_POST[fax3];
$mobile=$_POST[mobile];
$rdate=$_POST[rdate];
$edate=$_POST[edate];
$ldate=$_POST[ldate];

$sql = "INSERT INTO member ( id, username , password , fname , lname , sex , year , month , day , company , type , job , markets , omarkets , employees , ceo , volume , established , certifications , introduction , country , state , city , street , zip , tel1 , tel2 , tel3 , fax1 , fax2 , fax3 , mobile , rdate , level )
        VALUES ( '' , '$username' , '$password' , '$fname' , '$lname' , '$sex' , '$year' , '$month' , '$day' , '$company' , '$type' , '$job' , '$markets' , '$omarkets' , '$employees' , '$ceo' , '$volume' , '$established' , '$certifications' , '$introduction' , '$country' , '$state' , '$city' , '$street' , '$zip' , '$tel1' , '$tel2' , '$tel3' , '$fax1' , '$fax2' , '$fax3' , '$mobile' , NOW( )  , '' )";
$records=mysql_query($sql,$myconn);
$sm="Thank you for your register M-craft Group member! <br>We will contact you asap.";
	
}
?>
<? echo $sm;?>
