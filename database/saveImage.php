<?php 

session_start();

error_reporting(E_ALL);

$mainID = $_SESSION['ID'];

require 'sql_connection.php';

/* get pictures that already in the database */
$sql = "SELECT Pictures FROM pictures WHERE Res_ID = '$mainID';";
$results = mysqli_query($conn, $sql) or die("Failed to execute: ".mysqli_error($conn));
$pictures = mysqli_fetch_assoc($results);

/* get file extension to prevent errors */
$size=sizeof(explode(".", $_FILES['file']['name']));
$extension=explode(".", $_FILES['file']['name'])[$size-1];

$picture_id=trim("../images/".md5(sha1(($mainID.uniqid()))).uniqid().".".$extension);

/* add pictures to database string */ 
$added_pic = '';

/* update the list of images names with the the updated */
if (isset($pictures['Pictures'])){
	$added_pic = $pictures['Pictures'].",".$picture_id;
	$sql ="UPDATE pictures SET Pictures = '$added_pic' WHERE Res_ID = '$mainID'";
	mysqli_query($conn, $sql) or die("Failed to execute: ".mysql_error($conn));
}
else{
	$added_pic = $picture_id;
	$sql = "INSERT INTO pictures(Res_ID, Pictures) VALUES('$mainID', '$added_pic')";
	mysqli_query($conn, $sql) or die("Failed to execute: ".mysql_error($conn));
}




/* Get the actual file */
$current = file_get_contents($_FILES['file']['tmp_name']);

// // Write the contents back to the file in new location
file_put_contents($picture_id, $current);

print($added_pic);

 ?>