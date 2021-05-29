<?php

require 'sql_connection.php';

#user details
$name = $_POST["name"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$description = $_POST["description"];

#address details
$address = $_POST["phyAddress"];
$campus = $_POST["campus"];

#additional accomodation details
$nsfas = $_POST["nsfas"];
$price = $_POST["price"];
$roomtype = $_POST["room"];

if (isset($_POST['submit'])){

    echo $name;
    echo $email;
    echo $telephone;
    echo $description;
    echo $address;
    echo $campus;
    echo $price;
    echo $roomtype;

    
    if ($nsfas == "yes"){
        $price = "3500";
    }else {
        $price = $_POST["price"]; 
    }
   
    #password details
    $pwd = $_POST["regpassword"];
    $confirmpwd = $_POST["confirmregpassword"];
        
    if (!$confirmpwd==$pwd) {
        echo 'Error!';
    }else{
        $savedpwd = $confirmpwd;
    } 
    
    $id = uniqid();

    $query = "INSERT INTO accomodation (Res_Name,Address,Campus,Price_Accreditation,Sharing,Email,Telephone,Description) 
    VALUES ('$name','$address','$campus','$price','$roomtype','$email','$telephone','$description')";

    #execute query
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if ($result){
        ?>
        <script>
            alert("Data stored! Return to home.");
        </script>
        <?php
    }else {
        ?>
        <script>
            alert("Error!");
        </script>
        <?php

    }
}



?>