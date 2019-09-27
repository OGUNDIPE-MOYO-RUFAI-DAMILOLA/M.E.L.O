    
            <?php
                    $query = "SELECT * FROM album";

                    $result = mysqli_query($con, $query);

                    if(mysqli_num_rows($result) > 0) {
                        $i = 0;
                    
                        while($row = mysqli_fetch_array($result))
                        { ?>
                                <div class="col-md-3 album-cover-art text-center p-3" style="padding: 10px 10px;">
                                    <a href="viewalbumsong.php?id=<?php echo $row['ALBUM_ID'];?>"><img width="60%"  src="image/<?php echo $row['ALBUM_IMAGE']; ?>" alt="No Cover Image" style=""/></a>
                                    <p> <?php echo $row['ALBUM_NAME']; ?> </p>
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
    <a href="viewalbum.php"><input type="submit" value="more albums"></a> 