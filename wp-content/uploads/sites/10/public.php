<?php
	require('config.php');

	$id = $_GET['id'];
	$id = ltrim($id, '/');

	$result = $DBH->query("SELECT * FROM uthemes WHERE name = '$id'");

	// If the SQL query is succesfully performed ($result not false)
	if($result !== FALSE) {
		$cols = $result->columnCount();
		if ($cols > 0) {
			include ('public-index.php');
			$DBH=NULL;
		} else {
			echo "
				<html>
				<head>
				<meta http-equiv=\"refresh\" content=\"0;URL=https://awesomestart.com/public-404\">
				<meta name=\"robots\" content=\"noindex\">
				<title>AwesomeStart.com</title>
				</head>
				<body>
				</body>
				</html>";
			exit;
		}
	} else {
		echo "
			<html>
			<head>
			<meta http-equiv=\"refresh\" content=\"0;URL=https://awesomestart.com/gallery/public\">
			<meta name=\"robots\" content=\"noindex\">
			<title>AwesomeStart.com</title>
			</head>
			<body>
			</body>
			</html>";
		exit;
	}
?>
