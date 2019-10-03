<?php

class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        echo "Chieu rong hinh chu nhat la: $this->width, Chieu dai hinh chu nhat la: $this->height";
    }
}

?>

