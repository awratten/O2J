<?php

$Width = 64;
$Height = 64;

$Image = ImageCreateTrueColor($Width, $Height);
$Stamp = ImageCreateFromPNG('img/lock.png');

$marge_right = 0;
$marge_bottom = 0;
$sx = ImageSX($Stamp);
$sy = ImageSY($Stamp);

for ($Row = 1; $Row <= $Height; $Row++) {
    for ($Column = 1; $Column <= $Width; $Column++) {
        $Red = mt_rand(0, 255);
        $Green = mt_rand(0, 255);
        $Blue = mt_rand(0, 255);
        $Colour = imagecolorallocate($Image, $Red, $Green, $Blue);
        ImageSetPixel($Image, $Column - 1, $Row - 1, $Colour);
    }
}

ImageFilter($Image, IMG_FILTER_GAUSSIAN_BLUR);

ImageCopy($Image, $Stamp, imagesx($Image) - $sx - $marge_right, imagesy($Image) - $sy - $marge_bottom, 0, 0, imagesx($Stamp), imagesy($Stamp));

//Header('Content-type: image/png');
//Header("Content-Disposition: attachment; filename=pxpass.png");

$filename = "img/pxpass.png";

ImagePNG($Image, $filename);
//ImagePNG($Image);

echo hash_file('md5', $filename);
