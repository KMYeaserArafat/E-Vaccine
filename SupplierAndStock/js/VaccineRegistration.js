
function ValidationForm(){
    if(ValidationVaccineName()==false || ValidationVaccineCode()==false || ValidationMenufactureBy()==false || ValidationSupplyDate()==false ||
ValidationProductionDate()==false || ValidationExpiryData()==false || ValidationQuantity()==false || ValidationRate()==false){
        return false;
    }else{
        return true;
    }
}

function ValidationVaccineName(){
    var vaccineName = document.getElementById("vaccineName").value;

    if(vaccineName==""){
        document.getElementById("message1").innerHTML = "*Vaccine Name is required!"
        return false;
    }else{
        return true;
    }
}


function ValidationVaccineCode(){
    var vaccineCode = document.getElementById("vaccineCode").value;

    if(vaccineCode==""){
        document.getElementById("message1").innerHTML = "*Vaccine Code is required!";
        return false;
    }else{
        return true;
    }
}

function ValidationMenufactureBy(){
    var manufactureBy = document.getElementById("manufactureBy").value;

    if(manufactureBy==""){
        document.getElementById("message1").innerHTML = "*ManufactureBy is required!";
        return false;
    }else{
        return true;
    }
}


function ValidationSupplyDate(){
    var supplyDate = document.getElementById("supplyDate").value;

    if(supplyDate==""){
        document.getElementById("message1").innerHTML = "*Supply Date is required!";
        return false;
    }else{
        return true;
    }
}

function ValidationProductionDate(){
    var productionDate = document.getElementById("productionDate").value;

    if(productionDate==""){
        document.getElementById("message1").innerHTML = "*Production Date is required!";
        return false;
    }else{
        return true;
    }
}

function ValidationExpiryData(){
    var expiryDate = document.getElementById("expiryDate").value; 

    if(expiryDate==""){
        document.getElementById("message1").innerHTML = "*Expiry Date is required!";
        return false;
    }else{
        return true;
    }
}

function ValidationQuantity(){
    var quantity = document.getElementById("quantity").value;

    if(quantity==0){
        document.getElementById("message1").innerHTML = "*Quantity is required!";
        return false;
    }else{
        return true;
    }
}

function ValidationRate(){
    var rate = document.getElementById("rate").value;

    if(rate !=0.00 && isFloat(rate)){
        return true;
    }else{
        document.getElementById("message1").innerHTML = "*rate is required!";
        return false;
    }
}