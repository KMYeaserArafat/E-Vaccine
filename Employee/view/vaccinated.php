<?php

include '../controller/vaccinatedcontrol.php';


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/addvaccinated.css">
</head>
  <body>
    <form action="" method="POST" onsubmit="return validateForm()">
        <fieldset>
          <legend><h1> Vaccinated People </h1></legend>
          <p id="display"></p>
            <table>
                <tr>
                    <td><label> Name: </label></td>
                    <td><input type="text" name="name" id="name">
                    <?php echo $nameError;?></td>
                </tr>

                <tr>
                    <td><label> Gender: </label></td>
                    <td><input type="radio" name="gender" value="male" id="genderMale">Male
                    <input type="radio" name="gender" value="female" id="genderFemale">Female
                    <input type="radio" name="gender" value="other" id="genderOther">Other
                    <?php echo $genderError;?></td>
                </tr>

                <tr>
                    <td><label> RegistrationNO: </label></td>
                    <td><input type="text" name="nmbr" id="nmbr">
                    <?php echo $nmbrError;?></td>
                </tr>

                <tr>
                    <td><label> RegistrationDate: </label></td>
                    <td><input type="date" name="registration" id="registration">
                    <?php echo $registrationError;?></td>
                </tr>

                <tr>
                    <td><label> Address: </label></td>
                    <td><textarea rows="3" cols="30" name="address" id="address"></textarea>
                    <?php echo $addressError;?></td>
                </tr>

                <tr>
                    <td><label> HospitalName: </label></td>
                    <td><input type="text" name="hospital" id="hospital">
                    <?php echo $hospitalError;?></td>
                </tr>

                <tr>
                    <td><label> VaccineName: </label></td>
                    <td><input type="text" name="vaccine" id="vaccine">
                    <a href="../view/updatename.php">Update</a></td></td>
                    <?php echo $vaccineError;?></td>
                </tr>

                <tr>
                    <td><label> VaccinatedDate: </label></td>
                    <td><input type="date" name="vaccinated" id="vaccinated">
                    <a href="../view/updatedate.php">Update</a></td></td>
                    <?php echo $vaccinatedError;?></td>
                </tr>
                

                <tr>
                    <td><td><input type="submit" name="SUBMIT" value="SUBMIT">
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
                <td> Gender: </td>
                <td><?php echo $gender;?>
            </tr>

            <tr>
                <td> Registration NO: </td>
                <td><?php echo $nmbr;?>
            </tr>

            <tr>
                <td> Registration Date: </td>
                <td><?php echo $registration;?>
            </tr>

            <tr>
                <td> Address: </td>
                <td><?php echo $address;?>
            </tr>

            <tr>
                <td> Hospital Name: </td>
                <td><?php echo $hospital;?>
            </tr>

            <tr>
                <td> Vaccine Name: </td>
                <td><?php echo $vaccine;?>
            </tr>

            <tr>
                <td> Vaccinated Date: </td>
                <td><?php echo $vaccinated;?>
            </tr>
            </table>
          </fieldset>

        </form>

        <script src="../js/addvaccinated.js"></script>
    </body>
</html>