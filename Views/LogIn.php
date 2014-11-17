<!DOCTYPE html>
<html>
	<head> 
		<title>LogIn</title>
		<meta charset = 'UTF-8' />
		<link rel = "stylesheet" href = '../CSS/main.css' type = "text/css" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	</head>
	<body>
	<?php require("header.php"); ?>		
	<div class = "container">
		<form role="form" action = "../Models/LogScript.php" method = "POST">
			<div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="name" class="form-control"  placeholder="Enter username" name = "username" >
			 </div>
			 <div class="form-group">
			    <label for="exampleInputEmail1">Password</label>
			    <input type="password" class="form-control"  placeholder="Enter password" name = "pass" >
			 </div>
			 <button type="submit" class="btn btn-default">Submit</button>
		</form>
		<br />
		<a href = "ChangePassword.php" target = "_blank" >Forgotten password?</a>
	</div>
	</body>
</html>