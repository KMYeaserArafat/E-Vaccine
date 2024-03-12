<?php 

include '../controller/SearchVaccineController.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search Vaccine Information</title>
    </head>

    <body>
        <h1>Search Vaccine Information : </h1>
        <form method="POST" action="">
            <fieldset>
                <legend>Search Vacction Information : </legend>
                <table>
                    <tr>
                        <td>Search Vaccine by Vaccine ID or Vacction Name :</td>
                        <td><input type="text" name="SearchVaccineData"></td>
                        <td><input type="submit" name="searchVaccine" value="Search"></td>
                    </tr>
        
                    <tr>
                       <td><?php echo($numOfDataFound); ?></td>
                    </tr>

                </table>

                <?php
                getSearchData($result);

                ?>

            </fieldset>

        </form>




    </body>
</html>