<?php

include '../controller/UpdateVaccineInformation1.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Vaccine Information Update Page</title>
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h2>Update Vaccine Information :</h2> </legend>
                <h3>Show All Vaccine Information :</h3>
                <?php  ShowData($result1);  ?>
            </fieldset>
        </form>
    </body>
</html>