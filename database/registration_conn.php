 <?php

$Res_Name = $_POST['Res_Name'];
$Address = $_POST['Address'];
$Campus = $_POST['Campus'];
$Price_Accreditation = $_POST['Price_Accreditation'];
$Sharing = $_POST['Sharing'];
$Email = $_POST['Email'];
$Telephone = $_POST['Telephone'];
$Description = $_POST['Description'];
$User_Password = $_POST['User_Password'];
//echo $name . "<br>" . $email . "<br>" . $age . "<br>" . $address . "<br>" ;

if (empty($Res_Name)) { 
    echo "Please fill res name fields";

}

if (empty($Address))  { 
    echo "Please fill address fields";

}

if (empty($Campus))  { 
    echo "Please fill campus fields";

}
if (empty($Price_Accreditation))  { 
    echo "Please fill price accreditation fields";

}
if (empty ($Sharing))  { 
    echo "Please fill sharing fields";

}
if (empty($Email))  { 
    echo "Please fill email fields";

}
if (empty($Telephone))  { 
    echo "Please fill telephone fields";

}

if (empty($Description))  { 
    echo "Please fill description fields";

}



$server = "localhost";
$username = "root";
$password = "";
$dbname = "myres";

$conn = new mysqli($server, $username, $password, $dbname);


if($Price_Accreditation == 0){
    $Price_Accreditation = 3500;
}


if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "insert into accomodation(Res_ID,Res_Name,Address,Campus,Price_Accreditation,Sharing,Email,Telephone,Description) 
values ('22','$Res_Name','$Address', '$Campus','$Price_Accreditation','$Sharing','$Email', '$Telephone','$Description')" ;
//$query = mysqli_query($conn,$sql);


$sql2 = "insert into users(Res_ID,Email,User_Password) 
values ('22','$Email', '$User_Password')" ;

if ($conn->query($sql)=== TRUE){
    echo "ADDED: " . $Res_Name. "," . $Address .",".$Campus . "," .$Price_Accreditation."," . $Sharing."," .$Email."," .$Telephone."," .$Description;
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql2)=== TRUE){
    echo "ADDED: " . $Res_Name. "," .$Email.",".$User_Password;
}else{
    echo "Error: " . $sql2. "<br>" . $conn->error;
}

$conn->close()

?>

?>