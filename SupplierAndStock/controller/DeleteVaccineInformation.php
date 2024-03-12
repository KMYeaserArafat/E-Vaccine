<?php 

include '../DataBase/myDB.php';


$myBD = new Model();
$conObj = $myBD->OpenConn();
$result1 = $myBD->ShowVaccineInformation($conObj,"vaccineregistration");

function ShowVaccineInformation($result){
    echo("<table>");
    echo("<th>VaccineName</th> <th>VaccineCode</th> <th>ManufactureBy</th> <th>SupplyDate</th>
          <th>ProductionDate</th> <th>ExpiryDate</th> <th>Quantity</th> <th>Rate</th> <th>TotalAmmount</th><th> Oparation</th>");

    foreach($result as $row){
        echo("<tr>");
        echo("<td>".$row['VaccineName']."</td>");
        echo("<td>".$row['VaccineCode']."</td>");
        echo("<td>".$row['ManufactureBy']."</td>");
        echo("<td>".$row['SupplyDate']."</td>");
        echo("<td>".$row['ProductionDate']."</td>");
        echo("<td>".$row['ExpiryDate']."</td>");
        echo("<td>".$row['Quantity']."</td>");
        echo("<td>".$row['rate']."</td>");
        echo("<td>".$row['TotalAmmount']."</td>");
        echo("<td><a href='http://localhost/WTG/E-Vaccine/SupplierAndStock/controller/DeleteVaccine1.php?rn=$row[VaccineCode]'>Delete</td>");
        echo("</tr>");

    }

    echo("</table>");
}


?>