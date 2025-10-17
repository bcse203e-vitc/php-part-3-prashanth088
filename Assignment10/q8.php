<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$src = imagecreatefromjpeg("sample.jpg");
$new = imagescale($src, 200); 

header("Content-Type: image/jpeg");
imagejpeg($new);
imagedestroy($src);
imagedestroy($new);
?>
