<?php

include '../controller/showvaccinecontrol.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/showvaccinated.css">
    </head>

    <body>
        <h1>Show Vaccinated Information : </h1>
        <?php  
    
        if($result->num_rows>0){
            echo("<table>");
            echo("<th>Name </th><th>Gender </th> <th>RegistrationNO </th> <th>RegistrationDate </th> <th>Address</th> <th>Hospital </th> <th>VaccineName </th><th>VaccinatedDate </th>");
            
            foreach($result as $row){
                echo("<tr>");
                echo("<td>".$row['name']."</td>");
                echo("<td>".$row['gender']."</td>");
                echo("<td>".$row['nmbr']."</td>");
                echo("<td>".$row['registration']."</td>");
                echo("<td>".$row['address']."</td>");
                echo("<td>".$row['hospital']."</td>");
                echo("<td>".$row['vaccine']."</td>");
                echo("<td>".$row['vaccinated']."</td>");
                echo("</tr>");
            }
        
            echo("</table>");
        }
        
        ?>
    </body>
</html>