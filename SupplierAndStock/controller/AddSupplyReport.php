<?php

include '../DataBase/myDB.php';

$slipNoErr = $DateErr = $vaccineTypeErr = $vatNoErr = $quantityErr = $rateErr = $totalPrice = $supplierCompanyNameErr = $paperErr =  "";
$slipNo = $Date = $vaccineType = $vatNo = $quantity = $rate = $supplierCompanyName = $papers =$hasError = "";



if(isset($_REQUEST['reset'])){
    $slipNoErr = $slipNo = "";
    $DateErr = $Date = "";
    $vaccineTypeErr = $vaccineType = "";
    $vatNoErr  = $vatNo = "";
    $quantityErr = $quantity = "";
    $rateErr = $rate = "";
    $totalPrice = "";
}


try{
    if(isset($_REQUEST['submit'])){
        // Slip No, 
        if(empty($_REQUEST['slipNo'])){
            $slipNoErr = "*Slip No is Required!";
        }else{
            $slipNo = $_REQUEST['slipNo'];
        }
    
        // Date, 
        if(empty($_REQUEST['Date'])){
            $DateErr = "*Date is Required!";
        }else{
            $Date = $_REQUEST['Date'];
        }
    
        //Vaccine Type, 
        if(!isset($_REQUEST['vaccineType'])){
            $vaccineTypeErr = "*Vaccine Type is required!";
        }else{
            $vaccineType = $_REQUEST['vaccineType'];
        }
    
        // Papers, 
        if(!isset($_REQUEST['papers'])){
            $papersname = $_FILES['papers']['name'];
            move_uploaded_file($_FILES['papers']['tmp_name'],"../documents/".".pdf");
            $papers = "Already Attached Papers !";
        }else{
            $paperErr = "*Can't Attached Papers!";
    
        }
    
        // Supplier Company Name, 
        if(empty($_REQUEST['supplierCompanyName'])){
            $supplierCompanyNameErr = "*Supplier Company Name is Required!";
        }else{
            $supplierCompanyName = $_REQUEST['supplierCompanyName'];
        }
        // Vat No, 
        if(empty($_REQUEST['vatNo'])){
            $vatNoErr = "*Vat No is Required!";
        }elseif(strlen($_REQUEST['vatNo'])==12){
            $vatNo = $_REQUEST['vatNo'];
        }
    
        // Quantity, 
        if(empty($_REQUEST['quantity'])){
            $quantityErr = "*Quantity is required!";
        }else{
            $quantity = intval($_REQUEST['quantity']);
        }
    
    
        // Rate, 
        if(empty($_REQUEST['rate'])){
            $rateErr = "*Rate is required!";
        }elseif(!is_float(floatval($_REQUEST['rate']))){
            $rateErr = "*Rate is Invalid";
        }
        else{
            $rate = floatval($_REQUEST['rate']);
        }
    
    
        // TotalPrice, 
        $totalPrice = $quantity * $rate;
    
        if($hasError != 1 ){
            $myBD = new Model();
            $ConnObj = $myBD->OpenConn();
            $result = $myBD->AddSupplyVaccine($ConnObj,"addsupplyreport",$slipNo,$Date,$vaccineType,$papers,$supplierCompanyName,$vatNo,$quantity,$rate,$totalPrice);
    
            if($result==true){
                echo("Supply Data is Added");
            }else{
                echo(mysqli_connect_error());
            }
        }
    
    
        
    }
}catch(Exception $e){
    echo($e);
}





?>