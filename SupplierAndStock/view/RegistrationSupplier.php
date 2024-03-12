<?php

include '../controller/RegistrationController.php'

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Registration of Supplier</title>
    </head>

    <body>
        <form method="POST" action="" enctype="multipart/form-data">
            <fieldset>
                <legend><h1>Registration of Vaccine Supplier</h1></legend>
                <table>
                    <!-- Supplier FullName -->
                    <tr>
                        <td>Supplier Name : </td>
                        <td><input type="text" name="supplierName">
                            <?php echo($suplierNameErr); ?></td>
                    </tr>

                    <!-- Supplier Nationality -->
                    <tr>
                        <td>Nationality : </td>
                        <td><select name="nationality">
                            <option value="Bangladeshi">Bangladeshi</option>
                            <option value="India">India</option>
                            <option value="China">Chaina</option>
                        </select>
                        </option><?php echo($nationalityErr); ?></td>
                    </tr>

                    <!-- Supplier NID -->
                    <tr>
                        <td>NID NO : </td>
                        <td><input type="text" name="nid">
                            <?php echo($nidErr); ?></td>
                    </tr>

                    <!-- Gender -->
                    <tr>
                        <td>Gender : </td>
                        <td><input type="radio" name="gender" value="Male">Male
                            <input type="radio" name="gender" value="Female">Female
                            <input type="radio" name="gender" value="Others">Others 
                        <?php  echo($genderErr); ?></td>
                    </tr>

                    <!-- Birthday -->
                    <tr>
                        <td>Birth Date : </td>
                        <td><input type="date" name="birthDate">
                            <?php  echo($bithdateErr); ?></td>
                    </tr>
                    
                    <!-- Permanent Address -->
                    <tr>
                        <td>Permanent Address : </td>
                        <td><textarea name="permanentAddress" rows="3" cols="30"></textarea>
                    <?php  echo($permanentAddressErr); ?></td>
                    </tr>
                    <!-- Supplier photo -->
                    <tr>
                        <td>Supplier Photo</td>
                        <td><input type="file" name="suplierPhoto">
                    <?php echo($suplierPhotoErr); ?></td>
                    </tr>
                    
                    <!-- Email Id  -->
                    <tr>
                        <td>E-Mail : </td>
                        <td><input type="text" name="email">
                    <?php echo($emailErr); ?></td>
                    </tr>
                    <!-- Phone No -->
                    <tr>
                        <td>Phone No: </td>
                        <td><input type="text" name="phoneNo">
                    <?php  echo($phoneNoErr);  ?></td>
                    </tr>
                    <!-- UserName -->
                    <tr>
                        <td>User Name :</td>
                        <td><input type="text" name="userName">
                    <?php echo($userNameErr);  ?></td>
                    </tr>
                    <!-- Password -->
                    <tr>
                        <td>Password : </td>
                        <td><input type="password" name="password">
                    <?php  echo($passwordErr); ?></td>
                    </tr>
                    <!-- confirm Password -->
                    <tr>
                        <td>Confirm Password : </td>
                        <td><input type="password" name="confirmPassword">
                    <?php echo($confirmPasswordErr); ?></td>
                    </tr>
                    <!-- Company Name -->
                    <tr>
                        <td>Supplier Company Name : </td>
                        <td><input type="text" name="companyName">
                    <?php echo($companyNameErr);  ?></td>
                    </tr>
                    <!-- Company's Papers -->
                    <tr>
                        <td>Sumbit Company's Paper(PDF) : </td>
                        <td><input type="file" name="companyPapers"></td>
                    </tr>
                    <!-- Company's TIN ID  -->
                    <tr>
                        <td>Company's TIN ID : </td>
                        <td><input type="text" name="tinId">
                    <?php echo($tinIdErr);  ?></td>
                    </tr>
                    <!-- Teams&Conditions -->
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="tearms&Conditions" value="Accepted">I Accept All Teams & Conditions
                    <?php echo($teamsConditionsErr);  ?></td>
                    </tr>
                    <!-- Submit -->
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="SUBMIT">
                            <input type="button" name="reset" value="RESET"></td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>
                <legend>Show All Information : </legend>
                <table>
                    <tr>
                        <!-- Name -->
                        <td>Name :</td>
                        <td><?php 
                        // if($_REQUEST['supplierName'] != $suplierNameValidation){
                        //     echo($suplierName);
                        // } 
                        echo($suplierName)
                         ?></td>
                    </tr>

                    <!-- Nationality -->
                    <tr>
                        <td>Nationality :</td>
                        <td><?php echo($nationality); ?></td>
                    </tr>

                    <!-- NID -->
                    <tr>
                        <td>NID :</td>
                        <td><?php 
                        // if($_REQUEST['nid'] != $nidValidation){
                        //     echo($nid);
                        // }
                        echo($nid);
                        ?></td>
                    </tr>

                     <!-- Gender -->
                     <tr>
                        <td>Gender: </td>
                        <td><?php  
                        // if(isset($_REQUEST['gender'])){
                        //     echo($gender);
                        // }
                        echo($gender)
                         ?></td>
                     </tr>

                     <!-- Birthdate -->
                     <tr>
                        <td>BirthDate : </td>
                        <td><?php echo($birthdate);  ?></td>
                     </tr>

                     <!-- Permanent Address :  -->
                     <tr>
                        <td>Permanent Address :</td>
                        <td><?php echo($permanentAddress);  ?></td>
                    </tr>

                     <!-- Supplier Photo  -->
                     <tr>
                        <td>Supplier Photo : </td>
                        <td><?php  echo($suplierPhoto);
                          ?></td>
                     </tr>

                     <!-- Email Id  -->
                     <tr>
                        <td>Email : </td>
                        <td><?php  
                        // if($_REQUEST['email'] != $emailValidation){
                        //     echo($email);
                        // }
                        echo($email);
                         ?></td>
                     </tr>

                    <!-- Phone Number :   -->
                    <tr>
                        <td>Phone No : </td>
                        <td><?php  
                        // if($_REQUEST['phoneNo'] != $phoneNoValidation){
                        //     echo($phoneNo);
                        // }
                        echo($phoneNo);
                        ?></td>
                    </tr>

                     <!-- User Name :   -->
                    <tr>
                        <td>User Name : </td>
                        <td><?php 
                        // if($_REQUEST['userName'] == $userNameValidation){
                        //     echo($userName);
                        // }  
                        echo($userName);
                        ?></td>
                    </tr>

                    <!-- Password -->
                    <tr>
                        <td>Password : </td>
                        <td><?php 
                        // if($_REQUEST['password']==$passwordSize){
                        //     echo($password);
                        // }
                        echo($password);
                         ?></td>
                    </tr>

                    <!-- Confirm Password -->
                    <tr>
                        <td>Confirm Password : </td>
                        <td><?php 
                        echo($confirmPassword);
                        echo($confirmPasswordErr);
                         ?></td>
                    </tr>
                    <!-- Company Name -->
                    <tr>
                        <td>Company Name : </td>
                        <td><?php  echo($companyName);  ?></td>
                    </tr>

                    <!-- Company's Papers -->
                    <tr>
                        <td>Company's Paper: </td>
                        <td><?php  echo($companyPapers);  ?></td>
                    </tr>


                    <!-- TIN ID -->
                    <tr>
                        <td>TIN ID : </td>
                        <td><?php  
                        // if($_REQUEST['tinId']== $tinIDValidation){
                        //     echo($tinId);
                        // }
                        echo($tinId);
                        ?></td>
                    </tr>

                    <!-- Tearms & Conditions -->
                    <tr>
                        <td>Tearms & Condition : </td>
                        <td><?php echo($teamsConditions);  ?></td>
                    </tr>
                    
                </table>
            </fieldset>
        </form>
    </body>
</html>