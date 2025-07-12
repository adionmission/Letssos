<!DOCTYPE html>
<html lang="en">
<head>
<title>LetsOS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="icon" type="icon/png" href="LetsOS1.png"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php	
	
	$servername="";
	$dbusername="";
	$dbpassword="";
	$dbname="";	
	
	$fullname=$_POST["fullname"];
	$text=$_POST["text"];
	$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
	mysqli_select_db($conn,"u531643967_feedb");
	
	if(!preg_match("/^[a-zA-Z ]*$/",$user))
	{
?>
	<div class="container">
		<div class="center-block" style="width:500px; max-width:100%; margin-top:250px; color:white;"><h2>only letters and white spaces are allowed</h2>
			<a href="as.html"><button type="button" class="btn btn-danger btn-lg" style="margin-top:50px;"><span class="glyphicon glyphicon-hand-left"></span> back</button></a>
		</div>
	</div>
<?php
	die();
	}
	
	if(empty($fullname))
	{
?>
	<div class="continer">
		<div class="center-block" style="width:500px; max-width:100%; margin-top:250px; color:white;"><h2>request section cannot be left blank</h2>
			<a href="as.html"><button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-hand-left"></span> back</button></a>
		</div>
	</div>	
	
<?php
	die();
	}
	
	if(empty($text))
	{
?>
	<div class="continer">
		<div class="center-block" style="width:500px; max-width:100%; margin-top:250px; color:white;"><h2>request section cannot be left blank</h2>
			<a href="as.html"><button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-hand-left"></span> back</button></a>
		</div>
	</div>
<?php
	die();
	}
	$sql="INSERT INTO specially VALUES('$fullname','$text')";
	
	if(mysqli_query($conn,$sql))
	{
?>
	<div class="container">
		<div class="center-block" style="width:500px; max-width:100%; margin-top:250px; color:white;"><h1>your request stored successfully</h1>
			<a href="as.html"><button type="button" class="btn btn-primary btn-lg">continue <span class="glyphicon glyphicon-hand-right"></span></button></a>
		</div>
	</div>
<?php
	}
	else
	{
?>
	<div class="container">
		<div class="center-block" style="width:500px; max-width:100%; margin-top:250px; color:white;"><h2>error in storing request</h2>
			<a href="as.html"><button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-hand-left"></span> back</button></a>
		</div>
	</div>
<?php
	}
	mysqli_close($conn);
?>
