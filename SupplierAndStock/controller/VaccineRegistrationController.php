<?php 

include '../DataBase/myDB.php';


$vaccineNameErr = $vaccineCodeErr=$manufactureByErr= $supplyDateErr = $productionDateErr = $expiryDateErr = $quantityErr = $rateErr = $hasErr = "";
$vaccineName = $vaccineCode = $manufactureBy = $supplyDate = $productionDate= $expiryDate = $quantity = $rate = $totalAmmount = "";
$vaccineAddedMessage ="";
$ammountErr = "";

if(isset($_REQUEST['reset'])){
    $vaccineNameErr = $vaccineName ="";
    $vaccineCodeErr = $vaccineCode ="";
    $manufactureByErr = $manufactureBy ="";
    $supplyDateErr = $supplyDate = "";
    $productionDateErr = $productionDate = "";
    $expiryDateErr = $expiryDate = "";
    $quantityErr = $quantity = "";
    $rateErr = $rate = "";
    $totalAmmount = "";
}


if(isset($_REQUEST['addVaccine'])){
    //Vaccine Name, 
    if(empty($_REQUEST['vaccineName'])){
        $vaccineNameErr = "*Vaccine Name is Required !";
    }else{
        $vaccineName = $_REQUEST['vaccineName'];
    }


    //Vaccine Code, 
    if(empty($_REQUEST['vaccineCode'])){
        $vaccineCodeErr = "*Vaccine Code is Required!";
    }else{
        $vaccineCode = $_REQUEST['vaccineCode'];
    }

    // Manufacture By, 
    if(empty($_REQUEST['manufactureBy'])){
        $manufactureByErr = "*Manufacture By is Required!";
    }else{
        $manufactureBy = $_REQUEST['manufactureBy'];
    }

    //Supply Date, 
    if(empty($_REQUEST['supplyDate'])){
        $supplyDateErr = "*Supply Date is Required!";
    }else{
        $supplyDate = $_REQUEST['supplyDate'];
    }

    // Production Date, 
    if(empty($_REQUEST['productionDate'])){
        $productionDateErr = "*Production Date is Required!";
    }else{
        $productionDate = $_REQUEST['productionDate'];
    }

    // Expiry Date, 
    if(empty($_REQUEST['expiryDate'])){
        $expiryDateErr = "*Expiry Date is Requires !";
    }else{
        $expiryDate = $_REQUEST['expiryDate'];
    }

    // Quantity, 
    if(empty($_REQUEST['quantity'])){
        $quantityErr = "*Quantity  is Requires !";
    }else{
        $quantity = intval($_REQUEST['quantity']);
    }

    // Rate, 
    if(empty($_REQUEST['rate'])){
        $rateErr = "*Rate is Required !";
    }elseif(!is_float(floatval($_REQUEST['rate']))){
        $rateErr = "*Rate is Invalid";
    }else{
        $rate = floatval($_REQUEST['rate']);
    }

    //Total Ammount, 
    if(empty($_REQUEST["quantity"]) && empty($_REQUEST["rate"])){
         $ammountErr = "Invalid quantity or rate!";
    }else{
        $totalAmmount = $_REQUEST['quantity']* $_REQUEST['rate'];
    }
     


     // Data-Base Work, 
     if($hasErr != 1){
        $myDB = new Model();
        $connObj = $myDB->OpenConn();
        if($vaccineName!="" && $vaccineCode!="" && $manufactureBy!="" && $supplyDate!="" && $productionDate!="" && $expiryDate!="" && $quantity!="" && $rate!=""){
            $result = $myDB->VaccineRegistration($connObj,"vaccineregistration",$vaccineName,$vaccineCode,$manufactureBy,$supplyDate,$productionDate,
        $expiryDate,$quantity,$rate,$totalAmmount);

        if($result==true){
            $vaccineAddedMessage ="Vaccine is added";
        }else{
            $vaccineAddedMessage ="Vaccine is not added!";
        }
        }
    
     }

}



?>