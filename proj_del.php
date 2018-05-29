<?php
	include('proj_conn.php');
	include('proj_session.php');


	$date=$_POST['date'];
	
	

	//inserting data
	$delete = ("DELETE FROM blogs WHERE date='$date'");
	mysqli_query($link, $delete);

	if ($delete){
		header("location:proj_home1.php#blog");
	} 
	else {
		header("location:proj_delete.php");
	}


?>