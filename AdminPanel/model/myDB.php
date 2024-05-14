<?php

class Model {
    function OpenConn() {
        $conn = new mysqli("localhost", "root", "", "e_vaccine");
        return $conn;
    }

    public function CheckLoginCredentials($conObj, $admin, $email, $password) {
        $sql = "SELECT * FROM $admin WHERE email = '$email' AND password = '$password'";
        $result = $conObj->query($sql);
        return $result;
    }

    function ShowVaccineInformation($conn, $vaccineregistration) {
        $sqlQuery = "SELECT * FROM vaccineregistration";
        $result = $conn->query($sqlQuery);
        return $result;
    }

    function UpdateVaccineInformation($conn,$table,$vaccineName,$vaccineCode,$manufactureBy,$supplyDate,$productionDate,$expiryDate){
        $sqlQuery = "UPDATE $table SET VaccineName='$vaccineName', ManufactureBy='$manufactureBy', SupplyDate='$supplyDate', ProductionDate='$productionDate', ExpiryDate='$expiryDate' WHERE VaccineCode='$vaccineCode'";

        $result = $conn->query($sqlQuery);
        return $result;
    }

    

    function Deletevaccine_registration_people($conn,$vaccine_registration_people,$deleteData){
        $sqlQuery = "DELETE FROM $vaccine_registration_people WHERE NID_Number LIKE '$deleteData'";
        $result = $conn->query($sqlQuery);
        return $result;
    }

    function Showvaccine_registration_people($conn, $vaccine_registration_people) {
        $sqlQuery = "SELECT * FROM vaccine_registration_people";
        $result = $conn->query($sqlQuery);
        return $result;
    }

            
    function Updatevaccine_registration_people($conn,$table,$Name,$NID_Number,$Email,$Mobile_Number,$Vaccine_Name,$Manufacturer,$Quantity,$Dose_Number,$Hospital_Name){
        $sqlQuery = "UPDATE $table SET Name='$Name', NID_Number='$NID_Number', Email='$Email', Mobile_Number='$Mobile_Number', Vaccine_Name='$Vaccine_Name',  Manufacturer= '$Manufacturer', Quantity=''$Quantity, Dose_Number='$Dose_Number', Hospital_Name = '$Hospital_Name' WHERE NID_Number='$NID_Number'";

        $result = $conn->query($sqlQuery);
        return $result;
    }
    function Deletevaccineregistration($conn,$vaccineregistration,$deleteData){
        $sqlQuery = "DELETE FROM $vaccineregistration WHERE VaccineCode LIKE '$deleteData'";
        $result = $conn->query($sqlQuery);
        return $result;
    }


    function Showaddemployee($conn, $addemployee) {
        $sqlQuery = "SELECT * FROM addemployee";
        $result = $conn->query($sqlQuery);
        return $result;
    }

    function Updateaddemployee($conn,$addemployee,$serial,$name,$nid,$nationality,$email,$password,$birthdate,$nmbr,$Hospital_Name,$gender, $address){
        $sqlQuery = "UPDATE $addemployee SET name='$name', nid='$nid', nationality='$nationality', email='$email', password='$password',  birthdate= '$=birthdate', nmbr=''$nmbr, Hospital_Name='$Hospital_Name', gender = '$gender', address='$address' WHERE serial='$serial'";

        $result = $conn->query($sqlQuery);
        return $result;
    }


    function Deleteaddemployee($conn,$addemployee,$deleteData){
        $sqlQuery = "DELETE FROM $addemployee WHERE serial LIKE '$deleteData'";
        $result = $conn->query($sqlQuery);
        return $result;
    }



}




?>
