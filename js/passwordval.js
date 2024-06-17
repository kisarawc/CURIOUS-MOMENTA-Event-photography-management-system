function validatePassword() {
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirm-password").value;

  if (password.length < 4) {
    alert("Password should be at least 4 characters long.");
    event.preventDefault();
   
  
  }

  if (password !== confirmPassword) {
    alert("Passwords do not match.");
   exit();
  }

  // Password is valid
  return true;
}