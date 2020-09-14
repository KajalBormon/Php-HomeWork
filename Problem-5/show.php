<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee's Profile</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="btn">
               <a href="insert.php"><input type="button" value="Add Employee"></a>
            </div>
            <br><br>
            <div class="show-btn">                
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table>
                        <tr><td><input type="text" name="sid" placeholder="Enter Employee ID"></td></tr>
                        <tr><td><input type="submit" value="Show" name="showbtn"></td></tr>
                    </table>
                </form>               
            </div>
        </div>
        <br><br>
        <div class="row1">
        <?php
           if(isset($_POST['showbtn'])){
               $conn = mysqli_connect("localhost","root","","homework");
               $sid = $_POST['sid'];
               $sql = "SELECT * FROM employees WHERE id = {$sid}";
               $result = mysqli_query($conn,$sql);
               if(mysqli_num_rows($result)>0){           
        ?>
            <table>
                   <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Phone</th>
                   </thead>
                   <tbody>
                   <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                            <td><?php echo $row['designation']; ?></td>
                            <td><?php echo $row['Address']; ?></td>
                            <td><?php echo $row['salary']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                        </tr>
                   </tbody>
            </table>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>