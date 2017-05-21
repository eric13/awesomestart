<?php
	$host = "localhost:3306";
	$user = "bn_wordpress";
	$pass = "f344e36a58";
	$db = "bitnami_wordpress";

	mysql_pconnect ($host, $user, $pass) or die("error connecting to mysql");
	mysql_select_db ($db) or die("error connecting to database");

	// Connecting
	try {
		$DBH = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
