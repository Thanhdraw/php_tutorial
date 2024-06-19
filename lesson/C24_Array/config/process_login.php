<?php


function login($email, $password): string
{

    $conn = db_connect();
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    try {
        $stmt->execute();
        $user = $stmt->fetch();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                return "✅ Đăng nhập thanh cong";
            } else {
                return "❗Mat khau khong chinh xac";
            }
        }

    } catch (PDOException $e) {
        return "Lỗi: " . $e->getMessage();
    }
    return "❌ Tai khoan khong ton tai";


}