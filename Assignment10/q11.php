<?php
$img = imagecreate(200,200);
for($i=0;$i<200;$i++){
 $c = imagecolorallocate($img,$i,$i,255);
 imageline($img,$i,0,$i,200,$c);
}
header("Content-type:image/png");
imagepng($img);
imagedestroy($img);
?>

