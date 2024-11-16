<?php

class ParentClass
{

    protected string $lastname;


    public function __construct()
    {
        $this->lastname = 'Đặng';
    }

    public function show():void
    {
        echo 'Ho là ' . $this->lastname;
    }
    public function getLastname():string
    {
        return $this->lastname;
    }
}

class ChildClass extends ParentClass
{
    private string $name;

    public function __construct($name){
        parent::__construct();
        $this->name = $name;

    }
    public function showChild():void
    {
        echo 'Xin chào ' . $this->name . ' ' . $this->lastname;
    }
}


$child = new ChildClass('Quốc Thành');
echo '<br>';
echo $child->getLastname();
$child->showChild();