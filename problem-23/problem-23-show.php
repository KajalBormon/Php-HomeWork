<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Profile</title>
</head>
<body>
   <div class="heading">
        <h1>Teacher information</h1>
        <?php
            $conn = mysqli_connect("localhost","root","","problem");
            $sql = "SELECT * FROM teacher";
            $result = mysqli_query($conn,$sql) or die("Fetch query failed".mysqli_error());
            if(mysqli_num_rows($result)>0){
        ?>
        <table>
            <thead>
                <th>Teacher Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Department</th>
                <td>Phone</td>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $row['teacher_id'];?></td>
                    <td><?php echo $row['first_name']." ".$row['last_name'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['department'];?></td>
                    <td><?php echo $row['phone'];?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php
            }
        ?>
   </div> 
</body>
</html>