

function validationForm(){
    if(ValidationSearchBox()==false){
        return false;
    }else{
        return true;
    }
}





function ValidationSearchBox(){
    var searchData = document.getElementById("searchSupplier").value;

    if(searchData==""){
        document.getElementById("messageError").innerHTML = "*SearchData is Required!";
        return false;
    }else{
        return true;
    }
}