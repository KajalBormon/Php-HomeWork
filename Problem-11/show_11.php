<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="btn">
               <a href="insert.php"><input type="button" value="Add Product"></a>
            </div>
            <br><br>
            <div class="show-btn">                
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table>
                        <tr><td><input type="text" name="pid" placeholder="Enter Product ID"></td></tr>
                        <tr><td><input type="submit" value="Show" name="showbtn"></td></tr>
                    </table>
                </form>               
            </div>
        </div>
        <br><br>
        <div class="row1">
        <?php
           if(isset($_POST['showbtn'])){
               $conn = mysqli_connect("localhost","root","","homework");
               $pid = $_POST['pid'];
               $sql = "SELECT * FROM product WHERE id = {$pid}";
               $result = mysqli_query($conn,$sql);
               if(mysqli_num_rows($result)>0){           
        ?>
            <table>
                   <thead>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Model</th>
                   </thead>
                   <tbody>
                   <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['model']; ?></td>
                        </tr>
                   </tbody>
            </table>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>