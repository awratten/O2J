<?php

$date = (new \DateTime())->format('Y-m-d H:i:s');   //for mysql
$uploaddir = '/var/www/html/O2J/web/uploads/';
$ext_type = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'txt');

function Filter_FileName($fname) {
    $a = preg_replace('/\s+/', '_', $fname);
    $b = (string) $a;
    return $b;
}

$filename = Filter_FileName(basename($_FILES['upload']['name']));
$uploadfile = $uploaddir . $filename;
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ext_type)) {
    header('Location: /index.php?error=' . 'Error: unsupported filetype');
}

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
    //exec("python /var/www/html/O2J/web/lib/office2john.py " . $upath . " 2>&1", $output);
    exec("python /var/www/html/O2J/web/lib/office2john.py " . $upath, $output);
    $hash = implode('', $output);
    return (string) $hash;
}

$hash = GetHash_doc($uploadfile);

if ($hash) {
    
file_put_contents('downloads/hash/raw.txt', $hash . "\r\n", FILE_APPEND);
header('Location: /index.php?hash=' . $hash);

} else {
    
    var_dump($_FILES);
    
}

