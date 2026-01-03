<?php
include "../db.php";
$res=$conn->query("SELECT * FROM chat_history ORDER BY chat_time DESC");
while($r=$res->fetch_assoc()){
echo "<b>User:</b>{$r['user_msg']}<br>
<b>Bot:</b>{$r['bot_reply']}<hr>";
}
?>
