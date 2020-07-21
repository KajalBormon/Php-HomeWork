<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","problem");
        $fname = mysqli_real_escape_string($conn,$_POST['first_name']);
        $lname = mysqli_real_escape_string($conn,$_POST['last_name']);
        $fa_name = mysqli_real_escape_string($conn,$_POST['f_name']);
        $mo_name = mysqli_real_escape_string($conn,$_POST['m_name']);
        $address = mysqli_real_escape_string($conn,$_POST['add']);
        $department = mysqli_real_escape_string($conn,$_POST['dept']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $birthday = mysqli_real_escape_string($conn,$_POST['birth_date']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $sql = "SELECT * FROM student WHERE phone = '{$phone}'";         
        $result= mysqli_query($conn,$sql) or die("Insert query failed".mysqli_error());
            if(mysqli_num_rows($result)>0){             
                echo '<div>This name is already exits.....</div>'; 
            }else{             
                $sql1 = "INSERT INTO student(first_name,last_name,fathers_name,mothers_name,address,department,email,birthday,phone)
                        VALUES('{$fname}','{$lname}','{$fa_name}','{$mo_name}','{$address}','{$department}','{$email}','{$birthday}','{$phone}')";
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
        var c = document.getElementById("b_date").value;
        var d = document.getElementById("phone").value;
        var e = document.getElementById("emaill").value;
        var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var correct_way = /^[a-zA-Z]+$/;
        var phone = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
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
        if(b.match(correct_way))
        true;
        else{
            document.getElementById("deptmessage").innerHTML="Department Name must be alphabate";
            return false;
        }
        if(c==""){
            document.getElementById("birth").innerHTML="This field must be Required";
            return false;
        }
        if(d==""){
            document.getElementById("ph").innerHTML="This field must be Required";
            return false;
        }
        if(d.length>11){
            document.getElementById("ph").innerHTML="Please insert 11 number";
            return false;
        }
        if(d.length<11)}{
            document.getElementById("ph").innerHTML="Please insert 11 number";
            return false;
        }
        if(d.match(phone))
            true;
        else{
            document.getElementById("ph").innerHTML="Please insert a number";
        }
        if(e.match(correct_way))
            true;
        else{
            document.getElementById("em").innerHTML="Please enter alphabate";
        }
        if(e.match(mail))
            true;
        else{
            document.getElementById("em").innerHTML="Please insert a valid email";
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
                <td>Father's Name</td>
                <td><input type="text" id="name" name="f_name" value=""></td>
                <td><span id="message"></span></td>
            </tr>
            <tr>
                <td>Mother's Name</td>
                <td><input type="text" id="name" name="m_name" value=""></td>
                <td><span id="message"></span></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" id="name" name="add" value=""></td>
                <td><span id="message"></span></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><select name="dept">
                    <option disabled>Select Department</option>
                    <option>CSE</option>
                    <option>EEE</option>
                    <option>ESE</option>
                    <option>Stat</option>
                </select></td>
                <td><span id="deptmessage"></span></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" id="emaill" name="email" value=""></td>
                <td><span id="em"></span></td>

            </tr>
            <tr>
                <td>BirthDay</td>
                <td><input type="date" id="b_date" name="birth_date" value=""></td>
                <td><span id="birth"></span></td>
            </tr>
             <tr>
                <td>Phone</td>
                <td><input type="text" id="phone" name="phone" value=""></td>
                <td><span id="ph"></span></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save" name="submit"></td>
            </tr>
        </table>
    </form>
<?php
        $first_name = $last_name = $fa_name = $mo_name = $address = $department = $email = $birthday = $phone = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $first_name = validate($_POST['first_name']);
            $last_name = validate($_POST['last_name']);
            $fa_name = validate($_POST['f_name']);
            $mo_name = validate($_POST['m_name']);
            $address = validate($_POST['add']);
            $email = validate($_POST['email']);
            $birthday = validate($_POST['birth_date']);
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