<?php
include "db.php";

$msg = strtolower($_POST['message'] ?? '');
$response = "Sorry, I did not understand your question.";

$result = $conn->query("SELECT keyword, reply FROM chatbot_responses");

while ($row = $result->fetch_assoc()) {
    if (strpos($msg, strtolower($row['keyword'])) !== false) {
        $response = $row['reply'];
        break;
    }
}

echo $response;
?>