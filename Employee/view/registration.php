<?php
include '../controller/registrationcontrol.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/registration.css">
</head>
  <body>
    <form action="" method="POST"  onsubmit="return validateForm()">
        <fieldset>
        <legend><h1> Employee Registration Form </h1></legend>
        <p id="display"></p>
        <table>
                <tr>
                    <td><label> Name: </label></td>
                    <td><input type="text" name="name" id="name">
                    <?php echo $nameError;?></td>
                </tr>

                <tr>
                    <td><label> NID: </label></td>
                    <td><input type="text" name="nid" id="nid">
                    <?php echo $nidError;?></td>
                </tr>

                <tr>
                    <td><label> Nationality: </label></td>
                    <td><input type="text" name="nationality" id="nationality">
                    <?php echo $nationalityError; ?></td>
                </tr>

                
                <tr>
                    <td><label> Email: </label></td>
                    <td><input type="text" name="email" id="email">
                    <?php echo $emailError;?></td>
                </tr>

                <tr>
                    <td><label> Password: </label></td>
                    <td><input type="password" name="pass" id="pass">
                    <?php echo $passError;?></td>
                </tr>

                <tr>
                    <td><label> Birthdate: </label></td>
                    <td><input type="date" name="birth" id="birth">
                    <?php echo $birthError;?></td>
                </tr>

                <tr>
                    <td><label> Number: </label></td>
                    <td><input type="text" name="nmbr" id="nmbr">
                    <?php echo $nmbrError;?></td>
                </tr>

                <tr>
                    <td><label> Gender: </label></td>
                    <td><input type="radio" name="gender" value="male" id="genderMale">Male
                    <input type="radio" name="gender" value="female" id="genderFeMale">Female
                    <input type="radio" name="gender" value="other" id="genderOther">Other
                    <?php echo $genderError;?></td>
                </tr>

                <tr>
                    <td><label> Address: </label></td>
                    <td><textarea rows="3" cols="30" name="address" id="address"></textarea>
                    <?php echo $addressError;?></td>
                </tr>

                <tr>
                    <td><td><input type="submit" name="ADD" value="ADD">
                    <input type="submit" name="RESET" value="RESET"></td></td>
                </tr>
                
            </table>
        </fieldset>
    </form>

    <form>
          <fieldset>
            <table>
            <tr>
                <td> Name: </td>
                <td><?php echo $name;?>
            </tr>

            <tr>
                <td> NID NO: </td>
                <td><?php echo $nid;?>
            </tr>

            <tr>
                <td> Nationality: </td>
                <td><?php echo $nationality;?>
            </tr>

            <tr>
                <td> Email Address: </td>
                <td><?php echo $email;?>
            </tr>

            <tr>
                <td> Password: </td>
                <td><?php echo $pass;?>
            </tr>

            <tr>
                <td> Date of Birth: </td>
                <td><?php echo $birth;?>
            </tr>

            <tr>
                <td> Contract Number: </td>
                <td><?php echo $nmbr;?>
            </tr>

            <tr>
                <td> Gender: </td>
                <td><?php echo $gender;?>
            </tr>

            <tr>
                <td> Address: </td>
                <td><?php echo $address;?>
            </tr>
            </table>

          </fieldset>

        </form>
        <script src="../js/registration.js"></script>
  </body>
</html>