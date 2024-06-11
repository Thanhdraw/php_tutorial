<?php
function login($email, $password): array
{
    try {
        $conn = db_connect();
        $sql = "SELECT * FROM users WHERE email = :email ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return [
                'id' => $user['id'],
                'email' => $user['email'],
                'user' => $user,
                'message' => '✅ Đăng nhập thành công',
                'error' => false
            ];
        }
        return [
            'error' => true,
            'message' => '❌ Tài khoản hoặc mật khẩu không đúng'
        ];


    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }

}


