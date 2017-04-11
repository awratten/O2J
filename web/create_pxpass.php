<?php

$Width = 64;
$Height = 64;

$Image = imagecreatetruecolor($Width, $Height);
$stamp = imagecreatefrompng('img/lock.png');

$marge_right = 0;
$marge_bottom = 0;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

for ($Row = 1; $Row <= $Height; $Row++) {
    for ($Column = 1; $Column <= $Width; $Column++) {
        $Red = mt_rand(0, 255);
        $Green = mt_rand(0, 255);
        $Blue = mt_rand(0, 255);
        $Colour = imagecolorallocate($Image, $Red, $Green, $Blue);
        ImageSetPixel($Image, $Column - 1, $Row - 1, $Colour);
    }
}

ImageCopy($Image, $stamp, imagesx($Image) - $sx - $marge_right, imagesy($Image) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

header('Content-type: image/png');
imagepng($Image);
