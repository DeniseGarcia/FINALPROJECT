<?php
	include('proj_conn.php');
	include('proj_session.php');


	$date=$_POST['date'];
	$entry=$_POST['entry'];
	

	//inserting data
	$update = ("UPDATE blogs SET entry='$entry' WHERE date='$date'");
	mysqli_query($link, $update);
	if ($update){
		header("location:proj_home1.php#blog");
	} else {
		header("location:proj_update.php");
	}





?>