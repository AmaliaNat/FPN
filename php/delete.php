<?php

include "include_db.php";

	if(isset($_POST["submitwelcome"])){
		$type="welcome";
		$page="homepage";
		
		$text=$_POST['text'];
		
		if($text!=""){
			
			$sql="insert into paragraph(text,type,page) values('$text','$type','$page')" ;
			$result=mysqli_query($connect,$sql);
			print '<script>alert("Data has been added");window.location.href = "http://localhost/fpn/admin/adminhome.php#welcome";</script>';
		}
		else{
			echo "something went wrong";
		}
	}
	else{
		echo "something went wrong";
	}

?>