<?php

include '../controller/LoginController.php';

?>

<!DOCTYPE html>
<html>
    <html>
        <head>
            <title>DashBoard</title>
            <meta charset="utf-8">
            <link rel="icon" href="../Documents/titleLoginPhoto.png"/>
            <link rel="stylesheet" href="../Design//DashBoard.css">
            <script src="../js/DashBoard.js"></script>
           
        </head>

        <body>
            <script src="../js/DashBoard.js"></script>
            <!--  Header  -->
            <div class="header">
                <img id="logo" src="../Documents//VaccineLogo.png" alt="VaccineLogo" height="64px" width="64px">
                <h1 id="title">E-Vaccine</h1>
            </div>

             <!--  Navigation Bar  -->
            <div class="navbar">
                <a href="ProfileView.php">Profile</a>
                <a href="#">All Vaccine Supplier</a>
                <div class="dropdown1">
                    <button class="dropbtn1">Vaccine</button>
                    <div class="dropdown-content1">
                    <a href="#">Show Vaccine</a>
                    <a href="#">Add Vaccine</a>
                    <a href="#">Update Vaccine</a>
                    <a href="#">Delete Vaccine</a>
                    </div>
                </div>

                <div class="dropdown2">
                    <button class="dropbtn2">Supply Report</button>
                    <div class="dropdown-content2">
                    <a href="#">Show Supply Report</a>
                    <a href="#">Add Report</a>
                    <a href="#">Update Report</a>
                    <a href="#">Delete Report</a>
                    </div>
                </div>
                <a href="./loginPage.php">Logout</a>
            </div>


             <!--  Right-Side Div  -->
             <div class="column rightside">
                <div class="country">
                    <p class="nameCountry">People's Republic of Bangladesh</p>
                    <img class="bangladeshmap" src="../Documents/bangladesh.png" alt="Bangladesh">
                    <p class="independent">Freedom : 1971</p>
                </div>

                <div class="heathcareContainer">
                    <p class="healthcare">Heathcare</p>
                    <img class="healthcarePhoto" src="../Documents//medicalTeam.png" alt="healthcare">
                    <br><br>
                    <a class="vaccinelink" href="https://en.wikipedia.org/wiki/Vaccination">Learn About vaccination</a>
                </div>
             </div>

             <!-- left side top div  -->
             <div class="leftsideTopdiv">
                <a class="linkWho" href="https://en.wikipedia.org/wiki/World_Health_Organization">Learn About HeathCare Organization World Wide</a>
             </div>


             <div class="clockContainer">
                <div class="display-date">
                    <span id="day">day</span>,
                    <span id="daynum">00</span>
                    <span id="month">month</span>
                    <span id="year">0000</span>
                    <script>updateDate();</script>
                </div>

                <div class="leftSide"> 
                <video width="600" controls>
                    <source src="../Documents/vaccine.mp4" type="video/mp4">
                </video>
             </div>
            </div>

             
           
             
            
            <div class="footer">
                <p id="footerPera">Develop by : K M Yeaser Arafat</p>
                
            </div>

        </body>
    </html>
</html>