<?php
// Bài tập 3: Đóng gói

// Xây dựng một lớp BankAccount (Tài khoản ngân hàng) có các phương thức như deposit (gửi tiền), withdraw (rút tiền), và 
// getBalance (lấy số dư). Bảo vệ số dư khỏi việc truy cập trực tiếp từ bên ngoài.

namespace donggoi;


class BankAccount
{
    private string $accountNumber;
    private string $accountHolder;

    private float $balance;

    public function __construct($accountNumber, $accountHolder, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function deposit(float $amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Quý khách nạp tiền thành công";
            echo "Số dư tài khoải hiện tại là: $this->balance";
        } else {
            echo "Lỗi xảy ra khi nạp tiền";
        }
    }

    public function withdraw(float $outMoney)
    {
        $The_remaining_amount = $this->balance - $outMoney;

        if ($outMoney > 0 && $outMoney <= $this->balance) {
            $this->balance -= $outMoney;

            echo "Quý khách đã rút: $outMoney <br>";
            echo "Số dư tài khoản hiện tại là:(  $this->balance)";
        } else {
            echo "Có lỗi xảy ra";
        }
        return $The_remaining_amount;
    }


    public function getBalance()
    {
        echo " <br> Số dư tài khoản của quý khách là: $this->accountNumber <br> $this->accountHolder <br> ";
        echo "$this->balance";
    }
}
$account = new BankAccount("123456", "John Doe", 1000.0);
$account->deposit(500.0); // Gửi thêm tiền
$account->withdraw(200.0); // Rút tiền
$account->getBalance();

?>