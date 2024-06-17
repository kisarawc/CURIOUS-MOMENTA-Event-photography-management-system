<?php
  require'config.php'; 
  session_start();

  if(isset($_SESSION["username"])) { 
    header("Location:client.php");
    }

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password' And UserType='client'";

$sqli = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password' AND UserType = 'admin'";

$result1 = $conn->query($sql);
$result2 = $conn->query($sqli);


if ($result1->num_rows == 1) {
    $_SESSION['username'] = $username;
    $utype = "client";
    $_SESSION['usertyp'] = $utype;
    header('Location: client.php');
    exit();
} 

if ($result2->num_rows == 1) {
    $_SESSION['username'] = $username;
    $utype = "admin";
    $_SESSION['usertyp'] = $utype;
    header('Location: AdminHome.php');
    exit();
} else {
    
    echo '<h1>Invalid username or password.</h1>';
}


$conn->close();
?>



