<?php

$id = !empty($_GET['id']) ? $_GET['id'] : '';

add_cart($id);


?>

<form action="?mod=cart&action=update" method="post">
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
                        <?php if (!empty($_SESSION['cart']['buy']) && $_SESSION['cart']['buy'] !== '0') : ?>
                            <?php foreach ($_SESSION['cart']['buy'] as $key => $value) : ?>
                                <tbody>
                                <tr>

                                    <td><?php echo $value['id']; ?></td>
                                    <td>
                                        <a href="" title="" class="thumb">
                                            <img src="<?php echo $value['image']; ?>" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" title="" class="name-product"><?php echo $value['name']; ?></a>
                                    </td>
                                    <td><?php echo number_format($value['price'], 0, '', '.') . " VNĐ" ?></td>
                                    <td>
                                        <input type="number" id="quantity" min="1"
                                               name="quantity[<?php echo $value['id']; ?>]"
                                               value="<?php echo $value['quantity']; ?>"
                                               class="num-order"
                                               data-id="<?php echo $value['id']; ?>">

                                    </td>
                                    <td><?php echo number_format($value['total'], 0, '', '.') . " VNĐ" ?></td>
                                    <td>
                                        <a href="" title="" data-id="<?php echo $value['id']; ?>" class="del-product"><i
                                                    class="fa fa-trash-o"></i></a>
                                    </td>

                                </tr>
                                </tbody>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <tfoot>
                        <?php if (!empty($_SESSION['cart']['info'])): ?>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix" style="display: block !important margin: auto">
                                        <p id="total-price" class="fl-right">Tổng giá:
                                            <span><?php echo number_format($_SESSION['cart']['info']['total'], 0, '', '.') . " VNĐ" ?></span>
                                        </p>
                                        <p id="total-price" class="fl-right">Số lượng:
                                            <span><?php echo $_SESSION['cart']['info']['num_order'] . "||" . "&nbsp"; ?></span>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        <?php endif ?>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <div class="fl-right">
                                        <input type="submit" name="btn_update_cart" title="" value="Cập nhật giỏ hàng"
                                               id="update-cart"></input>
                                        <a href="?page=checkout" title="" id="checkout-cart">Thanh toán</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="section" id="action-cart-wp">
                <div class="section-detail">
                    <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng
                        <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                    <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br/>
                    <a href="" title="" id="delete-cart">Xóa giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    $(document).ready(function () {
        $("input").on("change", function () {
            $(this).each(function () {
                var id = $(this).data('id');
                var value = $(this).val();
                console.log(id, value);
                $.ajax({
                    url: "?mod=cart&action=update",
                    method: "POST",
                    dataType: "text",
                    data: {
                        quantity:{
                            [id]: value
                        }
                    },
                    success: function (data) {
                        console.log(data);
                        location.reload();
                    },
                    error: function (xhr, status, error) {
                        console.log(error);
                    }
                })
            })
        })
    });
</script>

