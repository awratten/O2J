<?php

$date = (new \DateTime())->format('Y-m-d H:i:s');   //for mysql

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

function GetHash_doc($upath) {
    $output = "";
    exec("python /var/www/html/office2john.py ".$upath." 2>&1", $output);
    $hash = implode('', $output);
    echo (string) $hash;
}

GetHash_doc($uploadfile);
echo $filename;
echo $uploadfile;

