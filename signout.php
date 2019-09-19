<?php require 'dbconnect.php';
	require 'session.php';

if (!isset($_SESSION['logged_in'])) {
	header('location:signup2.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>signout</title>
</head>
<body>

	<?php

	// session_start();

	if (session_destroy()) {

		header("location:index.php#get_started");
	}

	?>

</body>
</html>