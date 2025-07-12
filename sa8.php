<!DOCTYPE html>
<html lang="en">
<head>
<title>LetsOS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style8.css"/>
<link rel="icon" type="icon/png" href="LetsOS1.png"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	$servername="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="letsos";	
	
	
	$newpass=$_POST["newpass"];
	
	$conn = mysql_connect($servername,$dbusername,$dbpassword);
	mysql_select_db("letsos",$conn);
	if(empty($newpass))
	{
?>
	<div class="container">
		<div class="center-block" style="width:500px; max-width:100%; color:white;"><h1>password field is required</h1>
			<a href="sa7.html"><button type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-hand-left"></span> back</button></a>
		</div>
	</div>
<?php
	die();
	}
	$sql="UPDATE create SET password='$newpass'";
	if(mysql_query($sql))
	{
?>
<div class="container">
	<div class="center-block" style="width:600px; max-width:100%; margin-top:100px; color:white;"><h1>Your password changed successfully</h1></div>
	
	<div class="center-block" style="width:600px; max-width:100%; margin-top:100px;">
		<a href="as.html"><div class="col-sm-6"><button type="button" class="btn btn-danger btn-block btn-lg">continue <span class="glyphicon glyphicon-hand-right"></span></button></div></a>
	</div>
		
</div>
<?php
	}
	else
	{
?>
	<div class="container">
		<div class="center-block" style="width:500px; max-width:100%; color:white;"><h1>error in changing password</h1>
			<a href="sa7.html"><button type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-hand-left"></span> back</button></a>
		</div>
	</div>
<?php	
	}
?>

</body>
</html>
