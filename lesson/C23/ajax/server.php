<?php


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data_txt = $_POST["data_txt"];
    echo $data_txt;
    $file = 'server.txt';
    $current = file_get_contents($file);
    $current .= $data_txt . "\n";
    $date = date('Y-m-d H:i:s');
    $current .= $date . "\n";
    file_put_contents($file, $current);
}

echo "Hello World";




