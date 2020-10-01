<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Profile</title>
    <link rel="stylesheet" href="main_12.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="btn">
               <a href="insert_12.php"><button>Add Student Info</button></a>
            </div>
        </div>
		<h1>Student's Information</h1>
        <div class="content-table">
            <?php
                $conn = mysqli_connect("localhost","root","","homework");
                $sql = "SELECT * FROM studentdelete";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){           
            ?>
            <table>
                   <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Date Of Birth</th>
                        <th>Address</th>
						<th>Phone</th>
						<th>Action</th>
                   </thead>
                   <tbody>
                   <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                            <td><?php echo $row['dept']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['birthdate']; ?></td>
                            <td><?php echo $row['address']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td class="edit"><a href="delete_12.php?sid=<?php echo $row['id']; ?>">DELETE</a></td>
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