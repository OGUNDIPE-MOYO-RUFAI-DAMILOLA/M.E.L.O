<?php require 'db.php';
	  require 'session.php';

if (!isset($_SESSION['logged_in'])) {
	header('location:dashboard.php');
}

if(isset($_GET['id'])) {
	$id = $_GET['id'];

	

$sql = "DELETE FROM product where 'user_id' = '$id'";

if (mysqli_query($con,$sql)){
	
	header('location:editprofile.php?user=$username');

}
else{
	"error" . $sql ."<br/>" .mysqli_error($con);

}

}
mysqli_close($con);
?>