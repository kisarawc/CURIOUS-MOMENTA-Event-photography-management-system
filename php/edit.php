<?php

require'config.php';
session_start();

$loggedinUsername = $_SESSION['username'];

// Retrieve edit details from the form
$first = $_POST['firstName'];
$last = $_POST['lastName'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];


// update SQL statement
$sql = "UPDATE user SET FirstName='$first', LastName='$last', Gender='$gender', DateOfBirth='$dob', Email='$email', ContactNumber='$phone',     Address='$address'
        WHERE username='$loggedinUsername'";



if ($conn->query($sql)) {
     echo 'UPDATED';
} else {
    echo 'Errorupdating the details: ' . $conn->error;
}

$conn->close();

//redirect to profile
header("Location: client.php");
exit;
?>
