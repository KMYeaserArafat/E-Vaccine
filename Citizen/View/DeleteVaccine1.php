<?php

include '../Controler/DeleteVaccineController.php';

 $VaccineCode = $_GET['rn'];
 $message = "";

$myDB = new Model();
$connObj = $myDB->OpenConn();
$result1 = $myDB->DeleteVaccineInformation($connObj,"vaccineregistration",$VaccineCode);

if($result1==TRUE){
    $message = "Data is Deleted!";
}else{
    $message = "Data isn't Deleted!";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Delete Confirmation Page</title>
        <link rel="stylesheet" href="../Design/DeleteVaccine2.css">
    </head>
    <body>
        <h2 id="message"><?php echo($message); ?></h2>
        <h3><a id="confirmationLink" href="DeleteVaccine.php">Back</h3>
    </body>
</html>