<?php
include '../Controler/Reg_process.php';

?>
<html>
    <head>
        <title>Registration of Citizen</title>
        <link rel="icon" type="images/x-icon" href="../Documents/Registration.png" />
        <link rel="stylesheet" type="text/css" href="../Design/Registration.css">
    </head>
    <body>
<form method="post" action="" enctype="multipart/form-data">  
<fieldset id="inputForm">
    <legend id="inputLegend"><h1>Registration Form ...</h1></legend>
        <table id="inputTable">
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name">
            <?php echo ($nameErr);?></td>
        </tr>

        <tr>
            <td>Father Name: </td>
            <td><input type="text" name="fname">
            <?php echo ($fnameErr);?> </td>
        </tr>

        <tr>
            <td>Mother Name: </td>
            <td><input type="text" name="mname">
            <?php echo ($mnameErr);?> </td>
        </tr>

        <tr>
            <td>Date of Birth: </td>
            <td><input type="date" name="dob">
            <?php echo ($dobErr);?> </td>
        </tr>

        <tr>
            <td>NID Number : </td>
            <td><input type="number" name="nid" >
            <?php echo ($nidErr);?> </td>
        </tr>

        <tr>
            <td> Mobile Number:  </td>
            <td><input type="number" name="mob" >
            <?php echo ($mobErr);?> </td>
        </tr>

        <tr>
            <td>E-mail:  </td>
            <td><input type="text" name="email" >
            <?php echo ($emailErr);?> </td>
        </tr>

        <tr>
            <td> Gender: </td>
            <td><input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other  
            <?php echo ($genderErr);?> </td>
        </tr>

        <tr>
            <td>Profession: </td>
            <td><select name="profession">
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
                <option value="Doctor">Doctor</option>
                <option value="Nurse">Nurse</option>
                <option value="Police">Police</option>
                <option value="Farmer">Farmer</option>
                <option value="Other">Other</option>
            </select>
            <?php echo ($profErr);?> </td>
        </tr>

        <tr>
            <td>Address: </td>
            <td><input type="text" name="add" id ="add"> 
        <?php echo($addErr); ?>
        </td>
        </tr>

        <tr>
            <td>PassWord : </td>
            <td><input type="password" name="password">
            <?php echo($passErr); ?></td>
        </tr>

        <tr>
            <td>Confirm PassWord : </td>
            <td><input type="password" name="confirmPassword">
            <?php echo($confirmPassErr); ?></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="checkbox" name="termsConditions" value="Accepted">I Accept All Teams & Conditions
                <?php echo($termsConditionsErr);  ?></td>
        </tr>

        <tr>
            <td></td>
            <td> <input type="submit" name="submit" value="SUBMIT">
                 <input type="reset" name="reset" value="RESET"></td>
        </tr>

        <tr>
            <td></td>
            <td>
                or, if you have any account then login please!!! 
                <a href="index.php">Login
            </td>
        </tr>
        
    </table>
</fieldset>

<fieldset id="outputForm">
    <legend id="outputLegend">Show All Information......</legend>
    <table id="outputTable">
        <tr>
            <td>Name: </td>
            <td>
                <?php
                echo($name);
                ?>
            </td>
        </tr>

        <tr>
            <td>Father Name: </td>
            <td>
                <?php
                echo($fname);
                ?>
            </td>
        </tr>

        <tr>
            <td>Mother Name: </td>
            <td>
                <?php
                echo($mname);
                ?>
            </td>
        </tr>

        <tr>
            <td>Date Of Birth: </td>
            <td>
                <?php
                echo($dob);
                ?>
            </td>
        </tr>

        <tr>
            <td>NID Number : </td>
            <td>
                <?php
                echo($nid);
                ?>
            </td>
        </tr>

        <tr>
            <td>Mobile Number : </td>
            <td>
                <?php
                echo($mob);
                ?>
            </td>
        </tr>

        <tr>
            <td>Email : </td>
            <td>
                <?php
                echo($email);
                ?>
            </td>
        </tr>

        <tr>
            <td>Gender : </td>
            <td>
                <?php
                echo($gender);
                ?>
            </td>
        </tr>

        <tr>
            <td>Profession : </td>
            <td>
                <?php
                echo($prof);
                ?>
            </td>
        </tr>

        <tr>
            <td>Address : </td>
            <td>
                <?php
                echo($add);
                ?>
            </td>
        </tr>

        <tr>
            <td>Password : </td>
            <td>
                <?php
                echo($pass);
                ?>
            </td>
        </tr>

        <tr>
            <td>Confirm Password : </td>
            <td>
                <?php
                echo($confirmPass);
                echo($confirmPassErr);
                ?>
            </td>
        </tr>

        <tr>
            <td>Terms and Condition : </td>
            <td>
                <?php
                echo($termsConditions);
                ?>
            </td>
        </tr>

    </table>
</fieldset>
</form>
</body>
</html>