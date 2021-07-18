<html>
<head>
<title> Banking Project </title>
</head>
<style>
body {
	font-size:30px;
	
}
table{
	font-size:30px;
	
}
</style>

<body bgcolor=pink>
<img src="imges/Paragon One Plaza and Sky Garden (1).png" height=50% width=100%> <br><br>


<table align=center border=4 width=80% cellpadding=8 cellspacing=8 bgcolor=skyblue>
<tr> <td colspan=2> <h1> Your debit - credit Amount </h1> </tr>
<?php
include("connfile.php");
session_start();
$v1=$_SESSION['acno'];

	$sqlvar="select (sum(dbamt) - sum(cramt) ) as Balance from TranTab where acno=$v1";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td> Balance Amt </td><td>".$row[0]." </td></tr>");
		
	}
	
?>

</table>
<a href=custmainpage.php><img src="imges/button_back.png"> </a> 
<table width=100%>
<tr height=200> <td></td> </tr>
</table>
<img src="imges/img4.png">
</body>
</html>