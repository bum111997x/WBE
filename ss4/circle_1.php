<?php

class Circle_
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function toString()
    {
        echo "Hinh tron co ban kinh la: $this->radius";
        echo "<br>";
        echo "Hinh tron co mau sac la: $this->color";
        echo "<br>";
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

?>