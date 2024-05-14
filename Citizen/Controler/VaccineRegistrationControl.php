<?php

include '../Layouts/MyDb.php';

// define variables and set to empty values
$nameErr = $nidErr = $emailErr = $mobErr = $vaccineNameErr = $manufacturerErr = $quantityErr = $doseNumberErr = $hospitalNameErr = "";
$name = $nid = $email = $mob = $vaccineName = $manufacturer = $quantity = $doseNumber = $hospitalName = "";

// Check if POST data is set
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true; 

    // Name Validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $isValid = false;
    } else {
        $name = test_input($_POST["name"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
            $isValid = false;
        }
    }

    // NID Validation
    if (empty($_POST["nid"])) {
        $nidErr = "NID is required";
        $isValid = false;
    } else {
        $nid = test_input($_POST["nid"]);
        // Validate NID format
        if (!preg_match("/^[0-9]{10}$/", $nid)) {
            $nidErr = "NID must contain exactly 10 digits and only numbers";
            $isValid = false;
        }
    }

    // Email Validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $isValid = false;
    } else {
        $email = test_input($_POST["email"]);
        // Check if email is valid and contains @gmail.com
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/@gmail.com$/", $email)) {
            $emailErr = "Enter a valid email address ending with @gmail.com";
            $isValid = false;
        }
    }

    // Mobile Validation
    if (empty($_POST["mob"])) {
        $mobErr = "Mobile number is required";
        $isValid = false;
    } else {
        $mob = test_input($_POST["mob"]);
        // Check if mobile number contains only numbers
        if (!preg_match("/^[0-9]+$/", $mob)) {
            $mobErr = "Mobile number must contain only numbers";
            $isValid = false;
        }
    }

    // Vaccine Name Validation
    if (empty($_POST["vaccineName"])) {
        $vaccineNameErr = "Please select a vaccine name";
        $isValid = false;
    } else {
        $vaccineName = test_input($_POST["vaccineName"]);
    }

    // Manufacturer Validation
    if (empty($_POST["manufacturer"])) {
        $manufacturerErr = "Please select a vaccine manufacturer";
        $isValid = false;
    } else {
        $manufacturer = test_input($_POST["manufacturer"]);
    }

    // Quantity Validation
    if (empty($_POST["quantity"])) {
        $quantityErr = "Quantity is required";
        $isValid = false;
    } else {
        $quantity = test_input($_POST["quantity"]);
        // Check if quantity contains only numbers, not more than 10, and greater than 0
        if (!preg_match("/^[1-9][0-9]?$|^10$/", $quantity)) {
            $quantityErr = "Quantity must contain only numbers, not more than 10, and greater than 0";
            $isValid = false;
        }
    }

    // Dose Number Validation
    if (empty($_POST["doseNumber"])) {
        $doseNumberErr = "Dose number is required";
        $isValid = false;
    } else {
        $doseNumber = test_input($_POST["doseNumber"]);
        // Check if dose number contains only numbers and not more than 3
        if (!preg_match("/^[0-9]{1,3}$/", $doseNumber)) {
            $doseNumberErr = "Dose number must contain only numbers and not more than 3";
            $isValid = false;
        }
    }

    // Hospital Name Validation
    if (empty($_POST["hospitalName"])) {
        $hospitalNameErr = "Hospital name is required";
        $isValid = false;
    } else {
        $hospitalName = test_input($_POST["hospitalName"]);
    }

    // If all validations pass, proceed to insert into database
    if ($isValid) {
        $myDB = new Model();
        $conObj = $myDB->OpenConn();
        $result = $myDB->AddVaccine($conObj, "vaccine_registration_people", $name, $nid, $email, $mob, $vaccineName, $manufacturer, $quantity, $doseNumber, $hospitalName);

        if ($result) {
            echo "Successfully Added";
        } else {
            echo "Error Occurred: " . $conObj->error;
        }
    }
}

// Function to sanitize input data
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
