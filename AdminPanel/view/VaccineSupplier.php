<?php
include '../controller/viewVaccineController.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Vaccine Information</title>
</head>

<link rel="stylesheet" href="../css/Supplier.css">
<body>
    
    <h1 id="main_title">Show Vaccine Information</h1>
   
    <?php  

    if(isset($result) && $result->num_rows > 0){
        echo("<table class='container'>");

        echo("<tr><th>Vaccine Name</th><th>Vaccine Code</th><th>Manufacture By</th><th>Supply Date</th><th>Production Date</th><th>Expiry Date</th><th>Quantity</th><th>Rate</th><th>Total Amount</th><th>Actions</th><th>Actions</th></tr>"); 

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
            echo("<td><a href='VaccineUpdate.php?VaccineCode=".$row['VaccineCode']."' class='btn btn-success'>Update</a></td>"); 
            echo("<td><a href='VaccineDelete.php?VaccineCode=".$row['VaccineCode']."' class='btn btn-danger'>Delete</a></td>"); 
            
            echo("</tr>");
        }

        echo("</table>");
    } else {
        echo "No results found.";
    }
    ?>

</body>

</html>
