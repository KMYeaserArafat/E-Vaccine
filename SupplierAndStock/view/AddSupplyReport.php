<?php 

include '../controller/AddSupplyReport.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Add Supply Report</title>
        <link rel="stylesheet" href="../Design/AddSupplyReport.css">
    </head>

    <body>
            <div id="headDiv">
                <img id="logo" src="../Documents//VaccineLogo.png" alt="VaccineLogo" height="64px" width="64px">
                <h1 id="title">E-Vaccine</h1>
            </div>

            <a href="../view/DashBoard.php" id="backbtn" ><img src="../Documents/backbtn.png" width="15" height="15">   Back DashBoard</a>
            
        <form method="POST" action="", enctype="multipart/form-data" onsubmit="return ValidationForm()">
            <fieldset>
                <legend><h1>Add Supply Report : </h1></legend>
                        <p id="messageHead">-</p>
                    <table>
                        <tr>
                            <td>Slip No : </td>
                            <td><input type="text" name="slipNo" id="slipNo"></td>
                            <td><?php echo($slipNoErr);  echo($slipNo);  ?></td>
                        </tr>

                        <tr>
                            <td>Date : </td>
                            <td><input type="date" name="Date" id="Date"></td>
                            <td><?php echo($DateErr);  echo($Date);  ?></td>
                        </tr>

                        <tr>
                            <td>Vaccine Type : </td>
                            <td><select name="vaccineType" id="vaccineType">
                                <option value="Import">Import</option>
                                <option value="countryProduct">country Product</option>
                            </select></td>
                            <td><?php echo($vaccineTypeErr);  echo($vaccineType);  ?></td>
                        </tr>

                        <tr>
                            <td>Papers : </td>
                            <td><input type="file" name="papers"></td>
                            <td><?php echo($paperErr);  echo($papers); ?></td>
                        </tr>
                        
                        <tr>
                            <td>Supplier Company Name : </td>
                            <td><input type="text" name="supplierCompanyName" id="supplierCompanyName"></td>
                            <td><?php echo($supplierCompanyNameErr);  echo($supplierCompanyName);  ?></td>
                        </tr>

                        <tr>
                            <td>Vat No : </td>
                            <td><input type="text" name="vatNo" id="vatNo"></td>
                            <td><?php echo($vatNoErr);  echo($vatNo);  ?></td>
                        </tr>

                        <tr>
                            <td>Quantity : </td>
                            <td><input type="number" name="quantity" value="0" id="quantity"></td>
                            <td><?php echo($quantityErr);  echo($quantity);  ?></td>
                        </tr>

                        <tr>
                            <td>Rate : </td>
                            <td><input type="text" name="rate" value="0.0" id="rate"></td>
                            <td><?php echo($rateErr);  echo($rate);  ?></td>
                        </tr>

                        <tr>
                            <td>Total Price : </td>
                            <td><?php echo($totalPrice);  ?></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" name="reset" value="RESET">
                                <input type="submit" name="submit" value="SUBMIT"></td>
                        </tr>
                    </table>
            </fieldset>
        </form>
        <script src="../js/AddSupplyReport.js"></script>
    </body>
</html>