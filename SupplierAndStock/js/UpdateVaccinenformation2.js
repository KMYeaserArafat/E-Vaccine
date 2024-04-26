

function ValidationForm(){
   if(ValidVaccineName()==false || ValidVaccineCode()==false){
    return false;
   }else{
    return true;
   }
}


function ValidVaccineName(){
    var vaccineName = document.getElementById("vaccineName").value;

    if(vaccineName==""){
        document.getElementById("message").innerHTML = "*Vaccine Name is Required!";
        return false;
    }else{
        return true;
    }
}


function ValidVaccineCode(){
    var vaccineCode = document.getElementById("vaccineCode").value;
    
    if(vaccineCode==""){
        document.getElementById("message").innerHTML = "*Vaccine Code is required!";
        return false;
    }else{
        return true;
    }
}