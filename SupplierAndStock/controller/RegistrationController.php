<?php 

include '../DataBase/myDB.php';

$suplierNameErr=$nationalityErr=$nidErr=$genderErr=$bithdateErr=$permanentAddressErr=$suplierPhotoErr=$emailErr=$phoneNoErr=$userNameErr=$passwordErr=$confirmPasswordErr=$companyNameErr=$companyPapersErr=$tinIdErr=$teamsConditionsErr="";
$suplierName=$nationality=$nid=$gender=$birthdate=$permanentAddress=$suplierPhoto=$email=$phoneNo=$userName=$password=$confirmPassword=$companyName=$companyPapers=$tinId=$teamsConditions="";
$suplierNameValidation=$nidValidation=$emailValidation=$phoneNoValidation=$userNameValidation=$passwordSize=$tinIDValidation="";
$hasError = "";


if(isset($_REQUEST['submit'])){
    // Suplier Name,
    if(empty($_REQUEST['supplierName'])){
        $suplierNameErr = "*Suplier Name is required!";
    }else{
        $suplierName=$_REQUEST['supplierName'];
        //validation, 
        $suplierNameValidation = !preg_match("/^[a-zA-Z-' ]*$/",$suplierName);
        if($suplierNameValidation){
            $suplierNameErr = "*Suplier Name is Invalid !";
        }
    }

    // Nationality, 
    if(!empty($_REQUEST['nationality'])){
        $nationality = $_REQUEST['nationality'];
    }

    // NID NO:
    if(empty($_REQUEST['nid'])){
        $nidErr = "*NID is required!";
    }else{
         $nid = $_REQUEST['nid'];
        //validation,
        $nidValidation = !preg_match('/^[0-9]{10}+$/', $nid);
        if($nidValidation){
            $nidErr = "*Nid is Invalid !";
        }

    }

    // Gender, 
    if(empty($_REQUEST['gender'])){
        $genderErr = "*Gender is required!";
    }else{
        $gender = $_REQUEST['gender'];
        //validation, 
        if(!isset($_REQUEST['gender'])){
            $genderErr = "Invalid Gender";
        }
    }

    //Birthdate, 
    if(empty($_REQUEST['birthDate'])){
        $bithdateErr = "*Birthdate is required!";
    }else{
        $birthdate = $_REQUEST['birthDate'];
    }

    // Permanent Address : 
    if(empty($_REQUEST['permanentAddress'])){
        $permanentAddressErr = "Permanet Address is Required !";
    }else{
        $permanentAddress = $_REQUEST['permanentAddress'];
    }

    //Supplier Photo, 
    if(!isset($_REQUEST['suplierPhoto'])){
        echo($_FILES["suplierPhoto"]["name"]);
        move_uploaded_file($_FILES["suplierPhoto"]["tmp_name"],"../documents/".$_REQUEST['email'].".jpg"); 
        $suplierPhoto = "Already attached a supplier photo";
    }else{
       $suplierPhotoErr = "*Can't Attached Photo!";
    }
      
    

    // Email Id
    if(empty($_REQUEST['email'])){
        $emailErr = "*Email id is required!";
    }else{
        $email = $_REQUEST['email'];
        //Validation, 
        $emailValidation  = !filter_var($email,FILTER_VALIDATE_EMAIL);
        if($emailValidation){
            $emailErr = "*Email is Invalid !";
        }
    }

    //Phone No: 
    if(empty($_REQUEST['phoneNo'])){
        $phoneNoErr = "*Phone No is required";
    }else{
        $phoneNo = $_REQUEST['phoneNo'];
        //Validation, 
        $phoneNoValidation = !preg_match('/^[0-9]{11}+$/', $phoneNo);
        if($phoneNoValidation){
            $phoneNoErr = "Phone No is Invalid!";
        }
    }

    //UserName,
    if(empty($_REQUEST['userName'])){
        $userNameErr = "*User Name is required";
    }else{
        $userName = $_REQUEST['userName'];
        //validation, 
        $userNameValidation =strlen($_REQUEST['userName'])<=7 ;
        if(!$userNameValidation){
            $userNameErr = "*User Name is Invalid!";
        }
    }

    //Password, 
    if(empty($_REQUEST['password'])){
        $passwordErr = "*Password is Required";
    }else{
        $password = $_REQUEST['password'];
        //Validation, 
        $passwordSize = strlen($_REQUEST['password'])==8;
        if(!$passwordSize){
            $passwordErr = "*Password in Invalid!";
        }
    }

    //Confirm Password,
    if(empty($_REQUEST['confirmPassword'])){
        $confirmPasswordErr = "ConfirmPassword is required!";
    }elseif($_REQUEST['confirmPassword'] != $_REQUEST['password']){
        $confirmPasswordErr = "Password is not matched!";
    }else{
        $confirmPassword = $_REQUEST['confirmPassword'];
        $confirmPasswordErr = "Password Matched!";
    }



    // Company Name, 
    if(empty($_REQUEST['companyName'])){
        $companyNameErr = "Comapny Name is Required";
    }else{
        $companyName = $_REQUEST['companyName'];
    }
    //Company's Papers, 
    echo($_FILES["companyPapers"]["name"]);
    $companyPapers = move_uploaded_file($_FILES["companyPapers"]["tmp_name"],"../documents/".$_REQUEST['email'].".pdf"); 


    // Tin ID, 
    if(empty($_REQUEST['tinId'])){
        $tinIdErr = "*TIN ID is Required";
    }else{
        $tinId = $_REQUEST['tinId'];
        //Validation,
        $tinIDValidation = strlen($_REQUEST['tinId'])==12;
        if(!$tinIDValidation){
            $tinIdErr = "*Tin Id is Invalid!";
        }
    }

    // Tearms & Conditions, 
    if(empty($_REQUEST['tearms&Conditions'])){
        $teamsConditionsErr = "*Tearms & Condition is Required!";
    }else{
        $teamsConditions = $_REQUEST['tearms&Conditions'];

    }


    // Data-Base Work, 
    if($hasError !=1){
        $myDB = new Model();
        $conObj = $myDB->OpenConn();
        $result = $myDB->AddData($conObj,"supplierregister",$_REQUEST['supplierName'],$_REQUEST['nationality'],$_REQUEST['nid'],$_REQUEST['gender'],
        $_REQUEST['birthDate'],$_REQUEST['permanentAddress'],$_REQUEST['email'],$_REQUEST['phoneNo'],$_REQUEST['userName'],$_REQUEST['password'],$_REQUEST['confirmPassword'],$_REQUEST['companyName'],$_REQUEST['tinId'],$_REQUEST['tearms&Conditions']);
    }else{
        echo("Please complete the validation!!");
    }
}else{
    
}


?>