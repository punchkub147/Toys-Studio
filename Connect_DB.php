<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Toys-studio";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn ->connect_error) {
		die("connevtion failed:".$conn->connect_error);
	}else {
		mysqli_set_charset($conn,"utf8");
	}


 ?>