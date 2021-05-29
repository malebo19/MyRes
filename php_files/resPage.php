<?php
        //Connect to sql sever
        require "..\database\sql_connection.php";
        $mainID = $_GET['ID'];

        $sql = mysqli_query($conn, "SELECT * FROM accomodation WHERE Res_ID = '$mainID'");
        $accomodation = mysqli_fetch_array($sql);

        /*Dictionary to translate sharing column in accomodation table*/
        $dict = array('Yes' => 'Sharing', 'No' => 'Single');

        $title = 'MyRes\\'. $accomodation['Res_Name'];
    ?>  

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>    
	<!-- Main css file sfor the page -->
	<link rel="stylesheet" type="text/css" href="..\css_files\respage.css"> 
	<!-- bootstrap css files -->
	<link rel="stylesheet" type="text/css" href="..\css_files\Bootstrap_css\bootstrap-grid.css"> 
    <!-- street view api -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script> 
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- tab imgae -->
    <link rel="shortcut icon" href="..\pictures\MYRESnew.png">
    <!-- poppins fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
</head>
<body>

<body>
 
	<nav class="row">
        <!-- logo and naem -->
        <div id="title" class="col-lg-3 col-md-3 row">
            <img id="logo" src="..\pictures\MYRESnew.png" class="col-lg-4"></img>
            <span class="col-lg-2" id="nav_title">MyRes</span>
        </div>
        <div id="nav_btns" class="col-lg-4 col-md-4">
            <a href="#footer_div" class="nav_btn col-lg-4 col-lg-4">Contacts</a>
            <a href="..\index.php#about_us" class="nav_btn col-lg-4 col-lg-4">About us</a>
            <a href="..\index.php" id="nav_home" class="col-lg-4 col-md-4">Home</a>
        </div>
    </nav>

    

    <section id="des_map" class="row"> 
        
        <div id="res-description" class="col-lg-7 col-lg-7">
    	    <h1><?php echo $accomodation['Res_Name'] ?> </h1>
        	    <p class='res_contacts'> <?php echo $accomodation['Address'] ?></p><br>
                <p class='res_contacts'> <?php echo $accomodation['Email']; ?> </p><br>
                <p class='res_contacts'> <?php echo '0'.$accomodation['Telephone']; ?> </p><br>
    	    <h3> Res Description </h3>
    	    <p> <?php echo $accomodation['Description']; ?> </p>
            <h3>Accomodation offers:</h3>
            <ul>
                <li><?php echo $dict[$accomodation['Sharing']]." rooms."; ?></li>
                <li><?php echo "Located in ".$accomodation['Campus']; ?></li>
                <li><?php echo "R{$accomodation['Price_Accreditation']} per student" ?></li>
            </ul>
        </div>

        <!-- street view map -->
        <div id="map" class="col-lg-4 row">
           <iframe height="450" style="border:0;" id="map_api" allowfullscreen="" loading="lazy" src=<?php echo $accomodation['maplink']; ?> ></iframe>
        </div>
    </section>
    
    <br>

    <!-- Import Pictures Query -->
    <?php require "../database/update_profile.php" ?>

    <!-- Display Accomodation Images -->
     <section id="pics" class='row'>
        <?php if (empty($pictures)) { ?>
            <h3 id="no_img">No pictures found!</h3>
        <?php } ?>
        <?php for ($i=0; $i < count($pictures)-1; $i++) { ?>

            <?php $photo = "" ?>
            <span class="pictures col-lg-4 col-md-4">
                <img alt='picture' class='imgs' src=<?php echo $pictures[$i] ?> >
            </span>
        <?php } ?>
    </section>

    <hr style="clear: both;">
    <br>

    <?php require '../database/review.php'; ?>
    <section class="row container">
        <div class="col-lg-6 col-md-6" id="ratings">

            <!-- Average Ratings -->

            <div id='show_review'>
                <h3>Average Rating</h3>
                <h3 id='rate_count'><?php echo round($AVGRATE,1);?><i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
                <p><?=$Total;?> ratings and <?=$Total_review;?> reviews</p>
            </div>


            <!-- Display Reviews -->
            <div>
            <hr>	
            <?php while($db_review= mysqli_fetch_array($review)){ ?>
                <h4><?=$db_review['rating'];?> <i class="fa fa-star" data-rating="2" ></i><span ><?=$db_review['email'];?></span></h4>
                    <p class="user_comm"><?=$db_review['remark'];?></p>
                <hr>
            <?php } ?>
            </div>
        </div>
        
        <!-- Enter Rating -->
        <div class="col-lg-6 col-lg-6" id="enter_review">

            <form method="post">
                <input type="number" class="form-control" name="rate" id="rate" placeholder="Enter Rating" min="1" max="5" required><br>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email Id" re><br><br>
                <textarea class="form-control" rows="5" placeholder="Write your review here..." name="remark" id="remark" required></textarea><br>
                <p><button  class="btn btn-default btn-sm btn-info" id="srr_rating" name="submit">Submit</button></p>
            </form>
        </div>
    </section>

    <script src="../JavaScript_files/respage.js"></script>

    <div id="footer_div">
        <?php include 'Footer.php'; ?>
    </div>

    </body>
    <script type="text/javaScript">
        window.addEventListener("scroll",()=>{
            var row = document.querySelector(".row");
            row.classList.toggle("sticky",window.scrollY > 0);
        })

    </script>
</html>
</body>
</html>

