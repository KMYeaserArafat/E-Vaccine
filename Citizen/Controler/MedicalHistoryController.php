<?php

include '../Layouts/MyDb.php';

// define variables and set to empty values
$doseErr = $agelimitErr = $bloodPressureErr = $diabeticsErr = $allergyErr= $medicalHistoryErr="";
$doseNum = $age_limit = $blood_pressure = $diabetics = $allergy = $add="";
$hasError = 0; // Initialize $hasError as 0

//Dose number Validation........
if (isset($_REQUEST['submit'])) {
  if (empty($_REQUEST["doseNum"])) {
    $doseErr = "* Dose Number is required *";
    $hasError = 1; // Set $hasError to 1 if there's an error
  } else {
    $doseNum = $_REQUEST["doseNum"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^\d{1}$/", $doseNum)) {
      $doseErr = "Dose Number must be numeric and not more than 1 digits";
      $hasError = 1; // Set $hasError to 1 if there's an error
    }
  }

  // Age Limit Validation........
  if(empty($_REQUEST['age_limit'])){
    $agelimitErr = "* Age Limit is required!";
    $hasError = 1; // Set $hasError to 1 if there's an error
  }else{
    $age_limit = $_REQUEST['age_limit'];
    // validation
    if(!in_array($age_limit, array('1-10', '11-20', '21-30', 'Above 30'))){
      $agelimitErr = "Please select one option from the Age Limit dropdown!";
      $hasError = 1; // Set $hasError to 1 if there's an error
    }
  }
  
  

  //Blood Pressure  Validation....... 
  if(empty($_REQUEST['blood_pressure'])){
    $bloodPressureErr = "* Blood Pressure selection is required!";
    $hasError = 1; // Set $hasError to 1 if there's an error
  }else{
    $blood_pressure = $_REQUEST['blood_pressure'];
    // Validation
    if($blood_pressure !== 'yes' && $blood_pressure !== 'no'){
      $bloodPressureErr = "Please select either Yes or No for Blood Pressure!";
      $hasError = 1; // Set $hasError to 1 if there's an error
    }
  }

  //diabetics Validation........
  if(empty($_REQUEST['diabetics'])){
    $diabeticsErr = "* Diabetics selection is required!";
    $hasError = 1; // Set $hasError to 1 if there's an error
  }else{
    $diabetics = $_REQUEST['diabetics'];
    // Validation
    if($diabetics !== 'yes' && $diabetics !== 'no'){
      $diabeticsErr = "Please select either Yes or No for Diabetics!";
      $hasError = 1; // Set $hasError to 1 if there's an error
    }
  }

  //allergy validation.....
  if(empty($_REQUEST['allergy'])){
    $allergyErr = "* Allergy selection is required!";
    $hasError = 1; // Set $hasError to 1 if there's an error
  }else{
    $allergy = $_REQUEST['allergy'];
    // Validation
    if($allergy !== 'yes' && $allergy !== 'no'){
      $allergyErr = "Please select either Yes or No for Allergy!";
      $hasError = 1; // Set $hasError to 1 if there's an error
    }
  }
  

  //medical history validation...
  if (empty($_REQUEST["medicalHistory"])) {
    $medicalHistoryErr = "Medical History is required";
  } else {
    $add = $_REQUEST["medicalHistory"];
  }

    //DATABASE Connection....
    if($hasError !=1){
      $myDB = new Model();
      $conObj = $myDB->OpenConn();
      $result = $myDB->AddMedicalHistory($conObj,"medicine_history",$_REQUEST['doseNum'],$_REQUEST['age_limit'],$_REQUEST['blood_pressure'],$_REQUEST['diabetics'],$_REQUEST['allergy'],$_REQUEST["medicalHistory"]);

      if($result==TRUE){
        echo("Successfully Added");
    }else{
        echo("Error Occoured".$connObj->error);
    }
  }else{
      echo("Please complete the validation!!");
  }

}

?>