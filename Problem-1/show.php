<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
</head>
<body>
    <h1>Student Information</h1>
    <a href="insert.php"><input type="button" value="Add Student"></a>
    <table>
    <?php
        $conn = mysqli_connect("localhost","root","","problem");
        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn,$sql) or die("Fetch query failed".mysqli_error());
        if(mysqli_num_rows($result) > 0){
    ?>
        <thead>
            <th>Student Id</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th></th>
            <th>Mother's Name</th>
            <th></th>
            <th>Address</th>
            <th>Department</th>
            <th>Email<th>   
            <th>Birthday<th>    
            <th>Phone</th>

        </thead>
        <tbody>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?php echo $row['student_id'];?></td>
                <td><?php echo $row['first_name']." ".$row['last_name'];?></td>                
                <td><?php echo $row['fathers_name'];?></td>
                <td></td>
                <td><?php echo $row['mothers_name'];?></td>
                <td></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['department'];?></td>
                <td><?php echo $row['email'];?></td>
                <td></td>
                <td><?php echo $row['birthday'];?></td>
                <td></td>
                <td><?php echo $row['phone'];?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
        }
    ?>
</body>
</html>