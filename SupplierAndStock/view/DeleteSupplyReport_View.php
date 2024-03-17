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
                <?php  ShowSupplyReport($ShowResult); ?>
            </fieldset>
        </form>
    </body>
</html>