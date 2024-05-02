<?php 

include '../model/mydb.php';

$mydb = new Model();
$conobj = $mydb->OpenCon();
$result = $mydb->ShowVaccinatedInformation($conobj,"vaccinated");

?>