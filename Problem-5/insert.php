<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","homework");

        $first_name = mysqli_real_escape_string($conn,$_POST['first_name']); 
        $last_name = mysqli_real_escape_string($conn,$_POST['last_name']); 
        $designation = mysqli_real_escape_string($conn,$_POST['designation']); 
        $address = mysqli_real_escape_string($conn,$_POST['add']);
        $salary = mysqli_real_escape_string($conn,$_POST['salary']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $sql = "INSERT INTO employees(first_name,last_name,designation,Address,salary,phone) VALUES('{$first_name}','{$last_name}','{$designation}','{$address}',{$salary},{$phone})";
        echo $sql;
        if(mysqli_query($conn,$sql)){
            header("location:http://localhost/PHP/problem/Problem-5/show.php");
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
                <td>First Name</td>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <td>Designation</td>
                <td><input type="text" name="designation"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="add"></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary"></td>
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