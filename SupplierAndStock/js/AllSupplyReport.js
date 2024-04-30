

function LoadData(){
    xhr = new XMLHttpRequest();

    var searchData = document.getElementById("searchBox2").value;

    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 &&  xhr.status==200){
           // Convert Data, 
           var data = JSON.parse(this.responseText);
           var user = data.find(function(item){
               if(item.SlipNo == searchData){
                 return item.SlipNo == searchData; 
               }
           });

           if(user){
            var printData = "<p>Slip No :"+ user.SlipNo+"</p>"+
            "<p> Date : "+user.Date+"</p>"+
            "<p> Vaccine Type : "+user.VaccineType+"</p>"+
            "<p>Supplier Company Name : "+user.SupplierCompanyName+"</p>"+
            "<p>Vat No : "+user.VatNo+"</p>"+
            "<p>Quantity : "+user.Quantity+"</p>"+
            "<p>Rate : "+user.Rate+"</p>"+
            "<p>Total Price : "+user.TotalPrice+"</p>";
             document.getElementById("display").innerHTML = printData; 
           }else{
            document.getElementById("display").innerHTML = "No user found!!";
           }

        }
    };

    xhr.open("GET","http://localhost/WTG/E-Vaccine/SupplierAndStock/controller/ajaxData.php",true);
    xhr.send();
}