<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $_SESSION['name'] = $_POST['name'];
}
if(!isset($_SESSION['name'])) $_SESSION['name'] = "Student";
?>
<!DOCTYPE html>
<html>
<head><title>Greeting</title></head>
<body>
<form method="post">
<input type="text" name="name" placeholder="Enter name" required>
<input type="submit" value="Save">
</form>
<h2>Hello, <?php echo $_SESSION['name']; ?>! Welcome to the PHP lab.</h2>
</body>
</html>

