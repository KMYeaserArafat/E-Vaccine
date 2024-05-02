<?php  

include '../controller/searchemployeenid.php';

?>


<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="../css/searchemployee.css">
    </head>

    <body>
        <form method="POST" action="">
                <h1>Search Employee Nid : </h1>
                <table>
                    <tr>
                        <td>Search Employee by Nid No : </td>
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