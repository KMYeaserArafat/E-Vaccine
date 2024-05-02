<?php

include '../controller/showemployee.php';

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/showemployee.css">
    </head>

    <body>
        <h1>Show Employee Information : </h1>
        <?php  
    
        if($result->num_rows>0){
            echo("<table>");
            echo("<th>Name</th> <th>Nid</th> <th>Nationality</th> <th>Email Address</th> <th>Password</th> <th>Date of Birth</th> <th>Number</th> <th>Gender</th> <th>Address</th>");

    foreach($result as $row){
        echo("<tr>");
        echo("<td>".$row['name']."</td>");
        echo("<td>".$row['nid']."</td>");
        echo("<td>".$row['nationality']."</td>");
        echo("<td>".$row['email']."</td>");
        echo("<td>".$row['password']."</td>");
        echo("<td>".$row['birthdate']."</td>");
        echo("<td>".$row['nmbr']."</td>");
        echo("<td>".$row['gender']."</td>");
        echo("<td>".$row['address']."</td>");
        echo("</tr>");
    }

    echo("</table>");
}
        
    ?>
    </body>
</html>