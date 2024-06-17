
<?php

 require'config.php'; 
 session_start();
 
 if(!isset($_SESSION["username"])) { 
    header("Location:Index.php");
    }
 //user session
 $loggedinUsername = $_SESSION['username'];

    $sql = "SELECT  FirstName, LastName, Username, Email, Address, Gender, DateOfBirth, ContactNumber
            FROM user
            WHERE Username = '$loggedinUsername'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        // Display account details
        while ($row = $result->fetch_assoc()) {
           
            //username
            $username = $row['Username'];
            
            //first name
            $first = $row['FirstName'];

            //last name
            $last = $row['LastName'];

            //gender name
            $gender = $row['Gender'];

            //dob
            $dob = $row['DateOfBirth'];

            //email
            $email = $row['Email'];

            //phone
            $phone = $row['ContactNumber'];

            //address
            $address = $row['Address'];
            
            echo '</div>'; 
        }
        
        echo '</div>'; 
    } else {
        echo 'No account details found.';
    }
    
    $conn->close();


?>
<?php include ('header.php'); ?>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="../css/edstyles.css">
  <script src="../js/accvalidation.js"></script>
</head>



<body>

  
  <h2>Edit Info </h2>
<div class="form"> 
  <form action="edit.php" method="post">
    First Name:
    <input type="text" id="firstName" name="firstName" placeholder="<?php echo $first ?>"required><br><br>

    Last Name:
    <input type="text" id="lastName" name="lastName" placeholder="<?php echo $last ?>" required><br><br>

    

   Gender:
    <input type="radio" id="male" name="gender" value="male" required>
    Male
    <input type="radio" id="female" name="gender" value="female" >Female
   <br><br>

   Date of Birth:
    <input type="date" id="dob" name="dob" placeholder="<?php echo $dob ?>" required><br><br>

    Email:
    <input type="email" id="email" name="email" placeholder="<?php echo $email ?>"required><br><br>

    Phone:
    <input type="tel" id="phone" name="phone" placeholder="<?php echo $phone ?>"required><br><br>

    Address:
    <textarea id="address" name="address" placeholder="<?php echo $address ?>"required></textarea><br><br>


    <input type="checkbox" id="terms" name="terms" required>
    <label for="terms">I agree to the terms & conditions</label><br><br>
    

    <div class="button">
    <input type="submit" value="save" onclick="updatevalidation()" >
    <input type="reset" value="Reset">
  </div> <!-- button -->
    
  </div> <!-- form -->

  </form>


</body>

<?php include ('footer.php'); ?>

</html>

