<?php
	include'review.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Main css file sfor the page -->
	<link rel="stylesheet" type="text/css" href="..\css_files\respage.css">
	<!-- bootstrap css files -->
	<link rel="stylesheet" type="text/css" href="..\css_files\Bootstrap_css\bootstrap-grid.css">
    <!-- street view api -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<<<<<<< HEAD
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
=======
    <!-- link imports for review section-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
>>>>>>> 5e984a54f783f9ac2d1d8eca5ded15e9cf05337e
    
</head>
<body>

<body>
 
	<!-- Page header -->
	<?php require 'header.php'; 

        //Connect to sql sever
        require "..\database\sql_connection.php";
        $mainID = $_GET['ID'];

        $sql = mysqli_query($conn, "SELECT * FROM accomodation WHERE Res_ID = '$mainID'");
        $accomodation = mysqli_fetch_array($sql);
        /*Dictionary to translate sharing column in accomodation table*/
        $dict = array('Yes' => 'Sharing', 'No' => 'Single')
    ?>

    <main id="main-container row"> 
        
        <div id="res-description">
    	    <h2> <?php echo $accomodation['Res_Name'] ?> </h2>
        	    <span> <?php echo $accomodation['Address'] ?></span><br>
                <span> <?php echo $accomodation['Email']; ?> </span><br>
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
        <div id="map">
           <iframe src="https://www.google.com/maps/embed?pb=!4v1620740215845!6m8!1m7!1sfOfBMK46-gVbscWlU0ZRMg!2m2!1d-26.18361119313999!2d28.00619552354808!3f149.19291412865016!4f8.852909370330309!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <br>

        <h3 id="Gallery_heading">Gallery:</h3>

        <!-- Display Accomodation Images -->
        <!-- Import databes from Filters file for pictures -->
        <?php require '..\database\Filters.php'; ?>

        <div id="res-pictures" class="row"> 
            <!-- loop through all pictures in database -->
            <?php foreach ($pictures as $picture) { ?>

                <?php $photo = "<img src='$picture' alt='picture' class='imgs'>" ?>
                <span class="pictures">
                    <?php echo $photo; ?>
                </span>
            <?php } ?>
        </div>
        <hr style="clear: both;">
        <br>


<<<<<<< HEAD
        <!-- ratings testing -->
        <div class="col-md-4 rate-input">
            <div>
                <span class="fa fa-star" name="1" id="1" onmouseover="startRating(this)" startRating="starmark(this)" style="font-size:20px; cursor:pointer;"></span>
                <span class="fa fa-star" name="1" id="2" onmouseover="startRating(this)" startRating="starmark(this)" style="font-size:20px; cursor:pointer;"></span>
                <span class="fa fa-star" name="1" id="3" onmouseover="startRating(this)" startRating="starmark(this)" style="font-size:20px; cursor:pointer;"></span>
                <span class="fa fa-star" name="1" id="4" onmouseover="startRating(this)" startRating="starmark(this)" style="font-size:20px; cursor:pointer;"></span>
                <span class="fa fa-star" name="1" id="5" onmouseover="startRating(this)" startRating="starmark(this)" style="font-size:20px; cursor:pointer;"></span>
                
            </div><br>
            <form action="" method="post">
                <input type="hidden" name="rateID" id="rateID" value="1">
                <input type="text" name="email" id="email" placeholder="Email"><br><br>
                <textarea rows="5" placeholder="Enter review here..." name="comment" id="comment" required=""></textarea><br>
                <button name="submit" id="submit">Submit</button>

            </form>

        </div>







        <!--Review section
        <div id="reviews-container">  
=======
        <!--Review section-->

        <div class="row container">
            <div class="col-md-4 ">
                <h3><b>Rating & Reviews</b></h3>
                <div class="row">
                
                    <div class="col-md-6">
                        <h3 align="center"><b><?php echo round($AVGRATE,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
                        <p><?=$Total;?> ratings and <?=$Total_review;?> reviews</p>
                    </div>
                    <div class="col-md-6">
                        <?php
                        while($db_rating= mysqli_fetch_array($rating)){
                        ?>
                            <h4 align="center"><?=$db_rating['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> Total <?=$db_rating['Total'];?></h4>
                            
                            
                        <?php	
                        }
                            
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">	
                    <?php
                        while($db_review= mysqli_fetch_array($review)){
                    ?>
                            <h4><?=$db_review['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <span style="font-size:14px;"><?=$db_review['email'];?></span></h4>
                            <p><?=$db_review['remark'];?></p>
                            <hr>
                    <?php	
                        }
                            
                    ?>
                    </div>
                </div>
                    
                
                <div id="rating_div">
                            <div class="star-rating">
                                <span class="fa divya fa-star-o" data-rating="1" style="font-size:20px;"></span>
                                <span class="fa fa-star-o" data-rating="2" style="font-size:20px;"></span>
                                <span class="fa fa-star-o" data-rating="3" style="font-size:20px;"></span>
                                <span class="fa fa-star-o" data-rating="4" style="font-size:20px;"></span>
                                <span class="fa fa-star-o" data-rating="5" style="font-size:20px;"></span>
                                <input type="hidden" name="whatever3" class="rating-value" value="1">
                            </div>
                </div>
            </div>
        </div><br>

        <input type="hidden" name="demo_id" id="demo_id" value="1">
        
        <div class="col-md-4">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email Id"><br>
            <textarea class="form-control" rows="5" placeholder="Write your review here..." name="remark" id="remark" required></textarea><br>
            <p><button  class="btn btn-default btn-sm btn-info" id="srr_rating">Submit</button></p>
        </div>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/index.js"></script>


        <!-- <div id="reviews-container">  
>>>>>>> 5e984a54f783f9ac2d1d8eca5ded15e9cf05337e
            
            <h2>Reviews</h2>


            Write review button
			<button id="writeReview" onclick="change()">Write Review </button>


                Review Form
				<div id="form" class="form">
					<hr>
					<form id="reviewForm" name="addReview">

						<label>Enter name</label><br>
						<input type="text" id="name" name="name"><br><br>

						<label>Enter rating</label><br>

						<label>Enter email</label><br>
						<input type="text" id="email"><br><br>

						<label>Enter resident review</label><br>
						<input type="text" id="revDes" ><br><br>
						

                        Review Submit button
						<button id="send" type="submit" value="Send"> Submit </button>
			
					</form>

				</div>


<<<<<<< HEAD
                Review Output Container
=======
                Review Output container
>>>>>>> 5e984a54f783f9ac2d1d8eca5ded15e9cf05337e
				<div id="review-results"> 
					<hr>
					
				</div>
<<<<<<< HEAD
 -->
        </div>
=======

        </div> -->
>>>>>>> 5e984a54f783f9ac2d1d8eca5ded15e9cf05337e
        
    </main>

    <script src="../JavaScript_files/respage.js"></script>

    <?php include 'Footer.php'; ?>

    </body>
</html>
</body>
</html>

