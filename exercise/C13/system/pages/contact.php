<?php
if (isset($_POST["btn_submit"])) {
    $user_contact = array();
    if (!empty($_POST["name"])) {
        $user_contact["name"] = $_POST["name"];
    } else {
        echo "khong de trong";
    }
    if (!empty($_POST["email"])) {
        $user_contact["email"] = $_POST["email"];
    }
    if (!empty($_POST["message"])) {
        $user_contact["message"] = $_POST["message"];
    }
    echo "<h2>Thông tin liên hệ:</h2>";
    if (isset($user_contact["name"])) {
        echo "<p><strong>Họ và tên:</strong> " . $user_contact["name"] . "</p>";
    }
    if (isset($user_contact["email"])) {
        echo "<p><strong>Email:</strong> " . $user_contact["email"] . "</p>";
    }
    if (isset($user_contact["message"])) {
        echo "<p><strong>Nội dung:</strong> " . $user_contact["message"] . "</p>";
    }

}

?>



<div class="container">
    <h1>Liên hệ</h1>
    <form action="" method="POST">
        <label for="name">Họ và tên:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Nội dung:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <button name="btn_submit" value="submit" type="submit">Gửi</button>
    </form>
</div>