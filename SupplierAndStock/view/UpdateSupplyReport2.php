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
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Update Data</title>
        <link rel="stylesheet" href="../Design/UpdateSupplyReport2.css">
    </head>
    <body>
        <div id="headDiv">
            <img id="logo" src="../Documents//VaccineLogo.png" alt="VaccineLogo" height="64px" width="64px">
            <h1 id="title">E-Vaccine</h1>
        </div>

        <a href="../view/UpdateSupplyReport.php" id="backbtn" ><img src="../Documents/backbtn.png" width="15" height="15">   Back to Update Page</a>

        <form method="POST" action="">
            <fieldset>
                <legend>Update Data : </legend>
                <table>
                    <tr>
                        <td class="label">Slip No : </td>
                        <td><input type="text" name="slipNo" value="<?php echo($sn); ?>"></td>
                    </tr>
                    <tr>
                        <td class="label">Vaccine Type : </td>
                        <td><select name="vaccineType">
                            <option value="<?php echo($vt); ?>"><?php echo($vt); ?></option>
                            <option value="Import">Import</option>
                            <option value="country Product">countryProduct</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td class="label">Supplier Comapany Name : </td>
                        <td><input type="text" name="suppliercompanyname" value="<?php echo($scn); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Vat No : </td>
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