<?php
    $conn = mysqli_connect("localhost","root","","homework") or die(mysqli_connect_error());
    $sid = $_GET['sid'];
    $sql = "DELETE FROM studentdelete WHERE id = {$sid}";
    if(mysqli_query($conn,$sql)){
        header("location:http://localhost/PHP/problem/Problem-12/show_12.php");
    }
    mysqli_close($conn);

?>