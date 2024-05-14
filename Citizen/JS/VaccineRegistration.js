function validateForm() {
    var name = document.getElementById('name').value;
    var nid = document.getElementById('nid').value;
    var email = document.getElementById('email').value;
    var mob = document.getElementById('mob').value;
    var vaccineName = document.getElementById('vaccineName').value;
    var manufacturer = document.getElementById('manufacturer').value;
    var quantity = document.getElementById('quantity').value;
    var doseNumber = document.getElementById('doseNumber').value;
    var hospitalName = document.getElementById('hospitalName').value;

    var nameRegex = /^[a-zA-Z\s]+$/;
    var nidRegex = /^\d{10}$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var mobRegex = /^\d+$/;
    var quantityRegex = /^[1-9]|10$/;
    var doseNumberRegex = /^\d{1,3}$/;

    var isValid = true;

    if (!nameRegex.test(name)) {
        document.getElementById('nameError').innerText = "Name must contain only letters.";
        isValid = false;
    } else {
        document.getElementById('nameError').innerText = "";
    }

    if (!nidRegex.test(nid)) {
        document.getElementById('nidError').innerText = "NID must contain exactly 10 digits and only numbers.";
        isValid = false;
    } else {
        document.getElementById('nidError').innerText = "";
    }

    if (!emailRegex.test(email)) {
        document.getElementById('emailError').innerText = "Enter a valid email address.";
        isValid = false;
    } else {
        document.getElementById('emailError').innerText = "";
    }

    if (!mobRegex.test(mob)) {
        document.getElementById('mobError').innerText = "Mobile number must contain only numbers.";
        isValid = false;
    } else {
        document.getElementById('mobError').innerText = "";
    }

    if (vaccineName === "") {
        document.getElementById('vaccineNameError').innerText = "Please select a vaccine name.";
        isValid = false;
    } else {
        document.getElementById('vaccineNameError').innerText = "";
    }

    if (manufacturer === "") {
        document.getElementById('manufacturerError').innerText = "Please select a vaccine manufacturer.";
        isValid = false;
    } else {
        document.getElementById('manufacturerError').innerText = "";
    }

    if (!quantityRegex.test(quantity)) {
        document.getElementById('quantityError').innerText = "Quantity must contain only numbers, not more than 10, and greater than 0.";
        isValid = false;
    } else {
        document.getElementById('quantityError').innerText = "";
    }

    if (!doseNumberRegex.test(doseNumber)) {
        document.getElementById('doseNumberError').innerText = "Dose number must contain only numbers and not more than 3.";
        isValid = false;
    } else {
        document.getElementById('doseNumberError').innerText = "";
    }

    if (hospitalName === "") {
        document.getElementById('hospitalNameError').innerText = "Please enter the hospital name.";
        isValid = false;
    } else {
        document.getElementById('hospitalNameError').innerText = "";
    }
}
 
function submitForm(event) {
    event.preventDefault(); // Prevent the default form submission

    var isValid = validateForm(); // Perform client-side validation

    if (isValid) {
        var formData = new FormData(document.getElementById('registrationForm'));

        // Send form data using AJAX
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../Controler/VaccineRegistrationControl.php', true);
        xhttp.onload = function () {
            if (xhttp.status == 200) {
                alert(xhttp.responseText);
            } else {
                alert('Error occurred: ' + xhttp.statusText);
            }
        };
        xhttp.onerror = function () {
            alert('Request failed');
        };
        xhttp.send(formData);
    }
}
