<?php

require_once __DIR__ . '/../config/db.php';

class User
{
    // Khởi tạo giá trị mặc định là null
    private static ?PDO $pdo = null;

    private string $email;
    private string $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;

        // Khởi tạo kết nối PDO nếu chưa có
        if (self::$pdo === null) {
            self::$pdo = db::connect();
        }
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function info(): array
    {
        return [
            'email' => $this->getEmail(),
            'password' => $this->getPassword()
        ];
    }
}
