// Check if the page is being reloaded
if (performance.navigation.type === 1) {
  document.querySelector('.error-container').style.display = 'none';
}

// Event listener for the "Enter" key press
document.addEventListener('keydown', function(event) {
  if (event.key === 'Enter') {
      event.preventDefault(); 
      validateLogin(); 
  }
});

// Function to validate the login form
function validateLogin() {
  var email = document.getElementById('emailInput').value;
  var password = document.getElementById('passwordInput').value;

  var emailError = document.getElementById('emailError');
  var passwordError = document.getElementById('passwordError');

  // Reset error messages
  emailError.textContent = '';
  passwordError.textContent = '';

    // Check if both email and password are empty
  if (!email && !password) {
    document.getElementById('emailError').textContent = '* Email is required.';
    document.getElementById('passwordError').textContent = '* Password is required.';
    return;
  }

  // Check if email and password are empty
  if (!email.trim()) {
      emailError.textContent = '*Email is required';
      return;
  }

  if (!password.trim()) {
      passwordError.textContent = '*Password is required';
      return;
  }
  // If inputs are not empty, submit the form
  document.getElementById('myForm').submit();

  const errorMessage = "<?php echo !empty($error_message) ? 'block' : 'none'; ?>";
        document.querySelector('.error-container').style.display = errorMessage;
  
}
