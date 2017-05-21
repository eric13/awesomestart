<?php
	$host = "HOST";
	$user = "USER";
	$pass = "PASS";
	$db = "DB";

	mysql_pconnect ($host, $user, $pass) or die("error connecting to mysql");
	mysql_select_db ($db) or die("error connecting to database");

	// Connecting
	try {
		$DBH = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
