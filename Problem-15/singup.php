<?php 
	$conn = mysqli_connect("localhost","root","","homework");
	session_start();
	if(isset($_SESSION['username'])==true){
        header("Location: http://localhost/PHP/problem/Problem-15/show_15.php");
	}
	
// PHP validation
$usernameErr = $emailErr = $passwordErr = $phoneErr = "";
$username = $email = $password = $phone "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Name is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Email is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Enter the number";
  } else {
    $phone = test_input($_POST["phone"]);
  }
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
// 

	if(isset($_POST['signup'])){
		$conn = mysqli_connect("localhost","root","","homework");
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = md5($_POST['password']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
		$sql = "SELECT * FROM register WHERE username='{$username}'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			echo 'Username or Password Already Exits......';
		}else{
			$sql1 = "INSERT INTO register(username,password,email,phone) VALUES('{$username}','{$password}','{$email}','{$phone}')";
			if(mysqli_query($conn,$sql1)){
				header("Location:http://localhost/PHP/problem/Problem-15/login.php");
			}
		}
	}
?>

<!DOCTYPE HTML>
<head>
	<title>SignUP</title>
	<link rel="stylesheet" type="text/css" href="main_15.css">
	
</head>
	<body>	
		<div class="singup">
			<h1>SingUP Here</h1>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validate()" method="POST">
			<input type="hidden" name="id">
				<p> Username</p>
				<input type="text" placeholder="Enter Your Username" name="username" id="name" required autocomplete="off">
				<span id="user"></span>
				<span class="error">* <?php echo $usernameErr;?></span>
				<p>Password</p>
				<input type="password" placeholder="Enter Your Password" name="password" id="pass" required autocomplete="off" title="7 to 15 characters which contain at least one numeric digit and a special character">
				<span id="passcode"></span>
				<span class="error">* <?php echo $passwordErr;?></span>
				<p>Email</p>
				<input type="email" placeholder="Enter Your Email" name="email" id="email" required autocomplete="off">
				<span id="mail"></span>
				<span class="error">* <?php echo $emailErr;?></span>
				<p>Phone</p>
				<input type="number" placeholder="Enter Your Phone" name="phone" id="phone" required autocomplete="off">
				<span id="tel"></span>
				<span class="error">* <?php echo $phoneErr;?></span>

				<input type="submit" name="signup" value="SingUP">
				
			</form>
		</div>
		<script src="main.js"></script>
	</body>	
</html>
