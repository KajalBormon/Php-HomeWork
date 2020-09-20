
<?php 
	$conn = mysqli_connect("localhost","root","","homework");
	session_start();
	if(isset($_SESSION['username'])==true){
        header("Location: http://localhost/PHP/problem/Problem-10/show.php");
    }
	
	if(isset($_POST['signup'])){
		$conn = mysqli_connect("localhost","root","","homework");
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = md5($_POST['password']);
		$sql = "SELECT * FROM login WHERE username='{$username}'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			echo 'Username or Password Already Exits......';
		}else{
			$sql1 = "INSERT INTO login(username,password) VALUES('{$username}','{$password}')";
			if(mysqli_query($conn,$sql1)){
				header("Location:http://localhost/PHP/problem/Problem-10/login.php");
			}
		}
	}
?>

<!DOCTYPE HTML>
<head>
	<title>SignUP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
		<div class="loginbox">
			<img src="th.jpg" class="avater">
			<h1>SingUP Here</h1>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="hidden" name="id">
				<p> Username</p>
				<input type="text" placeholder="Enter username" name="username">
				<p>Password</p>
				<input type="password" placeholder="Password" name="password">

				<input type="submit" name="signup" value="SingUP">
				
			</form>
		</div>
	</body>
	
</html>
