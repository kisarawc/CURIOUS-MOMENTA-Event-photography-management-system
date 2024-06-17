<!DOCTYPE html>
<html>
<head>
  <title>User Signup</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<?php
      include_once'header.php'
?>

  <div class="container">
    <form id="signup-form" action="includes/signup.inc.php" method="POST">
    <center><div id="greetingMessage" class="greeting" style ="font-size: 40px; font-weight: bold; text-align: center; margin-top: 30px;"></div></center>
      <h2>REGISTER</h2>

      <div class="form-group">
        <label for="first-name">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>
      </div>
      <div class="form-group">
        <label for="last-name">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="userName" name="userName" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="DOB">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
      </div>
      <div class="form-group">
        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="mobile" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="pwd" required>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirmpassword" name="repeat-pwd" required>
      </div>
      <div class="form-group">
        <input type="checkbox" name="tems" id="checkbox" onclick="enableSubmit();"> I agree to the terms and condition. 
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Register" class="button" id="submitBtn" disabled>
        <p>Alredy have an account ? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
  <?php
      include_once'footer.php'
?>
  <script src="../js/signup.js"></script>
</body>
</html>