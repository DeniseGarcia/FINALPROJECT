<html>
	<head>
		<title>ALL ABOUT SIMOUN</title>
		<link rel="stylesheet" type="text/css" href="proj_style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			table {
    			border-collapse: collapse;
    			width: 100%;
			}

			td {
    			border: 1px solid #ddd;
    			padding: 8px;
			}

			tr:nth-child(even) {
				background-color: #f2f2f2;
			}

			tr:hover {
				background-color: #ddd;
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
				<div class="w3-right w3-hide-small">
					<a href= "index.php#blog" class="w3-button">Blog</a>
					<a href= "proj_search.php" class="w3-button">Search</a>
				</div>
			</div>
		</div>

		
		<div class="w3-content w3-padding" style="max-width:1564px">

			<div class="w3-container w3-padding-32" id="blog">
				<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Blog</h3>
			</div>

			<div class="w3-row-padding">
				<?php
					

					$search = $_POST['search'];
					$query=("SELECT * FROM blogs WHERE date = \"$search\"");
					$result = mysqli_query($link, $query);
					$num_rows = mysqli_num_rows($result);
						print "<p><table>\n";
							while ($a_row = mysqli_fetch_row($result)){
								print "<tr>\n";
		
								foreach ($a_row as $field) {
									print "\t<td>".$field."</td>\n";
								}
			
								print "</tr>\n"; 
							}
							print "</table></p>\n";
				

				?>
			</div>

			

			<div class="w3-container w3-padding-32" id="contact">
				<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
				<p>
					<div class="w3-col m8 w3-panel">
						<div class="w3-large w3-margin-bottom">
        					<i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Quezon City, Philippines<br>
        					<i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right "></i> Phone: +63 9012345678<br>
       						<i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: 123mail@mail.com<br>
    					</div>
    				</div>
    			</p>
    		</div>

    	</div>

    	

    	<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    		<div class="w3-xlarge w3-section">
    			<a href="https://www.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    			<a href="https://www.instagram.com/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    			<a href="https://www.snapchat.com/"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    			<a href="https://www.twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    		</div>
    	</footer>

    	

	</body>


</html>