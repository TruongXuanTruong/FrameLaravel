<?php
class Rectangle
{

    public $height;
    public $width;
    public function __construct()
    {
        $this->width = 12;
        $this->height = 30;
    }

    public function getPerimeter()
    {
        return (2 * ($this->height + $this->width));
    }

    public function getArea()
    {
        return ($this->height * $this->width);
    }
}
$a = new Rectangle;
echo $a->getPerimeter();
echo $a->getArea();
