<?php
include 'RegInfo.php';
$conn = new mysqli($host,$username,$password,$db_name);

if ($conn->connect_error)
	{
		die("OOoops !!! There was problem extracting your data. Database connection failed!");
	}
$result = $conn->query("SELECT * FROM users;");

if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		if ($row['username'] == $_POST['username'] && $row['pass'] == $_POST['pass'])
		{
			session_start();
			$_SESSION['flag'] = 1;
			header("Location: ../MainSite/user/home.php");
			exit();	
		}
	}
}
header("Location: ../Views/LogIn.php");