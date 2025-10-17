<!DOCTYPE html>
<html>
<head>
    <title>Simple CAPTCHA Verification</title>
</head>
<body>
    <h2>Enter CAPTCHA</h2>
    <form method="post" action="verify.php">
        <p><img src="captcha.php" alt="CAPTCHA Image"></p>
        <p>Enter the number shown above: <input type="text" name="captcha_input" required></p>
        <input type="submit" value="Verify">
    </form>
</body>
</html>
