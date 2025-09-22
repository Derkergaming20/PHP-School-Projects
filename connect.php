<?php 
	//the db can be replace when using SQL
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "citemis-db";
	$connect = new mysqli($host, $user, $pass, $db);

	if($connect -> connect_error){
		echo "failed to connect DB" . $connect -> connect_error;
	} 
?>