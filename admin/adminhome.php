<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="../css/adminmain.css" rel="stylesheet" type="text/css">
<link href="../css/homepage.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/arimo:n4:default;open-sans:n3:default.js" type="text/javascript"></script>

</head>

<body>
	<!--side navbar-------------------------------------------------------------------->
	<div class="sidenav">
	   <div class="side-top">ADMIN</div>
	  <a href="../adminmain.html" style="margin-top: 20px;">Dashboard</a>
	  <button class="dropdown-btn">Pages
		<i class="fa fa-caret-down"></i>
	  </button>
	  <div class="dropdown-container">
		<a href="../adminhome.html">Home</a>
		<a href="../adminau.html">About Us</a>
		<a href="../adminacademic.html">Academics</a>
		<a href="../adminevents.html">Events</a>
		<a href="../adminrnp.html">Research & Publications</a>
		<a href="../admincontact.html">Contact Us</a>
	  </div>
	  <a href="#contact">Log Out</a>
	</div>
  <script>

	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
	  this.classList.toggle("active");
	  var dropdownContent = this.nextElementSibling;
	  if (dropdownContent.style.display === "block") {
	  dropdownContent.style.display = "none";
	  } else {
	  dropdownContent.style.display = "block";
	  }
	  });
	}
	</script>
	<!--side navbar-------------------------------------------------------------------->
	
	<div class="main">
		<div class="box">
			<div class="box-inside">
				<table>
					<th><div class="color-square"></div></th>
					<th><a class="header">Homepage</a></th>
				</table>
			</div>
		</div>
		<div class="box a">
			<div class="header">What would you like to do?</div>
			<div class="wrap">
				<div class="img"><img src="../image/slidehow.jpg" style="width:100%;" alt="slideshow"><br></div>
				<a href="#" style="text-decoration: none;"><div class="l">Edit this slideshow</div></a>
			</div>
			<div class="wrap" >
				<a name="welcome"></a>
				<div class="img"><img src="../image/welcome.jpg" style="width:100%;" alt="slideshow"><br></div>
				<!--<a href="#" style="text-decoration: none;" onClick="display()"><div class="l">Edit words</div></a>-->
				<div class="l">
					<button class="btn" onClick="display()">Edit Words</button>
				</div>
				<form method="post" action="../php/edittext.php">
					<div class="welcome" id="text" style="display:none">
						<textarea class="t-box"  name="text" placeholder="Enter text here..."></textarea>
						<button type="submit" name="submitwelcome">Submit</button>
					</div>
				</form>
			</div>
			<div class="wrap">
				<div class="img"><img src="../image/event.jpg" style="width:100%;" alt="slideshow"><br></div>
				<a href="#" style="text-decoration: none;"><div class="l">Add/Remove Pictures</div></a>
			</div>
			
			<div class="wrap">
				<div class="highlight">
				<div class="evheader">
					HIGHLIGHTS
				</div>
				<div class="post a"><img src="https://picsum.photos/seed/picsum/200/300?blur" style="width:100%;"  alt="highlights"></div>
				<div class="hi-word" onMouseOver="showButton()" onMouseOut="hideButton()" id="h1">
					<div class="h-w" id="word">
					
						<?php 
							$page="homepage";
							$type="h1";
						 	include "include_db.php";
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
					<div class="btn-hov">
						<button class="h-btn" id="h1button" style="display:none"  onClick="showTB()">EDIT WORD</button>
					</div>
					
					<!--INPUT TEXT-->
					<form id="tb" style="display:none" method="POST" action="../php/edittext.php">
						<textarea class="t-box" placeholder="test" maxlength="450" name="text" id="text"></textarea>
						<button type="submit" name="submith1">Submit</button>
					</form>
					<!--INPUT TEXT-->

				</div>
				<div class="hi-word" onMouseOver="showButton()" onMouseOut="hideButton()" id="h2">
						<?php 
							$page="homepage";
							$type="h2";
						 	include "include_db.php";
							$page="homepage";
							$sql="select text from paragraph where page='".$page."' AND type='".$type."' AND id=(SELECT max(id) from paragraph)";
							$result=mysqli_query($connect,$sql);
	

						if(!$result){

								die('could not get data:');
						}
						while($row = mysqli_fetch_assoc($result)){
							echo $row['text'];
						}

					?>
					<div class="h2button">
						<button type="button">Edit</button>
					</div>
				</div>
				<div class="post a"><img src="https://picsum.photos/seed/picsum/200/300?blur" style="width:100%;"  alt="highlights"></div>
				<div class="post a"><img src="https://picsum.photos/seed/picsum/200/300?blur" style="width:100%;"  alt="highlights"></div>
				<div class="hi-word">
						<?php 
							$page="homepage";
							$type="h3";
						 	include "include_db.php";
							$page="homepage";
							$sql="select text from paragraph where page='".$page."' AND type='".$type."' AND id=(SELECT max(id) from paragraph)";
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

			
		</div>
		<script>
			function display(){
				  var x = document.getElementById("text");
				  if (x.style.display === "none") {
					x.style.display = "block";
				  } else {
					x.style.display = "none";
				  }
			}
			
			var x= document.getElementById("h1button");
			var y= document.getElementById("h1");
			var y2=document.getElementById("h2");
			var z= document.getElementById("tb");
			var w= document.getElementById("word");
						
			function showButton(){
			x.style.display="block";	
			y.style.backgroundColor="#FF8400";
			y.style.color="grey";
							
				if(z.style.display=="block"){
					x.style.display="none";
				}
			}
			function hideButton(){
				x.style.display="none";
				y.style.backgroundColor="white";
			}
						
			function showTB(){
				w.style.display="none";
				z.style.zIndex="1000";
				z.style.display="block";
				x.style.display="none";
			}
		</script>
				
	</div>
</body>
</html>
