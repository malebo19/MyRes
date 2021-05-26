

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
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
                <span> <?php echo '0'.$accomodation['Telephone']; ?> </span><br>
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
           <iframe src=<?php echo $accomodation['maplink']; ?> width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <br>

        <h3 id="Gallery_heading">Gallery:</h3>

        <!-- Display Accomodation Images -->
        <!-- Import databes from Filters file for pictures -->
        <?php $pictures = array('..\pictures\RichmondChill.jpeg', '..\pictures\RichmondEnter.jpeg', '..\pictures\RichmondOutside.jpeg', '..\pictures\RichmondRooms.jpg', '..\pictures\RichmondStudy.jpeg'); ?>

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

        <?php require '../database/review.php'; ?>
        <div class="row container">
            <div class="col-md-4 ">
                <h3><b>Rating & Reviews</b></h3>
                <div class="row">

                    <!-- Average Ratings -->
                    <div class="col-md-6">
                        <h3 align="center"><b><?php echo round($AVGRATE,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
                        <p><?=$Total;?> ratings and <?=$Total_review;?> reviews</p>
                    </div>

                </div>


                <!-- Display Reviews -->
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

            </div>
        </div><br>

        <form method="post">
            
            <!-- Enter Rating -->

            <div class="col-md-4">
                <input type="number" class="form-control" name="rate" id="rate" placeholder="Enter Rating" required><br>
                <input type="text" class="form-control" style="margin-bottom: 10px; margin-top: 10px" name="email" id="email" placeholder="Email Id" re><br><br>
                <textarea class="form-control" rows="5" placeholder="Write your review here..." name="remark" id="remark" required></textarea><br>
                <p><button  class="btn btn-default btn-sm btn-info" id="srr_rating" name="submit">Submit</button></p>
            </div>
        </form>


        
    </main>

    <script src="../JavaScript_files/respage.js"></script>

    <?php include 'Footer.php'; ?>

    </body>
</html>
</body>
</html>

