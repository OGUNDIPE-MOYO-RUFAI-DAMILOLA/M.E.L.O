<?php 

	session_start();
	
	if (session_destroy()) {
		header("location:index.php#get_started");
	}
	
?>