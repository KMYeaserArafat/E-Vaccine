<?php

include '../controller/deletevaccinated.php';

?>


<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="../css/deletevaccinated.css">
    </head>

    <body>
        <form method="POST" action="">
            
            <h1>Delete Vaccinated List</h1>
                <table>
                    <tr>
                        <td>Enter Registration Number for Delete Data : </td>
                        <td><input type="text" name="deleteDataBox"></td>
                        <td><input type="submit" name="delete" value="Delete"></td>
                    </tr>
                    <tr>
                        <td><?php echo($message); ?></td>
                    </tr>
                </table>
                
        </form>
    </body>
</html>