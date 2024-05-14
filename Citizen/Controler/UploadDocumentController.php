<?php

include '../Layouts/MyDb.php';

// define variables and set to empty values
$nameErr = $nidErr = $dobpicErr = $vaccCirErr ="";
$name = $nid = $dobpic = $vaccCir ="";

$hasError = 0; // Initialize $hasError as 0

//Public name Validation........
if (isset($_REQUEST['submit'])) {
  if (empty($_REQUEST["name"])) {
    $nameErr = "* Name is required *";
    $hasError = 1; // Set $hasError to 1 if there's an error
  } else {
    $name = $_REQUEST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $hasError = 1; // Set $hasError to 1 if there's an error
    }
  }

  // NID Number Validation........
    if(empty($_REQUEST['nid'])){
      $nidErr = "*NID is required!";
      $hasError = 1; // Set $hasError to 1 if there's an error
    }else{
      $nid = $_REQUEST['nid'];
        //validation,
        if(!preg_match('/^[0-9]{10}+$/', $nid)){
            $nidErr = "nid contains exactly 10 digits !";
            $hasError = 1; // Set $hasError to 1 if there's an error
        }
    }

  //Birth Certificate Validation....... 
    if(empty($_FILES['dobpic']['tmp_name'])){
        $dobpicErr = "*image is required";
        $hasError = 1; // Set $hasError to 1 if there's an error
    }else{
        $dobpic= $_FILES['dobpic']['name'];
        //Validation, 
        if($_FILES["dobpic"]["size"] > 10 * 1024 * 1024){
            $dobpicErr = "File size should not exceed 10 MB.";
            $hasError = 1; // Set $hasError to 1 if there's an error
        }
    }

  //Vaccine Certificate Validation........
     if(empty($_FILES['vaccCir']['tmp_name'])){
        $vaccCirErr = "*image is required";
        $hasError = 1; // Set $hasError to 1 if there's an error
    }else{
    $vaccCir= $_FILES['vaccCir']['name'];
    //Validation, 
        if($_FILES["vaccCir"]["size"] > 10 * 1024 * 1024){
         $vaccCirErr = "File size should not exceed 10 MB.";
         $hasError = 1; // Set $hasError to 1 if there's an error
        }
    }


    //DATABASE Connection....
    if($hasError !=1){
      $myDB = new Model();
      $conObj = $myDB->OpenConn();
      $result = $myDB->AddDocument($conObj,"documents",$_REQUEST['name'],$_REQUEST['nid'],$_FILES['dobpic'],$_FILES['vaccCir']);

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