<?php session_start(); 
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="..\css_files\Bootstrap_css\bootstrap.min.css">
    <!-- import jquery -->
    <script type="text/javascript" src="..\JavaScript_files\jquery.js"></script>
    <!-- main css for the page -->
    <link rel="stylesheet" type="text/css" href="..\css_files\profile.css">
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awsome CDN -->
    <script src="https://kit.fontawesome.com/e005c8a2fd.js"></script>
    <!-- poppins fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--lobster fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Staatliches&display=swap" rel="stylesheet">
     <!-- tab imgae -->
     <link rel="shortcut icon" href="..\pictures\MYRESnew.png">

</head>
<body class="row">

<!-- only allows users to profile page when signed in -->
<?php if (false) {?>
<div id="denied_img"><img src="../pictures/access_denied.jpg" style="width: 100%; height: 100%;"></div>
<div id="denied_msg">
    <p>You are currently unauthorized to enter this page. Please log in with your accomodation details to access to contents of this page</p>
    <hr>
    <a href="" id="return_home">Return Home</a>
    <a href="" id="signIn">Sing In</a>
    <style type="text/css">
        body {
            padding: 0px;
            margin: 0px;
        }
    </style>
</div>
<?php }else{ ?>

<?php 
$mainID = $_GET['ID'];
$_SESSION['ID'] = $mainID;
#require "header.php";
require "../database/update_profile.php" ;
?>
<!-- <span id="session_id" style="opacity: 0; position: absolute;"><?php echo $mainID ?></span> -->

<nav class="row">
        <!-- logo and naem -->
        <div id="title" class="col-lg-3 col-md-3 row">
            <img id="logo" src="..\pictures\MYRESnew.png" class="col-lg-4"></img>
            <span class="col-lg-2" id="nav_title">MyRes</span>
        </div>
        <div id="nav_btns" class="col-lg-4 col-md-4">
            <a href="#footer_div" class="nav_btn col-lg-4 col-lg-4">Contacts</a>
            <a href="..\index.php#about_us" class="nav_btn col-lg-4 col-lg-4">About us</a>
            <a href="..\index.php" id="nav_home" class="col-lg-4 col-md-4">Logout</a>
        </div>
    </nav>


<!-- Section used to align the page well -->
<section id="left" class="col-lg-4 col-md-4">
    <!-- Summary of profile -->
    <section id="profile_summary">
        <img id="profile_img" src=<?php echo "".$profile_pic."" ?> ></img>
        <h2 id="res_title"><?php echo $results['Res_Name'] ?></h2>
        <div id="email_title"><?php echo $results['Email'] ?></div>
        <div id="tel_titile"><?php echo "0".$results['Telephone'] ?></div>


        <div class="upload">
            <input type="file" accept="image/*" id="edit_file" style="opacity:5" name=<?php echo $mainID; ?>>

            <input type="button" id="edit_profile" name="edit_profile_img" value="Change profile picture" class="btn">
        </div>


    </section>

    <!-- Reviews section -->
    <?php require "../database/review.php" ?>
    <section id="reviews">
        <h3>Reviews</h3>
        <!-- Display Reviews -->
        <div class="row">
            <div class="col-md-12"> 
            <?php
                while($db_review= mysqli_fetch_array($review)){
            ?>
            <h4><?=$db_review['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#F4D03F;"></i> by <span class="email"><?=$db_review['email'];?></span></h4>
            <p><?=$db_review['remark'];?></p>
            <hr>
            <?php   
                }
                    
            ?>
            </div>
        </div>
    </section>
</section>

<section id="right" class="col-lg-8 col-md-8">
    <!-- Detailed view of profile -->
    <section id="detailed_profile">
        <div class="line">
            <label>Full name</label>
            <span id="full_name" class="view"><?php echo $results["Res_Name"] ?></span>
        </div>
        <div class="line">
            <label>Email</label>
            <span id="email" class="view"><?php echo $results['Email'] ?></span>
        </div>
        <div class="line">
            <label>Password</label>
            <span id="password" class="view">*********</span>
        </div>
        <div class="line">
            <label>Telephone</label>
            <span id="phone" class="view"><?php echo "0".$results['Telephone'] ?></span>
        </div>
        <div class="line">
            <label>Price</label>
            <span id="price" class="view"><?php echo $results['Price_Accreditation'] ?></span>
        </div>
        <div class="line">
            <label>Campus</label>
            <span id="campus" class="view"><?php echo $results['Campus'] ?></span>
        </div>
        <div class="align_div">
            <button class="change">Edit</button>

            <button id="delete" class="delete" name="delete">Delete</button> 
        </div>
    </section>

    <!-- Editing profile deatails -->
    <section id="edit_form">
        <script type="text/javascript">
            $("#edit_form").hide();
        </script>
        <?php $link =  "profile.php?ID=".$mainID ?>
        <form method="post" action=<?php echo $link; ?> >
        <div class="line">
            <label>Full name</label>
            <input type="text" name="full_name" class="edit" id="full_name">
        </div>
        <div class="line">
            <label>Email</label>
            <input type="text" name="email" class="edit" id="email">
        </div>
        <div class="line">
            <label>Password</label>
            <input type="text" name="password" class="edit" id="password">
        </div>
        <div class="line">
            <label>Telephone</label>
            <input type="text" name="tel" class="edit" id="tel">
        </div>
        <div class="line">
            <label>Price</label>
            <input type="text" name="price" class="edit" id="price">
        </div>
        <div class="line">
            <label class="edit">Campus</label>
            <select name="campus" class="edit" id="" style="width:150px">
                <option>Select campus</option>
                <option>APB</option>
                <option>APK</option>
                <option>DFC</option>
                <option>SWC</option>
            </select>
        </div>
        <div class="align_div">
            <input type="submit" class="change" id="update_profile" value="Update">
        </div>
        </form>
    </section>

    <!-- Section used to align the page well -->
    <section id="pic_des" class="row">
        <!-- accomodation pictures -->
        <section id="pictures" class="col-lg-6 col-md-6">
            <h3>Gallery</h3>
            <hr>
            <div id="pics" class="row">
                <?php for ($i=0; $i < count($pictures); $i++) { ?>

                <?php $photo = "";
                $btn_id = "D_".$i."_".$mainID ?>
                <div class="pictures col-lg-6 col-md-6">
                    <button onclick="del(this.id)" class="trash" id=<?php echo $btn_id ?> >
                    <i class="far fa-trash-alt" id="trash"></i>

                    </button>
                    <img alt='picture' class='imgs' src=<?php echo $pictures[$i] ?> >
                </div>
            <?php } ?>
            </div>
            <div class="upload">
                <input type="file" accept="image/*" class="add_img" name="" id="add_img" style="opacity:5">

                <input type="button" name="" id="add_picture" value="Add Picture" class="btn">
            </div>
        </section>

        <!-- accomodation description box -->
        <section id="description" class="col-lg-6 col-md-6">
            <h3>Description</h3>
            <hr>
            <?php $link =  "profile.php?ID=".$mainID ?>
        <form method="post" action=<?php echo $link; ?> >
            <textarea type="text" id="res_description" name="description"><?php echo $results['Description'] ?>
            </textarea>
            <input type="submit" id="update_des" value="Update" class="btn">
            </form>
        </section>

    </section>
</section>

<div style="height: 50px"></div>

<?php require "Footer.php" ?>
<?php } ?>

<script type="text/javascript" src="..\JavaScript_files\profile.js"></script>
</body>
</html>
