<?php


function regex($email, $password): array
{
    $error = true;
    $message = '';
    if (empty($email) || empty($password)) {
        $message = "Vui lòng nhập đầy đủ";
        $error = false;
        return ['error' => $error, 'message' => $message];
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Email không đúng định dạng";
        $error = false;
        return ['error' => $error, 'message' => $message];
    }
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
        $message = "Mật khẩu phải chứa ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường và số";
        $error = false;
        return ['error' => $error, 'message' => $message];
    }
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    if ($error == true) {
        return [
            'email' => $email,
            'password' => $hash_password,
            'error' => $error
        ];
    }
    return ['error' => $error, 'message' => $message];
}


function register($email, $password): bool
{
    try {
        $conn = db_connect();
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        // Bind the parameters
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        // Execute the statement
        $stmt->execute();
        if (!$stmt->execute()) {
            echo "Lỗi khi thực hiện truy vấn: " . $stmt->errorInfo()[2];
            // Hoặc có thể ghi lỗi vào tệp log
            error_log("Lỗi khi thực hiện truy vấn: " . $stmt->errorInfo()[2]);
        }

        // Check if the execution was successful
        if ($stmt->rowCount() > 0) {
            return true;
        }

        return false;
    } catch (PDOException $e) {
        // Log the error
        error_log($e->getMessage());
        // Return false to indicate failure
        return false;
    }
}

