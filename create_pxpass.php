<?php

$Width = 64;
$Height = 64;

$Image = imagecreatetruecolor($Width, $Height);
for ($Row = 1; $Row <= $Height; $Row++) {
    for ($Column = 1; $Column <= $Width; $Column++) {
        $Red = mt_rand(0, 255);
        $Green = mt_rand(0, 255);
        $Blue = mt_rand(0, 255);
        $Colour = imagecolorallocate($Image, $Red, $Green, $Blue);
        imagesetpixel($Image, $Column - 1, $Row - 1, $Colour);
    }
}

header('Content-type: image/png');
imagepng($Image);
