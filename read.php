<?php
$filename = "password.txt";

$handle = fopen($filename, "r");

$usernames = [];
$passwords = [];

$key = [5, -14, 31, -9, 3];

while (($line = fgets($handle)) !== false) {
    $line = trim($line);
    $decodedLine = '';

    for ($i = 0; $i < strlen($line); $i += 5) {
        $chunk = substr($line, $i, 5);

        for ($j = 0; $j < strlen($chunk); $j++) {
            $decodedChar = chr(ord($chunk[$j]) - $key[$j]);
            $decodedLine .= $decodedChar;
        }
    }

    $parts = explode('*', $decodedLine);
    $usernames[] = $parts[0];
    $passwords[] = $parts[1];
}
fclose($handle);

//print_r($usernames);
//print_r($passwords);

?>