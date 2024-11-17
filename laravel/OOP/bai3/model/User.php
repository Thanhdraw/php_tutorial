<?php

require_once __DIR__ . '/../config/db.php';

class User
{

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


//    chuôỗi truy vấn trong php sql ???
    public function get($table, $fields = [], $where = []): false|array
    {
        $fields = !empty($fields) ? implode(", ", $fields) : "*";
        $whereClause = "";
        $params = [];

        if (!empty($where)) {
            $whereClause = " WHERE ";
            $conditions = [];
            foreach ($where as $key => $value) {
                $conditions[] = "$key = :$key";
                $params[":$key"] = $value;
            }
            $whereClause .= implode(" AND ", $conditions);
        }

        $sql = "SELECT $fields FROM $table $whereClause";
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    //create table by php sql
    public function createTable($table): bool
    {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS $table (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(50) NOT NULL,
            password VARCHAR(50) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

            // Thực hiện truy vấn
            self::$pdo->exec($sql);

            // Thông báo khi tạo thành công
//            echo "Table '{$table}' created successfully<br>";
            return true;

        } catch (PDOException $e) {
            die('❌ Error creating table: ' . $e->getMessage());
        }
    }


    public function insert($table): bool
    {
        $data = $this->info();
        try {
            $sql = "INSERT INTO $table (email, password) VALUES (:email, :password)";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':password', $data['password']);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            die('❌ Connection failed: ' . $e->getMessage());
        }
    }


    public function getUserByEmail($table, $email)
    {
        try {
            $sql = "SELECT * FROM $table WHERE email = :email";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
        } catch (PDOException $e) {
            die('❌ Error checking login: ' . $e->getMessage());
        }
    }

    public function isEmailExists($table, $email): bool
    {
        $user = $this->getUserByEmail($table, $email);
        if ($user) {
            return true;
        }
        return false;
    }


}


//$user = new User('test@example.com', 'password123');
//
//$user->createTable('users');
//$user->insert('users');