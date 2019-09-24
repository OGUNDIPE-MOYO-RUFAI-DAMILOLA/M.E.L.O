<?php
require 'dbconnect.php';

if (!isset($_SESSION['logged_in'])) {
    header('location:index.php');
}
require 'session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Profile</title>
</head>

<body>
    <div class="background">

        <?php
        require 'header.php';
        ?>


        <div class="col-md-9">
            <div class="container">

                <h1 class="mb-5 text-center ">Profile</h1>

                <div class="row">
                    <div class="col-sm-4">
                        <?php
                        $query = "SELECT * FROM user where user_username = '$username'";

                        $sql = mysqli_query($con, $query);

                        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);

                        ?>

                        <img width="100%" class="rounded-circle" src="useriamge/<?php echo $row['USER_IMAGE']; ?>" alt="No Cover Image" style="" />

                        <!-- <img width="150" name="image2" class="img-fluid rounded-circle mx-auto d-block" src="userimage/<?php echo $row['USER_IMAGE']; ?>" alt="No Cover Image"/> -->
                    </div>

                    <div class="col-sm-8">

                        <form method="POST">

                            <div class="form-row">
                                <div class="col-md-8 mb-3 mt-6">
                                    <label for="images">Upload Picture</label>
                                    <input type="file" class="form-control-file" name="image" />
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-8 mb-3 mt-6">
                                    <label for="validationServer01">First name</label>
                                    <input type="text" class="form-control" name="firstname" value="<?php echo $row['USER_FIRSTNAME']; ?>" required>
                                    <div class="invalid-feedback">
                                        Please choose a First name.
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-8 mb-3 mt-6">
                                    <label for="validationServer01">Last name</label>
                                    <input type="text" class="form-control" name="lastname" value="<?php echo $row['USER_LASTNAME']; ?>" required>
                                    <div class="invalid-feedback">
                                        Please choose a Last name.
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-8 mb-3 mt-3">
                                    <label for="validationServerUsername">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control" name="username" value="<?php echo $row['USER_USERNAME']; ?>" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <label for="validationServerUsername">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" value="<?php echo $row['USER_EMAIL']; ?>" required>
                                        <div class="invalid-feedback">
                                            Please enter an email.
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <label for="validationServer03">Phone Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" placeholder="e.g:08033333333" name="phonenum" value="<?php echo $row['USER_PHONENUMBER']; ?>">
                                        <div class="invalid-feedback">
                                            Please enter a valid phone number.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <label for="validationServer03">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <label for="validationServer03">Country</label>
                                    <input type="text" class="form-control" placeholder="e.g:Nigeria" name="country" value="<?php echo $row['COUNTRY']; ?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <label for="validationServer03">Date of birth</label>
                                    <input type="text" class="form-control" placeholder="e.g:YYYY-MM-DD" name="dob" value="<?php echo $row['USER_DOB']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary sm-mt-5" name="btn" value="Save Changes"/>
                            </div>
                        </form>
                    </div>

                </div>


                <?php

                if (isset($_POST['btn'])) {

                    // $image = $_FILES["image"]["name"];
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $username = $_POST["username"];
                    $phonenumber = $_POST["phonenum"];
                    $email = $_POST["email"];
                    $country = $_POST["country"];
                    $dob = $_POST["dob"];
                    $gender = $_POST["gender"];

                    $firstname = mysqli_real_escape_string($con, $firstname);
                    $lastname = mysqli_real_escape_string($con, $lastname);
                    $username = mysqli_real_escape_string($con, $username);

                    // $uploadFile2 = $_FILES["image"]["tmp_name"];

                    // $target2 = "userimage/".basename($image);

                    // if (move_uploaded_file($uploadFile2, $target2)) {
                    //     echo "For folder: success";
                    // } else {
                    //     echo "For folder: error";
                    // }


                    $sql = "UPDATE user SET USER_FIRSTNAME = '$firstname', USER_LASTNAME = '$lastname', USER_USERNAME = '$username', USER_EMAIL = '$email', USER_GENDER = '$gender', USER_PHONENUMBER = '$phonenumber', COUNTRY = '$country', USER_DOB = '$dob' WHERE USER_ID = '$id'";

                    if (mysqli_query($con, $sql)) {
                        ?>
                        <script type='text/javascript'>
                            window.setTimeout(function() {
                                window.location.href = "dashboard.php";
                            }, 500);
                        </script>
                <?php
                    } else {
                        echo "for database: Error" . mysqli_error($con);
                    }
                }

                ?>

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