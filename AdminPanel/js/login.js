document.addEventListener("DOMContentLoaded", function() {
  // Selecting the form element
  var loginForm = document.querySelector("form");

  // Adding event listener for form submission
  loginForm.addEventListener("submit", function(event) {
    // Preventing the default form submission behavior
    event.preventDefault();

    // Getting the values of email and password fields
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Basic validation to ensure both fields are not empty
    if (email.trim() === "" || password.trim() === "") {
      alert("Please enter both email and password.");
      return;
    }

    // If both fields are filled, the form will be submitted
    this.submit();
  });
});
