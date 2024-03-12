<?php

include '../DataBase/myDB.php';

$foundMessage = $numOfDataFound =  "";

if(isset($_REQUEST['searchVaccine'])){
    $myDB = new Model();
    $connObj = $myDB->OpenConn();
    $result = $myDB->SearchVaccineInformation($connObj,"vaccineregistration",$_REQUEST['SearchVaccineData']);
    if($result){
        $numOfDataFound = $_REQUEST['SearchVaccineData']." is Found : ".mysqli_num_rows($result)." Times";
        if(mysqli_num_rows($result)==0){
            $numOfDataFound = "Data Not Found !";
        }
        //Show Method of viewing Data, 
        function getSearchData($result){
            if($result->num_rows>0){
                echo("<table>");
                echo("<th>Vaccine Name </th><th>Vaccine Code </th> <th>Manufacture By </th> <th>Supply Date </th> <th>Production Date </th> <th>ExpiryDate</th><th>Quantity </th><th>rate </th><th>Total Ammount </th>");
    
                foreach($result as $row){
                    echo("<tr>");
                    echo("<td>".$row['VaccineName']."</td>");
                    echo("<td>".$row['VaccineCode']."</td>");
                    echo("<td>".$row['ManufactureBy']."</td>");
                    echo("<td>".$row['SupplyDate']."</td>");
                    echo("<td>".$row['ProductionDate']."</td>");
                    echo("<td>".$row['ExpiryDate']."</td");
                    echo("<td>".$row['Quantity']."</td>");
                    echo("<td>".$row['rate']."</td>");
                    echo("<td>".$row['TotalAmmount']."</td>");
                    echo("</tr>");
                }
    
                echo("</table>");
            }
        }
      }
}else{
    echo("No Search");
}


?>