<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uitm Melaka</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/landing.css" rel="stylesheet" type="text/css">
		<style type="text/css">
		body{margin:0;};
	</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/advent-pro:n1:default.js" type="text/javascript"></script>

</head>

<body>
	<div class="limiter">
		<div class="container b">
			<div class="navbar">
			   <a href="main.html">HOME</a>
			   <a href="about us.html">ABOUT US</a>
				<div class="dropdown">
					<button class="dropbtn">ACADEMICS 
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="diploma.html">Diploma - AC110</a>
					  <a href="degree.html">Degree - AC220</a>
					</div>
			   </div> 
				<a href="event.html">EVENTS</a>
				<div class="dropdown">
					<button class="dropbtn">RESEARCH & PUBLICATIONS
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="ppnb.html">Published Papers and Books</a>
					  <a href="innovation.html">Innovations</a>
					  <a href="medal.html">Achievements</a>
					
					</div>
			   </div> 
				<a href="contact.html">CONTACT US</a>
			</div>
			
				<div class="slideshow-container">

					<div class="mySlides fade">
					  <div class="numbertext">1 / 3</div>
						<?php 
							include "php/include_db.php";
							$type="slideshow1";
							$page="homepage";
							$query = "SELECT * FROM images where type='".$type."' AND page='".$page."' AND id=(SELECT max(id) from images)";
                			$result = mysqli_query($connect, $query);
							while($row = mysqli_fetch_array($result))
							{
								echo '<img src="data:image/jpeg;base64,'.base64_encode($row['file_name'] ).'" height="100%" width="200" class="img-thumnail"/>';
							}
							 
						?>
					  <!--<img  alt="bg1" style="width:100%;">-->
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">2 / 3</div>
					  <img src="image/merdeka.jpg" alt="bg1" style="width:100%;">
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">3 / 3</div>
					  <img src="image/awal.jpg.png" alt="bg2" style="width:100%;height:500px;">
					
					</div>
					<div class="mySlides fade">
					  <div class="numbertext">3 / 3</div>
					  <img src="image/md.png" alt="bg3" style="width:100%;height:500px;">
					 
					</div>

				</div>
				<br>

				<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				</div>
				<div class="border"></div>

				<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("dot");
				  for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";  
				  }
				  slideIndex++;
				  if (slideIndex > slides.length) {slideIndex = 1}    
				  for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";  
				  dots[slideIndex-1].className += " active";
				  setTimeout(showSlides, 2000); // Change image every 2 seconds
				}
				</script>
			
			<div class="intro">
				<div class="wel">
					<img src="image/fkn.png" alt="fkn" style="width:100%;height:250px;">
				</div>
				<div class="wel">
					<div class="header">WELCOME TO FPN UITM MELAKA</div>
					<div class="desc">		
						<?php 
							$page="homepage";
							$type="welcome";
						 	include "php/include_db.php";
							$sql="select text from paragraph where type='".$type."' AND page='".$page."' AND id=(SELECT max(id) from paragraph where type='".$type."' group by type) group by type";
							$result=mysqli_query($connect,$sql);
	

						if(!$result){

								die('could not get data:');
						}
						while($row = mysqli_fetch_assoc($result)){
							echo $row['text'];
						}

					?>
				</div>

				</div>
			</div>
			
			<div class="event">
				<div class="evheader">
					LATEST EVENTS
				</div>
				<div class="post f">
					<img src="image/covid.jpeg" style="width:100%" alt="news">
				</div>
				<div class="post f">
					<img src="image/news.jpg" style="width:100%" alt="news"> 
				</div>
				<div class="post f">
					<img src="image/covid.jpeg" style="width:100%" alt="news">
				</div>
			</div>
			<div class="highlight">
				<div class="evheader">
					HIGHLIGHTS
				</div>
				<div class="post a"><img src="https://picsum.photos/seed/picsum/200/300?blur" style="width:100%;"  alt="highlights"></div>
				<div class="hi-word">
						<?php 
							$page="homepage";
							$type="h1";
						 	include "php/include_db.php";
							$page="homepage";
							$sql="select text from paragraph where type='".$type."' AND page='".$page."' AND id=(SELECT max(id) from paragraph where type='".$type."' group by type) group by type";
							$result=mysqli_query($connect,$sql);
	

						if(!$result){

								die('could not get data:');
						}
						while($row = mysqli_fetch_assoc($result)){
							echo $row['text'];
						}

					?>
				</div>
				<div class="hi-word">
						<?php 
							$page="homepage";
							$type="h2";
						 	include "php/include_db.php";
							$page="homepage";
							$sql="select text from paragraph where type='".$type."' AND page='".$page."' AND id=(SELECT max(id) from paragraph where type='".$type."' group by type) group by type";
							$result=mysqli_query($connect,$sql);
	

						if(!$result){

								die('could not get data:');
						}
						while($row = mysqli_fetch_assoc($result)){
							echo $row['text'];
						}

					?>
				</div>
				<div class="post a"><img src="https://picsum.photos/seed/picsum/200/300?blur" style="width:100%;"  alt="highlights"></div>
				<div class="post a"><img src="https://picsum.photos/seed/picsum/200/300?blur" style="width:100%;"  alt="highlights"></div>
				<div class="hi-word">
						<?php 
							$page="homepage";
							$type="h3";
						 	include "php/include_db.php";
							$page="homepage";
							$sql="select text from paragraph where type='".$type."' AND page='".$page."' AND id=(SELECT max(id) from paragraph where type='".$type."' group by type) group by type";
							$result=mysqli_query($connect,$sql);
	

						if(!$result){

								die('could not get data:');
						}
						while($row = mysqli_fetch_assoc($result)){
							echo $row['text'];
						}

					?>
				</div>
				
			</div>
			<div class="footer">
				<div class="footword">
					<div class="mini-head">MENU</div>
					<div class="direct">
						<a class="style" href="about us.html">About Us</a><br>
					</div>
					<div class="direct1">
						<a class="style" href="event.html">Events</a>
					</div>
					<div class="direct1">
						<a class="style" href="contact.html">Contact Us</a>
					</div>
				</div>
				<div class="footword">
					<div class="mini-head">
						CONTACT US
					</div>
					<div class="direct">
						EMAIL : 
					</div>
					<div class="direct1">
						TEL : 06558 2000 / 2146 / 2144
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
