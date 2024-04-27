
function ValidationForm(){
    if(ValideSlipNo()==false || ValideDate()==false || ValideVaccineType()==false || ValideSupplierCompanyName()==false ||
ValideQuantity()==false || ValideRate()==false || ValideVatNo()==false){
    return false;
}else{
    return true;
}
}



function ValideSlipNo(){
    var slipNo = document.getElementById("slipNo").value;
    if(slipNo==""){
        document.getElementById("messageHead").innerHTML = "*Slip No is Required!";
        return false;
    }else{
        return true;
    }
}


function ValideDate(){
    var Date = document.getElementById("Date").value;
    if(Date==""){
        document.getElementById("messageHead").innerHTML = "*Date is Required!";
        return false;
    }else{
        return true;
    }
}


function ValideVaccineType(){
    var vaccineType = document.getElementById("vaccineType").value;
    if(vaccineType==""){
        document.getElementById("messageHead").innerHTML = "*VaccineType is Required!";
        return false;
    }else{
        return true;
    }
}

function ValideSupplierCompanyName(){
    var supplierCompanyName = document.getElementById("supplierCompanyName").value;
    if(supplierCompanyName==""){
        document.getElementById("messageHead").innerHTML = "*Supplier Company Name is Required!";
        return false;
    }else{
        return true;
    }
}

function ValideVatNo(){
    var vatNo = document.getElementById("vatNo").value;

    if(vatNo==""){
        document.getElementById("messageHead").innerHTML = "*Vat No is Required!";
        return false;
    }else if(Number.isInteger(vatNo) && vatNo.length==11){
        return true;
    }else{
        document.getElementById("messageHead").innerHTML = "*Vat No is Invalide!";
        return false;
    }
}

function ValideQuantity(){
    var quantity = document.getElementById("quantity").value;
    if(Number.isInteger(quantity)){
        return true;
    }else if(quantity==""){
        document.getElementById("messageHead").innerHTML = "*Quantity is Required!";
        return false;
    }else{
        document.getElementById("messageHead").innerHTML = "*Quantity is Invalide";
        return false;
    }
}

function ValideRate(){
    var rate = document.getElementById("rate").value;
    var objRegex = /(^-?\d\d*\.\d\d*$)|(^-?\.\d\d*$)/; 
    if(rate==""){
        document.getElementById("messageHead").innerHTML = "*Rate is Required!";
        return false;
    }else if(objRegex.test(rate)){
        return true;
    }else{
        document.getElementById("messageHead").innerHTML = "*Rate is Invalide!";
        return false;
    }
}