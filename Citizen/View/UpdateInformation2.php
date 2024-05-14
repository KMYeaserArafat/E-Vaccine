<?php
include '../Controler/Update_Info_Process.php';

$id = $_GET['id'];
$name = $_GET['name'];
$fname = $_GET['fname'];
$mname = $_GET['mname'];
$dob = $_GET['dob'];
$nid = $_GET['nid'];
$mob = $_GET['mob'];
$email = $_GET['email'];
$gender = $_GET['gender'];
$prof = $_GET['profession'];
$add = $_GET['add'];
//$add = isset($_GET['add']) ? $_GET['add'] : '';
$pass = $_GET['password'];
$confirmPass = $_GET['confirmPassword'];
$termsConditions = $_GET['termsConditions'];

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
                    <a class="dashBoardLink" href="../View/ProfileView.php">Back to Profile</a>
                </div>

            <form method="POST" action="" onsubmit="return ValidationForm();">
            <fieldset>
                <legend><h2 id="legendHeader">Update User Information :</h2></legend>
                <label class="errorMessage"><?php echo($message); ?></label>
                <table>
                    <tr>
                        <td class="label">ID : </td>
                        <td class="textBox"><input type="text" name="id" id="id" value="<?php echo($id); ?>"></td>
                    </tr>
                    <tr>
                        <td class="label">Name : </td>
                        <td class="textBox"><input type="text" name="name" id="name" value="<?php echo($name); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Father Name : </td>
                        <td class="textBox"><input type="text" name="fname" id="fname" value="<?php echo($fname); ?>"></td>
                    </tr>
                    <tr>
                        <td class="label">Mother Name : </td>
                        <td class="textBox"><input type="text" name="mname" id="mname" value="<?php echo($mname); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Date of Birth : </td>
                        <td class="textBox"><input type="date" name="dob" id="dob" value="<?php echo($dob); ?>"></td>
                    </tr>
                    <tr>
                        <td class="label">NID Number : </td>
                        <td class="textBox"><input type="number" name="nid" id="nid" value="<?php echo($nid); ?>"></td>
                    </tr>
                    
                    <tr>
                        <td class="label">Mobile Number : </td>
                        <td class="textBox"><input type="number" name="mob" id="mob" value="<?php echo($mob); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Email : </td>
                        <td class="textBox"><input type="text" name="email" id="email" value="<?php echo($email); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Gender : </td>
                        <td class="textBox"><select name="gender" id="gender" value="<?php echo($gender); ?>">
                            
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select></td>
                    </tr>

                            <tr>
                    <td class = "label">Profession: </td>
                    <td class ="textBox"><select name="profession" id = "profession" value="<?php echo($prof); ?>">
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Nurse">Nurse</option>
                        <option value="Police">Police</option>
                        <option value="Farmer">Farmer</option>
                        <option value="Other">Other</option>
                    </select></td>
                    </tr>


                    <tr>
                        <td class="label">Address: </td>
                        <td class="textBox"><input type="text" name="add" id="add" value="<?php echo($add); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Password : </td>
                        <td class="textBox"><input type="text" name="pass" id="pass" value="<?php echo($pass); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Confirm Password : </td>
                        <td class="textBox"><input type="text" name="confirmPass"  id="confirmPass" value="<?php echo($confirmPass); ?>"></td>
                    </tr>

                    <tr>
                        <td class="label">Terms & Conditions : </td>
                        <td class="textBox"><select name="termsConditions" id="termsConditions" value="<?php echo($termsConditions); ?>">
                    
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

        <script src="../JS/updateInformation2.js"></script>
            </div>
            <div class="footer"> 
                   <p id="footerPera">Developed By : MD Fazlul bary Shawon</p>
               </div>
        </div>
        <!-- @pending !-->

        
    </body>
</html>