<?php
// class Demo
// {
//     private $attr_1;
//     public function setValue($value)
//     {
//         $this->attr_1 = $value;
//     }
//     public function getValue()
//     {
//         return $this->attr_1;
//     }
// }
// $a = new Demo;
// $a->setValue(20);
// echo $a->getValue();

class Rectangle
{
    private $width;
    private $height;
    public function setValue($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getPerimeter()
    {
        return 2 * ($this->width + $this->height);
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
}
$a = new Rectangle;
$a->setValue(6, 9);

echo $a->getPerimeter();
