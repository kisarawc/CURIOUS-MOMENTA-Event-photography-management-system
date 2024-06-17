
<?php

 require'config.php'; 
 session_start();

 if(!isset($_SESSION["username"])) {  //check 
    header("Location:Index.php");
    }

 //user session
 $loggedinUsername = $_SESSION['username'];
 $loggedType = $_SESSION['usertyp'];


  if($loggedType=='client'){      //if usertype is a client he will go to profile
    $sql = "SELECT  FirstName, LastName, Username, Email, Address, Gender, DateOfBirth, ContactNumber,UserType 
            FROM user
            WHERE Username = '$loggedinUsername'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        // Display account details
        while ($row = $result->fetch_assoc()) {
           
          
            $username = $row['Username'];
           
            $first = $row['FirstName'];

            $last = $row['LastName'];

            $gender = $row['Gender'];

            $dob = $row['DateOfBirth'];

            $email = $row['Email'];

            $phone = $row['ContactNumber'];

            $address = $row['Address'];

            $type = $row['UserType'];
            
            
            echo '</div>'; 
        }
        
        echo '</div>'; 

       
    
     }     
    }else if($loggedType=='admin'){     //if he is a admin go to admin page
      header('Location: admin.php');
    }
    
   $conn->close();

?>

<?php include ('header.php'); ?>


<html>
<head>
  <title>Client Account</title>
  <link rel="stylesheet" type="text/css" href="../css/client.css">
  <script src="../js/confirm.js"></script>
   <script src="../js/logoff.js"></script>
</head>

<body>

  <div class="wrapper clearfix"> 
    <hr> 
    <div class="method-button clearfix">
      
      
      <a href="npassword.php"><input type="button" value="Reset Password" </a>
      <a href="pay.php"><input type="button" value="Add a credit card" ></a>
    </div> <!-- method-button -->

    <hr>
    
    <div class="personal-information"> 
      <h2>Personal Information</h2>
  
      <h3>First Name: <?php echo $first ?></h3>
      <h3>Last Name: <?php echo $last ?></h3>
      <h3>Username: <?php echo $username ?></h3>
      <h3>Gender: <?php echo $gender ?></h3>
      <h3>Date of Birth: <?php echo $dob ?></h3>
      <h3>Email: <?php echo $email ?></h3>
      <h3>Phone: <?php echo $phone ?></h3>
      <h3>User Type: <?php echo $type ?></h3>
      <h3>Address: <?php echo $address ?></h3>
    </div> <!-- personal-information -->

  </div>
  <div class="delete">
    <form action="delete.php">  
      <input type="submit" value="Delete Account" onclick="confirmDelete()">
    </form>
    <form action="account.php">
      <input type="submit" value="Edit">
    </form>
    <form action="logout.php" method="post"> 
        <input name="logoff" type="submit" value="Logout" onclick="logoff()" > 
    </form>
  </div> <!-- delete -->

</body>
</html>
<?php include ('footer.php'); ?>




