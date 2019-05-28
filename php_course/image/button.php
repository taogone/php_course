<?php
header("Content-type:image/png");
$string = $_GET['text'];
$im     = imagecreatefrompng('button.png');
$color = imagecolorallocate($im, 60, 87, 156);
$px     = (imagesx($im) - (7.5 * strlen($string))) / 2;
imagestring($im, 4, $px, 9, $string, $color);
imagepng($im);
imagedestroy($im);
?>