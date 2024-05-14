<?php

include '../Layouts/MyDb.php';

$myDB = new Model();
$conObj = $myDB->OpenConn();
$showResult = $myDB->ShowVaccineInformation($conObj,"vaccineregistration");

function ShowVaccineInformation($result){
    echo("<table>");
    echo("<th>VaccineName</th> <th>VaccineCode</th> <th>ManufactureBy</th> <th>SupplyDate</th> <th>ProductionDate</th>
    <th>ExpiryDate</th> <th>Quantity</th> <th>Rate</th> <th>TotalAmmount</th>");

    foreach($result as $row){
        echo "<tr>
        <td>$row[VaccineName]</td>
        <td>$row[VaccineCode]</td>
        <td>$row[ManufactureBy]</td>
        <td>$row[SupplyDate]</td>
        <td>$row[ProductionDate]</td>
        <td>$row[ExpiryDate]</td>
        <td>$row[Quantity]</td>
        <td>$row[rate]</td>
        <td>$row[TotalAmmount]</td>
        </tr>";
    }
    echo("</table>");
}

$searchMessage = "";

// Search Oparation , 
if(isset($_REQUEST['searchVaccine'])){

    if(empty($_REQUEST['SearchVaccineData'])){
        $searchMessage = "*Search Data is required!";
    }else{
        $searchData = $myDB->SearchVaccineInformation($conObj,"vaccineregistration",$_REQUEST['SearchVaccineData']);
        $searchMessage = $_REQUEST['SearchVaccineData']." is found, ". mysqli_num_rows($searchData)." Times";
    }
}


?>