<!DOCTYPE html>
<html>
	<head>
		<title>MyForm</title>
		<meta charset = "UTF-8" />
		<link rel = "stylesheet" href = "../CSS/main.css" type = "text/css" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	</head>
	<body>	
	<div class = "container">
	<form role="form"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST" >
		<div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name = "email" >
		 </div>
		 <div class="form-group">
		    <label for="exampleInputPassword1">New Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "pass">
		 </div>
		 <div class="form-group">
		    <label for="exampleInputPassword1">Repeat Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "pass1" >
		 </div>
		 <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>
	<?php include '../Models/UpdatePassword.php';	?>
	</body>
</html>
	 