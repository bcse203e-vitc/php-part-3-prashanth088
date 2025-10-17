<?php
if (isset($_COOKIE['visits'])) {
    $count = $_COOKIE['visits'] + 1;
    $message = "Welcome back! You have visited this page $count times.";
} else {
    $count = 1;
    $message = "Welcome! This is your first visit.";
}

setcookie('visits', $count, time() + 3600);
echo $message;
?>
