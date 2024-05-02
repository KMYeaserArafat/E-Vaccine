<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/Dashboard.css">
</head>
<body>
    <div id="headerDiv">
        <h1 id="dashboard">Dashboard</h1>
    </div>

    <div class="menubar">
    <table>

        <tr>
            <td><button onclick="window.location.href='showemployee.php'">Show Employee</button></td>
        </tr>   
        
        <tr>
            <td><button onclick="window.location.href='searchemployeenid.php'">Search Employee</button></td>
        </tr>
        
        <tr>
            <td><button onclick="window.location.href='deleteemployee.php'">Delete Employee</button></td>
        </tr>
        
        <tr>
            <td><button onclick="window.location.href='vaccinated.php'">Add Vaccinated</button></td>
        </tr>
        
        <tr>
            <td><button onclick="window.location.href='showvaccinatedinfo.php'">Show Vaccinated</button></td>
        </tr>
        
        <tr>
            <td><button onclick="window.location.href='searchvaccinatedreg.php'">Search Vaccinated</button></td>
        </tr>
        
        <tr>
            <td><button onclick="window.location.href='deletevaccinated.php'">Delete Vaccinated</button></td>
        </tr>
        
        <tr>
            <td><button onclick="window.location.href='logout.php'">Logout</button></td>

        </tr>
    </table>
    </div>

    <div class="viewDiv">
    </div>
    
    
</body>
</html>
