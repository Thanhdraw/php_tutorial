<?php

global $products;
require "models/Data.php";
$cat_id = $_GET["cat_id"];
echo "Đây là trang product với cat_id = " . $cat_id;


?>


<div id="content">
    <h1>Đây là trang product - Dannh Muc <?php echo $cat_id ?> </h1>
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