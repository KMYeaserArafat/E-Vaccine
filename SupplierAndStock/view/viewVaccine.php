<?php

include '../controller/viewVaccineController.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ShowVaccineInformation</title>
    </head>

    <body>
        <h1>Show Vaccine Information : </h1>
        <?php  
    
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
        
        
        ?>
    </body>
</html>