<?php 

require 'sql_connection.php';

$id = $_POST['id'];

$arr_id = explode("_", $id);

/* get counter of picture selected and res id from posted string*/
$counter = $arr_id[1];
$mainID = $arr_id[2];

/* get res pictures from the database */
$sql = "SELECT pictures FROM pictures where Res_ID = '$mainID'";
$query = mysqli_query($conn, $sql);
$results = mysqli_fetch_assoc($query);

/* separaet pictures to get counter picture */
$arr = explode(",", $results['pictures']);
$picture_id = $arr[(int)$counter];

/* delete picture from local folder */
unlink($picture_id);

/* delete picture frpm database array using the counter*/
unset($arr[(int)$counter]);
$added_pic = implode(",", $arr);

/* update deleted on database */
$sql ="UPDATE pictures SET pictures = '$added_pic' WHERE Res_ID = '$mainID'";
mysqli_query($conn, $sql) or die("Failed to execute: ".mysql_error($conn));


print($added_pic);



 ?>