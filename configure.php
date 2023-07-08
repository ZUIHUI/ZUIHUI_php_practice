<?php
	/*連線資料庫*/
	$hostname = "localhost";
	$username = "root";		
	$password = "";		
	$database = "db_pokemon";			
	$link = new PDO('mysql:host='.$hostname.';dbname='.$database.';charset=utf8', $username, $password);
?>
