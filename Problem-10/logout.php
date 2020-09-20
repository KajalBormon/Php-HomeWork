<?php
	$conn = mysqli_connect("localhost","root","","homework");
	session_start();
	session_unset();
	session_destroy();
	header("Location: http://localhost/PHP/problem/Problem-10/login.php");
	mysqli_close($conn);
	

?>