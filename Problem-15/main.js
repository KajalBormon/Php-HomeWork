function validate(){
    // Selector
    var name = document.querySelector("#name").value;
    var psw = document.querySelector("#pass").value;
    var email = document.querySelector("#email").value;
    var mobile = document.querySelector("#phone").value;
    // Regular Expression
    var correct_way = /^[a-zA-Z]+$/;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   
    var paswd =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
// Username Validation
    if(name==""){
        document.querySelector("#user").innerHTML="Please insert a value";
        return false;
    }
    if(name.length<3){
        document.querySelector("#user").innerHTML="Must be at 3 letters more";
        return false;
    }
    if(name.length>20){
        document.querySelector("#user").innerHTML="Must be less than 20 letters";
        return false;
    }
    if(name.match(correct_way))
    true;
    else{
        document.querySelector("#user").innerHTML="Only alphabate are allowed";
        return false;
    }
    if(name.match(phone)){
        document.querySelector("#user").innerHTML="Insert alphabate";
        return false;
    }else{
        true;
    }
    // Password validation
    if(psw.match(paswd))
    true;
    else{
        document.querySelector("#passcode").innerHTML="Insert valid password";
        return false;
    }
    // Email Validation
    if(email.match(mail))
    true;
    else{
        document.querySelector("#mail").innerHTML="Please Insert valid email";
        return false;
    }
    var m = email.endsWith("@gmail.com");
    if(m==false){
        document.querySelector("#mail").innerHTML="Please Insert valid email";
        return false;
    }
    // Phone validation
    if(mobile.length<11){
        document.querySelector("#tel").innerHTML="Must be at 11 numbers";
        return false;
    }
    if(mobile.length>11){
        document.querySelector("#tel").innerHTML="Must be at 11 numbers";
        return false;
    }
  
}