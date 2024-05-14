<?php
include '../Controler/MedicalHistoryController.php';
?>
<html>
    <head>
    <h3>Medical History </h4>
    <link rel="stylesheet" href="..//Design/MedicalHistory.css">
    </head>
    <body>
<form method="post" action="" enctype="multipart/form-data">  
<fieldset>
    <legend><h1>Upload Medical Information</h1></legend>
        <table>
        <tr>
            <td>Dose Number: </td>
            <td><input type="number" name="doseNum" >
            <?php echo ($doseErr);?> </td>
        </tr>

        <tr>
            <td>Age Limit: </td>
            <td>
            <select id="age_limit" name="age_limit">
                <option value="1-10">1-10</option>
                <option value="11-20">11-20</option>
                <option value="21-30">21-30</option>
                <option value="Above 30">Above 30</option>
            </select>
            <?php echo ($agelimitErr);?> </td>
        </tr>

        <tr>
            <td>Blood Pressure: </td>
            <td>
            <input type="radio" id="blood_pressure_yes" name="blood_pressure" value="yes">
            <label for="blood_pressure_yes">Yes</label>
            <input type="radio" id="blood_pressure_no" name="blood_pressure" value="no">
            <label for="blood_pressure_no">No</label>
            <?php echo ($bloodPressureErr);?> </td>
        </tr>
        
        <tr>
            <td>Diabetics: </td>
            <td>
            <input type="radio" id="diabetics_yes" name="diabetics" value="yes">
            <label for="diabetics_yes">Yes</label>
            <input type="radio" id="diabetics_no" name="diabetics" value="no">
            <label for="diabetics_no">No</label>
            <?php echo ($diabeticsErr);?> </td>
        </tr>

        <tr>
            <td>Allergy: </td>
            <td>
            <input type="radio" id="allergy_yes" name="allergy" value="yes">
            <label for="allergy_yes">Yes</label>
            <input type="radio" id="allergy_no" name="allergy" value="no">
            <label for="allergy_no">No</label>
            <?php echo ($allergyErr);?> </td>
        </tr>

        <tr>
            <td>Any Medical History : </td>
            <td><textarea name="medicalHistory" rows="5" cols="30"></textarea> 
        <?php echo($medicalHistoryErr); ?>
        </td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit" name="submit" value="SUBMIT">
                 <input type="button" name="reset" value="RESET"></td>
        </tr>

        <tr>
            <td></td>
            <td>Return to Home Page <a href="Home.php">Home</a></td>
        </tr>
    </table>
</fieldset>
</head>
</html>