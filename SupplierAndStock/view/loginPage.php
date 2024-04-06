<?php

include '../controller/LoginController.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="icon" type="images/x-icon" href="../Documents/titleLoginPhoto.png" />
        <link rel="stylesheet" href="../Design//login.css">
    </head>

    <body>
        <div id="div1">
        <img id="logo" src="../Documents/VaccineLogo.png" alt="vaccine Logo" height="64px" width="64px">
        <h1 id="headTitle">E-Vaccine</h1>
        </div>
        <form method="POST" action=""  onsubmit="return validateForm()" >
           <!-- <fieldset> -->
            <div id="formPanel">
            <img id="loginLogo" src="../Documents/loginLogo.png" alt="Login Logo">
            <legend>Login</legend>
            <p id="message"><?php echo($message) ?>
            </p>
            <table>
                <tr>
                    <td class="label">Email : </td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>

                <tr>
                    <td class="label">Password : </td>
                    <td class="inputBox"><input type="password" name="password" id="password"></td>
                </tr>

                <tr>
                    <td></td>
                    <td id="cheackBox"><input type="checkbox" name="cheackBox">Show Password</td>
                </tr>

                <tr>
                    <td></td>
                    <td><input class="btnSubmit" type="submit" name="submit" value="Login">
                        <input class="btnReset" type="submit" name="reset" value="Reset">
                </td>
                </tr>
            </table>
           <!-- </fieldset> -->
            </div>

        </form>
        <script src="../js/loginScript.js"></script>
    </body>
</html>