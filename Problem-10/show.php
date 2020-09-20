<?php
	$conn = mysqli_connect("localhost","root","","homework");
	session_start();
	if(isset($_SESSION['username'])==false){
        header("Location: http://localhost/PHP/problem/Problem-10/show.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
 
</head>
<body>
    <h1>You have Successfully login</h1>
	<div class="logout">
		<a href="logout.php"><button>Logout</button></a>
	</div>
</body>
</html>