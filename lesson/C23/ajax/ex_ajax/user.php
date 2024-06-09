<?php

$list_users = [
    [
        'name' => 'admin',
        'password' => '123456'
    ],
    [
        'name' => 'admin2',
        'password' => '123456'
    ],
    [
        'name' => 'thanhdang',
        'password' => '213123'
    ],
    [
        'name' => 'jones_does',
        'password' => '234234'
    ]
];
try {
    $json_string = json_encode($list_users, JSON_THROW_ON_ERROR);
    echo $json_string;
} catch (JsonException $e) {
    echo "Error: " . $e->getMessage();
}