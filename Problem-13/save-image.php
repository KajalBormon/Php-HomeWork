<?php
    $conn = mysqli_connect("localhost","root","","homework") or die("Connection Error:".mysqli_connect_error());
    if(isset($_FILES['image'])){
        $error = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $exp = explode(".",$file_name);
        $file_ext = end($exp);
        $extension = array("jpg","jpeg","png","JPG","JPEG","PNG");

        if(in_array($file_ext,$extension)===false){
            $error[] = "This extension file is not allowed.Please insert jpg,jpeg or png files";
        }
        if($file_size>2097152){
            $error[] = "File size must be 2mb or lower";
        }

        $new_name = time()."-".basename($file_name);
        $target = "images/".$new_name;

        if(empty($error)==true){
            move_uploaded_file($file_tmp,$target);
        }else{
            print_r($error);
            die();
        }
    }
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $sql = "INSERT INTO image(title,image) VALUES('{$title}','{$new_name}')";
    if(mysqli_query($conn,$sql)){
        header("Location:http://localhost/PHP/problem/Problem-13/Problem_13.php");
    }else{
        echo 'query Failed........';
    }

?>