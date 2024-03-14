<?php

include '../controller/UpdateInformation.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Update Information Page</title>
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h2>Update Supplier Information :</h2></legend>
                <?php ShowData($result1); ?>
            </fieldset>

        </form>
    </body>
</html>