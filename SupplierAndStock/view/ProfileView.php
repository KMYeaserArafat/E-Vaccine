<?php

include '../controller/ProfileController.php';

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
    </head>

    <body>
        <h1>Profile</h1>
        <p><?php echo(showInformation($showResult)); ?></p>
    
    </body>
</html>