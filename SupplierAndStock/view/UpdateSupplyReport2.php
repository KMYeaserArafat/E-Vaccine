<?php

// include '../DataBase/myDB.php';
include '../controller/UpdateSupplyReport.php';

$sn = $_GET['sn'];
$vt = $_GET['vt'];
$scn = $_GET['scn'];
$vn = $_GET['vn'];

?>



<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="">
            <fieldset>
                <legend>Update Data : </legend>
                <table>
                    <tr>
                        <td>Slip No : </td>
                        <td><input type="text" name="slipNo" value="<?php echo($sn); ?>"></td>
                    </tr>
                    <tr>
                        <td>Vaccine Type : </td>
                        <td><select name="vaccineType">
                            <option value="<?php echo($vt); ?>"><?php echo($vt); ?></option>
                            <option value="Import">Import</option>
                            <option value="country Product">countryProduct</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td>Supplier Comapany Name : </td>
                        <td><input type="text" name="suppliercompanyname" value="<?php echo($scn); ?>"></td>
                    </tr>

                    <tr>
                        <td>Vat No : </td>
                        <td><input type="text" name="vatno" value="<?php echo($vn);  ?>"></td>
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