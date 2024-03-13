<?php  

include '../controller/UpdateSupplyReport.php';

?>


<!DOCTYPE html> 
<html>
    <head>
        <title>Update Supply Reports</title>
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h2>Update Supply Report : </h2></legend>
                <h3>Show All Supply Reports Data : </h3>
                <?php  ShowAllSupplyReport($result1)  ?>
            </fieldset>
        </form>
    </body>
</html>