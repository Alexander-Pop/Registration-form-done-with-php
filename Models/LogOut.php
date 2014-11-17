<?php
session_start();
session_destroy();
header("Location: ../Views/LogIn.php");
exit();

