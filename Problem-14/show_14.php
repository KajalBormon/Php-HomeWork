<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Profile</title>
    <link rel="stylesheet" href="main_14.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="btn">
               <a href="insert_14.php"><button>Add Student Info</button></a>
            </div>
        </div>
		<h1>Student's Information</h1>
        <div class="content-table">
            <?php
                $conn = mysqli_connect("localhost","root","","homework");
                $sql = "SELECT * FROM addmission";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){           
            ?>
            <table>
                   <thead>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Date Of Birth</th>
                        <th>Address</th>
						<th>Phone</th>
                        <th>Gender</th>
                        <th>SSC Roll</th>
                        <th>SSC Session</th>
						<th>SSC GPA</th>
                        <th>HSC Roll</th>
                        <th>HSC Session</th>
						<th>HSC GPA</th>
		
                   </thead>
                   <tbody>
                   <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                            <td><?php echo $row['dept']; ?></td>
                            <td><?php echo $row['birth']; ?></td>
                            <td><?php echo $row['address']; ?></td>
							<td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['ssc_roll']; ?></td>
                            <td><?php echo $row['ssc_session']; ?></td>
                            <td><?php echo $row['ssc_gpa']; ?></td>
                            <td><?php echo $row['hsc_roll']; ?></td>
                            <td><?php echo $row['hsc_session']; ?></td>
                            <td><?php echo $row['hsc_gpa']; ?></td>							
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