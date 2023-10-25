<?php
$data = file_get_contents("birthday.csv");
$eol = "\r\n";
$sep = ",";

$header = strtok($data, $eol);
$keys = explode($sep, $header);
$records = array();
while (($line = strtok($eol)) !== false) {
    $values = explode($sep, $line);
    $records[] = array_combine($keys, $values);
}

if (debug_backtrace()) {
    return $records;
} else {
    header('Content-Type: text/plain; charset=UTF-8');
    header('Cache-Control: no-store');
    var_dump($records);
}
