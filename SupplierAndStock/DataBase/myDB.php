<?php

class Model{

    //DB Connection, 
    function OpenConn(){
        $conn = new mysqli("localhost","root","","e_vaccine");
        return $conn;
    }

    // Add Supplier Register Data, 
    function AddData($conn,$table,$supplierName,$nationality,$nidNo,$gender,$birthDate,$permanentAddress,
    $email,$phoneNo,$userName,$password,$confirmpassword,$supplierCompanyName,$tin,$termsAndConditions){

        $sqlQuery = "Insert into $table(SupplierName,Nationality,NidNo,Gender,BirthDate,PermanentAddress,Email,PhoneNo,UserName,
        Password,ConfirmPassword,SupplierCompanyName,Tin,TermsAndConditions) Values('$supplierName','$nationality','$nidNo','$gender',
        '$birthDate','$permanentAddress','$email','$phoneNo','$userName','$password','$confirmpassword','$supplierCompanyName','$tin','$termsAndConditions') ";

        $result = $conn->query($sqlQuery);
        return $result;
    }

    // Login Data, Using Email,Password.
    function CheackLoginCredentials($conn,$table,$email,$password){
        $sqlQuery = "Select Email,Password from $table where Email='$email' and Password='$password'";
        $result = $conn->query($sqlQuery);
        return $result;
    }

    // Register Vaccine / Add Vaccine, 
    function VaccineRegistration($conn,$table,$vaccineName,$vaccineCode,$manufactureBy,$supplyDate,$productionDate,$expiryDate,
    $quantity,$rate,$totalAmmount){
        $sqlQuery = "Insert into $table(VaccineName,VaccineCode,ManufactureBy,SupplyDate,ProductionDate,ExpiryDate,Quantity,rate,TotalAmmount)
        Values('$vaccineName','$vaccineCode','$manufactureBy','$supplyDate','$productionDate','$expiryDate,','$quantity','$rate','$totalAmmount')";

        $result = $conn->query($sqlQuery);
        return $result;
    }

    // Add Supply Report, 
    function AddSupplyVaccine($conn,$table,$slipNo,$Date,$vaccineType,$Papers,$supplierCompanyName,$VatNo,$Quantity,$Rate,$totalAmmount){
        $sqlQuery = "Insert into $table(SlipNo,Date,VaccineType,Papers,SupplierCompanyName,VatNo,Quantity,Rate,TotalPrice) Values('$slipNo','$Date','$vaccineType','$Papers','$supplierCompanyName','$VatNo','$Quantity','$Rate','$totalAmmount')";
        $result = $conn->query($sqlQuery);
        return $result;
    }

    //Show Vaccine information, 
    function ShowVaccineInformation($conn,$table){
        $sqlQuery = "SELECT * FROM $table"; 

        $result = $conn->query($sqlQuery);
        return $result;
    }

    // Search Vaccine Information, 
    function SearchVaccineInformation($conn,$table,$vaccineSearchData){
         $sqlQuery = "SELECT * FROM $table WHERE VaccineCode LIKE'$vaccineSearchData' or VaccineName LIKE '$vaccineSearchData'";

        $result = $conn->query($sqlQuery);
        return $result;
    }

    // Search Supply Report, 
    function SearchSupplyReport($conn,$table,$searchData){
        $sqlQuery = "SELECT * FROM $table WHERE SlipNo LIKE '$searchData'";

        $result = $conn->query($sqlQuery);
        return $result;
    }

    // Delete Supply Report, 
    function DeleteSupplyReport($conn,$table,$deleteData){
        $sqlQuery = "DELETE FROM $table WHERE SlipNo LIKE '$deleteData'";

        $result = $conn->query($sqlQuery);
        return $result;
    }

    // Show SupplyReports,
    function ShowSupplyReport($conn,$table){
        $sqlQuery = "SELECT * FROM $table";
        $result = $conn->query($sqlQuery);
        return $result;
    }


    // Delete Vaccine-Information, 
    function DeleteVaccineInformation($conn,$table,$deleteData){
        $sqlQuery = "DELETE FROM $table WHERE VaccineCode LIKE '$deleteData'";
        $result = $conn->query($sqlQuery);
        return $result;
    }


    //Update Supplier Report, 
    function UpdateSupplierReport($conn,$table,$vaccineType,$supplierCompanyName,$vatNo,$slipNo){
        $sqlQuery = "UPDATE $table SET VaccineType='$vaccineType', SupplierCompanyName='$supplierCompanyName', VatNo='$vatNo' WHERE SlipNo='$slipNo'";
        
        $result = $conn->query($sqlQuery);
        return $result;
    }

    // Update Vaccine-Information, 
    function UpdateVaccineInformation($conn,$table,$vaccineName,$vaccineCode,$manufactureBy,$supplyDate,$productionDate,$expiryDate){
        $sqlQuery = "UPDATE $table SET VaccineName='$vaccineName', ManufactureBy='$manufactureBy', SupplyDate='$supplyDate', ProductionDate='$productionDate', ExpiryDate='$expiryDate' WHERE VaccineCode='$vaccineCode'";

        $result = $conn->query($sqlQuery);
        return $result;
    }

    // Show SupplierInformation: 
    function ShowSupplierInformation($conn,$table){
        $sqlQuery = "SELECT * FROM $table";
        $result = $conn->query($sqlQuery);
        return $result;
    }

    //Update Suppplier-Information:
    function UpdateSupplierInformation($conn,$table,$id,$supplierName,$nationality,$nidNo,$gender,$birthDate,$permanentAddress,$email,$phoneNo,$userName,$password,
    $confirmpassword,$supplierComapnyName,$tin,$termsAndConditions){
        $sqlQuery = "UPDATE $table SET SupplierName='$supplierName', Nationality='$nationality', NidNo='$nidNo', Gender='$gender', BirthDate='$birthDate', PermanentAddress='$permanentAddress',
        Email='$email', PhoneNo='$phoneNo', UserName='$userName', Password='$password', ConfirmPassword='$confirmpassword', SupplierCompanyName='$supplierComapnyName', Tin='$tin', TermsAndConditions='$termsAndConditions' WHERE ID='$id'";

        $result = $conn->query($sqlQuery);
        return $result;  
        
    }

    // Show ProfileData, 
    function showProfileData($conn,$table,$email){
        $sqlQuery="SELECT * FROM $table WHERE Email LIKE '$email'";

        $result = $conn->query($sqlQuery);
        return $result;
    }

    

    
}
?>