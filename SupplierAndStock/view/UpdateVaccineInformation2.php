<?php

include '../controller/UpdateVaccineInformation1.php';

$vn = $_GET['vn'];
$vc = $_GET['vc'];
$mb = $_GET['mb'];
$sd = $_GET['sd'];
$pd = $_GET['pd'];
$ed = $_GET['ed'];

?>



<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Vaccine Information Update</title>
        <link rel="stylesheet" href="../Design/UpdateVaccineInfor2.css">
    </head>
    <body>
        <div id="headDiv">
            <img id="logo" src="../Documents//VaccineLogo.png" alt="VaccineLogo" height="64px" width="64px">
            <h1 id="title">E-Vaccine</h1>
        </div>

        <a href="../view/UpdateVaccineInformation1.php" id="backbtn" ><img src="../Documents/backbtn.png" width="15" height="15">   Back to Update Page</a>

       <form method="POST" action="" onsubmit="return ValidationForm()">
        <fieldset>
            <legend><h2>Update Vaccine Information : </h2></legend>
            <h3><?php echo($message); ?></h3>
            <p id="message"></p>
            <table>
                <tr>
                    <td id="label">VaccineName : </td>
                    <td><input type="text" name="vaccineName" value="<?php  echo($vn); ?>"></td>
                    <td><p id="message"><?php echo($vaccineNameErr);  ?></p></td>
                </tr>

                <tr>
                    <td id="label">Vaccine Code : </td>
                    <td><input type="text" name="vaccineCode" value="<?php echo($vc); ?>" ></td>
                </tr>

                <tr>
                    <td id="label">ManufactureBy : </td>
                    <td><input type="text" name="manufactureBy" value="<?php echo($mb); ?>"></td>
                    <td><p id="message"><?php echo($manufactureByErr);  ?></p></td>
                </tr>

                <tr>
                    <td id="label">SupplyDate : </td>
                    <td><input type="date" name="supplyDate" value="<?php echo($sd); ?>"></td>
                    <td><p id="message"><?php echo($supplyDateErr);  ?></p></td>
                </tr> 

                <tr>
                    <td id="label">Production Date: </td>
                    <td><input type="date" name="productionDate" value="<?php echo($pd); ?>"></td>
                    <td><p id="message"><?php echo($productionDateErr);  ?></p></td>
                </tr>

                <tr>
                    <td id="label">ExpiryDate : </td>
                    <td><input type="date" name="expiryDate" value="<?php echo($ed); ?>"></td>
                    <td><p id="message"><?php echo($expiryDateErr);  ?></p></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </fieldset>
       </form>
       <script src="../js/UpdateVaccinenformation2.js"></script>
    </body>
</html>