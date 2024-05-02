<?php  

include '../controller/searchvaccinatedreg.php';

?>


<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="../css/searchvaccinated.css">
    </head>

    <body>
        <form method="POST" action="">
            <h1>Search Reqistration Number : </h1>
                <table>
                    <tr>
                        <td>Search Vaccinated List by Reg No : </td>
                        <td><input type="text" name="searchBox"></td>
                        <td><input type="submit" name="search" value="Search"></td>
                    </tr>

                    <tr>
                        <td><?php echo($numOfDataFound); ?></td>
                    </tr>
                </table>
                <?php 
                getShowSearchData($result);
                ?>
        </form>
    </body>
</html>