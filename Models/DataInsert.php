<?php
include ("RegInfo.php");

	if ($GLOBALS['errn'] == "" && $GLOBALS['errp'] == "" 
		&& $GLOBALS['errpa'] == "" && $GLOBALS['erre'] == ""
		&& $GLOBALS['errVal_name'] == "" && $GLOBALS['errVal_email'] == ""
		&& $GLOBALS['errmatch'] == "" && $GLOBALS['username']!= "" 
		&& $GLOBALS['password'] != "" && $GLOBALS['repassword'] != "" && $GLOBALS['email'] != "")
		{
			$conn = new mysqli($host,$username,$password,$db_name);
			
			if ($conn->connect_error)
				{
					die("OOoops !!! There was problem extracting your data. Database connection failed!");
				}
			$statement = $conn->prepare("INSERT INTO users (username,pass,email) VALUES (?,?,?);");
			$statement->bind_param("sss",$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['email']);
			if ($statement->execute())
			{
				session_start();
				$_SESSION['flag'] = 1;
				$conn->close();
				$statement->close();
				header('Location: ../MainSite/user/home.php');
				exit();
			}
		}
	else
		{
			echo "<br />";
			echo "<div class = 'container' >";
			echo $GLOBALS['errn'].'<br>';
			echo $GLOBALS['errp'].'<br>';
			echo $GLOBALS['errpa'].'<br>';
			echo $GLOBALS['erre'].'<br>';
			echo $GLOBALS['errVal_name'].'<br>';
			echo $GLOBALS['errVal_email'].'<br>';
			echo $GLOBALS['errmatch'].'<br>';
			echo "</div>";
		}
