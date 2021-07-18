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
<?php
include("connfile.php");
session_start();
$res="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
	//echo("working");
	$v1=$_POST['text1'];
	$v2=$_POST['text2'];
	$v3=$_POST['text3'];
	$v4=$_POST['text4'];
	//echo $v1."  ".$v2;
	$sqlvar="insert into actypeTab values('$v1','$v2','$v3',$v4)";
	$result=$conn -> query($sqlvar);
	if($result)
	{
		$res="Record Inserted";
		
	}
	else
	{
		
		$res="Record Not Inserted, Some problem";
	}
	
	
}
?>

<form name=form1 method="post"  action="adminacdet.php">

<table width=80% border=4 cellspacing=8 cellpadding=8 align=center bgcolor=skyblue>
<tr> <td colspan=2> Account Type Details Entry </td> </tr>
<tr> <td > Account Name </td> <td> <input type=text name=text1> </td> </tr>
<tr> <td > Account Details </td> <td> <input type=text name=text2> </td> </tr>
<tr> <td > Facilities </td> <td> <input type=text name=text3> </td> </tr>
<tr> <td > Minimum Balance </td> <td> <input type=text name=text4> </td> </tr>
<tr> <td > <a href=mainpage.php> <img src="imges/button_back.png"> </a> </td> <td> <input type=submit name=Login  style="height: 45px; width: 150px"> </td> </tr>
<tr> <td colspan=2> <?php echo $res; ?> </td> </tr>
</table>

</form>

<table width=100%>
<tr height=200> <td></td> </tr>
</table>
<img src="imges/img4.png">
</body>
</html>