<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="image2.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form>
        <div class="form-row">
            <div class="col-md-4 mb-3 mt-6">
                <label for="validationServer01">First name</label>
                <input type="text" class="form-control" id="validationServer01" placeholder="First name" value="" required>
                <div class="invalid-feedback">
                Please choose a First name.
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <button class="btn-primary">Log in with Facebook</button>
            </div>

        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer02">Last name</label>
                <input type="text" class="form-control" id="validationServer02" placeholder="Last name" value="" required>
                <div class="invalid-feedback">
                Please choose a Last name.
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <button class="btn-info">Log in with Gmail</button>
            </div>
        </div>
        <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                </div>
                <input type="text" class="form-control " id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                <div class="invalid-feedback">
                Please choose a username.
                </div>

            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
            <label for="validationServer03">Password</label>
            <input type="password" class="form-control" id="validationServer03" placeholder="Password" required>
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
            <button class="btn btn-primary ml-5" type="submit">Submit form</button>
            </div>
        </div>
       
        </form>

        <script src="bootstrap-4.3.1-dist/js/jquery-3.4.1.min.js"></script>
        <script src="bootstrap-4.3.1-dist/js/popper.min.js"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </body>
    </html>  