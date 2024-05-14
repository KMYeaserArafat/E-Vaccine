function ValidationForm(){
    if(ValidationName()==false || ValidationFName()==false || ValidationMName()==false || ValidationDOB()==false || 
       ValidationNID()==false || ValidationMobile()==false || ValidationEmail()==false || ValidationGender()==false || 
       ValidationProfession()==false || ValidationAddress()==false || ValidationPassword()==false || 
       ValidationConfirmPassword()==false || ValidationTermsConditions()==false){
        return false;
    } else {
        return true;
    }
}

function ValidationId(){
    var id = document.getElementById("id").value;
 
    if(id==""){
     document.getElementById("errorMessage").innerHTML = "*ID is required!"; 
     return false;
    }else{
     return true;
    }
 }

function ValidationName(){
    var name = document.getElementById("name").value;

    if(name == ""){
        document.getElementById("errorMessage").innerHTML = "*Name is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationFName(){
    var fname = document.getElementById("fname").value;

    if(fname == ""){
        document.getElementById("errorMessage").innerHTML = "*Father's Name is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationMName(){
    var mname = document.getElementById("mname").value;

    if(mname == ""){
        document.getElementById("errorMessage").innerHTML = "*Mother's Name is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationDOB(){
    var dob = document.getElementById("dob").value;

    if(dob == ""){
        document.getElementById("errorMessage").innerHTML = "*Date of Birth is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationNID(){
    var nid = document.getElementById("nid").value;

    if(nid == ""){
        document.getElementById("errorMessage").innerHTML = "*NID is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationMobile(){
    var mob = document.getElementById("mob").value;

    if(mob == ""){
        document.getElementById("errorMessage").innerHTML = "*Mobile Number is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationEmail(){
    var email = document.getElementById("email").value;

    if(email == ""){
        document.getElementById("errorMessage").innerHTML = "*Email is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationGender(){
    var gender = document.getElementById("gender").value;

    if(gender == ""){
        document.getElementById("errorMessage").innerHTML = "*Gender is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationProfession(){
    var prof = document.getElementById("prof").value;

    if(prof == ""){
        document.getElementById("errorMessage").innerHTML = "*Profession is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationAddress(){
    var add = document.getElementById("add").value;

    if(add == ""){
        document.getElementById("errorMessage").innerHTML = "*Address is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationPassword(){
    var pass = document.getElementById("pass").value;
    if(pass == ""){
        document.getElementById("errorMessage").innerHTML = "*Password is required!";
        return false;
    } else {
        return true;
    }
}

function ValidationConfirmPassword(){
    var pass = document.getElementById("pass").value;
    var confirmPass = document.getElementById("confirmPass").value;
    if(confirmPass == ""){
        document.getElementById("errorMessage").innerHTML = "*Confirm Password is required!";
        return false;
    } else if(pass != confirmPass){
        document.getElementById("errorMessage").innerHTML = "*Passwords do not match!";
        return false;
    } else {
        return true;
    }
}

function ValidationTermsConditions(){
    var termsConditions = document.getElementById("termsConditions").value;

    if(termsConditions == ""){
        document.getElementById("errorMessage").innerHTML = "*Terms & Conditions must be accepted!";
        return false;
    } else {
        return true;
    }
}
