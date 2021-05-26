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


</head>
<body>
   

    <div class = "Background-box">
        <div class = "img-area">
            <img src= "..\pictures\login_image.jpg" alt="MyResLogo" class = "img" >
        </div>
        
        <div class = "Register-box">
            
            <div class = "form">
                <h1 id = "mainheading"> Add Residence</h1>
                <form id = "regform" class = "form" action = "..\database\registration_conn.php" method = "post">
                    

                    
                        <h2 class = "subheading">User</h2>
                        <!-- users div -->
                        <div class="row">
                            <!-- user details sub div ti align with bootstrap grid -->
                            <div class="col-lg-6 col-md-12">
                                <input type = "text" placeholder = "Residence Name" class = "form-input" id = "resname" name = "Res_Name"> 
                                <input type = "text" placeholder = "Email" class = "form-input" id = "email" name = "Email">  
                                <div>                               
                                    <input type = "text" placeholder = "Telephone" class = "form-input" id = "telephone" name = "Telephone">
                                </div>   
                            </div>
                            <!-- user details sub div ti align with bootstrap grid -->
                            <div class="col-lg-6 col-md-12">
                                <label for = "description" id = "label_description">Description of Residence</label><br>
                                <textarea rows = "7" cols = "30" id = "description"  name = "Description"></textarea>
                            </div>
                        </div>
                    


                        <h3 class = "subheading">Address</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <input type = "text" placeholder = "Physical Address" class = "form-input" id = "physical_address"  name = "Address">
                                <div>
                                    <input type = "text" placeholder = "City" class = "form-input" id = "city"  name = "city">
                                </div>
                            </div>
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

                    
                    
                        
                        <h4 class = "subheading">Accomadation</h4>

                        <p><i class="fa fa-question-circle" style="font-size:16px"></i> (Select applicable option below, if accomodation is not accredited select option and input amount e.g 4350) </p>
                    
                   
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                               
                                <label for = "NsfasAccredited" id = "Nsfas_label" >Nsfas Accredited
                                    <input type = "radio"  id = "Nsfas"  name = "Price_Accreditation" onclick="text(1)" >                
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for = "NotAccredited" id = "NotAccredited_label">Not Accredited
                                    <input type = "radio"  id = "NotAccredited"  name = "Price_Accreditation" onclick="text(0)" >  
                                </label>  
                                <div>
                                    <input type = "text" placeholder = "Price(R)" class = "form-input" id = "price"  name = "Price_Accreditation">
                                </div>
                            </div>
                        </div>
                        <label for = "Room_type" id = "label_room" >Room Type</label>
                        <select id = "room_select" name="Sharing">
                            <option value =" " id="Room_type">Room Type</option>
                            <option value ="No" class = "roomoptions">Single</option>
                            <option value ="Yes" class = "roomoptions">Sharing</option>
                       
                        </select>
                   

                        <h5 class = "subheading">Add Images</h5>

                        <p><i class="fa fa-question-circle" style="font-size:16px"></i> (Upload a minimum of one image of the residence)</p>

                        <div class = "container" id = "file_container">
                            <!--Upload Pictures-->
                            <input type = "file" class = "upload-box" placeholder="Add file" id = "file"  name = "file">
                        </div>


                        
                        <p><i class="fa fa-question-circle" style="font-size:16px"></i> (Enter a password for your MyRes profile with more than six characters and verify password )</p>
                        
                        <div class = "error-text" ></div>
                            <div>
                                <input onkeyup = "active()" type = "password" placeholder = "Password" class = "form-input" id = "regpassword"name = "regpassword">
                            </div>
                            <div>
                                <input onkeyup = "active_2()" disabled type = "password" placeholder = "Confirm Password" class = "form-input" id = "confirmregpassword"name = "User_Password">
                                <div class = "show">
                                    SHOW
                                </div>
                            </div> 
                            <button id = "verify" disabled>Verify</button> 
                        

                        <div class = "regbox">
                            <button type = "submit" name = "submit" class = "Register">REGISTER</button>
                            
                        </div> 

                        
                    



                </form>

                

           

            </div>

        </div>
        
    </div>

    <!-- footer information -->
 <link rel="stylesheet" type="text/css" href="..\css_files\footer.css">
 <footer>
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
    function text(x) {
        if (x==0) document.getElementById("price").style.display = "block";
        else document.getElementById("price").style.display = "none";;
        return;
    }

    const regpassword = document.querySelector("#regpassword");
    const confirmregpassword = document.querySelector("#confirmregpassword");
    const errorText = document.querySelector(".error-text");
    const shwBtn = document.querySelector("show");
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

        function active_2() {
            if(confirmregpassword.value != "") {
                showBtn.style.display = "block";
                showBtn.onclick = function(){
                    if ((regpassword.type == "password") && (confirmregpassword.type == "password")){
                        regpassword.type = "text";
                        confirmregpassword.type = "text";
                        this.textContent = "Hide";
                        this.classList.add("active");
                    }else {
                        regpassword.type = "password";
                        confirmregpassword.type = "password";
                        this.textContent = "Show";
                        this.classList.remove("active");

                    } 
                }
            }else{
                showBtn.style.display = "none";
            }
        }
    }
</script>

    
            

    
</body>


</html>