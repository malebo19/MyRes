<?php
	
    require '../database/sql_connection.php';

    $sql = mysqli_query($conn, "SELECT * FROM accomodation WHERE Res_ID = '$mainID'");

if (isset($_POST["submit"])){
    #get variables
    $rate = $_POST["rate"];
    $email = $_POST["email"];
    $remark = $_POST["remark"];

        #query
    $query = "INSERT INTO ratings (res_id, rating,email,remark,date_time) VALUES ('$mainID','$rate','$email','$remark',now());";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

    $sql = "SELECT avgrate from accomodation where Res_ID = '$mainID'";
    $rating = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rating = mysqli_fetch_assoc($rating);

    $sql = mysqli_query($conn,"SELECT AVG(rating) as AVGRATE from ratings where res_id = '$mainID'");
    $row = mysqli_fetch_array($sql);
    $AVGRATE=$row['AVGRATE'];

    $sql = "UPDATE accomodation SET avgrate = '$AVGRATE' WHERE Res_ID = '$mainID'";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if ($result){
        ?>
        <script>
            alert("Data stored!");
        </script>
        <?php
    }else {
        ?>
        <script>
            alert("Error!");
        </script>
        <?php
    }
    
}

$query = mysqli_query($conn,"SELECT AVG(rating) as AVGRATE from ratings where res_id = '$mainID'");
$row = mysqli_fetch_array($query);
$AVGRATE=$row['AVGRATE'];

$query = mysqli_query($conn,"SELECT count(rating) as Total from ratings where res_id = '$mainID'");
$row = mysqli_fetch_array($query);
$Total=$row['Total'];

$query = mysqli_query($conn,"SELECT count(remark) as Totalreview from  ratings where res_id = '$mainID'");
$row = mysqli_fetch_array($query);
$Total_review=$row['Totalreview'];

$review = mysqli_query($conn,"SELECT remark,rating,email from ratings where res_id = '$mainID' order by date_time desc limit 4 ");

$rating = mysqli_query($conn,"SELECT count(*) as Total,rating from ratings group by rating order by rating desc");

    
?> 