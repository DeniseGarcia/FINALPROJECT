<?php
	session_start();

	$user_check=$_SESSION['login_user']; //verifies username ulit para macheck everytime na magbukas sya ng page
	$loggedin_session = $user_check;
	
	if(!isset($loggedin_session))
	{
		header("location:proj_login.php");
	}


?>