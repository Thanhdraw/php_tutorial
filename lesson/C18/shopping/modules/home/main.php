<?php

$iphone = get_cat_by_id(1);
$macbook = get_cat_by_id(2);
$ipad = get_cat_by_id(3);
$list_iphone = get_list_product_by_cat($iphone['id']);
$list_macbook = get_list_product_by_cat($macbook['id']);
$list_ipad = get_list_product_by_cat($ipad['id']);

?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">iPhone </h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (!empty($list_iphone)): ?>
                            <?php foreach ($list_iphone as $item): ?>
                                <li>
                                    <a href="?page=product&action=detail<?php echo $item['product_code']; ?>" title=""
                                       class="thumb">
                                        <img src="<?php echo $item['image']; ?>" alt="">
                                    </a>
                                    <a href="?page=detail_product" title=""
                                       class="title"><?php echo $item['product_name']; ?></a>
                                    <p class="price"><?php echo number_format($item['price'] * 1000000, 0, ',', '.') . " VNĐ"; ?></p>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li>Không có sản phẩm thuộc danh mục này.</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">Macboook</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (!empty($list_macbook)): ?>
                            <?php foreach ($list_macbook as $item): ?>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="<?php echo $item['image']; ?>" alt="">
                                    </a>
                                    <a href="?page=detail_product" title=""
                                       class="title"><?php echo $item['product_name']; ?></a>
                                    <p class="price"><?php echo number_format($item['price'] * 1000000, 0, ',', '.') . " VNĐ"; ?></p>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li>Không có sản phẩm thuộc danh mục này.</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">Máy tính bảng</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (!empty($list_ipad)): ?>
                            <?php foreach ($list_ipad as $item): ?>
                                <li>
                                    <a href="?page=detail_product" title="" class="thumb">
                                        <img src="<?php echo $item['image']; ?>" alt="">
                                    </a>
                                    <a href="?page=detail_product" title=""
                                       class="title"><?php echo $item['product_name']; ?></a>
                                    <p class="price"><?php echo number_format($item['price'] * 1000000, 0, ',', '.') . " VNĐ"; ?></p>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li>Không có sản phẩm thuộc danh mục này.</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>