<html>
	<head>
		<title>Search</title>
		<link rel="stylesheet" type="text/css" href="proj_style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			form.example input[type=date] {
    			
    			padding: 10px;
    			font-size: 10px;
   				border: 1px solid grey;
    			float: left;
    			width: 80%;
    			background: #f1f1f1;
			}

			form.example button {
			    float: auto;
			    width: 10%;
			    padding: 10px;
			    background: #787878;
			    color: white;
			    font-size: 17px;
			    border: 1px solid grey;
			    border-left: none;
			    cursor: pointer;
			}

			form.example button:hover {
    			background: #000000;
			}

			form.example::after {
			    content: "";
			    clear: both;
			    display: table;
			}

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
						<a href= "proj_search.php" class="w3-button">Search</a>
					</div>
			</div>
		</div>

		<div class="w3-content w3-padding" style="max-width:1564px">

			
			<div class="w3-container w3-padding-32" id="blog">
				<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Search</h3>
			</div>
			
		
			<form method="POST" class="example" action="proj_find.php" style="margin:auto;max-width:900px">
  				<input type="date" placeholder="Search.." name="search">
  				<button type="submit"><i class="fa fa-search"></i></button>
			</form>

        	<br><br>
			<br><br>
			<br><br>
			<br><br>
			<br><br>

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