<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Sign up</title>
</head>
<body >
    <div class="background">
    
<!-- nav bar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-danger-invisible " >
        <a class="navbar-brand" href="index.php">
            <img src="logo.png" width="50" height="50">
            <strong>M.E.L.O</strong> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse offset-5" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item mr-5">
                    <a class="nav-link" href="index.php"><strong>Home</strong></a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link" href="#"><strong>Music</strong></a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link" href="#"><strong>Contact us</strong></a>
                </li>
            </ul>
        </div>
    </nav>

<!-- nav bar -->
    </div>

    <div class="container">

    <form method="post" class="offset-lg-4 offset-md-3 mt-5">
        <h1 class="mb-5">Sign up</h1>
        <div class="form-row">
            <div class="col-md-6 mb-3 mt-6">
                <label for="validationServer01">First name</label>
                <input type="text" class="form-control" id="validationServer01" placeholder="First name" name="first" value="" required>
                <div class="invalid-feedback">
                Please choose a First name.
                </div>
            </div>

        </div>
        <div class="form-row">
            <div class="col-md-6">
                <label for="validationServer02">Last name</label>
                <input type="text" class="form-control" id="validationServer02" placeholder="Last name" name="last" value="" required>
                <div class="invalid-feedback">
                Please choose a Last name.
                </div>
            </div>

        </div>
        <div class="form-row">
        <div class="col-md-6 mb-3 mt-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                </div>
                <input type="text" class="form-control " id="validationServerUsername" placeholder="Username" name="username" aria-describedby="inputGroupPrepend3" required>
                <div class="invalid-feedback">
                Please choose a username.
                </div>

            </div>
            </div>
        </div>

        <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationServerUsername">Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control " id="validationServerUsername" placeholder="Email" name="email" aria-describedby="inputGroupPrepend3" required>
                <div class="invalid-feedback">
                Please enter an email.
                </div>

            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationServer03">Password</label>
            <input type="password" class="form-control" id="validationServer03" name="pass" placeholder="Password" required>
            <div class="invalid-feedback">
                Please enter a valid password.
            </div>
            </div>
 
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
                <label class="form-check-label" for="invalidCheck3">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
                <button class="btn btn-primary ml-5 sm-mt-5" name="btn" type="submit">Submit form</button>
            </div>
        </div>


        <?php

            require 'dbconnect.php';

            if(isset($_POST) && !empty($_POST)){

                $firstname = $_POST["first"];
                $lastname = $_POST["last"];
                $username = $_POST["username"];
                $password = $_POST["pass"];
                $email = $_POST["email"];
                
                $firstname = mysqli_real_escape_string($con, $firstname);
                $lastname = mysqli_real_escape_string($con, $lastname);
                $username = mysqli_real_escape_string($con, $username);

                $sql = "INSERT INTO user values(' ', '$firstname', '$lastname', '$username', '$email', '$password')";

                if (mysqli_query($con, $sql)) {
                    
                    $msg = "You have successfully Registered. <a href='dashboard.php#get_started'>Login</a> Now!!!";

                    echo "<div class='echo'>";

                    echo $msg;

                    echo "</div>";
                } 
                else{ 
                    echo "error".$sql.mysqli_error($con);
                }
                
            }

            mysqli_close($con);

        ?>
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
            <div class=" mt-4">Already a member? <a href="newlogin.php">Login</a></div>
        </div>
       
        </form>

    </div>

</body>
</html>