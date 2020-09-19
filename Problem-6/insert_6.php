<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","homework");

        $first_name = mysqli_real_escape_string($conn,$_POST['first_name']); 
        $last_name = mysqli_real_escape_string($conn,$_POST['last_name']); 
        $father = mysqli_real_escape_string($conn,$_POST['father']); 
        $mother = mysqli_real_escape_string($conn,$_POST['mother']);
        $dept = mysqli_real_escape_string($conn,$_POST['dept']);
        $address = mysqli_real_escape_string($conn,$_POST['add']);
        $date = mysqli_real_escape_string($conn,$_POST['date']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $sql = "INSERT INTO student(first_name,last_name,father,mother,dept,Address,date,phone) VALUES('{$first_name}','{$last_name}','{$father}','{$mother}','{$dept}','{$address}','{$date}',{$phone})";
        if(mysqli_query($conn,$sql)){
            header("location:http://localhost/PHP/problem/Problem-6/show_6.php");
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
                <td><input type="hidden" name="id"></td>
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
                <td>Father's Name</td>
                <td><input type="text" name="father"></td>
            </tr>
            <tr>
                <td>Mother's Name</td>
                <td><input type="text" name="mother"></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><input type="text" name="dept"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="add"></td>
            </tr>
            <tr>
                <td>Date of birth</td>
                <td><input type="date" name="date"></td>
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