<?php
session_start();
if(!isset($_SESSION['user'])) $_SESSION['user'] = "Guest";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_SESSION['user'];
    $msg = "Feedback from $name: ".$_POST['feedback'];
    mail("admin@vit.ac.in","Student Feedback",$msg,"From: noreply@vit.ac.in");
    echo "Thank you, $name. Feedback sent!";
}
?>
<!DOCTYPE html>
<html>
<head><title>Feedback</title></head>
<body>
<form method="post">
<textarea name="feedback" placeholder="Enter feedback" required></textarea><br><br>
<input type="submit" value="Send Feedback">
</form>
</body>
</html>

