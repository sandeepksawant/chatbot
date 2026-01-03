<?php
include "../db.php";
$id=$_GET['id'];
$conn->query("DELETE FROM chatbot_responses WHERE id=$id");
header("Location: dashboard.php");
