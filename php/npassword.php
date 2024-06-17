<?php 
 require'config.php'; 
 session_start();

 if(!isset($_SESSION["username"])) {  //check 
    header("Location:Index.php");
    }

 //user session
 $loggedinUsername = $_SESSION['username'];
?>
<?php include ('header.php'); ?>
<html>
<head>
    <title>Password Reset</title>
    <link rel="stylesheet" type="text/css" href="../css/newpassword.css">
    <script src="../js/passwordval.js"></script>
</head>
<body>
    <div class="container">
        <h2>Password Reset</h2>
        <form action="changepassword.php" method="post">
        
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Reset Password" onclick="validatePassword()">
            </div>
        </form>
    </div>
</body>
</html>
<?php include ('footer.php'); ?>
