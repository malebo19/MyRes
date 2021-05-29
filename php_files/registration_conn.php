<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Connection page</title>
    <link rel = "stylesheet" href = "../css_files/confirmation.css">
</head>
<body>

    <!-- Connection page html & css-->

    <!--Blurred background image-->
    <div id="Blurredimg"><img src="..\pictures\login_image.jpg" style="width: 100%; height: 100%;"></div>
    <!--Green Border box-->
    <div id="Divborder">

        <!--displayed insormation form forms-->
        
        
        <hr class ="whiteline">
        <a href="../index.php" id="return_home">Return Home</a>
       
        
       
    </div>
    
</body>
</html>

<?php
session_start();
//Captured information form forms
$Res_Name = $_SESSION['Res_Name'];
$Address = $_SESSION['Address'];
$Campus = $_SESSION['Campus'];
$Price_Accreditation =$_SESSION['Price_Accreditation'];
$Sharing = $_SESSION['Sharing'];
$Email = $_SESSION['Email'];
$Telephone = $_SESSION['Telephone'];
$Description = $_SESSION['Description'];
$User_Password = $_SESSION['User_Password'];


//Connection to database
require '../database/sql_connection.php';


//Query to accomodation table
$sql = "INSERT into accomodation(Res_Name,Address,Campus,Sharing,Email,Telephone,Description) 
values ('$Res_Name','$Address', '$Campus','$Sharing','$Email', '$Telephone','$Description')" ;
$outcome = mysqli_query($conn, $sql) or die ("inserting into accomodation: ".mysqli_error($conn));


/* get res id to match it first*/
$sql = "SELECT  Res_ID  FROM accomodation";
$outcome = mysqli_query($conn, $sql) or die (mysqli_error($conn));

/* get all ids*/
function sqlToArray($sqlResult){
  $arr = [];
  while ($line = mysqli_fetch_array($sqlResult)) {
    $arr [] = $line[0];
  }
  return $arr;
}


$arr = sqlToArray($outcome);

$num = count($arr);

$last_id = $arr[$num-1];


/* insert into user table*/
$sql = "INSERT into users(Res_ID, Email,User_Password) values ('$last_id', '$Email','$User_Password')" ;
mysqli_query($conn, $sql) or die ("inserting into users: ".mysqli_error($conn));


 echo ("<span class=\"Congrats\"> Successful entry! Please wait for 3-5 Business days to be approved by MyRes Adminstration and have access to edit your profle page. </span>");




?>
