<?php



$snt = array(1, 3, 5, 7, 9);


$list_user = array(
    1 => array(
        "id" => 1,
        "fullname" => "DangQuocThanh",
        "email" => "dangquocthanh2812@gmail.com"
    ),
    2 => array(
        "id" => 2,
        "fullname" => "Nguyen Van A",
        "email" => "dangquocthanh2812@gmail.com"
    ),
    3 => array(
        "id" => 3,
        "fullname" => "Nguyen van B",
        "email" => "dangquocthanh2812@gmail.com"
    ),
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <?php foreach ($snt as $value): ?>
            <li>
                <?php echo $value; ?>
            </li>
        <?php endforeach; ?>
    </table>
</body>

</html>