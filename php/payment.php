<?php

require'config.php';
 session_start();

 if(!isset($_SESSION["username"])) { 
    header("Location:Index.php");
    }

 //user session
 $loggedinUsername = $_SESSION['username'];


//get details
$cardType = $_POST['payment-method'];
$cardHolderName = $_POST['card-holder-name'];
$cardNumber = $_POST['card-number'];
$expiryMonth = $_POST['expiry-month'];
$expiryYear = $_POST['expiry-year'];
$cvv = $_POST['cvv'];



$sql = "INSERT INTO payment (card_holder_name, card_number, expiry_month, exp_year, cvv, payment_type, username) 
        VALUES ('$cardHolderName', '$cardNumber', $expiryMonth, $expiryYear, $cvv, '$cardType', '$loggedinUsername')";

if ($conn->query($sql)) {
    echo '<h1>Card added successfully.<h1>';
    header('location: client.php');

} else {
    echo 'Error adding payment details: ' . $conn->error;
    
}


$conn->close();
?>
