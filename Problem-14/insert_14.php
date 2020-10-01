<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","homework");
        $first_name = mysqli_real_escape_string($conn,$_POST['first_name']); 
        $last_name = mysqli_real_escape_string($conn,$_POST['last_name']); 
        $dept = mysqli_real_escape_string($conn,$_POST['dept']);         		
        $date = mysqli_real_escape_string($conn,$_POST['date']);
        $address = mysqli_real_escape_string($conn,$_POST['add']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $ssc_roll = mysqli_real_escape_string($conn,$_POST['ssc_roll']);
        $ssc_session = mysqli_real_escape_string($conn,$_POST['ssc_session']);
        $ssc_gpa = mysqli_real_escape_string($conn,$_POST['ssc_gpa']);
        $hsc_roll = mysqli_real_escape_string($conn,$_POST['hsc_roll']);
        $hsc_session = mysqli_real_escape_string($conn,$_POST['hsc_session']);
        $hsc_gpa = mysqli_real_escape_string($conn,$_POST['hsc_gpa']);
        $sql = "INSERT INTO addmission(first_name,last_name,dept,birth,address,phone,gender,ssc_roll,ssc_session,ssc_gpa,hsc_roll,hsc_session,hsc_gpa) VALUES('{$first_name}','{$last_name}','{$dept}','{$date}','{$address}','{$phone}','{$gender}',{$ssc_roll},'{$ssc_session}','{$ssc_gpa}',{$hsc_roll},'{$hsc_session}','{$hsc_gpa}')";
        if(mysqli_query($conn,$sql)){
            header("location:http://localhost/PHP/problem/Problem-14/show_14.php");
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
        <h2>Student Information</h2>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><select name="dept">
						<option disabled>Select Department</option>
						<option>CSE</option>
						<option>Statistics</option>
						<option>ESE</option>
						<option>EEE</option>						
				</select></td>
            </tr>
            <tr>
                <td>Date of birth</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="add"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" value="Male">Male</td>
                <td><input type="radio" name="gender" value="Female">Female</td>
            </tr>
            <tr>
                <td><h2>SSC info</h2></td>
            </tr>
            <tr>
                <td>SSC Roll</td>
                <td><input type="number" name="ssc_roll"></td>
            </tr>
            <tr>
                <td>Session</td>
                <td><input type="text" name="ssc_session" id=""></td>
            </tr>
            <tr>
                <td>GPA</td>
                <td><input type="text" name="ssc_gpa" id=""></td>
            </tr>
            <tr>
                <td><h2>HSC Info</h2></td>
            </tr>
            <tr>
                <td>HSC Roll</td>
                <td><input type="number" name="hsc_roll"></td>
            </tr>
            <tr>
                <td>Session</td>
                <td><input type="text" name="hsc_session" id=""></td>
            </tr>
            <tr>
                <td>GPA</td>
                <td><input type="text" name="hsc_gpa" id=""></td>
            </tr>
      
            <tr>
                <td></td>
                <td><input type="submit" value="Save" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>