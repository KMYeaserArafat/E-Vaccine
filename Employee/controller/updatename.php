<?php
include '../model/mydb.php';

$nmbr = $new_vaccine = $nmbr_error = $new_vaccine_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nmbr'])) {
        $nmbr_error = "*Registration Number is required";
    } else {
        $nmbr = $_POST['nmbr'];
    }

    if (empty($_POST['new_vaccine'])) {
        $new_vaccine_error = "*New Vaccine Name is required";
    } else {
        $new_vaccine = $_POST['new_vaccine'];
    }

    if (empty($nmbr_error) && empty($new_vaccine_error)) {
        $mydb = new Model();
        $conn = $mydb->OpenCon();
        $result = $mydb->UpdateVaccineName($conn, "vaccinated", $nmbr, $new_vaccine);

        if ($result === true) {
            echo "Vaccine Name updated successfully!";
        } else {
            echo "Error occurred: " . $conn->error;
        }
    }
}
?>
