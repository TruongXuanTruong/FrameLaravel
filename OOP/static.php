<?php
class Rectangle
{

    public static $height;
    public static $width;

    public static function getPerimeter()
    {
        return 2 * (self::$height + self::$width);
    }

    public static function getArea()
    {
        return (self::$height * self::$width);
    }
}
class Demo
{
    function __construct()
    {
        Rectangle::$height = 10;
        Rectangle::$width = 12;

        echo Rectangle::getPerimeter();
    }
}
new Demo;
