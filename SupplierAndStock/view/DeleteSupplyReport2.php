<?php

include '../controller/DeleteSupplyReport_Controller.php';
$sn = $_GET['sn'];

$DeleteData = $myDB->DeleteSupplyReport($conObj,"addsupplyreport",$sn);

$deleteMessage = "";

if($DeleteData==TRUE){
    $deleteMessage = "Slip No : ".$sn." Data is Deleted";
}else{
    $deleteMessage = "Data is not deleted!";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Delete Confirmation</title>
        <link rel="stylesheet" href="../Design/DeleteSupplyReport2.css">
    </head>
    <body>
        <h3 id="message"><?php  echo($deleteMessage);  ?></h3>
        <h3><a id="confirmationLink" href="DeleteSupplyReport_View.php">Back Page..</h3>
    </body>
</html>