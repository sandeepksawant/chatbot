<?php
$conn = new mysqli("localhost", "root", "", "chatbot_db");

if ($conn->connect_error) {
    die("Database connection failed");
}
?>
