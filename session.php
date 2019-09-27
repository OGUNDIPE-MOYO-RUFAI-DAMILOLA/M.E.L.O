<?php

	include ('dbconnect.php');
	session_start();

	$myusername = $_SESSION['logged_in'];

	$query = " SELECT * FROM user where USER_USERNAME = '$myusername' ";

	$sql = mysqli_query($con , $query);

	$row = mysqli_fetch_array ($sql, MYSQLI_ASSOC);

	$id = $row['USER_ID'];

	$firstname = $row['USER_FIRSTNAME'];

	$lastname = $row['USER_LASTNAME'];
	
    $email = $row['USER_EMAIL'];
    
    $gender = $row['USER_GENDER'];

    $dob = $row['USER_DOB'];

    $country = $row['COUNTRY'];

    // $playlist = $row['PLAYLIST'];
	
	$username = $row['USER_USERNAME'];
	
	$phonenumber = $row['USER_PHONENUMBER'];
	
	$password = $row['USER_PASSWORD'];
	
	$picture = "<img src='userimage/".$row['USER_IMAGE']." 
	alt='image'image'>";

	if (!isset($_SESSION['logged_in'])) {
		// echo "yes!!!";
		header("locaton:index.php#get_started");
		exit();
	}

?>