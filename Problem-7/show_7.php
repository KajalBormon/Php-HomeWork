<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers's Profile</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="btn">
               <a href="insert_7.php"><button>Add Teacher Info</button></a>
            </div>
        </div>
		<h1>Teacher's Information</h1>
        <div class="content-table">
            <?php
                $conn = mysqli_connect("localhost","root","","homework");
                $sql = "SELECT * FROM teacher";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){           
            ?>
            <table>
                   <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Date Of Birth</th>
                        <th>Department</th>
                        <th>Salary</th>
						<th>Phone</th>
						<th>Action</th>
                   </thead>
                   <tbody>
                   <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                            <td><?php echo $row['designation']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['dept']; ?></td>
                            <td><?php echo $row['salary']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td class="edit"><a href="edit_7.php?tid=<?php echo $row['id']; ?>">Edit</a></td>
                        </tr>
						<?php } ?>
                   </tbody>
            </table>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>