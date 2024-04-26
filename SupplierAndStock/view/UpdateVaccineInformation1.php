<?php

include '../controller/UpdateVaccineInformation1.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Vaccine Information Update Page</title>
        <link rel="stylesheet" href="../Design/UpdateInformation1.css">
    </head>

    <body>
        <div id="headDiv">
            <img id="logo" src="../Documents//VaccineLogo.png" alt="VaccineLogo" height="64px" width="64px">
            <h1 id="title">E-Vaccine</h1>
        </div>

        <a href="../view/DashBoard.php" id="backbtn" ><img src="../Documents/backbtn.png" width="15" height="15">   Back DashBoard</a>
        
        <form method="POST" action="">
            <fieldset>
                <legend><h2>Update Vaccine Information :</h2> </legend>
                <h3 id="headtitle">Show All Vaccine Information :</h3>
                <?php  ShowData($result1);  ?>
            </fieldset>
        </form>
    </body>
</html>