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
	color: deepgreen;
	
}
</style>

<body bgcolor=pink>
<img src="imges/Paragon One Plaza and Sky Garden (1).png" height=50% width=100%> <br><br>


<table align=center border=1 width=80% cellpadding=5 cellspacing=5 bgcolor=lightyellow>

<tr><td colspan=5> Transaction List </td></tr>
<tr><td> Transaction No </td><td> Date </td><td> Account No </td><td> Credit Amt</td><td> Debit Amt</td></tr>
<?php
include("connfile.php");

	$sqlvar="select * from TranTab order by TranNo desc";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>");
		
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