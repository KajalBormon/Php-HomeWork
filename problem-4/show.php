<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <a href="insert.php"><input type="button" value="Add Info"></a>
    <?php
        $conn = mysqli_connect("localhost","root","","problem");
        $sql = "SELECT * FROM profile";
        $result = mysqli_query($conn,$sql) or die("Fetch query failed".mysqli_error());
        if(mysqli_num_rows($result) > 0){
            
    ?>
    <table>
        <thead>
            <th>Name</th>
            <th>Address</th>
            <th>Department</th>
            <th>Phone</th>
        </thead>
        <tbody>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?php echo $row['first_name']." ".$row['last_name'];?></td>
                <td><?php echo $row['Address'];?></td>
                <td><?php echo $row['phone'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
        }
    ?>
</body>
</html>