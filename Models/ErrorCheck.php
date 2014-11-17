<?php

$username = $password = $repassword = $email= "";

$errn = $errp = $erre = $errpa = $errmatch = "";

$errVal_name = $errVal_email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (empty($_POST['username']))
	{
		$errn = "Username is required!";
	}
	else
	{ 
		$username = MyStrip($_POST["username"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$username)) 
			{
				$errVal_name = "Only letters and white space allowed"; 
			}	
	}
	if (empty($_POST['pass']))
	{
		$errp = "Password is required!";
	}
	else
	{ 
		$password = MyStrip($_POST["pass"]);
	}
	if ( empty($_POST['pass1']) )
	{
		$errpa = "Re-enter password please!";
	}
	else
	{ 
		$repassword = MyStrip($_POST["pass1"]);
		if ($password != $repassword)
		{
			$errmatch = "Passwords Don't match.";
		}
	}
	if ( empty($_POST['email']) )
	{
		$erre = "Email is required!";
	}
	else
	{ 
		$email = MyStrip($_POST["email"]);
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
			{
				$errVal_email = "Invalid email format"; 
			}
	}
}
function MyStrip($string)
	{
		$text = trim($string);
		$text = stripslashes($string);
		$text = htmlspecialchars($string);
		return $text;
	}
