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
    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h2>Update Supplier Information :</h2></legend>
                <label><?php echo($message); ?></label>
                <table>
                    <tr>
                        <td>ID : </td>
                        <td><input type="text" name="id" value="<?php echo($id); ?>"></td>
                    </tr>
                    <tr>
                        <td>Supplier Name : </td>
                        <td><input type="text" name="supplierName" value="<?php echo($suppliername); ?>"></td>
                    </tr>

                    <tr>
                        <td>Nationality : </td>
                        <td><select name="nationality">
                            <option value="<?php echo($nationality); ?>"><?php echo($nationality); ?></option>
                            <option value="Bangladeshi">Bangladeshi</option>
                            <option value="Indian">Indian</option>
                            <option value="Chaina">Chaina</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td>NID NO : </td>
                        <td><input type="text" name="nidNo" value="<?php echo($nid); ?>"></td>
                    </tr>

                    <tr>
                        <td>Gender : </td>
                        <td><select name="gender">
                            <option value="<?php echo($gender); ?>"><?php echo($gender); ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td>BirthDate : </td>
                        <td><input type="date" name="birthdate" value="<?php echo($birthdate); ?>"></td>
                    </tr>

                    <tr>
                        <td>Permanent Address: </td>
                        <td><input type="text" name="permanentAddress" value="<?php echo($permanentaddress); ?>"></td>
                    </tr>

                    <tr>
                        <td>Email : </td>
                        <td><input type="text" name="email" value="<?php echo($email); ?>"></td>
                    </tr>

                    <tr>
                        <td>Phone No : </td>
                        <td><input type="text" name="phoneNo" value="<?php echo($phoneno); ?>"></td>
                    </tr>

                    <tr>
                        <td>UserName : </td>
                        <td><input type="text" name="userName" value="<?php  echo($username); ?>"></td>
                    </tr>

                    <tr>
                        <td>Password : </td>
                        <td><input type="text" name="password" value="<?php echo($password); ?>"></td>
                    </tr>

                    <tr>
                        <td>Confirm Password : </td>
                        <td><input type="text" name="confirmPassword" value="<?php echo($confirmpassword); ?>"></td>
                    </tr>

                    <tr>
                        <td>Supplier Company Name : </td>
                        <td><input type="text" name="supplierCompanyName" value="<?php echo($suppliercompanyname); ?>"></td>
                    </tr>

                    <tr>
                        <td>TIN No : </td>
                        <td><input type="text" name="tinNo" value="<?php echo($tin); ?>"></td>
                    </tr>

                    <tr>
                        <td>Terms & Conditions : </td>
                        <td><select name="termsAndConditions">
                            <option value="<?php echo($termsandconditions); ?>"><?php echo($termsandconditions); ?></option>
                            <option value="Accepted">Accepted</option>
                            <option value="Not Accepted">Not Accepted</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>