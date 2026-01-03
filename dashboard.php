<?php
session_start();
if(!isset($_SESSION['admin'])) header("Location: login.php");
include "../db.php";
?>

<h2>Admin Dashboard</h2>
<a href="add.php">Add Q&A</a> |
<a href="history.php">Chat History</a> |
<a href="logout.php">Logout</a>

<table border="1">
<tr><th>Keyword</th><th>Reply</th><th>Delete</th></tr>
<?php
$res=$conn->query("SELECT * FROM chatbot_responses");
while($r=$res->fetch_assoc()){
echo "<tr>
<td>{$r['keyword']}</td>
<td>{$r['reply']}</td>
<td><a href='delete.php?id={$r['id']}'>Delete</a></td>
</tr>";
}
?>
</table>
