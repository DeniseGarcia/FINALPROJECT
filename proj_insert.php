<?php
	include('proj_conn.php');
	include('proj_session.php');


	$date=$_POST['date'];
	$entry=$_POST['entry'];
	

	//inserting data
	$query = ("INSERT INTO blogs VALUES('$date', '$entry')");
	mysqli_query($link, $query);
	if ($query){
		header("location:proj_home1.php#blog");
	} else {
		print "Cannot insert new info <br>";
	}

?>