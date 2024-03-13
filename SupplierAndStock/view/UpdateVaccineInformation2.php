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
    <body>
       <form method="POST" action="">
        <fieldset>
            <legend><h2>Update Vaccine Information : </h2></legend>
            <h3><?php echo($message); ?></h3>
            <table>
                <tr>
                    <td>VaccineName : </td>
                    <td><input type="text" name="vaccineName" value="<?php  echo($vn); ?>"></td>
                </tr>

                <tr>
                    <td>Vaccine Code : </td>
                    <td><input type="text" name="vaccineCode" value="<?php echo($vc); ?>" ></td>
                </tr>

                <tr>
                    <td>ManufactureBy : </td>
                    <td><input type="text" name="manufactureBy" value="<?php echo($mb); ?>"></td>
                </tr>

                <tr>
                    <td>SupplyDate : </td>
                    <td><input type="date" name="supplyDate" value="<?php echo($sd); ?>"></td>
                </tr> 

                <tr>
                    <td>Production Date: </td>
                    <td><input type="date" name="productionDate" value="<?php echo($pd); ?>"></td>
                </tr>

                <tr>
                    <td>ExpiryDate : </td>
                    <td><input type="date" name="expiryDate" value="<?php echo($ed); ?>"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </fieldset>
       </form>
    </body>
</html>