<?php

 // database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_photography";

// database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
