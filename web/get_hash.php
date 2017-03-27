<?php

$date = (new \DateTime())->format('Y-m-d H:i:s');
$uploaddir = '/var/www/html/O2J/web/uploads/';

function Filter_FileName($fname) {
    $a = preg_replace('/\s+/', '_', $fname);
    $b = (string) $a;
    return $b;
}

$filename = Filter_FileName(basename($_FILES['upload']['name']));

$uploadfile = $uploaddir . $filename;


if (!is_file($uploadfile)) {
    move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile);
} else {
    $name_split = explode(".", $filename);
    $filename = $name_split[0] . "-" . time() . "." . $name_split[1];
    $newname = $uploaddir . $filename;
    $uploadfile = $newname;
    move_uploaded_file($_FILES['upload']['tmp_name'], $newname);
}

echo $filename;
echo "<br>";
echo $uploaddir;
echo "<br>";
echo $date;
