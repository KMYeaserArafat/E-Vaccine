<?php 

include '../model/mydb.php';

$mydb = new Model();
$conobj = $mydb->OpenCon();
$result = $mydb->ShowEmployeeInformation($conobj,"addemployee");

?>