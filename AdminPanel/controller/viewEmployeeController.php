<?php 

include '../model/myDB.php';

$myDB = new Model();
$connObj = $myDB->OpenConn();
$result = $myDB->Showaddemployee($connObj,"addemployee");

?>