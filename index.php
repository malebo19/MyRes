<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyRes</title>
    <!-- main CSS file for this page -->
    <link rel="stylesheet" href="css_files\HomePage.css">
    <!-- tab imgae -->
    <link rel="shortcut icon" href="pictures\MYRESnew.png">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css_files\Bootstrap_css\bootstrap.min.css">
    <!-- Import res database -->
    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--font import-->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Staatliches&display=swap" rel="stylesheet">
     <!-- poppins fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- search and icon sysmbols -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>


<body id="body">
    <header class="row">
        <!-- Added div to align logo picture and comapny name -->
      <div class="col-lg-3">
        <img src="pictures\MYRESnew.png" id="logoImg"> 
        <span id="resName">MyRes</span>
      </div>
      <input type="text" id="searchRes" name="resName" placeholder="Search here..." class="col-lg-3">
      <!-- Added div to all links with 12 grid system -->
      <div class="row col-lg-6" style="padding-left: 7%;">
        <a href=#contacts class="header_links col-lg-3">Contacts</a>
        <a href=#about_us class="header_links col-lg-3">About us</a>
        <a href="php_files\registration.php" class="header_links col-lg-3">Apply</a>
        <button id="login" class="col-lg-3">Login</button>
       </div>
    </header>

<?php require 'php_files\login.php'; ?>
   
   <!--filter + res-card section  -->
  <div id="filter-res-sect">
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
          <input type="checkbox" name="nsfas" value="3500" id="nsfas" class=".nsfas load">
          <label>NSFAS Accredited</label>

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
            <input type="radio" id="5star" name='ratings' value="5" class="ratings load">
            <label for="5star">&#9733 &#9733 &#9733 &#9733 &#9733</label>
            <br>
            <input type="radio" id="4star" name="ratings" value="4" class="ratings load">
            <label for="4star">&#9733 &#9733 &#9733 &#9733</label>
            <br>
            <input type="radio" id="3star" name="ratings" value="3" class="ratings load">
            <label for="3star">&#9733 &#9733 &#9733</label>
            <br>
            <input type="radio" id="3star" name="ratings" value="2" class="ratings load">
            <label for="3star">&#9733 &#9733</label>
            <br>
            <input type="radio" id="1star" name="ratings" value="1" class="ratings load">
            <label for="1star">&#9733</label>
            <br>
            <hr>
            <div style="width: 100%; text-align: center;"><!-- div element to position the button in the center -->
              <input type="submit" name="name" id="submitFilters" value="Clear Filters">
            </div>
        </form>
      </section>

      <!-- section for displaying all reses using 12-grid bootstrap -->
      <section id="searchResults" class="row">
   
          
      </section>
    
    <!-- horizontal line -->
    <hr style="clear: both;">

  </div>

  <!-- Slider section -->
  <div id="slider-sect">
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
  </div>
     
      <!-- About us section -->
      <div id="about-sec">
        <div class ="row">
          <img src="pictures\doodle2.png" id="doodle" alt="student Accomodations" class="col-lg-6">
          <br>
      
            <div id="about_us" class="col-lg-6 slide" >
              <h2 class = "aboutHeader">MYRES ABOUT US</h2>

              <P > We are a user-friendly platform that connects young people with places of residence during their study years. </P>
              <p>Students fail to find affordable, convenient, legitimate or even basic
            accommodation for their study year. When this happens, it leads to stress and
            exhaustion and eventually desperate students end up falling victim for
            accommodation scams, human trafficking, settling for less (bad condition
            accommodation) This is especially a problem for foreign or further away
            students. Lost students end up staying at home where the environment is
            distracting and not convenient for studying. Most of the times when the student
            finds accommodation, it usually does not suite their needs or they have a bad
            experience with it. This problem is not only one sided but two sided since most proper
            accommodations do not have the platform to advertise their residence to the
            right students, therefore residences cannot find students/tenants.</p>
            <p>
              <p> Angelic, Malebo, Suprise, Khathu, Shellie and Lethabo have taken into account the issues faced by the
            students who take the long journeys to their designated institutions, making way towards finding
            accommodation for their academic year. This is the reason for the creation of this website. This website
            is to help students not only find student residence accommodation around their campuses, but also it is
            to lower the chances of this students being danger. Considering how most students come from
            different, far way hometowns and not being familiar with the city around their campuses.</p>
            <p>
                   
            </div>
        <br>

          <div id="about_team" class="col-lg-6 slide" >
            <h2 class = "aboutTeam">MYRES ABOUT THE TEAM </h2>

            <P> The creators of the website MyRes are Angelic Mokoena, Malebo Moleleki, Suprise Ngoveni,
            Khathutshelo Luvhimbi, Mitchell Dhliwayo and Lethabo Makopo. We are second year students studying Business Information Technology at the University of Johannesburg.</P>
            <p>Angelic came up with the colour scheme of the website, designed the logo and collaborated with Surprise on the home page, she also prepared our powerpoint presentation and will be our presenter</p>
            <p>Suprise did the back-end of the homepage and profile page</p>
            <p> Malebo is responsible for all the website design and aesthetic, the website database design and use case. She is also responsible for the respage coding and the reviews feature, both front and backend.</p>
            <p>Lethabo collaborated on the design skeleton of the residences page and wrote the documentation of the whole website, as the technical documentation writer.</p>
            <p>Khathu worked on the registration form, he worked on both the fron-end and the back-end of the page and pages related.</p>
            <p>Mitchell has created the front-end profile page, wrote the terms & conditions and also provide some information on our database.</p>       
          </div>

        <div class ="col-lg-6 row" id="us_img">
          <img src="pictures\GrouPicture.jpeg" id="group" alt="thegroup" class="col-lg-12" style="height: 500px">
        </div>
      </div>

        <a href= #resName class="back_up">Scroll Up</a>
      </div>
  

  <!-- footer information -->
 <link rel="stylesheet" type="text/css" href="..\css_files\footer.css">
 <footer id = "contacts">
    <div class="grouped_items"><div id = "contacts">
       <a href=""><input type="image" src="Icons\email.png" class="social_icons" /></a>
       <a href=""><input type="image" src="Icons\telephone.png" class="social_icons" /></a>
       <a href="https://www.instagram.com/kingswayplaceofficial/"><input type="image" src="Icons\insta.png" class="social_icons" /></a>
       <a href="https://twitter.com/staysouthpoint?s=08"><input type="image" src="Icons\twitter.png" class="social_icons" /></a>
       <a href="https://www.youtube.com/watch?v=0Skd6opSpTg&ab_channel=SouthPointClic"><input type="image" src="Icons\YouTube.png" class="social_icons" /></a>
    </div> </div>
    <br>
    <div class="grouped_items">
       <a href="html_files\policies.html">Privacy Policy | </a>
       <a href="html_files\policies.html">Cookie Policy | </a>
       <a href="html_files\policies.html">Terms & Conditions</a>
    </div>
       <br>
       <p class="grouped_items" style="color: white">&copy; 2021 MyRes. All Rights Reserved </p>
  </footer>

<script type="text/javascript" src="JavaScript_files\homePage.js"></script>
<script type="text/javascript" src="JavaScript_files\index_slide.js"></script>

</body>
</html>