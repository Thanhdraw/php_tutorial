<?php


$quantity = !empty($_POST['quantity']) ? $_POST['quantity'] : 0;
$Price = !empty($_POST['Price']) ? $_POST['Price'] : 10;
$total = $quantity * $Price;

$result = [
    'Price' => $Price,
    'quantity' => $quantity,
    'total' => $total
];

try {
    echo json_encode($result, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
    echo $e->getMessage();
    exit;
}

?>

