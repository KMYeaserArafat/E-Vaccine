<?php

include '../Controler/ProfileController.php';

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link rel="icon" href="../Documents/titleLoginPhoto.png"/>
        <link rel="stylesheet" href="../Design/ProfileView.css">
    </head>

    <body>
        <div class="headDiv">
            <img class="logo" src="../Documents/vaccineLogo.png" alt="Vaccine Logo">
            <p class="title">E-Vaccine</p>
        </div>



        <div class="mainBox">
        </div>


        <div class="DashBoard">
           <img  class="dashBoardLogo" src="../Documents/DashBoard.png">
           <a class="dashBoardLink" href="../View/Home.php">Back to Home</a>
        </div>

        <!-- <div class="background"> -->
            <img class="userProfilePhoto" src="../Documents/userProfile.png">
            <h1 id="userProfile">User Profile</h1>
        <div class="background">
            <p id="table"><?php echo(showInformation($showResult)); ?></p>
        </div>


        <div class="footerDiv">
            <p id="footerPera">Develop by : MD FAZLUL BARY SHAWON</p>
        </div>




    
    </body>
</html>