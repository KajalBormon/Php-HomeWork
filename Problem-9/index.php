
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
</head>
<body>
<h1>Insert The Employee Information</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
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
                <td>salary</td>
                <td><input type="number" id="salary" name="salary" value=""></td>
                <td><span id="sal"></span></td>
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
        $first_name = $last_name = $fa_name = $mo_name = $address = $department = $email = $birthday =$salary = $phone = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $first_name = validate($_POST['first_name']);
            $last_name = validate($_POST['last_name']);
            $fa_name = validate($_POST['f_name']);
            $mo_name = validate($_POST['m_name']);
            $address = validate($_POST['add']);
            $email = validate($_POST['email']);
            $birthday = validate($_POST['birth_date']);
			$salary = validate($_POST['salary']);
            $phone = validate($_POST['phone']);
        }
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
		echo $first_name;
		echo '<br>';
		echo $last_name;
		echo '<br>';
		echo $fa_name;
		echo '<br>';
		echo $mo_name;
		echo '<br>';
		echo $address;
		echo '<br>';
		echo $email;
		echo '<br>';
		echo $birthday;
		echo '<br>';
		echo $salary;
		echo '<br>';
		echo $phone;
       
?> 
</body>
</html>