<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$db = "m.e.l.o_db";

 $con = mysqli_connect($dbhost,$dbuser,$dbpassword,$db);

if (!$con) {

	# code...
 die ("connection failed " . mysqli_connect_error());
} 



if(mysqli_select_db($con, "m.e.l.o_db")){

	echo "";

}


?>
