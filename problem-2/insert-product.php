<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","problem");
        $name = mysqli_real_escape_string($conn,$_POST['name']); 
        $code = mysqli_real_escape_string($conn,$_POST['code']); 
        $price = mysqli_real_escape_string($conn,$_POST['price']);
        $sql = "SELECT * FROM product WHERE product_code = '{$code}'";
        $result = mysqli_query($conn,$sql) or die("Insert query failed".mysqli_error());
        if(mysqli_num_rows($result) > 0){
            echo '<div>This product is already exits......</div>';
        }else{
            $sql1 = "INSERT INTO product(product_name,product_code,product_price) VALUES('{$name}','{$code}',{$price})";
            if(mysqli_query($conn,$sql1)){
                header("location:http://localhost/PHP/problem/problem-2/show-product.php");
            } 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Profile</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Product Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>