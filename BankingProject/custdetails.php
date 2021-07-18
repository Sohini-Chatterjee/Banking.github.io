<html>
<head>
<title> Banking Project </title>
</head>
<style>
body {
	font-size:20px;
	
}
table{
	font-size:20px;
	
}
</style>

<body bgcolor=pink>
<img src="imges/Paragon One Plaza and Sky Garden (1).png" height=50% , width=100%> <br><br>


<table align=center border=4 width=90% cellpadding=8 cellspacing=8 bgcolor=skyblue>
<br><br>

<?php
include("connfile.php");
session_start();
$v1=$_SESSION['acno'];

	$sqlvar="select * from CustAcTab where acno=$v1";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td> ACNo </td><td>".$row[0]." </td></tr><tr><td> Name </td><td>".$row[2]."</td></tr> <tr><td> Address </td><td>".$row[3]."</td></tr> <tr><td> MobileNo</td><td>".$row[4]."</td></tr> <tr><td> eMail</td><td>".$row[5]."</td></tr> <tr><td> actype</td><td>".$row[6]."</td></tr>");
		
	}
	
?>
<br><br>
</table>
<a href=custmainpage.php> <img src="imges/button_back.png"> </a> 
<table width=100%>
<tr height=200> <td></td> </tr>
</table>
<img src="imges/img4.png">
</body>
</html>