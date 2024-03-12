<?php

include '../controller/VaccineRegistrationController.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Vaccine Registration</title>
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h1>Vaccine Registration :</h1></legend>
                <table>
                    <tr>
                        <td>Vaccine Name : </td>
                        <td><input type="text" name="vaccineName"></td>
                        <td><?php echo($vaccineNameErr); echo($vaccineName); ?></td>
                        
                    </tr>

                    <tr>
                        <td>Vaccine Code : </td>
                        <td><input type="text" name="vaccineCode"></td>
                        <td><?php echo($vaccineCodeErr); echo($vaccineCode); ?></td>
                    </tr>

                    <tr>
                        <td>Manufacture By :</td>
                        <td><input type="text" name="manufactureBy"></td>
                        <td><?php echo($manufactureByErr); echo($manufactureBy); ?></td>
                    </tr>

                    <tr>
                        <td>Supply Date : </td>
                        <td><input type="date" name="supplyDate"></td>
                        <td><?php echo($supplyDateErr); echo($supplyDate); ?></td>
                    </tr>

                    <tr>
                        <td>Production Date : </td>
                        <td><input type="date" name="productionDate"></td>
                        <td><?php echo($productionDateErr); echo($productionDate); ?></td>
                    </tr>

                    <tr>
                        <td>Expiry Date : </td>
                        <td><input type="date" name="expiryDate"></td>
                        <td><?php echo($expiryDateErr); echo($expiryDate); ?></td>
                    </tr>

                    <tr>
                        <td>Quantity : </td>
                        <td><input type="number" name="quantity" value="0"></td>
                        <td><?php echo($quantityErr); echo($quantity); ?></td>
                    </tr>

                    <tr>
                        <td>Rate : </td>
                        <td><input type="text" name="rate" value="0.00"> (BDT.)</td>
                        <td><?php echo($rateErr); echo($rate); ?></td>
                    </tr>
                    
                    <tr>
                        <td>Total Ammount : </td>
                        <td><?php echo($totalAmmount); ?> (BDT.)</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="reset" value="RESET">
                            <input type="submit" name="addVaccine" value="Add Vaccine"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>