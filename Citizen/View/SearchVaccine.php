<?php 

include '../Controler/SearchVaccineController.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Documents/vaccinated.png"/>
        <title>Search Vaccine Information</title>
        <link rel="stylesheet" href="..//Design/SearchVaccine.css">
    </head>

    <body>
        <form method="POST" action="">
            <div id="headDiv">
                <h1 id="title">E-Vaccine</h1>
            </div>

            <a href="../View/Home.php" id="backbtn" ><img src="../Documents/backbtn.png" width="15" height="15">   Back DashBoard</a>

            </div>
            <fieldset>
                <legend><h1>Show All Vacction Information :</h1></legend>
                <div id="searchDiv">
                        <p id="searchTitle">Search Vaccine by Name:
                        <input type="text" name="SearchVaccineData">
                        <input type="submit" name="searchVaccine" value="Search" id="searchbtn">
                        <input type="submit" name="reloadbtn" id="reloadbtn" value="Reload" onclick="ShowVaccineInformation($showResult);"></p>
                        <p id="message"><?php echo($searchMessage); ?></p>
                </div>

                <?php
                    if(empty($_REQUEST['SearchVaccineData'])){
                        ShowVaccineInformation($showResult);
                    }elseif( $searchMessage == "*Search Data is required!"){
                        ShowVaccineInformation($showResult);
                    }else{
                        ShowVaccineInformation($searchData);
                    }
                ?>

            </fieldset>

        </form>

    </body>
</html>