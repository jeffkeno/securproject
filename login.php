<html>
<head>
<body background="123.jpg">
<p align=center>
<table cellpadding = 180>
<tr>
<td>
<?php
session_start();
?>

 <table cellspacing=20 bgcolor=#F0F8FF style="border-radius:10px">
 <tr>
 <td>
<table cellpadding=5 bgcolor=#F0F8FF ><form action=login.php method=post>
<td><font size ="7" face="DaddysGirl"> 
<tr>
<td><font size = "2" face="Verdana">Username 
<tr>
<td><input type= text name=user style="width:320px; height:35px">
<tr>
<td><font size = "2" face="Verdana">Password
<tr>
<td><input type=password name=pass style="width:320px; height:35px">
<br/>
<input type=submit value=Login name=enter style="width:120px; height:35px; background-color:#82CAFF; color:white">
<input type=submit value="Sign Up" name=regis style="width:120px; height:35px; background-color:red; color:white;">

</table>
</form>


<?php
if (isset($_POST['enter']))
{

include("connection.php");
$a=$_POST['user'];
$b=$_POST['pass'];

$q="select * from secur where Username = '$a' and Password = '$b'";

$res=mysql_query($q);
$b=mysql_num_rows($res);

if($b == 0)
	print"<center>Unknown User.";
else
{
$_SESSION['user']=$_POST['user'];
print"<script language=javascript>
	window.location='module.php';
	</script>";
	}
 
	}
	?>
	
	
<?php
if (isset($_POST['regis']))
{ 
print "<script language=javascript>
		window.location='register.php';
		</script>";
 
	}
	?>
</table>
</body>
</html>
