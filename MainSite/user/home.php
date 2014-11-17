<?php

session_start();

if ( isset($_SESSION['flag']) )
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
    <div style = "float: right">
		<form action = "../../Models/LogOut.php">
			<input	type = "submit" value = "Log Out" />
		</form>
	</div>
	<h2>Home</h2>
	<p> Content </p>
</body>
</html>

<?php
}
else 
	{
		header("Location: ../../Views/LogIn.php");
	}

