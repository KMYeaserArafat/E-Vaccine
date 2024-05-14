<?php
include '../controller/viewVaccineRegPeoController.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Vaccine Information</title>
</head>

<link rel="stylesheet" href="../css/Supplier.css">
<body>
    
    <h1 id="main_title">Vaccine Register People</h1>
   
    <?php  
    if(isset($result) && $result->num_rows > 0){
        echo("<table class='container'>");

        echo("<tr><th>Name</th><th>Nid Number</th><th>Email By</th><th>Mobile Number</th><th>Vaccine Name</th><th>manufacturer</th><th>Quantity</th><th>Dose Number</th><th>Hospital Name</th><th>Actions</th><th>Actions</th></tr>"); // Added header for Actions

        foreach($result as $row){
            echo("<tr>");
            echo("<td>".$row['Name']."</td>");
            echo("<td>".$row['NID_Number']."</td>");
            echo("<td>".$row['Email']."</td>");
            echo("<td>".$row['Mobile_Number']."</td>");
            echo("<td>".$row['Vaccine_Name']."</td>");
            echo("<td>".$row['Manufacturer']."</td>");
            echo("<td>".$row['Quantity']."</td>");
            echo("<td>".$row['Dose_Number']."</td>");
            echo("<td>".$row['Hospital_Name']."</td>");
            echo("<td><a href='VaccineRegPeoUpdate.php?NID_Number=".$row['NID_Number']."' class='btn btn-success'>Update</a></td>"); 
            echo("<td><a href='VaccineRegPeoDelete.php?NID_Number=".$row['NID_Number']."' class='btn btn-danger'>Delete</a></td>"); 
            
            echo("</tr>");
        }

        echo("</table>");
    } else {
        echo "No results found.";
    }
    ?>

</body>

</html>
