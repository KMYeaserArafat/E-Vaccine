<?php 

include '../model/myDB.php';

$myDB = new Model();
$connObj = $myDB->OpenConn();
$result = $myDB->Showvaccine_registration_people($connObj,"vaccine_registration_people");

?>