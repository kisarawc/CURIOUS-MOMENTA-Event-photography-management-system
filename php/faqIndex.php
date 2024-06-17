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


function getAllFAQs()
{
    global $conn;
    $sql = "SELECT * FROM faq";
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

// Get all FAQs
$faqs = getAllFAQs();

// Close the database connection
$conn->close();
?>

<?php include ('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>FAQs</title>
    <script src="https://kit.fontawesome.com/18e83e9d68.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/faq.css">
</head>




    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <?php foreach ($faqs as $faq): ?>
            <div class="faq">
                <h2><?php echo $faq['question']; ?></h2>
                <p><?php echo $faq['answer']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
   <?php include ('footer.php'); ?>


</html>
