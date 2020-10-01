<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","homework")or die(mysqli_connect_error());
        $id = mysqli_real_escape_string($conn,$_POST['id']);
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $price = mysqli_real_escape_string($conn,$_POST['price']);
        $model = mysqli_real_escape_string($conn,$_POST['model']);
        
        $sql1 = "SELECT * FROM product WHERE id = {$id}";
        $result = mysqli_query($conn,$sql1) or die(mysqli_error());
        if(mysqli_num_rows($result)>0){
            echo '<div>This product already exits........</div>';
        }else{
            $sql = "INSERT INTO product(id,product_name,price,model) VALUES({$id},'{$name}','{$price}','{$model}')";
            if(mysqli_query($conn,$sql)){
                header("location:http://localhost/PHP/problem/Problem-11/show_11.php");
            }
        }                 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
</head>
<body>
    <h1>Add Information</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table>
            <tr>
                <td>Id: </td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Product Name: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Price; </td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Model</td>
                <td><input type="text" name="model"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>