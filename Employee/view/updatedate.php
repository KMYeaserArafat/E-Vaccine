<?php
include '../controller/updatedate.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/updatedate.css">
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend><h1>Update Vaccinated Date</h1></legend>
            <table>
                <tr>
                    <td><label>Registration Number:</label></td>
                    <td><input type="text" name="nmbr"></td>
                </tr>
                <tr>
                    <td><label>New Vaccinated Date:</label></td>
                    <td><input type="date" name="new_vaccinated"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Update"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
