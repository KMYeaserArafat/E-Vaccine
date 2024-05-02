<?php
include '../controller/updatename.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/updatename.css">
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend><h1>Update Vaccine Name</h1></legend>
            <table>
                <tr>
                    <td><label>Registration Number:</label></td>
                    <td><input type="text" name="nmbr"></td>
                </tr>
                <tr>
                    <td><label>New Vaccine Name:</label></td>
                    <td><input type="text" name="new_vaccine"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Update"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
