<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","problem");
        $first_name = mysqli_real_escape_string($conn,$_POST['first_name']); 
        $last_name = mysqli_real_escape_string($conn,$_POST['last_name']); 
        $address = mysqli_real_escape_string($conn,$_POST['address']); 
        $dept_name = mysqli_real_escape_string($conn,$_POST['dept_name']); 
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);       
        $sql = "SELECT * FROM teacher WHERE phone = {$phone}";
        $result = mysqli_query($conn,$sql) or die("Query Failed".mysqli_error());
        if(mysqli_num_rows($result) > 0){
            echo 'This information already exits';
        }else{
            $sql1 = "INSERT INTO teacher(first_name,last_name,address,department,phone) VALUES('{$first_name}','{$last_name}','{$address}','{$dept_name}',{$phone})";
            if(mysqli_query($conn,$sql1)){
                header("Location:http://localhost/PHP/problem/problem-23/problem-23-show.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Profile</title>
</head>
<body>
   <div class="heading">
        <h1>Insert teacher information</h1>
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
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td><input type="text" name="dept_name"></td>
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
   </div> 
</body>
</html>