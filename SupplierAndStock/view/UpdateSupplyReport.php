<?php  

include '../controller/UpdateSupplyReport.php';

?>


<!DOCTYPE html> 
<html>
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Update Supply Reports</title>
        <link rel="stylesheet" href="../Design/UpdateSupplyReport.css">
    </head>

    <body>
        <div id="headDiv">
            <img id="logo" src="../Documents//VaccineLogo.png" alt="VaccineLogo" height="64px" width="64px">
            <h1 id="title">E-Vaccine</h1>
        </div>

        <a href="../view/DashBoard.php" id="backbtn" ><img src="../Documents/backbtn.png" width="15" height="15">   Back DashBoard</a>
        
        <form method="POST" action="">
            <fieldset>
                <legend><h2>Update Supply Report : </h2></legend>
                <?php  ShowAllSupplyReport($result1)  ?>
            </fieldset>
        </form>
    </body>
</html>