<?php 
require'config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contactus (first_name, last_name, email, subject, message) 
        VALUES ('$fname', '$lname', '$email ', '$subject', '$message')";


if ($conn->query($sql) === TRUE) {
    echo '<h1> Successful.<h1>';
    

} else {
    echo 'Error adding payment details: ' . $conn->error;
    
}


$conn->close();
?>

