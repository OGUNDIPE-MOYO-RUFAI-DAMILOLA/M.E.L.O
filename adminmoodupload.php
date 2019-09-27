<?php
 	require 'dbconnect.php';
	 
	 require 'session.php';
	 if (!isset($_SESSION['logged_in'])){
         header('location:index.php');
        }
        require 'req.php'
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Upload Page</title>
	<link rel="shortcut icon" href="picture/image2.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/v4-shims.css">
</head>
<body>

	<?php require 'header.php'; ?>

	<div class="col-md-9">
	<h1 class="text-center my-5">Mood Upload</h1>
        <div class="container">

				<form method="POST" class="my-5" enctype="multipart/form-data">

					<div class="form-group">
						<label for="mood">Enter MOOD</label>
						<input type="text" class="form-control-file" name="mood" id="mood" multiple/>
					</div>
					<div class="form-group">
						<label for="mimages">Upload MOOD Picture</label>
						<input type="file" class="form-control-file" name="mimage" id="mimage" multiple/>
					</div>
					<input type="submit" name="btn5" value="Submit"/>

				</form>



				<h1 class="text-center my-5">Moods</h1>
					<div class="container row m-2">
						<?php
							$query = "SELECT * FROM mood";

							$result = mysqli_query($con, $query);

							if(mysqli_num_rows($result) > 0) {

							
								while($row = mysqli_fetch_array($result))
								{ ?>
									<div class="col-md-3 album-cover-art text-center" style="padding: 10px 10px;">
										<div>
											<img width="80%" src="moodimage/<?php echo $row['MOOD_IMAGE']; ?>" alt="No Cover Image" style=""/>
										</div>
										<p> <?php echo $row['MOOD_DESCRIPTION']; ?> </p>
									</div>
								<?php
									
								}

							}

						?>
					</div>


			</div>
		</div>
	</div>
	<div>

		<?php require 'footer.php'; ?>
	</div>
	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>