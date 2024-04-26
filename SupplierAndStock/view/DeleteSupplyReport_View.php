<?php

include '../controller/DeleteSupplyReport_Controller.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Delete Supply Report</title>
        <link rel="stylesheet" href="../Design/DeleteSupplyReport.css">
    </head>

    <body>
        <div id="header">
            <img id="logo" src="../Documents//VaccineLogo.png" alt="VaccineLogo" height="64px" width="64px">
            <h1 id="title">E-Vaccine</h1>
        </div>

        <a href="../view/DashBoard.php" id="backbtn" ><img src="../Documents/backbtn.png" width="15" height="15">   Back DashBoard</a>
        
        <form method="POST" action="">
            <fieldset>
                <legend><h1>Delete Supply Report</h1></legend>
                <?php  ShowSupplyReport($ShowResult); ?>
            </fieldset>
        </form>
    </body>
</html>