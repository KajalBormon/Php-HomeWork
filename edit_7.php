<?php
	if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","homework");
		$teach_id = mysqli_real_escape_string($conn,$_POST['id']);
        $first_name = mysqli_real_escape_string($conn,$_POST['first_name']); 
        $last_name = mysqli_real_escape_string($conn,$_POST['last_name']); 
        $designation = mysqli_real_escape_string($conn,$_POST['designation']);         
        $address = mysqli_real_escape_string($conn,$_POST['add']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);		
        $date = mysqli_real_escape_string($conn,$_POST['date']);
		$dept = mysqli_real_escape_string($conn,$_POST['dept']);
		$salary = mysqli_real_escape_string($conn,$_POST['salary']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $sql = "UPDATE teacher SET first_name ='{$first_name}',last_name='{$last_name}',designation='{$designation}',address = '{$address}',email = '{$email}',date = '{$date}',dept = '{$dept}',salary = {$salary},phone = {$phone} WHERE id = {$teach_id}";
        if(mysqli_query($conn,$sql)){
            header("location:http://localhost/PHP/problem/Problem-7/show_7.php");
        } 
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Information</title>
   
</head>
<body>
    <h1>UpdateInformation</h1>
	<?php
		$conn = mysqli_connect("localhost","root","","homework");
		$tid = $_GET['tid'];
		$sql = "SELECT * FROM teacher WHERE id = {$tid}";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
	?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table>
			  <tr>
                <td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="last_name" value="<?php echo $row['last_name'];?>"></td>
            </tr>
            <tr>
                <td>Designation</td>
                <td><input type="text" name="designation" value="<?php echo $row['designation']; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="add" value="<?php echo $row['address']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
            </tr>
            <tr>
                <td>Date of birth</td>
                <td><input type="date" name="date" value="<?php echo $row['date']; ?>"></td>
            </tr>
			 <tr>
                <td>Department</td>
                <td><select name="dept">
							<?php
								$conn = mysqli_connect("localhost","root","","homework");
								$sql1 = "SELECT dept FROM teacher";
								$result1 = mysqli_query($conn,$sql1);
								if(mysqli_num_rows($result1)>0){
									while($row1 = mysqli_fetch_assoc($result1)){
										if($row1['dept']==$row['dept']){
											$selected = "selected";
										}else{
											$selected = "";
										}
										echo "<option {$selected} value='{$row1['dept']}'>{$row1['dept']}</option>";
									}
								} 
							?>
				</select></td>
            </tr>
			  <tr>
                <td>Salary</td>
                <td><input type="number" name="salary" value="<?php echo $row['salary']; ?>"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="phone" value="<?php echo $row['phone']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save" name="submit"></td>
            </tr>
        </table>
    </form>
	<?php
		}
	}
	?>
</body>
</html>