<?php 

session_start();
error_reporting(E_ALL & ~E_WARNING);

/* get login details from jquery post */
$username = $_POST['username'];
$password = $_POST['password'];


require "sql_connection.php";


/* serach for user name in database */
$sql =mysqli_query($conn, "SELECT Email, User_Password, Res_ID  FROM users WHERE Email='$username'");

$query_results = mysqli_fetch_assoc($sql);

$Res_ID = $query_results["Res_ID"];
$user_found = $query_results['Email'];
$user_password = $query_results["User_Password"];


/* i started by password beacuse of a logic i forgot, but it works so dont touch it */

/* store response to read in jquery ajax*/
$user_check = false;
$pass_check = false;

/* verify if password correct for*/
if (!empty($password)){

	/* verify if password is correct */
	if ($password == $user_password){
		$pass_check = true;
		$_session['username'] = $user_found;
		$_session['Id'] = $Res_ID;
		$_session['user_password'] = $user_password;
		
	}
	else{
		$pass_check = false;
	}
}
/* verify if username entred exists */
if (!empty($username)){
	
	/* return true if user found */
	if (!empty($user_found)){
		$user_check = true;
	}
	else{
		$user_check =false;
	}
}

$results[] = array(
	'user_checked' => $user_check,
	'pass_checked' => $pass_check,
	'Id' => $Res_ID);

/* encoding array in json format */
echo json_encode($results);

 ?>