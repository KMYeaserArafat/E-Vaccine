function validateForm()
{
    if(ValidedName()==false || ValidedGender()==false || ValidedNumber()==false || ValidedRegistration()==false || ValidedAddress()==false || ValidedHospital()==false || ValidedVaccine()==false || ValidedVaccinated()==false){
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

function ValidedGender(){
    var maleSelection  = document.getElementById("genderMale").checked;
    var femaleSelection = document.getElementById("genderFemale").checked;
    var otherSelection = document.getElementById("genderOther").checked;

    if(maleSelection == false && femaleSelection== false && otherSelection==false){
        document.getElementById('display').innerHTML = "Gender is reqired!";
        return false;
    }else{
        return true;
    }
}

function ValidedNumber(){
    var nmbr = document.getElementById("nmbr").value; 

    if(nmbr==""){
        document.getElementById("display").innerHTML = "*Registration Number is Required!";
        return false;
    }else if(nmbr.length==5){
        return true;
    }else{
        document.getElementById("display").innerHTML = "*Registration Number is Invalid!";
        return false;
    }
}

function ValidedRegistration(){

    var registration = document.getElementById("registration").value;

    if (registration == "") {

        document.getElementById("display").innerHTML = "*Registration Date is Required!";
        return false;
    }
    else{
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

function ValidedHospital(){
    var hospital = document.getElementById("hospital").value; 
    var regex = /^[a-zA-Z]+$/;
    if(hospital.length ==""){
        document.getElementById("display").innerHTML = "*Hospital name is Required!";
       return false;
    }else if(regex.test(hospital)){
         return true;
    }else{
        document.getElementById("display").innerHTML = "*Hospital name is Invalid!";
        return false;
    }
}

function ValidedVaccine(){

    var vaccine = document.getElementById("vaccine").value;

    if (vaccine == "") {

        document.getElementById("display").innerHTML = "*Enter your vaccine name!";
        return false;
    }
    else{
        return true;
    }

}

function ValidedVaccinated(){

    var vaccinated = document.getElementById("vaccinated").value;

    if (vaccinated == "") {

        document.getElementById("display").innerHTML = "*Vaccinated Date is Required!";
        return false;
    }
    else{
        return true;
    }
}


