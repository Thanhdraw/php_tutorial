<?php



$Products = array(
    array(
        "id" => 1,
        "Name" => "iPhone 15 Pro Max",
        "img" => "https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/305658/s16/iphone-15-pro-max-gold-1-650x650.png",
        "Capacity" => "256Gb",
        "Price" => "31.990.000₫",
        "time" => "Thứ bảy, 27/1/2024 13:00 (GMT+7)",
    ),
    array(
        "id" => 2,
        "Name" => "iPhone 15 Pro Max",
        "img" => "https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/299033/s16/iphone-15-pro-blue-1-650x650.png",
        "Capacity" => "512Gb",
        "Price" => "31.990.000₫",
        "time" => "Thứ bảy, 27/1/2024 13:00 (GMT+7)",
    ),
);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Viết</title>
</head>

<body>
    <div class="container-news">
        <?php if (empty($Products)) {
            echo "Không có dữ liệu !";
        } else {
            foreach ($Products as $key => $items): ?>

                <strong>
                    <?php echo $items["time"] ?>

                </strong>
                <h1>
                    <?php echo $items["Name"] ?>
                </h1>
                <p>
                    <?php echo $items["Capacity"] ?>
                </p>
                <img src=<?php echo ($items["img"]) ?> alt="">
                <h2>
                    <?php echo $items["Price"] ?>
                </h2>
                <br>
            <?php endforeach;
        }
        ?>

    </div>
</body>

</html>