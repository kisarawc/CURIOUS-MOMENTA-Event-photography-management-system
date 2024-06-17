
<?php

 require'connection.php'; 
 session_start();


 include ('header.php'); ?>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="../css/AdminEditAccmain.css">
  <script src="../js/accvalidation.js"></script>
</head>

<body>

  <h2>Edit Info </h2>

<div class="formstyle"> 

    <!-- Getting inputs -->
    <form action="AdminUpdateAcc.php" method="post">
            User Name:
            <input type="text" id="UserName" name="userName"required><br><br>

            First Name:
            <input type="text" id="firstName" name="firstName" required><br><br>

            Last Name:
            <input type="text" id="lastName" name="lastName" required><br><br>

            Gender:
            <input type="radio" id="male" name="gender" value="male" required>
            Male:
            <input type="radio" id="female" name="gender" value="female" >Female
            <br><br>

            Date of Birth:
            <input type="date" id="dob" name="dob"  required><br><br>

            Email:
            <input type="email" id="email" name="email" required><br><br>

            Phone:
            <input type="text" id="phone" name="phone" required><br><br>

            Address:
            <textarea id="address" name="address" required></textarea><br><br>
            
            <input type="checkbox" id="terms" name="terms" required>
            I agree to the terms & conditions<br><br>
            

        <div class="button">
            <input type="submit" value="save" onclick="updatevalidation()" >
            <input type="reset" value="Reset">
        </div> <!-- button -->

    </form>   

</div> <!-- form -->

</body>

<?php include ('footer.php'); ?>

</html>

