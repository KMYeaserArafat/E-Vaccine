<?php 

include '../controller/SearchVaccineInformation.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search Vaccine Information</title>
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h1>Search Vacction Information :</h1></legend>
                <table>
                    <tr>
                        <td>Search Vaccine by VaccineCode : </td>
                        <td><input type="text" name="SearchVaccineData"></td>
                        <td><input type="submit" name="searchVaccine" value="Search"></td>
                    </tr>
        
                    <tr>
                       <td><?php echo($searchMessage); ?></td>
                    </tr>

                </table>

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