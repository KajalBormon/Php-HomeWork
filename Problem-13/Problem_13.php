<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        .gallery img{
            width: 300px;
            height:auto;
        }
        .gallery .title{
            margin-top: 10px;
        }
        .image{
            display: inline-block;
            margin-right: 20px;
            margin-top: 20px;
        }
    </style>
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <h1>Upload an Image</h1>
            <form action="save-image.php" method="post" enctype=multipart/form-data>
                <table>
                    <tr>
                        <td>Image Title</td>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td>Upload Image</td>
                        <td><input type="file" name="image" id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Save"></td>
                    </tr>
                </table>
            </form>
            <br><br>
            <hr>
            <div style=margin-top:15px;>
                <h1>Image Gallery</h1>
            </div>
            <?php
                $conn = mysqli_connect("localhost","root","","homework");
                $sql = "SELECT * FROM image";
                $result = mysqli_query($conn,$sql) or die("Query Failed");
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="image">
                <div class="gallery">
                    <img src="images/<?php echo $row['image']; ?>" alt="">
                </div>
                <div class="title">
                    <span><?php echo $row['title']; ?></span>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>

</body>
</html>