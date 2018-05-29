<html>
	<head>
		<title>Log In</title>
		<link rel="stylesheet" type="text/css" href="proj_style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		</style>
	</head>


	<body>
		<?php
			include("proj_conn.php");
		?>

		<div class="w3-top">
			<div class="w3-bar w3-white w3-wide w3-padding w3-card">
				<a href="index.php" class="w3-bar-item w3-button"><b>ALL ABOUT SIMOUN</b> the best dog ever</a>
				<div class="w3-right">
					
					<a href= "proj_login.php" class="w3-button">Log In</a>
					
					
				</div>
			</div>
		</div>

        
    
        <div class="w3-content w3-padding" style="max-width:1564px">

			
			<div class="w3-container w3-padding-32" id="blog">
				<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Log In</h3>
			</div>
			
		

        	<form method="POST" action="proj_logincheck.php">
			<p><label>Username : </label>
			<input id="username" type="text" name="user" placeholder="username">
			</p>
			<p><label>Password :&nbsp;</label>
			<input id="password" type="password" name="pass" placeholder="password">
			</p>
			<input id="register" type="submit" name="submit" value="Login">

			</form>

			<br>
			<br>
			<br>

			<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    		
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
