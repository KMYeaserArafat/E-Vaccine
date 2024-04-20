<?php

include '../controller/UpdateInformation.php';

$id = $_GET['id'];
$suppliername = $_GET['suppliername'];
$nationality = $_GET['nationality'];
$nid = $_GET['nid'];
$gender = $_GET['gender'];
$birthdate = $_GET['birthdate'];
$permanentaddress = $_GET['permanentaddress'];
$email = $_GET['email'];
$phoneno = $_GET['phoneno'];
$username = $_GET['username'];
$password = $_GET['password'];
$confirmpassword = $_GET['confirmpassword'];
$suppliercompanyname = $_GET['suppliercompanyname'];
$tin = $_GET['tin'];
$termsandconditions = $_GET['termsandconditions'];


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Profile Information</title>
        <link rel="icon" href="../Documents/updateInformation.png" />
        <link rel="stylesheet" href="../Design/UpdateInformation2.css">
    </head>
    <body>
        <!-- @pending !-->
        <div class="bodyDiv">

            <div class="headDiv">
                <img id="vaccineLogo" src="../Documents/VaccineLogo.png" alt="vaccine">
                <h2 id="vaccineTitle">E-Vaccine</h2>

                <div class="DashBoard">
                    <img  class="dashBoardLogo" src="../Documents/DashBoard.png">
                    <a class="dashBoardLink" href="../view/ProfileView.php">Back to Profile</a>
                </div>

            <form method="POST" action="" onsubmit="return ValidationForm();">
            <fieldset>
                <legend><h2 id="legendHeader">Update Supplier Information :</h2></legend>
                <label class="errorMessage"><?php echo($message); ?></label>
                <script src="../js/updateInformation2.js"></script>
                <table>
                    <tr>
                        <td class="label">ID : </td>
                        <td class="textBox"><input type="text" name="id" id="id" value="<?php echo($id); ?>"></td>
                    </tr>
                    <tr>
                        <td class="label">Supplier Name : </td>
                        <td class="textBox"><input type="text" name="supplierName" id="supplierName" value="<?php echo($suppliername); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Nationality : </td>
                        <td class="textBox"><select name="nationality" id="nationality">
                            <option value="<?php echo($nationality); ?>"><?php echo($nationality); ?></option>
                            <option value="Bangladeshi">Bangladeshi</option>
                            <option value="Indian">Indian</option>
                            <option value="Chaina">Chaina</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td class="label">NID NO : </td>
                        <td class="textBox"><input type="text" name="nidNo" id="nidNo" value="<?php echo($nid); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Gender : </td>
                        <td class="textBox"><select name="gender" id="gender">
                            <option value="<?php echo($gender); ?>"><?php echo($gender); ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td class="label">BirthDate : </td>
                        <td class="textBox"><input type="date" name="birthdate" id="birthdate" value="<?php echo($birthdate); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Permanent Address: </td>
                        <td class="textBox"><input type="text" name="permanentAddress" id="permananetAddress" value="<?php echo($permanentaddress); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Email : </td>
                        <td class="textBox"><input type="text" name="email" id="email" value="<?php echo($email); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Phone No : </td>
                        <td class="textBox"><input type="text" name="phoneNo" id="phoneNo" value="<?php echo($phoneno); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">UserName : </td>
                        <td class="textBox"><input type="text" name="userName" id="userName" value="<?php  echo($username); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Password : </td>
                        <td class="textBox"><input type="text" name="password" id="password" value="<?php echo($password); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Confirm Password : </td>
                        <td class="textBox"><input type="text" name="confirmPassword"  id="confirmPassword" value="<?php echo($confirmpassword); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Supplier Company Name : </td>
                        <td class="textBox"><input type="text" name="supplierCompanyName" id="supplierCompanyName" value="<?php echo($suppliercompanyname); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">TIN No : </td>
                        <td class="textBox"><input type="text" name="tinNo" id="tinNo" value="<?php echo($tin); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Terms & Conditions : </td>
                        <td class="textBox"><select name="termsAndConditions" id="termsAndConditions">
                            <option value="<?php echo($termsandconditions); ?>"><?php echo($termsandconditions); ?></option>
                            <option value="Accepted">Accepted</option>
                            <option value="Not Accepted">Not Accepted</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input class="btnUpdate" type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </fieldset>
        </form>

            </div>
            <div class="footer"> 
                   <p id="footerPera">Devlop By : K M Yeaser Arafat</p>
               </div>
        </div>
        <!-- @pending !-->

        
    </body>
</html>