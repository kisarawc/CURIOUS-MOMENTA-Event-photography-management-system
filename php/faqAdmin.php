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

// Initialize variables
$successMessage = $errorMessage = "";

// Function to create an FAQ
function createFAQ($question, $answer)
{
    global $conn;
    
    $question = mysqli_real_escape_string($conn, $question);
    $answer = mysqli_real_escape_string($conn, $answer);

    $sql = "INSERT INTO faq (question, answer) VALUES ('$question', '$answer')";
    $result = $conn->query($sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'add') {
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $result = createFAQ($question, $answer);
        if ($result) {
            $successMessage = "FAQ created successfully.";
        } else {
            $errorMessage = "Failed to create FAQ.";
        }
    }
}

// Function to delete an FAQ
// Function to delete an FAQ
function deleteFAQ($id)
{
    global $conn;
    $sql = "DELETE FROM faq WHERE id=$id";
    $result = $conn->query($sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Handle delete action
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['action'] === 'delete') {
        $id = $_GET['id'];
        $result = deleteFAQ($id);
        if ($result) {
            $successMessage = "FAQ deleted successfully.";
        } else {
            $errorMessage = "Failed to delete FAQ.";
        }
    }
}


function updateFAQ($id, $question, $answer)
{
    global $conn;
    
    $question = mysqli_real_escape_string($conn, $question);
    $answer = mysqli_real_escape_string($conn, $answer);
    $sql = "UPDATE faq SET question='$question', answer='$answer' WHERE id=$id";
    $result = $conn->query($sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Handle edit/update action
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'update') {
        $id = $_POST['id'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $result = updateFAQ($id, $question, $answer);
        if ($result) {
            $successMessage = "FAQ updated successfully.";
        } else {
            $errorMessage = "Failed to update FAQ.";
        }
    }
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
    <title>FAQ System</title>
    <link rel="stylesheet" type="text/css" href="../css/styles/faqStyle.css">

    <script>
        function showEditPopup(id, question, answer) {
            var popup = document.getElementById("edit-popup");
            var form = popup.querySelector("form");
            form.action = "";
            form.querySelector("input[name='id']").value = id;
            form.querySelector("input[name='question']").value = question.toString();
            form.querySelector("textarea[name='answer']").value = answer.toString();
            popup.style.display = "block";
        }

        function closeEditPopup() {
            var popup = document.getElementById("edit-popup");
            popup.style.display = "none";
        }
    </script>
</head>
<body>
    <h1>FAQ System</h1>

    <!-- Create FAQ form -->
    <form action="" method="post">
        <input type="hidden" name="action" value="add">
        <label for="question">Question:</label>
        <input type="text" id="question" name="question" required><br>
        <label for="answer">Answer:</label>
        <textarea id="answer" name="answer" required></textarea><br>
        <input type="submit" value="Add FAQ">
    </form>

    <?php if ($successMessage): ?>
        <p class="success-message"><?php echo $successMessage; ?></p>
    <?php endif; ?>

    <?php if ($errorMessage): ?>
        <p class="error-message"><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <!-- Display FAQs -->
    <table>
        <tr>
            <th>Question</th>
            <th>Answer</th>
            <th>Action</th>
        </tr>
        <?php foreach ($faqs as $faq): ?>
            <tr>
                <td><?php echo $faq['question']; ?></td>
                <td><?php echo $faq['answer']; ?></td>
                <td>
                    <button onclick="showEditPopup(<?php echo $faq['id']; ?>, '<?php echo addslashes($faq['question']); ?>', '<?php echo addslashes($faq['answer']); ?>')">Edit</button>
                    <a href="?action=delete&id=<?php echo $faq['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Edit Popup -->
    <div id="edit-popup" class="edit-popup">
        <h2>Edit FAQ</h2>
        <form action="" method="post">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id">
            <label for="edit-question">Question:</label>
            <input id="edit-question" type="text" name="question">
            <label for="edit-answer">Answer:</label>
            <textarea id="edit-answer" name="answer"></textarea>
            <button type="submit">Update</button>
            <button type="button" onclick="closeEditPopup()">Cancel</button>
        </form>
    </div>
</body>
<?php include ('footer.php'); ?>
</html>
