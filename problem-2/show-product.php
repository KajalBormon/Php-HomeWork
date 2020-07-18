<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Profile</title>
</head>
<body>
    <h1>Product Information</h1>
    <a href="insert-product.php"><input type="button" value="Add Product"></a>
    <?php
        $conn = mysqli_connect("localhost","root","","problem");
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn,$sql) or die("Fetch query failed".mysqli_error());
        if(mysqli_num_rows($result) > 0){
            
    ?>
    <table>
        <thead>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Price</th>
        </thead>
        <tbody>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?php echo $row['product_name'];?></td>
                <td>M-<?php echo $row['product_code'];?></td>
                <td><?php echo $row['product_price'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
        }
    ?>
</body>
</html>