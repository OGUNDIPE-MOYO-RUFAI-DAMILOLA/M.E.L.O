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
    <title>Enter new password</title>
</head>
<body >
    <div class="background mb-5 pb-5">
    
    <!-- nav bar -->

            
    <nav class="navbar navbar-expand-lg sticky-top bg-footer">
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
    </div>

    <div class="container mb-5 pb-5">

    <form method="post" class="offset-lg-4 offset-md-3 mb-5 mt-5">
        <h1 class="mb-5">Enter New Password</h1>


        <div class="form-row">
        <div class="col-md-6 mb-3 mt-3">
            <label for="validationServerUsername">Enter New Password</label>
            <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3"><i class="fa fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="forget_pass" placeholder="Enter new password" name="pass" aria-describedby="inputGroupPrepend3" required>
                <div class="invalid-feedback">
                Please enter a valid password.
                </div>

            </div>
            </div>
        </div>

        <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationServerUsername">Confirm Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3"><i class="fa fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="forget_passcon" placeholder="Confirm password" name="conpass" aria-describedby="inputGroupPrepend3" required>
                <div class="invalid-feedback">
                Please enter a valid password.
                </div>

            </div>
            </div>
        </div>

        <div class="form-group mt-3">

                <button class="btn btn-primary" id="confirm" name="btn" type="submit">Confirm</button>

        </div>


        <?php

            require 'dbconnect.php';
            session_start();

            if(isset($_POST) && !empty($_POST)){
                
                $password = $_POST["conpass"];

                $password = md5($conpassword);
                
                $username = mysqli_real_escape_string($con, $password);

                $sql = "UPDATE user SET user_password = '$password') where user_email = '$id' ";
                

                $result = mysqli_query($con, $query);

                $row = mysqli_fetch_array($result);

                if ($result) {
                    
                    $_SESSION['logged_in'] = $row['USER_USERNAME'];

                    sleep(5);

                    ?>
               <script type='text/javascript'>
                    window.setTimeout(function() {
                        window.location.href = "dashboard.php";
                    }, 500);
                </script> -->

                    <?php                    
                } 
                else{ 
                    echo "error".$sql.mysqli_error($con);
                }
                
            }

        ?>
       
        </form>

    </div>
<?php require 'footer.php';?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>