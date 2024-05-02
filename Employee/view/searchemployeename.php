<?php  

include '../controller/searchemployeename.php';

?>


<!DOCTYPE html>
<html>
<head>
       <link rel="stylesheet" href="../css/searchemployeename.css">
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h1>Search Employee Name : </h1></legend>
                <table>
                    <tr>
                        <td>Search Employee by Name : </td>
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