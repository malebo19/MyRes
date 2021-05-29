<?php


error_reporting(0);

#Get values of the filters
#initialising filters
$campus = $_POST['campus'];
$min_price = $_POST['minPrice'];
$max_price = $_POST['maxPrice'];
$rooms = $_POST['rooms'];
$ratings = $_POST['ratings'];
$res = $_POST['resName'];
$nsfas = $_POST['nsfas'];


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

if (!empty($res)) {
  $sql = returnArray($sql);

  $sql = mysqli_query($conn, "SELECT Res_ID, Res_Name FROM accomodation WHERE Res_ID in $sql and Res_Name like '%$res%'");

}

else{
  if (isset($campus)) {
  $sql = returnArray($sql);

  $sql = mysqli_query($conn, "SELECT Res_ID, Res_Name FROM accomodation WHERE Res_ID in $sql and Campus = '$campus'");

}

 if (!empty($nsfas)) {
  $sql = returnArray($sql);

  $sql = mysqli_query($conn, "SELECT Res_ID, Res_Name FROM accomodation WHERE Res_ID in $sql and Price_Accreditation = '3500'");

}

if ($min_price > 0) {
  $sql = returnArray($sql);
  
  $sql = mysqli_query($conn,"SELECT Res_ID FROM accomodation WHERE Res_ID in $sql and Price_Accreditation >= '$min_price'"); 

}

if ($max_price > 0) {
  $sql = returnArray($sql);

  $sql = mysqli_query($conn,"SELECT Res_ID FROM accomodation WHERE Res_ID in $sql and Price_Accreditation <= '$max_price'");

}

if (isset($rooms)) {
  $sql = returnArray($sql);

  $sql = mysqli_query($conn,"SELECT Res_ID FROM accomodation WHERE Res_ID in $sql and Sharing = '$rooms'");

}

if (isset($ratings)) {
  $sql = returnArray($sql);

  $sql = mysqli_query($conn,"SELECT Res_ID FROM accomodation WHERE Res_ID in $sql and avgrate >= '$ratings'");

}
}
$sql = returnArray($sql);

$sql = mysqli_query($conn,"SELECT Res_ID FROM accomodation WHERE Res_ID in $sql and verified >= 'Y'");




#Covert sql result object into an array
function sqlToArray($sqlResult){
  $arr = [];
  while ($line = mysqli_fetch_array($sqlResult)) {
    $arr [] = $line[0];
  }
  return $arr;
}

$sql = returnArray($sql);

#Get accomodation information and convert to array for readability
$results = mysqli_query($conn, "SELECT Res_ID FROM accomodation WHERE Res_ID in $sql");
$results = sqlToArray($results);


$nameDisplay = mysqli_query($conn, "SELECT Res_Name FROM accomodation WHERE Res_ID in $sql");
$nameDisplay = sqlToArray($nameDisplay);

#$pictures = $conn.mysqli_query($conn, "SELECT Pictures FROM accomodation WHERE Res_ID in $sql");
#$pictures = sqlToArray($picture);

$roomsDisplay = mysqli_query($conn, "SELECT Sharing FROM accomodation WHERE Res_ID in $sql");
$roomsDisplay = sqlToArray($roomsDisplay);

$campusDisplay = mysqli_query($conn, "SELECT Campus FROM accomodation WHERE Res_ID in $sql");
$campusDisplay = sqlToArray($campusDisplay);

$priceDisplay = mysqli_query($conn, "SELECT Price_Accreditation FROM accomodation WHERE Res_ID in $sql");
$priceDisplay = sqlToArray($priceDisplay);

$pictureDisplay = mysqli_query($conn, "SELECT picture_id FROM accomodation WHERE Res_ID in $sql");
$pictureDisplay = sqlToArray($pictureDisplay);



/* find all veri*/


$jquery_data[] = array($results, $nameDisplay, $roomsDisplay, $campusDisplay, $priceDisplay, $pictureDisplay);

echo json_encode($jquery_data);


?>