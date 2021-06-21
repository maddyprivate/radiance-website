<?php
	$post = $_POST;
	//server
	/*$servername = "localhost";
	$username = "radiancedb";
	$password = "]n3*M9Pm2jK7";
	$dbname = "radiancebilling";*/
	//local
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "radiancebilling";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		header('Location: ' . $_SERVER['HTTP_REFERER'].'?error');
		//die("Connection failed: " . $conn->connect_error);
	}
	// exit('in db');
?>