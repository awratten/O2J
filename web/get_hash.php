<?php
$date = (new \DateTime())->format('Y-m-d H:i:s');
$uploaddir = '/var/www/html/O2J/web/uploads/';

$uploadfile = $uploaddir . basename($_FILES['upload']['name']);