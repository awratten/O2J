<?php

header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=O2J_Hashcat.bat");

$hash = filter_input(INPUT_GET, 'hash', FILTER_SANITIZE_STRING);

if (strpos($hash, 'oldoffice') !== false) {
    echo "hashcat64.exe -a 3 -m 9700 -o found_O2J.txt $hash o2j.hcmask";
}
if (strpos($hash, '2007') !== false) {
    echo "hashcat64.exe -a 3 -m 9400 -o found_O2J.txt $hash o2j.hcmask";
}
if (strpos($hash, '2010') !== false) {
    echo "hashcat64.exe -a 3 -m 9500 -o found_O2J.txt $hash o2j.hcmask";
}
if (strpos($hash, '2013') !== false) {
    echo "hashcat64.exe -a 3 -m 9600 -o found_O2J.txt $hash o2j.hcmask";
}

exit;
