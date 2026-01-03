<?php
include "../db.php";
if(isset($_POST['add'])){
$k=$_POST['keyword'];
$r=$_POST['reply'];
$conn->query("INSERT INTO chatbot_responses VALUES(NULL,'$k','$r')");
header("Location: dashboard.php");
}
?>

<form method="post">
Keyword:<input name="keyword"><br><br>
Reply:<textarea name="reply"></textarea><br><br>
<button name="add">Add</button>
</form>
