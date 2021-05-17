<?php 
error_reporting(E_ALL & ~E_WARNING);
/* Get values of the filters*/
/* initialising filters*/
$campus = $_POST['campus'];
echo $campus;
$min_price = $_POST['minPrice'];
echo $min_price;
$max_price = $_POST['maxPrice'];
echo $max_price;
$rooms = $_POST['rooms'];
echo $rooms;
$ratings = $_POST['ratings'];
echo $ratings;

#import sql database

#initialise the sql query to all the ids in the accomodation
#each time the code runs the ids will be decreased by the set filters
require 'sql_connection.php';
$sql = mysqli_query($conn, "SELECT Res_ID FROM accomodation");


function returnArray($sql){
	$rows = "(";

	while ($row = mysqli_fetch_assoc($sql)){
		$rows .= $row['Res_ID'].",";
	}

	$rows .= "0)";
	
	return $rows;
}


if (isset($campus)) {
	$sql = returnArray($sql);
	echo $sql;

	$sql = mysqli_query($conn, "SELECT Res_ID, Res_Name FROM accomodation WHERE Res_ID in $sql and Campus = '$campus'");

}

if (isset($min_price)) {
	$sql = returnArray($sql);
	echo $sql;
	$sql = mysqli_query($conn,"SELECT Res_ID FROM accomodation WHERE Res_ID in $sql and Price_Accreditation >= '$min_price'");

	
	echo $min_price;

}

if (isset($max_price)) {
	$sql = returnArray($sql);
	echo $sql;

	$sql = mysqli_query($conn,"SELECT Res_ID FROM accomodation WHERE Res_ID in $sql and Price_Accreditation <= '$max_price'");

}

if (isset($rooms)) {
	echo "string";
	$sql = returnArray($sql);
	echo $sql;

	$sql = mysqli_query($conn,"SELECT Res_ID FROM accomodation WHERE Res_ID in $sql and Sharing = '$rooms'");

}

if (isset($ratings)) {
	$sql = returnArray($sql);
	echo $sql;

	$sql = mysqli_query($conn,"SELECT Res_ID FROM accomodation WHERE Res_ID in ($sql)");

}

$sql = returnArray($sql);

/*Covert sql result object into an array*/
function sqlToArray($sqlResult){
	$arr = [];
	while ($line = mysqli_fetch_array($sqlResult)) {
		$arr [] = $line[0];
	}
	return $arr;
}


/*Get accomodation information and convert to array for readability*/
$results = mysqli_query($conn, "SELECT Res_ID FROM accomodation WHERE Res_ID in $sql");
$results = sqlToArray($results);

$resNameDisplay = mysqli_query($conn, "SELECT Res_Name FROM accomodation WHERE Res_ID in $sql");
$resNameDisplay = sqlToArray($resNameDisplay);

//$pictures = $conn.mysqli_query($conn, "SELECT Pictures FROM accomodation WHERE Res_ID in $sql");
//$pictures = sqlToArray($picture);

$roomsDisplay = mysqli_query($conn, "SELECT Sharing FROM accomodation WHERE Res_ID in $sql");
$roomsDisplay = sqlToArray($roomsDisplay);

$campusDisplay = mysqli_query($conn, "SELECT Campus FROM accomodation WHERE Res_ID in $sql");
$campusDisplay = sqlToArray($campusDisplay);

$priceDisplay = mysqli_query($conn, "SELECT Price_Accreditation FROM accomodation WHERE Res_ID in $sql");
$priceDisplay = sqlToArray($priceDisplay);

/* Hard coded data for testing homePage profiles*/
$photos = array('pictures\RichmondChill.jpeg', 'pictures\RichmondEnter.jpeg', 'pictures\RichmondOutside.jpeg', 'pictures\RichmondRooms.jpg', 'pictures\RichmondStudy.jpeg');

/*Sample for testing resPage gallery */
$pictures = array('..\pictures\RichmondChill.jpeg', '..\pictures\RichmondEnter.jpeg', '..\pictures\RichmondOutside.jpeg', '..\pictures\RichmondRooms.jpg', '..\pictures\RichmondStudy.jpeg');





 ?>