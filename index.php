<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <!-- main CSS file for this page -->
    <link rel="stylesheet" href="css_files\HomePage.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css_files\Bootstrap_css\bootstrap.min.css">
    <!-- Import res database -->
    

</head>
<body id="body">
    <header class="row">
        <!-- Added div to align logo picture and comapny name -->
        <div class="col-lg-3">
           <img src="pictures\logoNew.jpeg" id="logoImg"> 
           <span id="resName">MyRes</span>
       </div>
       <input type="text" id="searchRes" class="col-lg-1">
       <a href="" class="col-lg-1"><img src="pictures\search.png" id="searchSymbol"></a>
       <!-- Added div to all links with 12 grid system -->
       <div class="row col-lg-6">
           <a href=#contacts class="header_links col-lg-3">Contacts</a>
           <a href=#about_us class="header_links col-lg-3">About us</a>
           <a href="" class="header_links col-lg-3">Add Res</a>
           <button id="loginButton" class="col-lg-3">Login</button>
       </div>
    </header>
    
    <!-- filters section -->
   <section id="filters">
      <form action="database\Filters.php" method="post">
        <input type="submit" name="name" value="submit">
        <!-- class 'refresh is used to reference filters in javascript for auto reload' -->
        <h3>Filters</h3>

        <h4>Location</h4>

        <!-- Locations based on campuses -->
        <div id="campuses" >
                <input type="radio" id="apb" name="campus" value="APB" class="refresh">
                <label for="apb">APB</label><br>
                <input type="radio" id="dfc" name="campus" value="DFC" class="refresh">
                <label for="dfc">DFC</label><br>
                <input type="radio" id="apk" name="campus" value="APK" class="refresh">
                <label for="apk">APK</label><br>
                <input type="radio" id="swc" name="campus" value="SWC" class="refresh">
                <label for="swc">SWC</label>
        </div>

        <hr>
        <!-- choose price filter -->
        <h4>Price Ranges</h4>
        <input type="text" placeholder="Minimum Price" id="minPrice" name="minPrice" class="price refresh" onmousedown="minPrice()">
        <input type="text" placeholder="Maximum Price" id="maxPrice" name="maxPrice" class="price refresh" onmousedown="maxPrice()">
        <br>
        <input type="range" min="100" max="10000" value="5000" id="priceRange" oninput="rangeInput()">

        <hr>
        <!-- Choosing the prefferd number of rooms -->
        <h4>Rooms</h4>
        <input type="radio" id="single" name="rooms" value="Yes" class="refresh">
        <label for="single">Sharing</label>
        <br>
        <input type="radio" id="sharing2" name="rooms" value="No" class="refresh">
        <label for="sharing2">Single</label>
        <br>
        <!-- <input type="radio" id="sharing3" name="rooms" class="refresh">
        <label for="sharing3">Sharing(4-8)</label>
        <br> -->

        <hr>
        <!-- Options to choose to choose acoording to rating -->
        <h4>Ratings</h4>
        <!-- Star ratings -->
          <input type="radio" id="5star" name='ratings' class="refresh">
          <label for="5star">&#9733 &#9733 &#9733 &#9733 &#9733</label>
          <br>
          <input type="radio" id="4star" name="ratings" class="refresh">
          <label for="4star">&#9733 &#9733 &#9733 &#9733</label>
          <br>
          <input type="radio" id="3star" name="ratings" class="refresh">
          <label for="3star">&#9733 &#9733 &#9733</label>
          <br>
          <input type="radio" id="1star" name="ratings" class="refresh">
          <label for="1star">&#9733</label>
      </form>
    </section>

    <!-- section for displaying all reses using 12-grid bootstrap -->
    <section id="searchResults" class="row">
      <!-- Import database for displaying reses -->
      <?php require "database\Filters.php";
            $counter = 0;
      ?>

      <!-- Looping through all reses found on database that match filter -->
      <?php foreach ($results as $id) { ?>

        <!-- Container for each res displayed -->
       <article class="res_container col-lg-4 col-md-4 col-sm-6 col-xs-12">
       

            <?php $photo = "src=".$photos[0]." alt='ResPicture' class='displayPic'";?>
            <?php $link =  "href='php_files/resPage.php?ID=$id'" ?>
            <img <?php echo $photo; ?> > <!-- Picture of specific res -->
            <div id="res_title"><?php echo $resNameDisplay[$counter]; ?> </div> <!-- Name of res -->
            <div class="res_info"><?php echo $roomsDisplay[$counter] ?></div>  <!-- Number of sharing -->
            <div class="res_info"><?php echo $campusDisplay[$counter]; ?></div>  <!-- Location of the res -->
            <div class="res_info"><?php echo "R".$priceDisplay[$counter]; ?></div>  <!-- price of the res -->
            <div class="view_acc"><a <?php echo $link ?> class="view_acc">View Accomodation</a></div>  <!-- Link to view more about the res -->
            <?php $counter += 1; ?>

       </article>
      <?php  }?>
        
    </section>
    
    <!--  -->
    <hr style="clear: both;">
    
     <!--The Res SlideShow Pictures-->
    <div class ="ReSlideShow">

        <div class="Res">
            <div class="number fades">1 / 3</div>
            <img src="pictures\kingsway place.jpg" width = 100%>
            <div class="caption">Caption Text</div>
          </div>
        
          <div class="Res">
            <div class="number fades">2 / 3</div>
            <img src="pictures\richmondRooms.jpg"  width = 100%>
            <div class="caption">Caption Two</div>
          </div>
        
          <div class="Res">
            <div class="number fades">3 / 3</div>
            <img src="pictures\studyRoom.jpg" width = 100% >
            <div class="caption">Caption Three</div>
          </div>

        
         </div>

        <br>

        <div>
            <div class = "bullet" ></div>
            <span class= "bullet" ></span>
            <span class= "bullet" ></span>
        </div>
      </div>

      <hr>

      <img src="pictures\doodle.jpg" id="doodle" alt="student Accomodations">

      
      <div id="about_us">
        <h4 class = "aboutHeader">MYRES ABOUT US</h4>

        <P> We are a user-friendly platform that connects young people with places of residence during their study years. </P> <br>
        <p> We know that finding and renting out a place to stay can be a tedious experience so we have created a community where landlords list their properties on our platform , and young people visit our website to send an enquiry directly to the landlord  so that they can get to know each other before signing any documents.</p> <br>
        <p> Our platform is totally free for landlords to list and for students to search </p> <br>
        <p> Safety on our platform is super important to us. We require all users to add a profile picture, validate their cell phone number and email address and to provide their ID number, just to check that you’re chatting to the person you think  you are talking to. That said, we still encourage users just to make extra sure though before making any big decisions.
        We’re building a community of students, 
        tenants, landlords and partnered academic institutions
        who share our vision of creating a platform that connects people 
        in a safe and secure environment throughout South Africa</p>
      </div>
    
  <!-- footer information -->
 <link rel="stylesheet" type="text/css" href="..\css_files\footer.css">
 <footer id = "contacts">
    <div class="grouped_items"><div id = "contacts">
       <a href=""><input type="image" src="Icons\email.png" class="social_icons" /></a>
       <a href=""><input type="image" src="Icons\telephone.png" class="social_icons" /></a>
       <a href=""><input type="image" src="Icons\insta.png" class="social_icons" /></a>
       <a href=""><input type="image" src="Icons\twitter.png" class="social_icons" /></a>
       <a href=""><input type="image" src="Icons\YouTube.png" class="social_icons" /></a>
    </div> </div>
    <br>
    <div class="grouped_items">
       <a href="">Privacy Policy | </a>
       <a href="">Cookie Policy | </a>
       <a href="">Terms & Conditions</a>
    </div>
       <br>
       <P class="grouped_items" style="color: white"><img src="Icons\copyright.png" alt="Copyright" width = "20px" height = "20px" >  2021 MyRes. All Rights Reserved </P>
  </footer>

<script type="text/javascript" src="JavaScript_files\homePage.js"></script>
<script type="text/javascript" src="JavaScript_files\index_slide.js"></script>

</body>
</html>