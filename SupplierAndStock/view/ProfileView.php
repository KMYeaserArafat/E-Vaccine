<?php

include '../controller/ProfileController.php';

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link rel="icon" href="../Documents/titleLoginPhoto.png"/>
        <link rel="stylesheet" href="../Design/Profile.css">
    </head>

    <body>
        <div class="headDiv">
            <img class="logo" src="../Documents/VaccineLogo.png" alt="Vaccine Logo">
            <p class="title">E-Vaccine</p>
        </div>


        <div class="DashBoard">
           <img  class="dashBoardLogo" src="../Documents/DashBoard.png">
           <a class="dashBoardLink" href="../view/DashBoard.php">Back to DashBoard</a>
        </div>

        <div>
            <img class="userProfilePhoto" src="../Documents/userProfile.png">
            <h1 id="userProfile">User Profile</h1>
            <p id="table"><?php echo(showInformation($showResult)); ?></p>
        </div>


        <div class="footerDiv">
            <p id="footerPera">Develop by : K M Yeaser Arafat</p>
        </div>




    
    </body>
</html>