<?php

$info = pathinfo($uploadfile);
$date = (new \DateTime())->format('Y-m-d H:i:s');

$uploaddir = '/var/www/html/uploads/';
$uploadfile = $uploaddir . basename($_FILES['upload']['name']);

$filename = basename($_FILES['upload']['name']);
$filename = preg_replace('/\s+/', '_', $filename);
$filename = (string)$filename;
$uploadfile = preg_replace('/\s+/', '_', $uploadfile);

if (!is_file($uploadfile)) {
    move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile);
} else {
	$name_split = explode(".", $filename);
	$filename = $name_split[0]."-".time().".".$name_split[1];
	$newname = $uploaddir . $filename;
	$uploadfile = $newname;
	move_uploaded_file($_FILES['upload']['tmp_name'], $newname);
}

$name_split = explode(".", $filename);

exec("python /var/www/html/office2john.py $uploadfile ", $output, $status);

$hash = (string)implode('',$output);

if ($hash == '') {
//header('Location: /index.php?error=1');      // On Error alert
echo "Error Extracting Hash - No hash may be present or file type may be unsupported.";
} else {
    echo $hash;
//header('Location: /index.php?hash='.$hash);      // On Error alert    
}



