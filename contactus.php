<?php                
 require 'dbconnect.php';


//   if (!isset($_SESSION['logged_in'])){
//      header('location: index.php');
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
    <title>Contact us</title>
</head>
<body >
    
  <div class="background">
    
        <?php                
        require 'header2.php';
        ?>


        <div class="col-md-9">
            <div class="container">

            <form method="post" class="offset-lg-4 offset-md-3 mt-5">
                <h1 class="mb-5">Write to us</h1>
            
                <div class="form-row">
                <div class="col-md-6 mb-3 mt-3">
                    <label for="validationServerUsername">Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text fa fa-user" id="inputGroupPrepend3"></span>
                        </div>
                        <input type="text" class="form-control " placeholder="Name" name="name" aria-describedby="inputGroupPrepend3" required>
                        <div class="invalid-feedback">
                        Please enter your name.
                        </div>

                    </div>
                    </div>
                </div>

                <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationServerUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text fa fa-envelope"></span>
                        </div>
                        <input type="email" class="form-control " placeholder="Email" name="email" aria-describedby="inputGroupPrepend3" required>
                        <div class="invalid-feedback">
                        Please enter an email.
                        </div>

                    </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3 px-0">
                    <label for="validationServerUsername">Your message</label>
                    <div class="input-group">
                        <textarea class="form-control" placeholder="Message" name="message" rows="3" required></textarea>
                        <div class="invalid-feedback">
                        Please enter your message.
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check pl-0">
                        <button class="btn btn-primary sm-mt-5 mb-5" name="btn" type="submit">Send</button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label" for="invalidCheck3">
                            Subscribe me to the newsletter
                        </label>
                    </div>
                </div>



                <?php

    

                    if(isset($_POST) && !empty($_POST)){

                        $to = "moyosoreogundipe2003@gmail.com";
                        $subject = $_POST["name"];
                        $from = $_POST["email"];
                        $message = $_POST["message"];

                        // To send HTML mail, the Content-type header must be set
                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                        
                        // Create email headers
                        $headers .= 'From: '.$from."\r\n".
                            'Reply-To: '.$from."\r\n" .
                            'X-Mailer: PHP/' . phpversion();
                        
                        
                        // Sending email
                        if(mail($to, $subject, $message, $headers)){
                            

                            echo 'Your mail has been sent successfully.';

                            ?>
                            <script type='text/javascript'>
                            window.setTimeout(function() {
                                window.location.href = "dashboard.php";
                            }, 500);
                            </script>

                            <?php  
                        } else{


                            echo 'Unable to send email. Please try again.';
                        }
                       

                        
                    }

                ?>


            </form>

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