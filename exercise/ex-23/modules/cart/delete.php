<?php

header('Content-Type: application/json'); // Set header to JSON

$id = !empty($_POST['id']) ? $_POST['id'] : '';

delete_cart($id);

if (delete_cart($id)) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}
