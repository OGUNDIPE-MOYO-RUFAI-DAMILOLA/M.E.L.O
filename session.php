<?php

	include ('dbconnect.php');
	session_start();

	$myusername = $_SESSION['logged_in'];

	$query = " SELECT * FROM user where USER_USERNAME = '$myusername' ";

	$sql = mysqli_query($con , $query);

	$row = mysqli_fetch_array ($sql, MYSQLI_ASSOC);

	$firstname = $row['USER_FIRSTNAME'];

	$lastname = $row['USER_LASTNAME'];
	
    $email = $row['USER_EMAIL'];
    
    $gender = $row['USER_GENDER'];

    $dob = $row['USER_DOB'];

    $countryid = $row['COUNTRY_ID'];

    $playlistid = $row['PLAYLIST_ID'];

    $imageid = $row['IMAGE_ID'];
	
	$username = $row['USER_USERNAME'];
	
	$phonenumber = $row['USER_PHONENUMBER'];
	
	$password = $row['USER_PASSWORD'];
	
	$picture = "<img src='photo/".$row['picture']." 
	alt='image'image'>";
	
	// $_FILES ['image'] ['name'];

	if (!isset($_SESSION['logged_in'])) {

		header("locaton:index.php#get_started");
	}

?>