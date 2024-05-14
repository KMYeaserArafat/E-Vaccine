<?php
include '../Controler/Login_Process.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
    <link rel="icon" type="images/x-icon" href="../Documents/Home.png" />
    <link rel="stylesheet" href="..//Design//home.css">
</head>
<body>
    <header>
        <h1>Welcome to E-Vaccine Portal</h1>
    </header>
    <nav>
        <ul>
            <li><a href="ProfileView.php">My Profile</a></li>
            <li><a href="MedicalHistory.php">Medical History</a></li>
            <li><a href="VaccineRegistration.php">Vaccine Registration</a></li>
            <li><a href="ProfileView.php">Update Information</a></li>
            <li><a href="UploadDocument.php">Upload Birth-Certificate/NID</a></li>
            <li><a href="DeleteVaccine.php">Delete Vaccine</a></li>
            <li><a href="SearchVaccine.php">Search Vaccine</a></li>
            <li><a href="#">Search Vaccine List by Price</a></li>
            <li><a href="index.php">Log Out</a></li>
        </ul>
        <div class="date-time">
            <p id="date"></p>
            <p id="time"></p>
        </div>
    </nav>
    <main>
        
        <div class="container">
            <div class="slideshow-container">
                <div class="slideshow">
                <img src="..//Documents/slider1.jpg" alt="Slider 1">
                <img src="..//Documents/slider2.jpg" alt="Slider 2">
                <img src="..//Documents/slider3.jpg" alt="Slider 3">
                <img src="..//Documents/slider4.jpg" alt="Slider 4">
                <img src="..//Documents/slider5.jpg" alt="Slider 5">
                <img src="..//Documents/slider6.jpg" alt="Slider 6">
                </div>
            </div>
            <div class="video-container">
                <video autoplay muted loop id="video-background">
                    <source src="..//Documents/babyvaccine.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </main>
    <footer>
        <p>Helpline: 123-456-7890</p>
        <p>For more information, visit here <a href="https://dghs.gov.bd/">Directorate General of Health Services</a></p>
    </footer>
    <script src="..//JS//home.js"></script>
</body>
</html>