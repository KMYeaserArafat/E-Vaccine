<?php

include '../controller/DeleteVaccineInformation.php';
//include '../controller/DeleteVaccine1.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Delete Vaccine Information : </title>
    </head>


    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h2>Delete Vaccine Information</h2></legend>
                <?php 
                   ShowVaccineInformation($result1);
                ?>


            </fieldset>

        </form>
    </body>
</html>