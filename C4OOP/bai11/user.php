<?php

class User
{
    protected string $name;
    protected string $email;

    public int $role;

    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;

    }
    public function isAdmin()
    {
        if (($this->role) == 1) {
            echo "Role: Là admin";
        } elseif (($this->role) == 2) {
            echo "Role: người bình thường";
        }
    }

    public function getInfo()
    {
        echo "Tên: $this->name" . "<br>";
        echo "Email: $this->email" . "<br>";
        $this->isAdmin();


    }
}


$user = new User("Thành", "dangquocthanh@gmail.com", 1);
$user2 = new User("Nam", "dangquocthanh", 2);

echo $user->getInfo();

?>