<?php
class Demo
{
    public $hinh_1;
    private $hinh_2;
    protected $hinh_3 = 60;

    public function show()
    {
        return $this->hinh_1;
    }
}
class User extends Demo
{
    function __construct()
    {
        echo $this->hinh_3;
    }
}
$u = new User;
