<?php 

error_reporting(E_ALL & ~E_WARNING);


$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$telephone = $_POST['tel'];
$price = $_POST['price'];
$campus = $_POST['campus'];
$description = $_POST['description'];


require 'sql_connection.php';

if (!empty($full_name)){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Res_Name = '$full_name' WHERE Res_ID = '$mainID'");
}

if (!empty($email)){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Email = '$email' WHERE Res_ID = '$mainID'");
}

if (!empty($password)){
	$sql = mysqli_query($conn, "UPDATE users SET  User_Password = '$password' WHERE Res_ID = '$mainID'");
}

if (!empty($telephone)){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Telephone = '$telephone' WHERE Res_ID = '$mainID'");
}

if (!empty($price)){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Price_Acrreditation = '$price' WHERE Res_ID = '$mainID'");
}

if (!empty($campus) and $campus != 'Select campus'){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Campus = '$campus' WHERE Res_ID = '$mainID'");
}

if (!empty($description)){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Description = '$description' WHERE Res_ID = '$mainID'");
}


$sql = mysqli_query($conn, "SELECT Res_Name, Address, Campus, Price_Accreditation, Sharing, Email, Telephone, Description, picture_id FROM accomodation WHERE Res_ID = '$mainID'") or die("Not running".mysqli_error($conn));

$results = mysqli_fetch_assoc($sql);

$profile_pic = '';
if (empty($results['picture_id'])){
	$profile_pic = "..\pictures\profile_dummy.png";
}
else{
	$profile_pic = $results['picture_id'];
}


/* get pictures that already in the database */
$sql = "SELECT Pictures FROM pictures WHERE Res_ID = '$mainID';";
$outcome = mysqli_query($conn, $sql) or die("Failed to execute: ".mysql_error($conn));
$pictures = mysqli_fetch_assoc($outcome);

/*convert assoc to array*/
$pictures = (!empty($pictures["Pictures"]))? explode(',', $pictures["Pictures"]):$pictures=[];

$del = $_POST["delete"];
if (!empty($_POST["delete"])){


	$sql = "DELETE FROM `accomodation` WHERE Res_ID = '$del';";
	$delete = mysqli_query($conn,$sql) or die("Failed to execute: ".mysqli_error($conn));
}







/*print_r($results);*/







 ?>