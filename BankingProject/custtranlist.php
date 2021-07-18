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


<table align=center border=4 width=90% cellpadding=8 cellspacing=8 bgcolor=skyblue>

<tr><td colspan=5> Customer Transaction List </td></tr>
<tr><td> Tran No </td><td> Date </td><td> Ac No </td><td> Credit Amt</td><td> Debit Amt</td><td> Details</td></tr>
<?php
include("connfile.php");
session_start();
$v1=$_SESSION['acno'];

	$sqlvar="select * from TranTab where acno=$v1 order by TranNo desc";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>");
		
	}
	
?>

</table>
<a href=custmainpage.php> <img src="imges/button_back.png"> </a> 
<table width=100%>
<tr height=200> <td></td> </tr>
<br><br><br><br>
</table>
<img src="imges/img4.png">
</body>
</html>