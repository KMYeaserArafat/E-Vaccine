<?php 

include '../DataBase/myDB.php';

$myDB = new Model();
$connObj = $myDB->OpenConn();
$result = $myDB->ShowVaccineInformation($connObj,"vaccineregistration");

?>