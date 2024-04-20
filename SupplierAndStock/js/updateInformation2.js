
function ValidationForm(){
    if(ValidationSupplierName()==false || ValidationNationality()==false || ValidationNid()==false || ValidationGender()==false || 
    ValidationBirthDate()==false || ValidationPermanentAddress()==false || ValidationEmail()==false || ValidationPhoneNo()==false ||
    ValidationUserName()==false || ValidationPassword()==false || ValidationConfirmPassword()==false || ValidationTinNo()==false ||  ValidationTermsConditions()==false){
        return false;
    }else{
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


function ValidationSupplierName(){
    var supplierName = document.getElementById("supplierName").value;

    if(supplierName==""){
        document.getElementById("errorMessage").innerHTML = "*SupplierName is required!";
        return false;
    }else if(typeof supplierName ===! 'string'){
        document.getElementById("errorMessage").innerHTML = "*SupplierName is not string";
        return false;
    }else{
        return true;
    }
}


function ValidationNationality(){
    var nationality = document.getElementById("nationality").value;

    if(nationality===""){
        document.getElementById("errorMessage").innerHTML = "*Nationality is required!";
        return false;
    }else{
        return true;
    }
}


function ValidationNid(){
    var nid = document.getElementById("nidNo").value;

    if(nid==""){
        document.getElementById("errorMessage").innerHTML = "*Nid is Required!";
        return false;
    }else if(nid.toString().length>12 || nid.toString().length<12){
        document.getElementById("errorMessage").innerHTML = "*Nid is invalid!";
        return false;
    }else if(nid.length==12){
        return true;
    }
}

function ValidationGender(){
    var gender = document.getElementById("gender").value;

    if(gender==""){
        document.getElementById("errorMessage").innerHTML = "*Gender is Required!";
        return false;
    }else{
        return true;
    }
}

function ValidationBirthDate(){
    var birthDate = document.getElementById("birthdate").value;

    if(birthDate==""){
        document.getElementById("errorMessage").innerHTML = "*BirthDate is required!";
        return false;
    }else{
        return true;
    }
}

function ValidationPermanentAddress(){
    var permanentAddress = document.getElementById("permananetAddress").value;

    if(permanentAddress==""){
        document.getElementById("errorMessage").innerHTML = "*Permanent Address is required!";
        return false;
    }else{
        return true;
    }
}

function ValidationEmail(){
    var email = document.getElementById("email").value;

    if(email==""){
        document.getElementById("errorMessage").innerHTML = "*Email is required!";
        return false;
    }else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        document.getElementById("errorMessage").innerHTML = "*Email is Invalid!";
        return false;
    }else{
        return true;
    }
}



function ValidationPhoneNo(){
    var phoneNo = document.getElementById("phoneNo").value; 
    var phoneNoValide = /^\d{11}$/;
    if(phoneNo==""){
        document.getElementById("errorMessage").innerHTML = "*Phone is required!";
        return false;
    }else if(phoneNo.match(phoneNoValide)){
        return true;
    }else{
        document.getElementById("errorMessage").innerHTML = "*Phone is Invalid!";
        return false;
    }
}


function ValidationUserName(){
    var userName = document.getElementById("userName").value;

    if(userName==""){
        return false; 
    }else{
        return true;
    }
}


function ValidationPassword(){
    var Password  = document.getElementById("password").value;

    if(Password.toString().length>=8){
        return true;
    }else if(Password==""){
        document.getElementById("errorMessage").innerHTML = "*Password is Required!";
        return false;
    }else{
        document.getElementById("errorMessage").innerHTML = "*Password is Invalid";
        return false;
    }
}

function ValidationConfirmPassword(){
    var confirmPassword = document.getElementById("confirmPassword").value;

    if(confirmPassword==Password){
        return true;
    }else{
        document.getElementById("errorMessage").innerHTML = "*Confirm Password is Invalid";
        return false;
    }
}

function ValidationSupplyCompanyName(){
    var supplierCompanyName = document.getElementById("supplierCompanyName").value;

    if(supplierCompanyName==""){
        document.getElementById("errorMessage").innerHTML = "*Supply Company Name is required!";
        return false;
    }else{
        return true;
    }
}

function ValidationTinNo(){
    var tinNo = document.getElementById("tinNo").value;

    if(tinNo==""){
        document.getElementById("errorMessage").innerHTML = "*Tin No is Required!";
        return false;
    }else if(tinNo.toString().length==12){
        return true;
    }else{
        document.getElementById("errorMessage").innerHTML = "*Tin No is Invalid!";
        return false;
    }
}

function ValidationTermsConditions(){
    var termsConditions = document.getElementById("termsAndConditions").value;

    if(termsConditions==""){
        document.getElementById("errorMessage").innerHTML = "*Terms & Condition is Required!";
        return false;
    }else{
        return true;
    }


}