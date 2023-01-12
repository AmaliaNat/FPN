<?php 

include "include_db.php";

$row = mysqli_num_rows($result);
$type="welcome";
$page="homepage";
$sql="SELECT LAST_INSERT_ID();";
$result=mysqli_query($connect,$x);
$row = mysqli_fetch_assoc($result);
?>