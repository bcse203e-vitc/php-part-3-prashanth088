<?php
session_start();

if ($_POST['captcha_input'] == $_SESSION['captcha']) {
    echo "CAPTCHA verified successfully!";
} else {
    echo "CAPTCHA verification failed. Try again.";
    echo '<br><a href="form.php">Back</a>';
}
?>
