<?php  
  require 'dbconnect.php';
  
//  if (!isset($_SESSION['logged_in'])){
//      header('location:index.php');
//     }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="picture/image2.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/v4-shims.css">
    <title>About us</title>
</head>
<body >
    
  <div class="background">
    
        <?php                
        require 'header2.php';
        ?>

      <div class="col-md-9">
        <div class="container">

          <div class="mt-5 mb-5"> 
            <h1 class="text-center">Our Amazing Team</h1>
            <p class="text-center"><strong> M.E.L.O is a project of a life time. The idea behind M.E.L.O was Moyosore Ogundipe's. She worked so hard to realise this dream alongside her project patner to ensure it was a successful one. We hope you like it.</strong></p>
          </div>

          <!-- Grid row -->
          <div class="row text-center offset-3">

            <!-- Grid column -->
            <div class="col-md-4 mb-md-0 mb-5 mr-5">
              <div class="mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded z-depth-1-half" alt="image of Moyosore">
              </div>
              <h4 class="font-weight-bold my-4">Ogundipe Moyosore</h4>
              <h6 class="text-uppercase mb-3"><strong>Web Developer</strong></h6>
              <!-- Facebook-->
              <a type="button" class="btn-floating btn-sm mx-1 mb-0">
                <i class="fab fa-facebook-f"></i>
              </a>
              <!--Dribbble -->
              <a type="button" class="btn-floating btn-sm mx-1 mb-0">
                <i class="fab fa-dribbble"></i>
              </a>
              <!-- Twitter -->
              <a type="button" class="btn-floating btn-sm mx-1 mb-0">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4">
              <div class="mx-auto">
                <img src="picture/dammy2.jpg" width="190" class="rounded z-depth-1-half" alt="image of Damilola">
              </div>
              <h4 class="font-weight-bold my-4">Rufai Damilola</h4>
              <h6 class="text-uppercase mb-3"><strong>Web Developer</strong></h6>
              <!--Linkedin -->
              <a type="button" class="btn-floating btn-sm mx-1 mb-0">
                <i class="fab fa-linkedin-in "></i>
              </a>
              <!-- Twitter -->
              <a type="button" class="btn-floating btn-sm mx-1 mb-0 ">
                <i class="fab fa-twitter "></i>
              </a>
              <!--Pinterest -->
              <a type="button" class="btn-floating btn-sm mx-1 mb-0">
                <i class="fab fa-pinterest "></i>
              </a>
            </div>
            <!-- Grid column -->
          </div>
        </div>
      </div>
  </div>

    <?php
        require 'footer.php';
    ?>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>