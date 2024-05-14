<?php

include '../controller/LoginController.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.google.com/icons?icon.query=people&icon.size=24&icon.color=%235f6368" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">shopping_cart</span> STORE
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
            <span class="material-symbols-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <br>
          <li class="sidebar-list-item">
            <a href="Employee.php" >
            <span class="material-symbols-outlined">group</span> Employee
            </a>
          </li>
          <br>
          <li class="sidebar-list-item">
            <a href="VaccineSupplier.php">
            <span class="material-symbols-outlined">vaccines</span> Vaccine Information</a>
          </li>
          <br>
          <li class="sidebar-list-item">
            <a href="VaccineRegPeople.php">
            <span class="material-symbols-outlined">how_to_reg</span>Vaccine Regiter People
            </a>
          </li>
          <br>
          <li class="sidebar-list-item">
            <a href="login.php" target="_blank">
            <span class="material-symbols-outlined">logout</span><btn > Logout
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>DASHBOARD</h2>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              
              <h2><a href="VaccineSupplier.php">Vaccine Information</a> </h2>
              <span class="material-icons-outlined">inventory_2</span>
            </div>
            <h1>350</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h2><a href="VaccineRegPeople.php">Vaccine Regiter People</a></h2>
              <span class="material-icons-outlined">groups</span>
            </div>
            <h1>100</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h2><a href = "Employee.php">Trained Employee</a></h2>
              <span class="material-icons-outlined">groups</span>
            </div>
            <h1>250</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>Notifiaction</h3>
              <span class="material-icons-outlined">notification_important</span>
            </div>
            <h1>56</h1>
          </div>

        </div>

        <div class="charts">

          <div class="charts-card">
            <h2 class="chart-title">Top 5 Products</h2>
          </div>

          <div class="charts-card">
            <h2 class="chart-title">Purchase and Sales Orders</h2>
            <li>Fizer</li>
            <li>AstraZeneca</li>
            <li>Sinopharm</li>
            <li>Fizer</li>
            <li>Moderna</li>
          </div>

        </div>
      </main>


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>

    <script src="../js/dashboard.js"></script>
  </body>
</html>