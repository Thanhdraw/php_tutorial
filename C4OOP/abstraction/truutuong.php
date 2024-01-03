<?php

namespace truutuong;

// Bài tập 4: Trừu tượng hóa

// Xây dựng một lớp trừu tượng Vehicle (Phương tiện giao thông) có các phương thức như start (bắt đầu), 
// stop (dừng lại), và fuel (đổ nhiên liệu). Tạo các lớp con như Car, Motorcycle, và Bus.

abstract class Vehicle
{
    protected string $nameCar;
    protected string $startAdress;
    protected string $stopAdrress;
    protected float $fuel;




    public function __construct($nameCar, $startAdress, $stopAdrress, $fuel)
    {
        $this->nameCar = $nameCar;
        $this->startAdress = $startAdress;
        $this->stopAdrress = $stopAdrress;
        $this->fuel = $fuel;

    }
    abstract function start();
    abstract function stop();

    abstract function fuel();


}

class Car extends Vehicle
{

    public function start()
    {
        echo "Xe ô tô $this->nameCar đã bắt đầu chạy từ $this->startAdress." . "<br>";
    }

    public function stop()
    {
        echo "Xe ô tô $this->nameCar đã dừng lại tại $this->stopAdrress." . "<br>";
    }
    public function fuel()
    {
        echo "Xe ô tô $this->nameCar đã đổ nhiên liệu. Số liệu hiện tại: $this->fuel lít." . "<br>";
    }
}
$car = new Car("Toyota", "A", "B", 50.0);
$car->start(); // Bắt đầu chạy từ A
$car->fuel();  // Đổ nhiên liệu, hiển thị số liệu hiện tại
$car->stop();  // Dừng lại tại B

?>