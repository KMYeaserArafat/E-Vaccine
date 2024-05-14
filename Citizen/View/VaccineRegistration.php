<?php

include '../Controler/VaccineRegistrationControl.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vaccine Registration Form</title>
    <link rel="stylesheet" href="..//Design/VaccineRegistration.css">
</head>
<body>
<form method="post" id="registrationForm" enctype="multipart/form-data" onsubmit="submitForm(event)">
        <fieldset>
            <legend id="inputLegend"><h3>Vaccine Registration Form</h3></legend>
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" id="name"></td>
                    <td><span id="nameError" class="error"><?php echo $nameErr; ?></span></td>
                </tr>

                <tr>
                    <td>NID Number: </td>
                    <td><input type="number" name="nid" id="nid"></td>
                    <td><span id="nidError" class="error"><?php echo $nidErr; ?></span></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" id="email"></td>
                    <td><span id="emailError" class="error"><?php echo $emailErr; ?></span></td>
                </tr>

                <tr>
                    <td>Mobile Number: </td>
                    <td><input type="number" name="mob" id="mob"></td>
                    <td><span id="mobError" class="error"><?php echo $mobErr; ?></span></td>
                </tr>

                <tr>
                    <td>Vaccine Name: </td>
                    <td>
                        <select name="vaccineName" id="vaccineName">
                            <option value="">Select Vaccine Name</option>
                            <option value="Whooping Cough">Whooping Cough</option>
                            <option value="Tetanus">Tetanus</option>
                            <option value="Measles">Measles</option>
                            <option value="Poliomyelitis">Poliomyelitis</option>
                            <option value="Tuberculosis">Tuberculosis</option>
                            <option value="Corona">Corona</option>
                            <option value="Measles Rubella">Measles Rubella</option>
                        </select>
                    </td>
                    <td><span id="vaccineNameError" class="error"><?php echo $vaccineNameErr; ?></span></td>
                </tr>

                <tr>
                    <td>Vaccine Manufacturer Company: </td>
                    <td>
                        <select name="manufacturer" id="manufacturer">
                            <option value="">Select Manufacturer</option>
                            <option value="ACI HealthCare Limited">ACI HealthCare Limited</option>
                            <option value="Aristopharma Ltd">Aristopharma Ltd</option>
                            <option value="ACNOVA LTD.">ACNOVA LTD.</option>
                            <option value="Delta Pharma Limited">Delta Pharma Limited</option>
                            <option value="EURO Pharma Ltd">EURO Pharma Ltd</option>
                            <option value="Incepta Vaccine Ltd">Incepta Vaccine Ltd</option>
                            <option value="Lazz Pharma Ltd.">Lazz Pharma Ltd.</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>
                    <td><span id="manufacturerError" class="error"><?php echo $manufacturerErr; ?></span></td>
                </tr>

                <tr>
                    <td>Quantity: </td>
                    <td><input type="number" name="quantity" id="quantity"></td>
                    <td><span id="quantityError" class="error"><?php echo $quantityErr; ?></span></td>
                </tr>

                <tr>
                    <td>Dose Number: </td>
                    <td><input type="number" name="doseNumber" id="doseNumber"></td>
                    <td><span id="doseNumberError" class="error"><?php echo $doseNumberErr; ?></span></td>
                </tr>

                <tr>
                    <td>Hospital Name: </td>
                    <td><input type="text" name="hospitalName" id="hospitalName"></td>
                    <td><span id="hospitalNameError" class="error"><?php echo $hospitalNameErr; ?></span></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="SUBMIT">
                        <input type="reset" name="reset" value="RESET">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                    <a href="Home.php"><button type="button">Go to Home Page</button></a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <script src="../JS/VaccineRegistration.js"></script>
</body>
</html>
