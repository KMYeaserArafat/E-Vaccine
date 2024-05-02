<?php  

include '../controller/searchvaccinatedname.php';

?>


<!DOCTYPE html>
<html>
<head>
       <link rel="stylesheet" href="../css/searchvaccinatedname.css">
</head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h1>Search Vaccinated name : </h1></legend>
                <table>
                    <tr>
                        <td>Search Vaccinated List by Vaccinated Name : </td>
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
            </fieldset>
        </form>
    </body>
</html>