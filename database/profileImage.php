<?php 
require 'sql_connection.php';
session_start();


$mainID=$_SESSION["ID"];



$sql = "SELECT * FROM accomodation WHERE Res_ID='$mainID'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    	 $image_id= trim($row["picture_id"]);
    	 if(strlen($image_id)>0)unlink($image_id);
  }
} 

$size=sizeof(explode(".", $_FILES['file']['name']));
$extension=explode(".", $_FILES['file']['name'])[$size-1];

$picture_id=trim("../images/".md5(sha1(($mainID.uniqid()))).uniqid().".".$extension);

$sql ="UPDATE accomodation SET picture_id = '$picture_id' WHERE Res_ID = $mainID";
mysqli_query($conn, $sql);

$current = file_get_contents($_FILES['file']['tmp_name']);

// // Write the contents back to the file
file_put_contents($picture_id, $current);


print($picture_id);

 ?>