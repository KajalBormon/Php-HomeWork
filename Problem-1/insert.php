<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","problem");
        $fname = mysqli_real_escape_string($conn,$_POST['first_name']);
        $lname = mysqli_real_escape_string($conn,$_POST['last_name']);
        $address = mysqli_real_escape_string($conn,$_POST['add']);
        $department = mysqli_real_escape_string($conn,$_POST['dept_name']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);

        $sql = "SELECT * FROM student WHERE phone = {$phone}";
        $result = mysqli_query($conn,$sql) or die("Insert query failed".mysqli_error());
        if(mysqli_num_rows($result)>0){
            echo '<div>This name is already exits.....</div>';
        }else{
            $sql1 = "INSERT INTO student(first_name,last_name,address,department,phone) VALUES('{$fname}','{$lname}','{$address}','{$department}','{$phone}')";
            if(mysqli_query($conn,$sql1)){
                header("Location:http://localhost/PHP/problem/Problem-1/show.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>
<script>
    function validate(){
        var a = document.getElementById("name").value;
        var b = document.getElementById("dept").value;
        var correct_way = /^[a-zA-Z]+$/;
        if(a==""){
            document.getElementById("message").innerHTML="This field is Required";
            return false;
        }
        if(a.length<3){
            document.getElementById("message").innerHTML="Must be at 3 letters more";
            return false;
        }
        if(a.length>20){
            document.getElementById("message").innerHTML="Must be less than 20 letters";
            return false;
        }
        if(a.match(correct_way))
        true;
        else{
            document.getElementById("message").innerHTML="Only alphabate are allowed";
            return false;
        }
        if(b==""){
            document.getElementById("deptmessage").innerHTML="This field is Required";
            return false;
        }
        if(b.math(correct_way))
        true;
        else{
            document.getElementById("deptmessage").innerHTML="Department Name must be alphabate";
            return false;
        }
    }
</script>
<h1>Insert The Student Information</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return validate()" method="post">
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" id="name" name="first_name" value=""></td>
                <td><span id="message"></span></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" id="name" name="last_name" value=""></td>
                <td><span id="message"></span></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" id="name" name="add" value=""></td>
                <td><span id="message"></span></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><input type="text" id="dept" name="dept_name" value=""></td>
                <td><span id="deptmessage"></span></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="phone" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
        $first_name = $last_name = $address = $department = $phone = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $first_name = validate($_POST['first_name']);
            $last_name = validate($_POST['last_name']);
            $address = validate($_POST['add']);
            $department = validate($_POST['dept_name']);
            $phone = validate($_POST['phone']);
        }
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
       
    ?>
</body>
</html>