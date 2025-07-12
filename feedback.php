<!DOCTYPE html>
<html lang="en">
<head>
<title>LetsOS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style5.css"/>
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
	
	$comment=$_POST["comment"];
	$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
	mysqli_select_db($conn,"");
	if(empty($comment))
	{
?>
	<div class="continer">
		<div class="center-block" style="width:500px; max-width:100%; margin-top:250px; color:white;"><h2>feedback section cannot be left blank</h2>
			<a href="sa5.html"><button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-hand-left"></span> back</button></a>
		</div>
	</div>
<?php
	die();
	}
	$sql="INSERT INTO feedback VALUES('$comment')";
	
	if(mysqli_query($conn,$sql))
	{
?>
	<div class="container">
		<div class="center-block" style="width:500px; max-width:100%; margin-top:250px; color:white;"><h1>your feedback stored successfully</h1>
			<div class="center-block" style="width:500px; max-width:100%; margin-top:70px; color:#f2f2f2;"><h3>thanks for giving us feedback</h3>
				<a href="sa11.html"><button type="button" class="btn btn-primary btn-lg">continue <span class="glyphicon glyphicon-hand-right"></span></button></a>
			</div>
		</div>
	</div>
<?php
	}
	else
	{
?>
	<div class="container">
		<div class="center-block" style="width:500px; max-width:100%; margin-top:250px; color:white;"><h2>error in storing feedback</h2>
			<a href="sa5.html"><button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-hand-left"></span> back</button></a>
		</div>
	</div>
<?php
	}
	mysqli_close($conn);
?>
