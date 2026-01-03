<?php
session_start();
include "../db.php";

if(isset($_POST['login'])){
$u=$_POST['username'];
$p=$_POST['password'];

$stmt=$conn->prepare("SELECT password FROM admin WHERE username=?");
$stmt->bind_param("s",$u);
$stmt->execute();
$stmt->bind_result($hash);

if($stmt->fetch() && password_verify($p,$hash)){
$_SESSION['admin']=$u;
header("Location: dashboard.php");
}else{
echo "Invalid Login";
}
}
?>

<form method="post">
<h3>Admin Login</h3>
<input name="username" placeholder="Username"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<button name="login">Login</button>
</form>
