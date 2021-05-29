<?php 

$conn = mysqli_connect('localhost', 'root', '', 'myres');

if (!$conn){
	echo "database fail to connect: ".mysqli_connect_error($conn);
}

 ?>