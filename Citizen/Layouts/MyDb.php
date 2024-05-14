<?php

class Model{

    //DataBase Connection
    function OpenConn(){
        $conn = new mysqli("localhost","root","","e_vaccine");
        return $conn;
    }

    //Inset People......
    function AddPeople($conn,$table,$name, $fname ,$mname ,$dob ,$nid ,$mob ,$email, $gender, $prof ,$add ,$pass ,$confirmPass ,$termsConditions){
        $sqlQuery = "Insert into $table(Name,Father_Name,Mother_Name,DOB,NID_Number,Mobile_Number,Email,Gender,Profession,Address,Password,Confirm_Password,TermsAndCondition) Values('$name','$fname','$mname','$dob','$nid','$mob','$email','$gender','$prof','$add','$pass','$confirmPass','$termsConditions')";

        $result = $conn->query($sqlQuery);
        return $result;
    }


    // Login Data, Using Email,Password.
    function CheckLoginCredentials($conn,$table,$email,$pass){
        $sqlQuery = "Select Email,Password from $table where Email='$email' and Password='$pass'";
        $result = $conn->query($sqlQuery);
        return $result;
    }


    //Upload Birth Certificate.....
    function AddDocument($conn,$table,$name,$nid,$dobpic,$vaccCir)
    {
        $dobpic_name = $dobpic['name'];
        $vaccCir_name = $vaccCir['name'];
        $sqlQuery = "Insert into $table(Name,NID_Number,Picture,Vaccine_Certificate) Values ('$name','$nid','$dobpic_name','$vaccCir_name')";
        $result = $conn->query($sqlQuery);
        return $result;
    }

    //Vaccine Registration
    function AddVaccine($conn,$table,$name, $nid, $email, $mob, $vaccineName, $manufacturer, $quantity, $doseNumber, $hospitalName)
    {
        $sqlQuery = "Insert into $table(Name, NID, Email, Mobile_Number, Vaccine_Name,Manufacturer, Quantity, Dose_Number, Hospital_Name)
        Values ('$name', '$nid', '$email', '$mob', '$vaccineName', '$manufacturer', '$quantity', '$doseNumber', '$hospitalName')";
        $result = $conn->query($sqlQuery);
        return $result;
    }

    //update User Information....
    function UpdateUserInformation($conn,$table,$id,$name, $fname ,$mname ,$dob ,$nid ,$mob ,$email, $gender, $prof ,$add ,$pass ,$confirmPass ,$termsConditions){

        $sqlQuery = "Update $table SET Name='$name' ,Father_Name ='$fname' ,Mother_Name ='$mname',DOB ='$dob',NID_Number='$nid',Mobile_Number ='$mob',Email= '$email',Gender ='$gender',Profession ='$prof',Address ='$add', Password ='$pass',Confirm_Password ='$confirmPass',TermsAndCondition='$termsConditions' WHERE ID='$id'";

        $result = $conn->query($sqlQuery);
        return $result;  
        
    }

    // Add Medical History Information....
    function AddMedicalHistory($conn,$table,$doseNum,$age_limit,$blood_pressure,$diabetics,$allergy,$add)
    {
        $sqlQuery = "Insert into $table(Dose_Number,Age_Limit,Blood_Pressure,Diabetics,Allergy,OtherMedical_History) Values ('$doseNum','$age_limit','$blood_pressure','$diabetics','$allergy','$add')";
        $result = $conn->query($sqlQuery);
        return $result;
    }  

    // Show ProfileData, 
    function showProfileData($conn,$table,$email){
        $sqlQuery="SELECT * FROM $table WHERE Email LIKE '$email'";

        $result = $conn->query($sqlQuery);
        return $result;
    }

    // Show SupplierInformation: 
    function ShowUserInformation($conn,$table){
        $sqlQuery = "SELECT * FROM $table";
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

    // Delete Vaccine-Information, 
    function DeleteVaccineInformation($conn,$table,$deleteData){
        $sqlQuery = "DELETE FROM $table WHERE VaccineCode LIKE '$deleteData'";
        $result = $conn->query($sqlQuery);
        return $result;
    }

}
?>