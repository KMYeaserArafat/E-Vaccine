<?php

include '../controller/LoginController.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>

    <body>
        <form method="POST" action="">
           <fieldset>
            <legend>Login : </legend>
            <table>
                <tr>
                    <td>Email : </td>
                    <td><input type="text" name="email"></td>
                </tr>

                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="password"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Login"></td>
                </tr>
            </table>
           </fieldset>
        </form>
    </body>
</html>