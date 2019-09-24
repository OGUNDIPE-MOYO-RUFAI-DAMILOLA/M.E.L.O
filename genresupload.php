    
            <?php
                    $query = "SELECT * FROM genres";

                    $result = mysqli_query($con, $query);

                    if(mysqli_num_rows($result) > 0) {
                        $i = 0;
                    
                        while($row = mysqli_fetch_array($result))
                        { ?>
                                <div class="col-md-3 album-cover-art text-center p-3" style="padding: 10px 10px;">
                                    <a href="viewgenressong.php?id=<?php echo $row['GENRES_ID'];?>"><img width="60%"  src="genresimage/<?php echo $row['GENRES_IMAGE']; ?>" alt="No Cover Image" style=""/></a>
                                    <p> <?php echo $row['GENRES_NAME']; ?> </p>
                                </div>
                            <?php
                            $i++;

                            if ($i===15) {
                                break;
                            }
                        }

                    }

                ?>				
        </div>
    </div>
    <a href="viewgenres.php"><input type="submit" value="more genres"></a> 

 