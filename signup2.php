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
    
<!-- Main navigation -->
<header>
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('http://mdbootstrap.com/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row mt-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Sign up right now! </h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
            nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
            dolor molestiae, quisquam iste, maiores. Nulla.</h6>
            <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
              <div class="card-body">
                <!--Header-->
                <div class="text-center">
                  <h3 class="white-text">
                    <i class="fa fa-user white-text"></i> Sign up</h3>
                  <hr class="hr-light">
                </div>
                
                <!--Body-->
              <form method="post" action="signup2.php">
                <div class="md-form">
                  <i class="fa fa-user prefix white-text active"></i>
                  <input type="text" id="signup_name" class="white-text form-control" name="username">
                  <label for="form3" class="active">Your username</label>
                </div>
                <div class="md-form">
                  <i class="fa fa-envelope prefix white-text active"></i>
                  <input type="email" id="signup_email" class="white-text form-control" name="email">
                  <label for="form2" class="active">Your email</label>
                </div>
                <div class="md-form">
                  <i class="fa fa-lock prefix white-text active"></i>
                  <input type="password" id="signup_pass" class="white-text form-control" name="password">
                  <label for="form4">Your password</label>
                </div>
                </form>
                <div class="text-center mt-4">
                  <input type="submit" class="btn btn-indigo" id="btn_signup" value="Sign up" name="Signup">
                </div>

                  <hr class="hr-light mb-3 mt-4">
                  <div class="inline-ul text-center d-flex justify-content-center">
                    <a class="p-2 m-2 tw-ic">
                      <i class="fab fa-twitter white-text"></i>
                    </a>
                    <a class="p-2 m-2 li-ic">
                      <i class="fab fa-linkedin-in white-text"> </i>
                    </a>
                    <a class="p-2 m-2 ins-ic">
                      <i class="fab fa-instagram white-text"> </i>
                    </a>
                  </div>
              </div>
               
            </div>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
<!--Footer requirement-->
<footer>
<?php require 'footer.php'; 
?>
</footer>
<!--Footer requirement-->

       <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</body>
</html>