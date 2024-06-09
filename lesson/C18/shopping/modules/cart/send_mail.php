<?php
require_once __DIR__ . '/../vendor/autoload.php';
$info_product = get_list_buy_Cart();
$info_payment = get_price_quantity_Cart();

// Tạo một thể hiện của lớp PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['checkout'])) {
    if (!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['tel']) && !empty($_POST['note'])) {
        echo "Thanh toan thanh cong";
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $note = $_POST['note'];
        $mail = new PHPMailer(true);

        try {
            // Cài đặt thông số SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';  // Thay thế bằng máy chủ SMTP của bạn
            $mail->SMTPAuth = true;
            $mail->Username = $email; // Thay thế bằng địa chỉ email của bạn
            $mail->Password = 'ThanhDang@scc.com'; // Thay thế bằng mật khẩu email của bạn
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587; // Cổng SMTP

            // Thiết lập thông tin người gửi và người nhận
            $mail->setFrom( $email, $fullname );
            $mail->addAddress('narutothanh28@gmail.com', 'naruto');

            // Thiết lập chủ đề và nội dung của email
            $mail->Subject = $info_payment['total_price'] . "VNĐ";
            $mail->Body = $info_product;

            // Gửi email
            $mail->send();
            echo 'Email đã được gửi thành công.';
        } catch (Exception $e) {
            echo 'Có lỗi xảy ra khi gửi email: ', $mail->ErrorInfo;
        }

    }

}
?>
