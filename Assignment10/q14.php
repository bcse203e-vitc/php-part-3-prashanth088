<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $to="example@domain.com";
    $sub=$_POST['subject'];
    $msg=$_POST['message'];
    $headers="From: ".$_POST['email'];
    mail($to,$sub,$msg,$headers);
    echo "Mail Sent!";
}
?>
<!DOCTYPE html>
<html>
<head><title>Contact</title></head>
<body>
<form method="post">
<input type="email" name="email" placeholder="Your Email" required><br><br>
<input type="text" name="subject" placeholder="Subject" required><br><br>
<textarea name="message" placeholder="Message" required></textarea><br><br>
<input type="submit" value="Send">
</form>
</body>
</html>

