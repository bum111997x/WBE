<?php

include_once "circle_1.php";

class Cylinder_ extends Circle_
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculateVolum()
    {
        return $this->height * pi() * pow($this->radius, 2);
    }

    public function toString()
    {
        echo "Hinh tru co ban kinh la: $this->radius";
        echo "<br>";
        echo "Hinh tru co mau sac la: $this->color";
        echo "<br>";
        echo "Hinh tru co chieu cao la: $this->height";
    }
}

?>