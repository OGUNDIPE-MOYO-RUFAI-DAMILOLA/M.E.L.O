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
    <title>Forgot Password</title>
</head>
<body >
    <div class="background mb-5  pb-5">
    
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
 

        <div class="container mb-5 pb-5">

            <form method="post" class="offset-lg-4 offset-md-3 pt-5 mt-5">
                <h1 class="mb-5">Forget Password?</h1>

                <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationServerUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" ><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control " placeholder="Email" name="email" aria-describedby="inputGroupPrepend3" required>
                        <div class="invalid-feedback">
                        Please enter an email.
                        </div>

                    </div>
                    </div>
                </div>

                <div class="form-group mt-5">
                        <button class="btn btn-primary" name="btn" type="submit">Send my password</button>
                </div>


                <?php

                    require 'dbconnect.php';

                    if(isset($_POST) && !empty($_POST)){


                        $email = $_POST["email"];

                        $email = mysqli_real_escape_string($con, $email);

                        $sql = "SELECT * FROM user WHERE user_email = '$email'";

                        $result = mysqli_query($con,$sql);

                        $row = mysqli_fetch_array($result);

                        $count = mysqli_num_rows($result);

                        if ($count == 1){

                            $message = $row['USER_PASSWORD'];
                            
                            $to = $row['USER_EMAIL'];
                            $subject = "Forgot password";
                            $from = "M.E.L.O";


                        $message = "This is your password" . $message;

                        // To send HTML mail, the Content-type header must be set
                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                        
                        // Create email headers
                        $headers .= 'From: '.$from."\r\n".
                            'Reply-To: '.$from."\r\n" .
                            'X-Mailer: PHP/' . phpversion();
                        
                        
                        // Sending email
                        if(mail($to, $subject, $message, $headers)){
                            
                            sleep(3);
                            echo 'Your mail has been sent successfully.';

                            ?>
                            <script type='text/javascript'>
                            window.setTimeout(function() {
                                window.location.href = "newforgotpassword2.php?id=<?php echo $email;?>";
                            }, 500);
                            </script>

                            <?php  
                        } 
                        else{

                            echo 'Unable to send email. Please try again.';
                        }
                       

                        
                    }
                }
                   

                ?>
            </form>
        </div>
    </div>
        
    <?php require 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>