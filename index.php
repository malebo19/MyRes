<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- main CSS file for this page -->
    <link rel="stylesheet" href="css_files\HomePage.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css_files\Bootstrap_css\bootstrap.min.css">
    <!-- Import res database -->
    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--font import-->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Staatliches&display=swap" rel="stylesheet">
    <!-- search and icon sysmbols -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>
<body id="body">
    <header class="row">
        <!-- Added div to align logo picture and comapny name -->
      <div class="col-lg-3">
        <img src="pictures\logoNew.jpeg" id="logoImg"> 
        <span id="resName">MyRes</span>
      </div>
      <input type="text" id="searchRes" name="resName" placeholder="Search here..." class="col-lg-3">
      <!-- Added div to all links with 12 grid system -->
      <div class="row col-lg-6" style="padding-left: 7%;">
        <a href=#contacts class="header_links col-lg-3">Contacts</a>
        <a href=#about_us class="header_links col-lg-3">About us</a>
        <a href="php_files\registration.php" id="Apply" class="col-lg-3">Apply</a>
        <button id="login" class="col-lg-3">Login</button>
       </div>
    </header>

<?php require 'php_files\login.php'; ?>
    
    <!-- filters section -->
   <section id="filters">
      <form action="index.php" method="post">
        
        <!-- class 'load is used to reference filters in javascript for auto reload' -->
        <h3>Filters</h3>

        <h4>Location</h4>

        <!-- Locations based on campuses -->
        <div id="campuses" >
                <input type="radio" id="apb" name="campus" value="APB" class="load campus">
                <label for="apb">APB</label><br>
                <input type="radio" id="dfc" name="campus" value="DFC" class="load campus">
                <label for="dfc">DFC</label><br>
                <input type="radio" id="apk" name="campus" value="APK" class="load campus">
                <label for="apk">APK</label><br>
                <input type="radio" id="swc" name="campus" value="SWC" class="load campus">
                <label for="swc">SWC</label>
        </div>

        <hr>
        <!-- choose price filter -->
        <h4>Price Ranges</h4>
        <input type="text" placeholder="Minimum Price" id="minPrice" name="minPrice" class="price load">
        <input type="text" placeholder="Maximum Price" id="maxPrice" name="maxPrice" class="price load">
        <br>
        <input type="range" min="100" max="10000" value="5000" id="priceRange" oninput="rangeInput()">

        <hr>
        <!-- Choosing the prefferd number of rooms -->
        <h4>Rooms</h4>
        <input type="radio" id="single" name="rooms" value="Yes" class="rooms load">
        <label for="single">Sharing</label>
        <br>
        <input type="radio" id="sharing2" name="rooms" value="No" class="rooms load">
        <label for="sharing2">Single</label>
        <br>
        <!-- <input type="radio" id="sharing3" name="rooms" class="load">
        <label for="sharing3">Sharing(4-8)</label>
        <br> -->

        <hr>
        <!-- Options to choose to choose acoording to rating -->
        <h4>Student Ratings</h4>
        <!-- Star ratings -->
          <input type="radio" id="5star" name='ratings' class="load">
          <label for="5star">&#9733 &#9733 &#9733 &#9733 &#9733</label>
          <br>
          <input type="radio" id="4star" name="ratings" class="load">
          <label for="4star">&#9733 &#9733 &#9733 &#9733</label>
          <br>
          <input type="radio" id="3star" name="ratings" class="load">
          <label for="3star">&#9733 &#9733 &#9733</label>
          <br>
          <input type="radio" id="1star" name="ratings" class="load">
          <label for="1star">&#9733</label>
          <br>
          <hr>
          <div style="width: 100%; text-align: center;"><!-- div element to position the button in the center -->
            <input type="submit" name="name" id="submitFilters" value="submit">
          </div>
      </form>
    </section>

    <!-- section for displaying all reses using 12-grid bootstrap -->
    <section id="searchResults" class="row">
 
        
    </section>
    
    <!--  -->
    <hr style="clear: both;">

     <h3>Recommended Accomodations</h3>
    
     <!--The Res SlideShow Pictures-->
    <div class ="ReSlideShow">

        <div class="Res">
            <img src="pictures\Respublica.jpg" width = 100%>
            <div class="caption">Republica Laundry Room</div>
          </div>
        
          <div class="Res">
            <img src="pictures\republica2.jpeg"  width = 100%>
            <div class="caption">Republica Entrance</div>
          </div>
        
          <div class="Res">
            <img src="pictures\republica3.jpeg" width = 100% >
            <div class="caption">Republica Play Room</div>
          </div>

          <div class="Res">
            <img src="pictures\republica4.jpeg" width = 100% >
            <div class="caption">Republica Rooms</div>
          </div>

          <div class="Res">
            <img src="pictures\republica6.jpeg" width = 100% >
            <div class="caption">Repulica Swim Area</div>
          </div>


        
         </div>

        <br>

        <div class ="bullets">
            <div class = "bullet" ></div>
            <span class= "bullet" ></span>
            <span class= "bullet" ></span>
            <span class= "bullet" ></span>
            <span class= "bullet" ></span>
            <span class= "bullet" ></span>
        </div>
      </div>

      <hr>
        <div class ="row">
      <img src="pictures\doodle2.png" id="doodle" alt="student Accomodations" class="col-lg-6">
        <br>
      
        <div id="about_us" class="col-lg-6" >
        <h5 class = "aboutHeader">MYRES ABOUT US</h5>

        <P > We are a user-friendly platform that connects young people with places of residence during their study years. </P> <br>
        <p> We know that finding and renting out a place to stay can be a tedious experience so we have created a community where landlords 
          list their properties on our platform , and young people visit our website to send an enquiry directly to the landlord  so that 
          they can get to know each other before signing any documents.</p> <br>
        <p> Our platform is totally free for landlords to list and for students to search </p> <br>
        <p> Safety on our platform is super important to us. We require all users to add a profile picture, validate their cell phone number 
          and email address and to provide their ID number, just to check that you’re chatting to the person you think  you are talking to. 
          That said, we still encourage users just to make extra sure though before making any big decisions.
          We’re building a community of students, 
          tenants, landlords and partnered academic institutions
          who share our vision of creating a platform that connects people 
          in a safe and secure environment throughout South Africa</p> 
       
        </div>

        <br>

        <div id="about_team" class="col-lg-6" >
        <h5 class = "aboutTeam">MYRES ABOUT THE TEAM </h5>

        <P> The creators of the website MyRes are Angelic SURNAME, Malebo Moleleki, Surprise Ngobeni,
        Khathutshedzo Luvhimbi, Mitchell SURNAME and Lethabo Makopo. We are second year students in the
        course Business Information Technology at the prestigious University of Johannesburg.</P> <br>
        <p> Angelic, Malebo, Surprise, Kathu, Shellie and Lethabo have taken into account the issues faced by the
        students who take the long journeys to their designated institutions, making way towards finding
        accommodation for their academic year. This is the reason for the creation of this website. This website
        is to help students not only find student residence accommodation around their campuses, but also it is
        to lower the chances of this students being danger. Considering how most students come from
        different, far way hometowns and not being familiar with the city around their campuses.</p> <br>
        <p> Angelic came up with the colour scheme of the website, being lime green, blue and greys. She also
        designed the logo and collaborated with Surprise on the home page. She has also designed the footer
        and the header with Surprise. They designed and coded the homepage, which include sliders, filters for
        the different residences. </p> <br>
        <p> Malebo and Lethabo collaborated on the design skeleton of the residences page. This is the page that
        consists of the residence’s pictures, descriptions, viewers rating, viewers reviews and the map address
        for the residences. Malebo created the database that has all the different tables to all the information
        that is to appear in the residences page. Lethabo wrote the documentation of the website, as the
        technical documentation writer.
        Khathu and Mitchell collaborated on the registration form. This is the page where the Residence
        accommodation owners/managers can register to have their residence to have them appear on this
        website. Mitchell has created the profile pop up form for the residences.</p>
        
        </div>

        <div class ="col-lg-6">
        <img src="pictures\GrouPicture.jpeg" id="group" alt="thegroup" >
        </div>
        </div>

        <a href= #resName class="back_up">Scroll Up</a>
    
  <!-- footer information -->
 <link rel="stylesheet" type="text/css" href="..\css_files\footer.css">
 <footer id = "contacts">
    <div class="grouped_items"><div id = "contacts">
       <a href="mailto:someone@mail.com?Subject=Test%20Mail"><input type="image" src="Icons\email.png" class="social_icons" /></a>
       <a href="tel:0637354497"><input type="image" src="Icons\telephone.png" class="social_icons" /></a>
       <a href="https://www.instagram.com/kingswayplaceofficial/"><input type="image" src="Icons\insta.png" class="social_icons" /></a>
       <a href="https://twitter.com/staysouthpoint?s=08"><input type="image" src="Icons\twitter.png" class="social_icons" /></a>
       <a href="https://www.youtube.com/watch?v=0Skd6opSpTg&ab_channel=SouthPointClic"><input type="image" src="Icons\YouTube.png" class="social_icons" /></a>
    </div> </div>
    <br>
    <div class="grouped_items">
       <a href="">Privacy Policy | </a>
       <a href="">Cookie Policy | </a>
       <a href="">Terms & Conditions</a>
    </div>
       <br>
       <p class="grouped_items" style="color: white">&copy; 2021 MyRes. All Rights Reserved </p>
  </footer>

<script type="text/javascript" src="JavaScript_files\homePage.js"></script>
<script type="text/javascript" src="JavaScript_files\index_slide.js"></script>

</body>
</html>