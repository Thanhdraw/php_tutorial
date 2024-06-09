<?php
$info_payment = get_price_quantity_Cart();
$info_product = get_list_buy_Cart();

?>


<div id="main-content-wp" class="checkout-page ">
    <div class="wp-inner clearfix">
        <div id="sidebar" class="fl-left">
            <div id="main-menu-wp">
                <ul class="list-item">
                    <li class="active">
                        <a href="?page=home" title="Trang chủ">Trang chủ</a>
                    </li>
                    <li>
                        <a href="?page=detail_news" title="Giới thiệu">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Laptop</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Điện thoại</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Máy tính bảng</a>
                    </li>
                    <li>
                        <a href="?page=detail_news" title="Liên hệ">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="content" class="fl-right">
            <div class="section" id="checkout-wp">
                <div class="section-head">
                    <h3 class="section-title">Thanh toán</h3>
                </div>
                <div class="section-detail">
                    <div class="wrap clearfix">
                        <form method="POST" action="?mod=cart&action=send_mail">
                            <div id="custom-info-wp" class="fl-left">
                                <h3 class="title">Thông tin khách hàng</h3>
                                <div class="detail">
                                    <div class="field-wp">
                                        <label>Họ tên</label>
                                        <input type="text" name="fullname" id="fullname">
                                    </div>
                                    <div class="field-wp">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email">
                                    </div>
                                    <div class="field-wp">
                                        <label>Địa chỉ nhận hàng</label>
                                        <input type="text" name="address" id="address">
                                    </div>
                                    <div class="field-wp">
                                        <label>Số điện thoại</label>
                                        <input type="tel" name="tel" id="tel">
                                    </div>
                                    <div class="field-full-wp">
                                        <label>Ghi chú</label>
                                        <textarea name="note"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div id="order-review-wp" class="fl-right">
                                <h3 class="title">Thông tin đơn hàng</h3>
                                <?php if (!empty($info_product)) : ?>

                                <?php foreach ($info_product

                                as $item): ?>
                                <div class="detail">
                                    <table class="shop-table">
                                        <thead>
                                        <tr>
                                            <td>Sản phẩm(<?php echo $item['product_code']; ?>)</td>
                                            <td>Tổng</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="cart-item">
                                            <td class="product-name" name="product_name" ><?php echo $item['product_name']; ?><strong
                                                        class="product-quantity">x<?php echo $item['quantity']; ?></strong>
                                            </td>
                                            <td class="product-total"><?php echo number_format($item['price'], 0, ',', '.') . "VNĐ"; ?></td>
                                        </tr>

                                        </tbody>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                        <tfoot>
                                        <tr class="order-total">

                                            <td>Tổng đơn hàng:</td>
                                            <?php if (!empty($info_payment)) : ?>
                                                <td>
                                                    <strong class="total-price"><?php echo $info_payment['total_price'] . "VNĐ"; ?></strong>
                                                </td>

                                            <?php endif; ?>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <div id="payment-checkout-wp">
                                        <ul id="payment_methods">
                                            <li>
                                                <input type="radio" checked="checked" id="direct-payment"
                                                       name="payment-method" value="direct-payment">
                                                <label for="direct-payment">Thanh toán tại cửa hàng</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="payment-home" name="payment-method"
                                                       value="payment-home">
                                                <label for="payment-home">Thanh toán tại nhà</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="place-order-wp clearfix">
                                        <button type="submit" value="checkout" name="checkout">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>