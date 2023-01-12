<?php 

include "include_db.php";

 if(isset($_POST["insert"]))
 {
	  $type="slideshow";
	  $page="homepage";
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $query = "INSERT INTO images(file_name,type,page) VALUES ('$file','$type','$page')";
      if(mysqli_query($connect, $query))
      {
           print '<script>alert("Data has been added");window.location.href = "http://localhost/fpn/php/image.php";</script>';
      }
	  else 
	  { die("Something went wrong" . mysqli_connect_error());}
 }




	$id=$_GET['id'];
	$sql = "DELETE FROM images WHERE id = $id"; 
	if (mysqli_query($connect, $sql)) {
    	mysqli_close($connect);
		header('Location: image.php'); //If book.php is your main page where you list your all records
    	exit;
	} 
	else {
    	echo "Error deleting record";
	}



?>


