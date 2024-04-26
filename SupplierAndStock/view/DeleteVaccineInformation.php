<?php

include '../controller/DeleteVaccineInformation.php';
//include '../controller/DeleteVaccine1.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Delete Vaccine Information : </title>
        <link rel="stylesheet" href="../Design/DeleteVaccineInformation.css">
    </head>


    <body>
        <div id="header">
            <img id="logo" src="../Documents//VaccineLogo.png" alt="VaccineLogo" height="64px" width="64px">
            <h1 id="title">E-Vaccine</h1>
        </div>

        <a href="../view/DashBoard.php" id="backbtn" ><img src="../Documents/backbtn.png" width="15" height="15">   Back DashBoard</a>

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