<?php

include '../Layouts/MyDb.php';

// define variables and set to empty values
$nameErr = $fnameErr = $mnameErr = $dobErr = $nidErr = $mobErr = $emailErr = $genderErr = $profErr = $addErr = $passErr = $confirmPassErr = $termsConditionsErr ="";
$name = $fname = $mname = $dob = $nid = $mob = $email = $gender = $prof = $add = $pass = $confirmPass = $termsConditions = "";
$passwordSize = "";
$hasError = "";

//Public name Validation........
if (isset($_REQUEST['submit'])) {
  if (empty($_REQUEST["name"])) {
    $nameErr = "* Name is required *";
  } else {
    $name = $_REQUEST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  //Father name Validation........
  if (empty($_REQUEST["fname"])) {
    $fnameErr = "* Father Name is required *";
  } else {
    $fname = $_REQUEST["fname"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }

  //Mother name Validation........
  if (empty($_REQUEST["mname"])) {
    $mnameErr = "* Mother Name is required *";
  } else {
    $mname = $_REQUEST["mname"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$mname)) {
      $mnameErr = "Only letters and white space allowed";
    }
  }

  //BirthDate Validation..... 
    if(empty($_REQUEST['dob'])){
      $dobErr = "*Birth Date is required!";
    }else{
      $dob = $_REQUEST['dob'];
    }
  

  // NID Number Validation........
    if(empty($_REQUEST['nid'])){
      $nidErr = "*NID is required!";
    }else{
      $nid = $_REQUEST['nid'];
        //validation,
        if(!preg_match('/^[0-9]{10}+$/', $nid)){
            $nidErr = "*Nid is Invalid !";
        }
    }

  //Mobile Number Validation....... 
    if(empty($_REQUEST['mob'])){
        $mobErr = "*Phone No is required";
    }else{
        $mob = $_REQUEST['mob'];
        //Validation, 
        if(!preg_match('/^[0-9]{11}+$/', $mob)){
            $mobErr = "Phone No is Invalid!";
        }
    }

  //Email Validation........
  if (empty($_REQUEST["email"])) {
    $emailErr = "* Email is required *";
  } else {
    $email = $_REQUEST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  //Gender Validation....
  if (empty($_REQUEST["gender"])) {
    $genderErr = "* Gender is required *";
  } else {
    $gender = $_REQUEST["gender"];
    //Validation
    if(!isset($_REQUEST['gender'])){
      $genderErr = "Invalid Gender";
    }
  }

  //Profession Validation..........
  if (!empty($_REQUEST["profession"])) {
    $prof = $_REQUEST['profession'];
  }

  // Address Validation.....
  if (empty($_REQUEST["add"])) {
    $addErr = "Address is required";
  } else {
    $add = $_REQUEST["add"];
  }

  //Password......
      if(empty($_REQUEST['password'])){
        $passErr = "*Password is Required";
    }else{
        $pass = $_REQUEST['password'];
        //Validation, 
        $passwordSize = strlen($_REQUEST['password'])==8;
        if(!$passwordSize){
            $passErr = "*Password in Invalid!";
        }
    }

  //Confirm Password.......
    if(empty($_REQUEST['confirmPassword'])){
        $confirmPassErr = "ConfirmPassword is required!";
    }elseif($_REQUEST['confirmPassword'] != $_REQUEST['password']){
        $confirmPassErr = "Password is not matched!";
    }else{
        $confirmPass = $_REQUEST['confirmPassword'];
        $confirmPassErr = "Password Matched!";
    }

    // Tearms & Conditions, 
    if(empty($_REQUEST['termsConditions'])){
      $termsConditionsErr = "*Terms & Condition is Required!";
  }else{
      $termsConditions = $_REQUEST['termsConditions'];

  }

    //DATABASE Connection....
    if($hasError !=1){
      $myDB = new Model();
      $conObj = $myDB->OpenConn();
      $result = $myDB->AddPeople($conObj,"registration_information",$_REQUEST['name'],$_REQUEST['fname'],$_REQUEST['mname'],$_REQUEST['dob'],
      $_REQUEST['nid'],$_REQUEST['mob'],$_REQUEST['email'],$_REQUEST['gender'],$_REQUEST['profession'],$_REQUEST['add'],$_REQUEST['password'],$_REQUEST['confirmPassword'],$_REQUEST['termsConditions']);

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