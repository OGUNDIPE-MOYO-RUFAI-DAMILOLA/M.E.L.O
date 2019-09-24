<?php
    require 'dbconnect.php';
    
    include 'session.php';
    if (!isset($_SESSION['logged_in'])){
      header('location:index.php');
    }
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
    <title>Welcome</title>
</head>
<body >
    
  <div class="background">
    
   <?php require 'header.php';?>

      


      <div class="col-md-9  text-center m-5">
        <h2><span class="fa fa-home my-3"></span> Welcome to M.E.L.O</h2>
          <h3 class="m-3 text-left">Genres</h3>
            <div class="container"> 
                <div class="row">
                  <?php 
                    require 'genresupload.php';
                  ?>
            
        

            <div class="container my-3"> 
              <h3 class="m-3  text-left">Albums</h3>
                <div class="row">
                  <?php 
                    require 'albumupload.php';
                  ?>

        

           <div class="container my-3"> 
              <h3 class="m-3 text-left">Artists</h3> 
                <div class="row">
                  <?php 
                    require 'artistupload.php';
                  ?>
  


            <div class="container my-3"> 
              <h3 class="m-3 text-left">Songs</h3> 
                <div class="row">
                  <?php 
                    require 'songupload.php';
                  ?>
  
        
        
          </div>
        

    </div>

  <div>

  <?php require 'footer.php'; ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>

</html>