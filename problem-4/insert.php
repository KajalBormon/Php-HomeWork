<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","problem");
        $id = mysqli_real_escape_string($conn,$_POST['id']);
        $first_name = mysqli_real_escape_string($conn,$_POST['first_name']); 
        $last_name = mysqli_real_escape_string($conn,$_POST['last_name']); 
        $address = mysqli_real_escape_string($conn,$_POST['add']);
        $dept_name = mysqli_real_escape_string($conn,$_POST['dept']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $sql = "SELECT * FROM profile WHERE id = {$id}";
        $result = mysqli_query($conn,$sql) or die("Insert query failed".mysqli_error());
        if(mysqli_num_rows($result) > 0){
            echo '<div>This product is already exits......</div>';
        }else{
            $sql1 = "INSERT INTO profile(id,first_name,last_name,Address,dept_name,phone) VALUES({$id},'{$first_name}','{$last_name}','{$address}','{$dept_name}',{$phone})";
            if(mysqli_query($conn,$sql1)){
                header("location:http://localhost/PHP/problem/problem-4/show.php");
            } 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Add Information</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table>
            <tr>
                <td>Id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="add"></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><input type="text" name="dept"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="phone"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>