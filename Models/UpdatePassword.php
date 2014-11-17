<?php
include ("RegInfo.php");
if (isset($_POST['pass']) && isset($_POST['pass1']) && isset($_POST['email']))
{


			if ( $_POST['pass'] != null && $_POST['email']!= null )
			{
				if ($_POST['pass'] == $_POST['pass1'])
				{
					$conn = new mysqli($host,$username,$password,$db_name);
					
					if ($conn->connect_error)
						{
							die("OOoops !!! There was problem extracting your data. Database connection failed!");
						}
						$statement = $conn->prepare("UPDATE users SET pass = ? WHERE email = ?;");
						$statement->bind_param("ss",$_POST['pass'],$_POST['email']);

					if ( $statement->execute() )
						{
							$conn->close();
							$statement->close();
							header("Location: ../Views/SuccessfulChange.php");
							exit();
						}
					else 
						{
							echo "Error! Query was not executed. Such email doesn't exist";
						}
					$conn->close();
					$statement->close();
				}
				else
				{
					echo "Passwords don't match!";
				}
			}
}