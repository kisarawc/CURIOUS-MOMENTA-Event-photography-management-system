<?php include ('header.php'); //Add header
  session_start();
  ?>

<html>

<head>
  <title>Add Admin</title>
  <link rel="stylesheet" type="text/css" href="../css/AdminAdd.css">
</head>

<body>
  <div class="Fstyle">
    <form action="AdminInsert.php" method="POST">
      
      <div class="H2">
        <h2 >Add New Admin</h2>
      </div>
      
     <!--  getting inputs -->
      <div class="form-group">
          
          First Name:
          <input type="text" id="firstname" name="firstname" required><br><br>

          Last Name:
          <input type="text" id="lastname" name="lastname" required><br><br>

          Username:
          <input type="text" id="username" name="username" required><br><br>

          Email:
          <input type="email" id="email" name="email" required><br><br>

          Address:
          <textarea id="address" name="address" cols="55" rows="4" required></textarea><br><br>

          Gender:
          <input type="radio" id="gender" name="gender" value = "male" required> Male
          <input type="radio" id="gender" name="gender" value = "female" required> Female<br><br>

           Date of Birth:
          <input type="date" id="dob" name="dob" required><br><br>

          Contact Number:
          <input type="tel" id="contact" name="contact" required><br><br>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required><br><br>

          <label for="confirm-password">Confirm Password:</label>
          <input type="password" id="confirmpassword" name="confirmpassword" required><br><br>

          <input type="checkbox" name="tems" id="tems" required> I agree to the terms and condition. 
      
          <input type="submit"  value="ADD" class="button"><br><br>
      </div><!-- form-group -->

    </form>
  </div><!-- Fstyle -->
</body>

<!-- Add footer -->
</body>
<?php include ('footer.php'); ?>
</html>