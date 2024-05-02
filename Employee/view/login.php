<?php
include '../controller/logincontrol.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/login.css">
        
    </head>

        <body>
        <h1> Login </h1>
          <form action="" method="POST" onlogin="return validateForm()">
          <fieldset>
              <table>
                <tr>
                    <td><label> Email Address: </label></td>
                    <td><input type="text" name="email" id="email"> <div id ="emailerror"></div></td>
                </tr>

                <tr>
                    <td><label> Password: </label></td>
                    <td><input type="password" name="pass" id="pass"> <div id ="passerror"></div></td>
                </tr>

                <tr>
                    <td><td><input type="submit" name="login" class="button submit" value="Login"></td></td>
                </tr>

                <tr>
                    <td><td>Don't have an account? <a href="../view/registration.php">Register</a></td></td>
                
                </tr>
              </table>
          </fieldset>

          <script src="../js/login.js"></script>
        </body>
</html>