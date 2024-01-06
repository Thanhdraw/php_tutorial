<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getDiscriminant()
    {
        $arr = [];
        $delta = pow($this->b, 2) - 4 * ($this->a * $this->c);

        if ($delta < 0) {
            echo "Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            echo "Phường trình có nghiệm kép x1=x2= :" . -$this->b / (2 * $this->a);
        } else {
            $x1 = (-$this->b + sqrt($delta)) / (2 * $this->a);
            $x2 = (-$this->b - sqrt($delta)) / (2 * $this->a);
            array_push($arr, $x1);
            array_push($arr, $x2);
            echo "x1= $arr[0]" . "<br>";
            echo "x2= $arr[1]" . "<br>";

        }
    }
}

?>