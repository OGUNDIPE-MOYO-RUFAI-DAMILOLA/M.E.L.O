<?php
 	// require 'db.php';
	// require 'session.php';

	// if (!isset($_SESSION['logged_in'])) {
  	// header('location:login2.php');
	// }

?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container-fluid">
      <a class="navbar-brand offset-md-1" href="index.php"><img src="logo.png" width="40" height="40"  class="d-inline-block align-top" alt="M.E.L.O logo">
        <strong>M.E.L.O</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse offset-md-6" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Music</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="aboutus.php">About us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="contactus.php">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Navbar -->

	<div class="tooltip">
			<button class="button"><span>CHECK</span></button>
			<span class="tooltiptext"><?php echo "<img src='photo/".$row['picture']."' class='checky' alt='image'>";
			echo $username;?><img src="check.png" class="check"> </span>
	</div>

<?php require 'db.php';

echo "<div class='all'>";

			echo "<div class='photo'>";
					echo "<a href='photo/".$row['picture']."'>
					 <img src='photo/".$row['picture']."' alt='image'> </a>";
					 echo "<p>" .'USERNAME: '  .$username.' </p> <br/>';
			echo "</div>";

							// echo "<div class='border'>"."</div>";

			echo "<p>".'NAME :  ' .$surname .'   '.$firstname.' </p>';
      echo "<p>".'EMAIL : ' .$email.'. </p>';
      echo "<p>".'PHONE_NO :  ' .$phone.'. </p>';
			echo "<p>".'ADDRESS :  ' .$address.'. </p>';
			echo "<p>".'GENDER : ' .$gender.'. </p> ';
?>
			<form action="editprofile.php?user=<?php echo $username;?>">
        <input type="submit" value="EDIT PROFILE"/>
      </form>
<?php
			echo "<div class='logo'>";
					echo "<a href='#'><img src='fb.png'></a>";
					echo "<a href='#'><img src='insta.png'></a>";
					echo "<a href='#'><img src='whats.jpg'></a>";
			echo "</div>";


echo "</div>";

echo "</br>";
	?>

  <!-- JQuery -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
</body>
</html>
