<?php

include '../controller/ShowAllSupplierController.php';

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link rel="icon" href="../Documents/titleLoginPhoto.png"/>
        <link rel="stylesheet" href="../Design/ShowAllSupplier.css">
    </head>

    <body>
        <div class="headDiv">
            <img class="logo" src="../Documents/VaccineLogo.png" alt="Vaccine Logo">
            <p class="title">E-Vaccine</p>
        </div>



        <div class="mainBox">
        </div>


        <div class="DashBoard">
           <img  class="dashBoardLogo" src="../Documents/DashBoard.png">
           <a class="dashBoardLink" href="../view/DashBoard.php">Back to DashBoard</a>
        </div>


    

            <img class="userProfilePhoto" src="../Documents/supplier.png">
            <h1 id="userProfile">Show All Supplier Information</h1>
        <div class="background">

            <form method="POST" action="">
                <label id="searchLabel">Search Supplier By Name : </label>
                <input type="text" name="searchSupplier" id="searchSupplier">
                <input type="submit" name="searchSupplierData" value="search">
                <p class="messageError"><?php echo($searchMessage); ?></p>
                <p id="table"><?php 
                 if(empty($_REQUEST['searchSupplier'])){
                    showInformation($showResult);
                }elseif($searchMessage=="*Search Data is Required!"){
                    showInformation($searchData);
                }
                else{
                    showInformation($searchData);
                }
                
                ?></p>

            </form>

            
        </div>


        <div class="footerDiv">
            <p id="footerPera">Develop by : K M Yeaser Arafat</p>
        </div>




    
    </body>
</html>