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
    <title>Login</title>
</head>
<body >




<?php 
          
        require_once 'dbconnect.php';
        session_start();

          

               

           if ($_SERVER["REQUEST_METHOD"]=="POST"){

                   $username = stripslashes($_POST['username']);

                   $password = md5(stripslashes($_POST['password']));

                   // $msg = array();

                   $username = mysqli_real_escape_string($con, $username);

                   $password = mysqli_real_escape_string($con, $password);

                   $sql = "SELECT * FROM user WHERE user_username = '$username' AND user_password = '$password'";

                   $result = mysqli_query($con,$sql);

                   $row = mysqli_fetch_array($result);

                   $count = mysqli_num_rows($result);
                  
                   $id = $row['USER_ID'];

                   if ($count == 1){
                       
                       $_SESSION['logged_in'] = $username;
                       sleep(5);

                       ?>
                   
                       <script type='text/javascript'>
   
                       window.setTimeout(function() {
                           window.location.href = "dashboard.php?user=";
                       }, 500);

                       </script>
   
                       <?php  
                        ?><script><?php echo("location.href = '".ADMIN_URL."/dashboard.php?user=$username';");?></script><?php

                       header("location:dashboard.php?user=$username");
                   }

                   else {
                       echo " Invalid login details";
                   }

               }
           ?>
    <div class="background mb-5 pb-5" >
        
    
        <!-- nav bar -->

            
        <nav class="navbar navbar-expand-lg sticky-top bg-footer opacity" style="transparent">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">
                                <img src="picture/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
                                <span class="logo">M.E.L.O</span>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active mr-5">
                                        <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item mr-5">
                                        <a class="nav-link text-white" href="viewalbum.php">Albums</a>
                                    </li>
                                    <li class="nav-item mr-5">
                                        <a class="nav-link text-white" href="song.php">Treanding</a>
                                    </li>

                                    <li class="nav-item mr-5">
                                        <a class="nav-link text-white" href="contactus.php">Contact Us</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </nav>


        <!-- nav bar -->


            <div class="container">

                <form method="post" class="offset-lg-4 offset-md-3 mt-5">
                    <h1 class="mb-5">Login</h1>

                    <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServerUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control " name="username" id="login_name" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                            <div class="invalid-feedback">
                            Please choose a username.
                            </div>

                        </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                        <label for="validationServer03">Password</label>
                        <input type="password" class="form-control" name="password" id="login_pass" placeholder="Password" required>
                        <div class="invalid-feedback">
                            Please enter a valid password.
                        </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary sm-mt-5" id="btn_login" type="submit">Login</button>
                        <div class=" mt-4"><a href="newforgotpassword.php">Forgot password?</a>/<a href="newsignup.php">Sign up</a></div>
                        
                    </div>
                    <div class="form-group">
                        <div class="mt-4 inline-ul text-center d-flex ">

                            <a class="p-2 m-2 tw-ic">
                                <i class="fab fa-twitter white-text"></i>
                            </a>
                            <a class="p-2 m-2 li-ic">
                                <i class="fab fa-linkedin-in white-text"> </i>
                            </a>
                            <a class="p-2 m-2 ins-ic">
                                <i class="fab fa-instagram white-text"> </i>
                            </a>
                            <a class="p-2 m-2 ins-ic">
                                <i class="fab fa-google"></i>
                            </a>
                            
                        </div>
                    </div>

            
                </form>

            </div>
        </div>

    <?php require 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"> </script>

</body>
</html>