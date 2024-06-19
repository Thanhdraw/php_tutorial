<?php


function check($email, $password): bool
{
    return !(empty($email) || empty($password));
}

function register($email, $password): string
{

    if (!is_email_auth($email)) {
        return "❗Email không hop le. Vui long nhap email khac!";
    }
    $conn = db_connect();
    $sql = "SELECT COUNT(*) FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        return "❗Email này đã được đăng ký.";

    }

    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hash_password);
    try {
        if ($stmt->execute()) {
            return "✅ Đăng ký thành công!";
        } else {
            return "❌ Lỗi: Không thể đăng ký.";
        }
    } catch (PDOException $e) {
        return "Lỗi: " . $e->getMessage();
    }


}
