<?php
//require "cart/add.php";

//
//if (session_status() === PHP_SESSION_ACTIVE) {
//    if (!empty($_SESSION['cart']['buy'])) {
//
//        $show_product = $_SESSION['cart']['buy'];
//        $show_total_price = $_SESSION['cart']['info'];
//
//    }
//}

$show_product = get_list_buy_Cart();
$show_total_price = get_price_quantity_Cart();



?>

<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <?php if (!empty($show_product)) : ?>
                    <?php foreach ($show_product

                                   as $key => $item) : ?>
                        <table class="table">
                        <thead>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td colspan="2">Thành tiền</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $item['product_code']; ?></td>
                            <td>
                                <a href="" title="" class="thumb">
                                    <img src=<?php echo $item['image']; ?> alt="">
                                </a>
                            </td>
                            <td>
                                <a href="?mod=product&action=detail&id=<?php echo $item['product_code']; ?>" title=""
                                   class="name-product"><?php echo $item['product_name']; ?></a>
                            </td>
                            <td><?php echo number_format($item['price'], 0, ',', '.') . "VNĐ"; ?></td>
                            <td>
                                <input type="text" name="num-order"
                                       value=<?php echo $item['quantity']; ?> class="num-order"></input>
                                <a href="" title="" value="" class="update-cart"><i class="fa fa-refresh"></i></a>
                            </td>
                            <td><?php echo number_format($item['total'], 0, ',', '.') . "VNĐ"; ?></td>
                            <td>
                                <a href="<?php echo $item['url_delete']; ?>" title=""
                                   class="del-product"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                    <tfoot>
                    <tr>

                        <?php if (!empty($show_total_price)) : ?>
                        <td colspan="7">
                            <div class="clearfix">
                                <p id="total-price" class="fl-right">Tổng giá:
                                    <span><?php echo $show_total_price['total_price'] . " VNĐ"; ?></span></p>
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <td colspan="7">
                            <div class="clearfix">
                                <div class="fl-right">
                                    <a href="?mod=cart&action=update" title="" id="update-cart">Cập nhật giỏ hàng</a>
                                    <a href="?page=checkout" title="" id="checkout-cart">Thanh toán</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                    </table>
                <?php else : ?>
                    <p>Không có sản phẩm nào trong giỏ hàng :((</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào
                    <button id="reload-btn">“Cập nhật giỏ hàng”</button>
                    để cập nhật số lượng. Nhập vào số lượng
                    <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.
                </p>
                <?php
                if (!empty($show_product)) {
                    echo '<a href="?mod=home&action=main" title="" id="buy-more">Mua tiếp</a><br/>';
                } else {
                    echo '<a href="?mod=home&action=main" title="" id="buy-more">Quay về trang chủ</a><br/>';
                }
                ?>
                <a onclick="confirmDelete(event)" href="#" title="" id="delete-cart">Xóa giỏ
                    hàng
                </a>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        $('#reload-btn').click(function (event) {
            event.preventDefault();

            $.ajax({
                url: "?mod=cart&action=show", // Lấy URL hiện tại của trang
                type: 'GET',
                success: function (response) {
                    // Load nội dung trang trở lại
                    $('html').html(response);
                }
            });
        });
    });

    function confirmDelete(link) {
        // Hiển thị hộp thoại xác nhận
        var confirmation = confirm("Bạn có chắc chắn muốn xóa giỏ hàng không?");

        // Nếu người dùng xác nhận, thực hiện xóa và vô hiệu hóa liên kết
        if (confirmation) {
            link.onclick = null; // Vô hiệu hóa sự kiện onclick của liên kết
            window.location.href = "?mod=cart&action=delete_all"; // Thực hiện chuyển hướng sau khi xác nhận
            event.preventDefault();
        }
    }
</script>