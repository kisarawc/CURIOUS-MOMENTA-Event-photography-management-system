<?php

 require'config.php';
 session_start();

 
 //user session
 $loggedinUsername = $_SESSION['username'];

 $sql = "DELETE FROM user WHERE UserName = '$loggedinUsername'";

if ($conn->query($sql)) {
    echo "<h1>Deleted successful<h1>";
    header('Location: log.php');
} else {
    echo "Error deleting record: " . $conn->error;
    
}


$conn->close();

?>