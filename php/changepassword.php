<?php 
 require'config.php'; 
 session_start();

 if(!isset($_SESSION["username"])) {  //check 
    header("Location:Index.php");
    }

 //user session
 $loggedinUsername = $_SESSION['username'];
?>
<?php
include ('header.php'); 
$newpwd = $_POST['password'];
$conpwd = $_POST['confirm-password'];


$sql = "UPDATE user SET password='$newpwd'
        WHERE Username= '$loggedinUsername' ";

if ($conn->query($sql) === TRUE) {
    echo '<h1>Updated successfully.<h1>';
    header('location: client.php');

} else {
    echo 'Error updating details: ' . $conn->error;
    
}


$conn->close();
?>
