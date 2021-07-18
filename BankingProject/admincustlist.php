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
<img src="imges/Paragon One Plaza and Sky Garden (1).png" height=50% width=100%> <br><br>


<table align=center border=4 width=80% cellpadding=8 cellspacing=8 bgcolor=lightyellow>
<tr><td> Account Number </td><td> Name </td><td> Address </td><td> Mobile Number</td><td> eMail</td><td> Account type</td></tr>
<?php
include("connfile.php");

	$sqlvar="select * from CustAcTab where custapp='Y'";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td>".$row[0]." </td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>");
		
	}
	
?>

</table>
<a href=adminmainpage.php> <img src="imges/button_back.png"> </a> 
<table width=100%>
<tr height=200> <td></td> </tr>
</table>
<img src="imges/img4.png">
</body>
</html>