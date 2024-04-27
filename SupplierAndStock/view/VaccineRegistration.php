<?php

include '../controller/VaccineRegistrationController.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Vaccine Registration</title>
        <link rel="stylesheet" href="../Design/VaccineRegistration.css">
    </head>

    <body>
            <div id="headDiv">
                <img id="logo" src="../Documents//VaccineLogo.png" alt="VaccineLogo" height="64px" width="64px">
                <h1 id="title">E-Vaccine</h1>
            </div>

            <a href="../view/DashBoard.php" id="backbtn" ><img src="../Documents/backbtn.png" width="15" height="15">   Back DashBoard</a>

        <form method="POST" action="" onsubmit="return ValidationForm()">
            <fieldset>
                <legend><h1>Vaccine Registration :</h1></legend>
                <p class="message"><?php echo($vaccineAddedMessage); ?></p>
                <h3 id="message1">-</h3>
                <table>
                    <tr>
                        <td>Vaccine Name : </td>
                        <td><input type="text" name="vaccineName" id="vaccineName"></td>
                        <td class="message"><?php echo($vaccineNameErr); echo($vaccineName); ?></td>
                        
                    </tr>

                    <tr>
                        <td>Vaccine Code : </td>
                        <td><input type="text" name="vaccineCode" id="vaccineCode"></td>
                        <td class="message"><?php echo($vaccineCodeErr); echo($vaccineCode); ?></td>
                    </tr>

                    <tr>
                        <td>Manufacture By :</td>
                        <td><input type="text" name="manufactureBy" id="manufactureBy"></td>
                        <td class="message"><?php echo($manufactureByErr); echo($manufactureBy); ?></td>
                    </tr>

                    <tr>
                        <td>Supply Date : </td>
                        <td><input type="date" name="supplyDate" id="supplyDate"></td>
                        <td class="message"><?php echo($supplyDateErr); echo($supplyDate); ?></td>
                    </tr>

                    <tr>
                        <td>Production Date : </td>
                        <td><input type="date" name="productionDate" id="productionDate"></td>
                        <td class="message"><?php echo($productionDateErr); echo($productionDate); ?></td>
                    </tr>

                    <tr>
                        <td>Expiry Date : </td>
                        <td><input type="date" name="expiryDate" id="expiryDate"></td>
                        <td class="message"><?php echo($expiryDateErr); echo($expiryDate); ?></td>
                    </tr>

                    <tr>
                        <td>Quantity : </td>
                        <td><input type="number" name="quantity" value="0" id="quantity"></td>
                        <td class="message"><?php echo($quantityErr); echo($quantity); ?></td>
                    </tr>

                    <tr>
                        <td>Rate : </td>
                        <td><input type="text" name="rate" value="0.00" id="rate"> (BDT.)</td>
                        <td class="message"><?php echo($rateErr); echo($rate); ?></td>
                    </tr>
                    
                    <tr>
                        <td>Total Ammount : </td>
                        <td class="message"><?php echo($ammountErr); echo($totalAmmount); ?> (BDT.)</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="reset" value="RESET">
                            <input type="submit" name="addVaccine" value="Add Vaccine"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <script src="../js/VaccineRegistration.js"></script>
    </body>
</html>