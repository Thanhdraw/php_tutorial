<?php

$id_cat = !empty($_GET['id']) ? $_GET['id'] : 0;

$item_cat = get_cat_by_id($id_cat);


$item_product = get_list_product_by_cat($id_cat);

?>


<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo "Danh Muc - " . $item_cat['category_name']; ?></h3>
                    <p class="section-desc">Có <?php echo count($item_product); ?> sản phẩm trong mục này</p>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (!empty($item_product)): ?>
                            <?php foreach ($item_product as $item): ?>
                                <li>
                                    <a href="<?php echo $item['url']; ?>"
                                       title=""
                                       class="thumb">
                                        <img src="<?php echo $item['image']; ?>" alt="">
                                    </a>
                                    <a href="?page=detail_product" title=""
                                       class="title"><?php echo $item['product_name']; ?></a>
                                    <p class="price"><?php echo number_format($item['price'] , 0, ',', '.') . " VNĐ"; ?></p>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li>Không có sản phẩm thuộc danh mục này.</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <ul id="list-pagenavi">
                        <li class="active">
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                    <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>