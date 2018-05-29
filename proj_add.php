<html>
	<head>
		<title>Add Entry</title>
		<link rel="stylesheet" type="text/css" href="proj_style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

	<body>
		<?php
			include("proj_conn.php");
			include("proj_session.php");
		?>

		<div class="w3-top">
			<div class="w3-bar w3-white w3-wide w3-padding w3-card">
				<a href="proj_home1.php" class="w3-bar-item w3-button"><b>ALL ABOUT SIMOUN</b> the best dog ever</a>
					<div class="w3-right">
						<a href= "proj_add.php" class="w3-button">Add Entry</a>
						<a href= "proj_update.php" class="w3-button">Edit Entry</a>
						<a href="proj_delete.php" class="w3-button">Delete Entry</a>
						<a href= "proj_logout.php" class="w3-button">Log Out</a>
					</div>
			</div>
		</div>

		<div class="w3-content w3-padding" style="max-width:1564px">

			
			<div class="w3-container w3-padding-32" id="blog">
				<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Add Entry</h3>
			</div>
			
		

        	<form method="POST" action="proj_insert.php">
				<p><label>Date Posted : </label>
				<input type="date" name="date">
				</p>
				<p><label>Entry :&nbsp;&nbsp;&nbsp;</label>
					<p>
					<textarea name="entry" rows="10" cols="30">What happened today?</textarea>
					</p>
				</p>
				<input id="register" type="submit" name="submit" value="Submit">

			</form>

			<br>
			<br>
			<br>

			<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    			<a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  				<div class="w3-xlarge w3-section">
    				<a href="https://www.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    				<a href="https://www.instagram.com/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    				<a href="https://www.snapchat.com/"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    				<a href="https://www.twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    			</div>
    		</footer>

    	</div>

	</body>

</html>