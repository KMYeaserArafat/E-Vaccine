<?php

include '../controller/DeleteSupplyReport_Controller.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Delete Supply Report</title>
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h1>Delete Supply Report</h1></legend>
                <table>
                    <tr>
                        <td>Enter Slip No for Delete Data : </td>
                        <td><input type="text" name="deleteDataBox"></td>
                        <td><input type="submit" name="delete" value="Delete"></td>
                    </tr>
                    <tr>
                        <td><?php echo($message); ?></td>
                    </tr>
                </table>
                <?php  

                showData($result3);

                ?>
            </fieldset>
        </form>
    </body>
</html>