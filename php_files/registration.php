<?php
    session_start();

    //session_destroy();


    // To clear information entered
    unset($_SESSION['Res_Name']);
    unset($_SESSION['Email']);
    unset($_SESSION['Telephone']);
    unset($_SESSION['Description']);
    unset($_SESSION['Address']);
    unset($_SESSION['Campus']);
    unset($_SESSION['Price_Accreditation']);
    unset($_SESSION['Sharing']);
    unset($_SESSION['User_Password']);


    
    // To capture information from forms then takes it to confirmation.php

    // Res Name
    if (isset($_SESSION['Res_Name'])) {
        $url = "confirmation.php";
        header('Location: ' . $url);
       
    }else if (isset($_POST['Res_Name'])) {
        $Res_Name = $_POST['Res_Name'];
        $_SESSION['Res_Name'] = $Res_Name;
        $url = "confirmation.php";
        header('Location: '. $url);
        
    }

    // Email
    if (isset($_SESSION['Email'])) {
        $url = "confirmation.php";
        header('Location: ' . $url);
        
    }else if (isset($_POST['Email'])) {
        $Email = $_POST['Email'];
        $_SESSION['Email'] = $Email;
        $url = "confirmation.php";
        header('Location: '. $url);
        
    }


    // Telephone
    if (isset($_SESSION['Telephone'])) {
        $url = "confirmation.php";
        header('Location: ' . $url);
       
    }else if (isset($_POST['Telephone'])) {
        $Telephone = $_POST['Telephone'];
        $_SESSION['Telephone'] = $Telephone;
        $url = "confirmation.php";
        header('Location: '. $url);
        
    }


    // Description
    if (isset($_SESSION['Description'])) {
        $url = "confirmation.php";
        header('Location: ' . $url);
        
    }else if (isset($_POST['Description'])) {
        $Description = $_POST['Description'];
        $_SESSION['Description'] = $Description;
        $url = "confirmation.php";
        header('Location: '. $url);
        
    }

    // Address
    if (isset($_SESSION['Address'])) {
        $url = "confirmation.php";
        header('Location: ' . $url);
       
    }else if (isset($_POST['Address'])) {
        $Address = $_POST['Address'];
        $_SESSION['Address'] = $Address;
        $url = "confirmation.php";
        header('Location: '. $url);
        
    }

    //Campus
    if (isset($_SESSION['Campus'])) {
        $url = "confirmation.php";
        header('Location: ' . $url);
        
    }else if (isset($_POST['Campus'])) {
        $Campus = $_POST['Campus'];
        $_SESSION['Campus'] = $Campus;
        $url = "confirmation.php";
        header('Location: '. $url);
        
    }

    //Price Accerditation
    if (isset($_SESSION['Price_Accreditation'])) {
        $url = "confirmation.php";
        header('Location: ' . $url);
    }else if (isset($_POST['Price_Accreditation'])) {
        $Price_Accreditation = $_POST['Price_Accreditation'];
        $_SESSION['Price_Accreditation'] = $Price_Accreditation;
        $url = "confirmation.php";
        header('Location: '. $url);
       
        
    }

    //Sharing
    if (isset($_SESSION['Sharing'])) {
        $url = "confirmation.php";
        header('Location: ' . $url);
        
    }else if (isset($_POST['Sharing'])) {
        $Sharing = $_POST['Sharing'];
        $_SESSION['Sharing'] = $Sharing;
        $url = "confirmation.php";
        header('Location: '. $url);
        
    }

    //password
    if (isset($_SESSION['User_Password'])) {
        $url = "confirmation.php";
        header('Location: ' . $url);
        
    }else if (isset($_POST['User_Password'])) {
        $User_Password = $_POST['User_Password'];
        $_SESSION['User_Password'] = $User_Password;
        $url = "confirmation.php";
        header('Location: '. $url);
        
    }



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register Page</title>

    <!--CSS File-->
    <link rel = "stylesheet" href = "..\css_files\registration.css">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Staatliches&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="..\css_files\bootstrap_css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>
<body>
   <nav class="row">
        <!-- logo and name -->
        <div id="title" class="col-lg-3 col-md-3 row">
            <img id="logo" src="..\pictures\MYRESnew.png" class="col-lg-4"></img>
            <span class="col-lg-2" id="nav_title">MyRes</span>
        </div>
        <div id="nav_btns" class="col-lg-4 col-md-4">
            <a href=#contacts class="nav_btn col-lg-4 col-lg-4">Contacts</a>
            <a href="..\index.php" id="nav_home" class="col-lg-4 col-md-4">Home</a>
        </div>
    </nav>
    <style>

    nav {
     background-color: #27284a;
    position: relative;
     box-shadow: 5px 0px 7px black;
    margin-bottom: 20px;
     padding: 20px;

    }
    nav.row{
    width: 100%;
    transition: .7s;

    }

    #nav_title {
     font-size: 24px;
     margin-top: 25px;
    position: relative;
    font-family:lobster;
    right: 5%;
    color: white;

    }

    #nav_btns {
    justify-content: end;
    position: absolute;
    right: 0px;
    top: 50px;
    }

    .nav_btn {
     text-decoration: none;
    margin: 15px;
     color: white;
    }
    .nav_btn:hover {
    transform: scale(1.5);
    text-shadow: 0px 0px 5px white;
    }
    #nav_home {
    text-decoration: none;
    color: white;
    background-color: #7ed956;
    padding: 5px 20px 5px 20px;
     border-radius: 5px;
    }
    #nav_home:hover{
    background-color: #55ea55;
    box-shadow: 1px 2px 5px #07b907;
  
    }



    </style>


    <!--Container for image, forms and password-->    
    <div class = "Background-box">
        <!--Image displayed at the top-->
        <div class = "img-area">
            <img src= "..\pictures\login_image.jpg" alt="MyResLogo" class = "img" style = "margin-top:-20px; max-width: 100%;">
        </div>
        
        <div class = "Register-box">
            
            <div class = "form">
                <h1 id = "mainheading"> Add Residence</h1>
                <form id = "regform" class = "form" action = "..\php_files\registration.php" method = "post">
                    

                    
                        <h2 class = "subheading">User</h2>
                        <!-- users div -->
                        <div class="row">
                            <!-- user details sub div ti align with bootstrap grid -->
                            <div class="col-lg-6 col-md-12">
                                <input type = "text" placeholder = "Residence Name" class = "form-input" id = "resname" name = "Res_Name" required > 
                                <input type = "text" placeholder = "Email" class = "form-input" id = "email" name = "Email" required >  
                                <div>                               
                                    <input type = "number" placeholder = "Telephone" class = "form-input" id = "telephone" name = "Telephone" required >
                                </div>   
                            </div>
                            <!-- user details sub div ti align with bootstrap grid -->
                            <div class="col-lg-6 col-md-12">
                                <label for = "description" id = "label_description">Description of Residence</label><br>
                                <textarea rows = "7" cols = "30" id = "description"  name = "Description" ></textarea>
                            </div>
                        </div>
                    

                        <!-- Address -->
                        <h3 class = "subheading">Address</h3>

                        <!--FAQ for Nearby Campus -->
                        <p><i class="fa fa-question-circle" style="font-size:16px"></i> (For 'Nearby Campus' select one of the suggested campuses closest to the residence)</p>
                        <div class="row">

                        <!-- Address details sub div ti align with bootstrap grid -->
                            <div class="col-lg-6 col-md-12">
                                <input type = "text" placeholder = "Physical Address" class = "form-input" id = "physical_address"  name = "Address" required>
                                <div>
                                    <input type = "text" placeholder = "City" class = "form-input" id = "city"  name = "city" required >
                                </div>
                            </div>
                        <!-- Address details sub div ti align with bootstrap grid -->
                            <div class="col-lg-6 col-md-12">
                                <label for = "campus" id = "label_campus">Nearby Campus</label>
                                    <select id = "campus_select" name="Campus">
                                        <option value =" " id="campus">campus</option>
                                        <option value ="APB" class = "campusoptions">APB</option>
                                        <option value ="APK" class = "campusoptions">APK</option>
                                        <option value ="SWC" class = "campusoptions">SWC</option>
                                        <option value ="DFC" class = "campusoptions">DFC</option>
                                    </select>
                            </div>
                        </div>

                    
                    
                        <!-- Accomodation type and price -->
                        <h4 class = "subheading">Accomadation</h4>

                        <!--FAQ for accomodation -->

                        <p><i class="fa fa-question-circle" style="font-size:16px"></i> (Select applicable option below, if accomodation is not accredited select option and input amount e.g 4350) </p>
                    
                   
                        <div class="row">
                        <!-- Accomodation details sub div ti align with bootstrap grid -->
                            <div class="col-lg-6 col-md-12">
                               
                                <label for = "NsfasAccredited" id = "Nsfas_label" >Nsfas Accredited
                                    <input type = "radio"  id = "Nsfas"  name = "Price_Accreditation" onclick="text(1)" value = "0">                
                                </label>
                            </div>

                        <!-- Accomodation details sub div ti align with bootstrap grid -->
                            <div class="col-lg-6 col-md-12">
                                <label for = "NotAccredited" id = "NotAccredited_label">Not Accredited
                                    <input type = "radio"  id = "NotAccredited"  name = "Price_Accreditation" onclick="text(0)" >  
                                </label>  
                                <div>
                                    <input type = "text" placeholder = "Price(R)" class = "form-input" id = "price"  name = "Price_Accreditation">
                                </div>
                            </div>
                        </div>
                        <!-- Accomodation details room type -->
                        <label for = "Room_type" id = "label_room">Room Type</label>
                        <select id = "room_select" name="Sharing">
                            <option value =" " id="Room_type">Room Type</option>
                            <option value ="No" class = "roomoptions">Single</option>
                            <option value ="Yes" class = "roomoptions">Sharing</option>
                       
                        </select>

                   
                        <!--Password Section-->
                    
                        <!--FAQ for Password -->

                        
                        <p><i class="fa fa-question-circle" style="font-size:16px"></i> (Enter a password for your MyRes profile with more than six characters and verify password )</p>
                        
                        <!--Verification Message -->
                       
                        <div class = "error-text" ></div>

                        
                            <div>
                                <input onkeyup = "active()" type = "password" placeholder = "Password" class = "form-input" id = "regpassword"name = "User_Password" required>
                            </div>
                            <div>
                                <input onkeyup = "active_2()" disabled type = "password" placeholder = "Confirm Password" class = "form-input" id = "confirmregpassword" name = "regpassword" required>
                            </div> 
                            <button id = "verify" disabled>Verify</button> 
                        
                        <!--Register Button -->

                        <div class = "regbox">
                            <button type = "submit" name = "submit" class = "Register">REGISTER</button>
                            
                        </div> 

                        
                    



                </form>

                

           

            </div>

        </div>
        
    </div>

    <!-- footer information -->
 <link rel="stylesheet" type="text/css" href="..\css_files\footer.css">
 <footer id = "contacts">
    <div class="grouped_items">
       <a href=""><input type="image" src="..\Icons\email.png" class="social_icons" /></a>
       <a href=""><input type="image" src="..\Icons\telephone.png" class="social_icons" /></a>
       <a href=""><input type="image" src="..\Icons\insta.png" class="social_icons" /></a>
       <a href=""><input type="image" src="..\Icons\twitter.png" class="social_icons" /></a>
       <a href=""><input type="image" src="..\Icons\YouTube.png" class="social_icons" /></a>
    </div>
    <br>
    <div class="grouped_items">
       <a href="">Privacy Policy | </a>
       <a href="">Cookie Policy | </a>
       <a href="">Terms & Conditions</a>
    </div>
       <br>
       <P class="grouped_items" style="color: white"><img src="..\Icons\copyright.png" alt="Copyright" width = "20px" height = "20px" >  2021 MyRes. All Rights Reserved </P>
  </footer>



  <script>

    //Not Accredited drop down
    function text(x) {
        if (x==0) document.getElementById("price").style.display = "block";
        else document.getElementById("price").style.display = "none";;
        return;
    }

    //Password verification Function

    const regpassword = document.querySelector("#regpassword");
    const confirmregpassword = document.querySelector("#confirmregpassword");
    const errorText = document.querySelector(".error-text");
    const btn = document.querySelector("#verify");

    function active(){
        if (regpassword.value.length >= 6){
            btn.removeAttribute("disabled","");
            btn.classList.add("active");
            confirmregpassword.removeAttribute("disabled", "");

        }else{
            btn.setAttribute("disabled", "")
            btn.classList.remove("active");
            confirmregpassword.removeAttribute("disabled", "");
        }

        btn.onclick = function(){
            if (regpassword.value != confirmregpassword.value){
                errorText.style.display = "block";
                errorText.classList.remove(".matched");
                errorText.textContent = "Error! Confirmed password not matched";
                return false;
            }else{
                errorText.style.display = "block";
                errorText.classList.add(".matched");
                errorText.textContent = "Nice! password matched";
                return false;
            }
        }

        
    }

</script>

    
            

    
</body>


</html>