<?php
$get_all_products = get_all_products();
$macbook = get_product_by_name("Macbook");
$iPhone = get_product_by_name("iPhone");
$iPad = get_product_by_name("iPad");
?>

<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $macbook[0]->ProductName; ?></h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (!empty($macbook)) : ?>
                            <?php foreach ($macbook as $product) : ?>
                                <li>
                                    <a href="?mod=home&action=detail&id=<?php echo $product->ProductCode; ?>" title=""
                                       class="thumb">
                                        <img src="<?php echo $product->ImageURL; ?>" alt="">
                                    </a>
                                    <a href="?mod=home&action=detail&id=<?php echo $product->ProductCode; ?>"
                                       title=""
                                       class="title"><?php echo $product->ProductName; ?></a>
                                    <p class="price"><?php echo number_format($product->Price) . " VNĐ"; ?></p>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $iPhone[0]->ProductName; ?></h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (!empty($iPhone)) : ?>
                            <?php foreach ($iPhone as $product) : ?>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="<?php echo $product->ImageURL; ?>" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $iPad[0]->ProductName; ?></h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (!empty($iPad)) : ?>
                            <?php foreach ($iPad as $product) : ?>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="<?php echo $product->ImageURL; ?>" alt="">
                                    </a>
                                    <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                    <p class="price">5.000.000đ</p>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>