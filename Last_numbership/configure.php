<?php
	$hostname = "localhost";
	$username = "root";		
	$password = "";		
	$database = "db_note";			
	$link = new PDO('mysql:host='.$hostname.';dbname='.$database.';charset=utf8', $username, $password);
?>
