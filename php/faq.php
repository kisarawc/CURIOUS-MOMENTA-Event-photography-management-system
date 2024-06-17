<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'event_photography';

// Connect to MySQL
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to create an FAQ
function createFAQ($question, $answer)
{
    global $conn;
    $sql = "INSERT INTO faq (question, answer) 
    VALUES ('$question', '$answer')";
    $result = $conn->query($sql);
    if (!$result) {
        die("Error creating FAQ: " . $conn->error);
    }
}

// Function to read all FAQs
function getAllFAQs()
{
    global $conn;
    $sql = "SELECT * 
    FROM faq";
    $result = $conn->query($sql);
    if (!$result) {
        die("Error retrieving FAQs: " . $conn->error);
    }
    $faqs = [];
    while ($row = $result->fetch_assoc()) {
        $faqs[] = $row;
    }
    return $faqs;
}

// Function to update an FAQ
function updateFAQ($id, $question, $answer)
{
    global $conn;
    $sql = "UPDATE faq SET question='$question', answer='$answer' 
    WHERE id=$id";
    $result = $conn->query($sql);
    if (!$result) {
        die("Error updating FAQ: " . $conn->error);
    }
}

// Function to delete an FAQ
function deleteFAQ($id)
{
    global $conn;
    $sql = "DELETE FROM faq 
    WHERE id=$id";
    $result = $conn->query($sql);
    if (!$result) {
        die("Error deleting FAQ: " . $conn->error);
    }
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'add') {
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        createFAQ($question, $answer);
    } 
    elseif ($_POST['action'] === 'edit') {
        $id = $_POST['id'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        updateFAQ($id, $question, $answer);
    } 
    elseif ($_POST['action'] === 'delete') {
        $id = $_POST['id'];
        deleteFAQ($id);
    }
}

// Close the database connection
$conn->close();
?>