<?php

$products = array(

    "1" => array(
        "id" => 1,
        "name" => "iPhone 15 Pro Max",
        "Price" => "31.690.000₫",
        "img" => "https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/305658/s16/iphone-15-pro-max-blue-1-650x650.png",
        "product_code" => "iPhone",
    ),
    "2" => array(
        "id" => 2,
        "name" => "iPhone 14 Pro Max",
        "Price" => "28.690.000₫",
        "img" => "https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/251192/s16/iphone-14-pro-max-purple-1-650x650.png",
        "product_code" => "iPhone",
    ),
    "3" => array(
        "id" => 1,
        "name" => "iPhone 15 Pro Max",
        "Price" => "31.690.000₫",
        "img" => "https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/305658/s16/iphone-15-pro-max-blue-1-650x650.png",
        "product_code" => "iPhone",
    ),
    "4" => array(
        "id" => 2,
        "name" => "iPhone 14 Pro Max",
        "Price" => "28.690.000₫",
        "img" => "https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/251192/s16/iphone-14-pro-max-purple-1-650x650.png",
        "product_code" => "iPhone",
    ),

);



?>


<div id="content">
    <h1>Đây là trang product</h1>
</div>

<div class="card-list">
    <?php foreach ($products as $item): ?>
        <div class="card-item">
            <div class="card-img">
                <img src=<?php echo $item["img"] ?> alt="Avatar">
            </div>
            <div class="container">
                <h4><b>
                        <?php echo $item["name"] ?>
                    </b></h4>
                <p>
                    <?php echo $item["Price"] ?>
                    <strike>34.690.000₫</strike>
                    -8%
                </p>
            </div>
        </div>
    <?php endforeach ?>
</div>