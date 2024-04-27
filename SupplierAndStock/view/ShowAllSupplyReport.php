<?php

include '../controller/ShowAllSupplyReport_Controller.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Documents/report.png" />
        <title>Show All Supply Report</title>
        <link rel="stylesheet" href="../Design/ShowAllSupplyReport.css"> 
    </head>

    <body>
            <div id="headDiv">
                <img id="logo" src="../Documents//VaccineLogo.png" alt="VaccineLogo" height="64px" width="64px">
                <h1 id="title">E-Vaccine</h1>
            </div>

            <a href="../view/DashBoard.php" id="backbtn" ><img src="../Documents/backbtn.png" width="15" height="15"> Back DashBoard</a>

            <form method="POST" action="">
                <div id="searchBoxDiv1">
                    <p id="searchLabel1">Search Report Using Slip NO :
                        <input type="text" name="searchBox1" id="searchBox1">
                        <input type="submit" name="searchBtn1" id="searchBtn1" value="Search"></p>
                </div>
                <div id="showDataDiv">
                <?php 
                if(empty($_REQUEST['searchBox1'])){
                    ShowAllReports($showData);
                }elseif($searchMessage == "*Search Data is required!"){
                    ShowAllReports($showData);
                }else{
                    ShowAllReports($searchData);
                }



               // ShowAllReports($showData);
                 ?>
            </div>
            </form>



    </body>
</html>