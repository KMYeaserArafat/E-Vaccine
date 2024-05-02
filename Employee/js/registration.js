function validateForm()
{
    if(ValidedName()==false || ValidedNid()==false || ValidedNationality()==false || ValidedEmail()==false || ValidedPassword()==false ||ValidedBirthdate()==false || ValidedNumber()==false || ValidedGender()==false || ValidedAddress()==false){
        return false;
    }else{
        return true;
    }

}

function ValidedName(){
    var name = document.getElementById("name").value; 
    var regex = /^[a-zA-Z]+$/;
    if(name.length ==""){
        document.getElementById("display").innerHTML = "*Name is Required!";
       return false;
    }else if(regex.test(name)){
         return true;
    }else{
        document.getElementById("display").innerHTML = "*Name is Invalid!";
        return false;
    }
}

function ValidedNid(){
    var nid = document.getElementById("nid").value; 

    if(nid==""){
        document.getElementById("display").innerHTML = "*Nid is Required!";
        return false;
    }else if(nid.length < 12){
        return true;
    }else{
        document.getElementById("display").innerHTML = "*Nid is Invalid!";
        return false;
    }
}

function ValidedNationality(){
    var nationality = document.getElementById("nationality").value; 
    var regex = /^[a-zA-Z]+$/;
    if(nationality.length ==""){
        document.getElementById("display").innerHTML = "*Nationality is Required!";
       return false;
    }else if(regex.test(nationality)){
         return true;
    }else{
        document.getElementById("display").innerHTML = "*Nationality is Invalid!";
        return false;
    }
}

function ValidedEmail() {
    var email = document.getElementById("email").value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email == "") {
        document.getElementById("display").innerHTML = "*Email is Required!";
        return false;
    } else if (!emailRegex.test(email)) {
        document.getElementById("display").innerHTML = "*Invalid Email!";
        return false;
    } else {
        return true;
    }
}

function ValidedPassword(){

    var pass = document.getElementById("pass").value;

    if (pass == "") {

        document.getElementById("display").innerHTML = "*Password is Required!";
        return false;
    }
    else{
        return true;
    }
}

function ValidedBirthdate(){

    var birth = document.getElementById("birth").value;

    if (birth == "") {

        document.getElementById("display").innerHTML = "*BirthDate is Required!";
        return false;
    }
    else{
        return true;
    }
}

function ValidedNumber(){
    var nmbr = document.getElementById("nmbr").value; 

    if(nmbr==""){
        document.getElementById("display").innerHTML = "*Number is Required!";
        return false;
    }else if(nmbr.length==11){
        return true;
    }else{
        document.getElementById("display").innerHTML = "*Number is Invalid!";
        return false;
    }
}

function ValidedGender(){
    var maleSelection  = document.getElementById("genderMale").checked;
    var femaleSelection = document.getElementById("genderFeMale").checked;
    var otherSelection = document.getElementById("genderOther").checked;

    if(maleSelection == false && femaleSelection== false && otherSelection==false){
        document.getElementById('display').innerHTML = "Gender is reqired!";
        return false;
    }else{
        return true;
    }
}

function ValidedAddress(){

    var address = document.getElementById("address").value;

    if (address == "") {

        document.getElementById("display").innerHTML = "*Enter your valid address!";
        return false;
    }
    else{
        return true;
    }
}