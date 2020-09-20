<?php
	$conn = mysqli_connect("localhost","root","","homework");
	session_start();
	if(isset($_SESSION['username'])==true){
        header("Location: http://localhost/PHP/problem/Problem-10/show.php");
    }
?>
<?php 
	if(isset($_POST['login'])){
		$conn = mysqli_connect("localhost","root","","homework");
		if(empty($_POST['username']) || empty($_POST['password'])){
			echo '<div>This field must be entered........</div>';
		}else{
			$username = mysqli_real_escape_string($conn,$_POST['username']);
			$password = md5($_POST['password']);
			$sql = "SELECT * FROM login WHERE username = '{$username}'";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){
					session_start();
					$_SESSION['username'] = $row['username'];
					$_SESSION['password'] = $row['password'];
					header("Location: http://localhost/PHP/problem/Problem-10/show.php");
 				}
			}
		}
	}
?>

<!DOCTYPE HTML>
<head>
	<title>Login System</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
		<div class="loginbox">
			<img src="th.jpg" class="avater">
			<h1>Login Here</h1>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<p> Username</p>
				<input type="text" placeholder="Enter username" name="username">
				<p>Password</p>
				<input type="password" placeholder="Password" name="password">
				<input type="submit" name="login" value="Login">
				<a href="singup.php">Don't have any account?</a>
			</form>
		</div>
	</body>
	
</html>
