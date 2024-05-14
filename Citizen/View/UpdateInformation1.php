<?php

include '../Controler/Update_Info_Process.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Update Information Page</title>
        <link rel="stylesheet" href="../Design/UpdateInformation1.css">
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend>
                    <h2>Update User Information </h2>
                    <h2><a href="Home.php">Back Home</a></h2>
            </legend>
                <?php ShowData($result1); ?>
            </fieldset>

        </form>
    </body>
</html>