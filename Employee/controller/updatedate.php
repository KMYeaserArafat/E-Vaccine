<?php
include '../model/mydb.php';

$nmbr = $new_vaccinated = $nmbr_error = $new_vaccinated_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nmbr'])) {
        $nmbr_error = "*Registration Number is required";
    } else {
        $nmbr = $_POST['nmbr'];
    }

    if (empty($_POST['new_vaccinated'])) {
        $new_vaccinated_error = "*New Vaccinated Date is required";
    } else {
        $new_vaccinated = $_POST['new_vaccinated'];
    }

    if (empty($nmbr_error) && empty($new_vaccinated_error)) {
        $mydb = new Model();
        $conn = $mydb->OpenCon();
        $result = $mydb->UpdateVaccinatedDate($conn, "vaccinated", $nmbr, $new_vaccinated);

        if ($result === true) {
            echo "Vaccinated Date updated successfully!";
        } else {
            echo "Error occurred: " . $conn->error;
        }
    }
}
?>
