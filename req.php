<?php

    if (isset($_POST['btn'])) {

        $tracks = $_FILES["tracks"]["name"];
        $image = $_FILES["image"]["name"];
        $tname = $_POST["tname"];
        $lyrics = $_POST["lyrics"];
        $about = $_POST["about"];


            $sql = "INSERT INTO tracks (track_name, lyrics, song, about_song, tracks_image) VALUES ('$tname', '$lyrics', '$tracks','$about', '$image')";
            
            if (mysqli_query($con, $sql)) {

                echo "For database: success";
            }
            else {
                echo "for database: Error".mysqli_error($con);
            }

            $uploadFile = $_FILES["tracks"]["tmp_name"];
            
            $uploadFile2 = $_FILES["image"]["tmp_name"];

            $target = "songs/".basename($tracks);
            
            $target2 = "image/".basename($image);

            if(move_uploaded_file($uploadFile,$target)){
                echo "For folder: success";
            }
            else{
                echo "For folder: error";
            }
            if(move_uploaded_file($uploadFile2,$target2)){
                echo "For folder: success";
            }
            else{
                echo "For folder: error";
            }
    }





    if (isset($_POST['btn2'])) {

        $album = $_POST["album"];
        $aimage = $_FILES["aimage"]["name"];


            $sql = "INSERT INTO album (album_name, album_image) VALUES ('$album','$aimage')";
            
            if (mysqli_query($con, $sql)) {

               // echo "For database: success";
            }
            else {
                echo "for database: Error".mysqli_error($con);
            }
            
            $uploadFile2 = $_FILES["aimage"]["tmp_name"];

            
            $target2 = "image/".basename($aimage);

            if(move_uploaded_file($uploadFile2,$target2)){
                //echo "For folder: success";
            }
            else{
                echo "For folder: error";
            }
    }





    if (isset($_POST['btn4'])) {

        $genres = $_POST["genres"];
        $gimage = $_FILES["gimage"]["name"];


            $sql = "INSERT INTO genres (genres_name, genres_image) VALUES ('$genres','$gimage')";
            
            if (mysqli_query($con, $sql)) {

               // echo "For database: success";
            }
            else {
                echo "for database: Error".mysqli_error($con);
            }
            
            $uploadFile2 = $_FILES["gimage"]["tmp_name"];

            
            $target2 = "genresimage/".basename($gimage);

            if(move_uploaded_file($uploadFile2,$target2)){
                //echo "For folder: success";
            }
            else{
                echo "For folder: error";
            }
    }




    if (isset($_POST['btn5'])) {

        $mood = $_POST["mood"];
        $mimage = $_FILES["mimage"]["name"];


            $sql = "INSERT INTO album (MOOD_DESCRIPTION, MOOD_IMAGE) VALUES ('$mood','$mimage')";
            
            if (mysqli_query($con, $sql)) {

               // echo "For database: success";
            }
            else {
                echo "for database: Error".mysqli_error($con);
            }
            
            $uploadFile2 = $_FILES["mimage"]["tmp_name"];

            
            $target2 = "moodimage/".basename($mimage);

            if(move_uploaded_file($uploadFile2,$target2)){
                //echo "For folder: success";
            }
            else{
                echo "For folder: error";
            }
    }







    if (isset($_POST['btn3'])) {

        $artist = $_POST["artist"];
        $artimage = $_FILES["artimage"]["name"];


            $sql = "INSERT INTO artist (artist_name, artist_image) VALUES ('$artist','$artimage')";
            
            if (mysqli_query($con, $sql)) {

                //echo "For database: success";
            }
            else {
                echo "for database: Error".mysqli_error($con);
            }

            
            $uploadFile = $_FILES["artimage"]["tmp_name"];
            
            $target2 = "artistimage/".basename($artimage);

            if(move_uploaded_file($uploadFile,$target2)){
                //echo "For folder: success";
            }
            else{
                echo "For folder: error";
            }
    }







?>