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
			include("proj_session.php");
		?>

				<div class="w3-top">
					<div class="w3-bar w3-white w3-wide w3-padding w3-card">
					<a href="proj_home1.php" class="w3-bar-item w3-button"><b>ALL ABOUT SIMOUN</b> the best dog ever</a>
					<div class="w3-right">
						<a href= "#blog" class="w3-button">Blog</a>
						<a href= "proj_add.php" class="w3-button">Add Entry</a>
						<a href= "proj_update.php" class="w3-button">Edit Entry</a>
						<a href="proj_delete.php" class="w3-button">Delete Entry</a>
						<a href= "proj_logout.php" class="w3-button">Log Out</a>
						<a href= "proj_search1.php" class="w3-button">Search</a>
					</div>
					</div>
				</div>

		<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
			<img class="w3-image" src="007.jpg" width="1500" height="801">
			

			<div class="w3-display-middle w3-margin-top w3-center">
				<h1 class="w3-xxlarge w3-text-white"><span class="w3-text-light-grey">all about simoun</span></h1>
			</div>
		</header>


		<div class="w3-content w3-padding" style="max-width:1564px">

			<div class="w3-container w3-padding-32" id="blog">
				<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Blog</h3>
			</div>

			<div class="w3-row-padding">
				<?php
					// include("proj_conn.php");

					$query = ("SELECT * FROM blogs ORDER BY date");
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

			<div class="w3-container w3-padding-32" id="about">
				<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>

				<div class="w3-row">
    				<div class="w3-col m6 w3-center w3-padding-large">
      					<img src="009.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off">
    				</div>

    				<div class="w3-col m6 w3-hide-small w3-padding-large">
      					<p>My ancestors originated on the island of Newfoundland,now part of the province of Newfoundland and Labrador, Canada. The founding breed of the Labrador was the St. John's water dog, a breed that emerged through ad-hoc breedings by early settlers of the island in the 16th century.</p>
      					<p>I am also a type of retriever-gun dog. My breed is one of the most popular breeds of dog in Canada, the United Kingdom and the United States. Some of my family are known as disability assistance dogs in many countries, we are frequently trained to aid the blind, those who have autism, to act as a therapy dog, or to perform screening and detection work for law enforcement and other official agencies.</p>
      					<p>On my free time, I like chewing on shoes, socks, and the sofa. Some of my hobbies I write here. So enjoy reading on my blog :)</p>
    				</div>
  				</div>

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

    	<div id="googleMap" class="grayscale" style="width:100%;height:450px;"></div>

    	<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    		<a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  			<div class="w3-xlarge w3-section">
    			<a href="https://www.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    			<a href="https://www.instagram.com/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    			<a href="https://www.snapchat.com/"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    			<a href="https://www.twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    		</div>
    	</footer>

    	<script>
			function myMap()
			{
  			myCenter=new google.maps.LatLng(14.6552, 121.0651);
  			var mapOptions= {
    		center:myCenter,
    		zoom:12, scrollwheel: false, draggable: false,
   			mapTypeId:google.maps.MapTypeId.ROADMAP
  			};
  			var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  			var marker = new google.maps.Marker({
    		position: myCenter,
  			});
  			marker.setMap(map);
			}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

	</body>


</html>