
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Confirmation Styling</title>
    <link rel = "stylesheet" href = "../css_files/confirmation.css">
</head>
<body>
    <!-- Confirmation page html & css-->

    <!--Blurred background image-->
    <div id="Blurredimg"><img src="..\pictures\login_image.jpg" style="width: 100%; height: 100%;"></div>
    
    <!--Green Border box-->
    <div id="Divborder">
        <!--displayed insormation form forms-->
        <span class = "forms"></span>

        <!--White line in the box-->
        
        <hr class ="whiteline">
      
        
       
    </div>
    
</body>
</html>

<?php

    session_start();


    //Nsfas Accredited If Statement

    // if ($Price_Accreditation == "0"){
    //     $Price_Accreditation = "3500";
    //     $url = "registration.php?Price_Accreditation" . $Price_Accreditation;
    //     $url2 = "registration_conn.php?Price_Accreditation" . $Price_Accreditation;
    // }else {
       
        
    // }

    //Forms 
    $Price_Accreditation = $_SESSION['Price_Accreditation'];
    $url = "registration.php?Price_Accreditation" . $Price_Accreditation;
    $url2 = "registration_conn.php?Price_Accreditation" . $Price_Accreditation;


    $Res_Name = $_SESSION['Res_Name'];
    $url = "registration.php?Res_Name" . $Res_Name;
    $url2 = "registration_conn.php?Res_Name" . $Res_Name;
    $Email = $_SESSION['Email'];
    $url = "registration.php?Email" . $Email;
    $url2 = "registration_conn.php?Email" . $Email;
    $Telephone = $_SESSION['Telephone'];
    $url = "registration.php?Telephone" . $Telephone;
    $url2 = "registration_conn.php?Telephone" . $Telephone;
    $Description = $_SESSION['Description'];
    $url = "registration.php?Description" . $Description;
    $url2 = "registration_conn.php?Description" . $Description;
    $Address = $_SESSION['Address'];
    $url = "registration.php?Address" . $Address;
    $url2 = "registration_conn.php?Address" . $Address;
    $Campus = $_SESSION['Campus'];
    $url = "registration.php?Campus" . $Campus;
    $url2 = "registration_conn.php?Campus" . $Campus;
    $Sharing = $_SESSION['Sharing'];
    $url = "registration.php?Sharing" . $Sharing;
    $url2 = "registration_conn.php?Sharing" . $Sharing;
    $User_Password = $_SESSION['User_Password'];
    $url = "registration.php?User_Password" . $User_Password;
    $url2 = "registration_conn.php?User_Password" . $User_Password;


    

    echo ("<span class=\"forms\"> Residence Name: $Res_Name <br> Email: $Email <br> Telephone no.: $Telephone <br> Description of Residence: $Description <br> Physical Address: $Address <br> Nearby Campus: $Campus <br> Price/unit : $Price_Accreditation<br> Is residence sharing: $Sharing <br> Password:$User_Password</span>");
    echo ("<span id=\"Confirm\" > <a href = '$url2' >Confirm</a> </span>");
    echo ("<span id=\"Re_enter\"><a href = '$url'>Re-Entry</a></span>");

    
   


?>