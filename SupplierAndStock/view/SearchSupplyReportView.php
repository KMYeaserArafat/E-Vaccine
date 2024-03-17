<?php  

include '../controller/SearchSupplyReportController.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Search Supply Report</title>
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h1>Search Supply Report : </h1></legend>
                <table>
                    <tr>
                        <td>Search Supply Report by Slip No : </td>
                        <td><input type="text" name="searchBox"></td>
                        <td><input type="submit" name="search" value="Search"></td>
                    </tr>

                    <tr>
                        <td><?php echo($searchMessage); ?></td>
                    </tr>
                </table>
                <?php 
                    if(empty($_REQUEST['search'])){
                        ShowSupplyReport($showResult);
                    }elseif($searchMessage=="*Search Data is Required!"){
                        ShowSupplyReport($showResult);
                    }
                    else{
                        ShowSupplyReport($searchResult);
                    }
                ?>
            </fieldset>
        </form>
    </body>
</html>