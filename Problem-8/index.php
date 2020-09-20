
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
		var f = document.getElementById("salary").value;
        var e = document.getElementById("emaill").value;
        var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var correct_way = /^[a-zA-Z]+$/;
        var phone = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
        if(a==""){
            document.getElementById("message").innerHTML="This field is Required";
   
        }
        if(a.length<3){
            document.getElementById("message").innerHTML="Must be at 3 letters more";
            return false;
        }
        if(a.length>20){
            document.getElementById("message").innerHTML="Must be less than 20 letters";
            return false;
        }
		if(a.match(phone))
			document.getElementById("message").innerHTML="Please insert a Alphabate";
		else{
			true;
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
		if(f.match(correct_way))
			document.getElementById("sal").innerHTML="Please insert a number";
		else{
			true;
		}
    }
</script>
<h1>Insert The Emplyoee's Information</h1>
<form action="" onsubmit="return validate()" method="post">
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
                <td>Designation</td>
                <td><input type="text" id="name" name="designation" value=""></td>
                <td><span id="message"></span></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" id="name" name="add" value=""></td>
                <td><span id="message"></span></td>
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
                <td>Salary</td>
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
</body>
</html>