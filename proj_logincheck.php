<?php

include("proj_conn.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$user=mysqli_real_escape_string($link,$_POST['user']);
	$pass=mysqli_real_escape_string($link,$_POST['pass']);

	$selectsql = "SELECT id FROM member WHERE username= '$user' AND password= '$pass'";
	$logresult = mysqli_query($link,$selectsql);
	$count = mysqli_num_rows($logresult);

	if($count==1)
	{
		$_SESSION['login_user']=$user;
		header("location:proj_home1.php");
	}
	else
	{
		//$msg="Your username or password is incorrect";
		//$_SESSION['denise']=$msg;
		header ("location:proj_login.php");
		
	}
}

?>