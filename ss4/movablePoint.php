<?php

class MovablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return [$this->xSpeed, $this->ySpeed];
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function toString()
    {
        echo "Toa do x, y cua diem 2D la : ($this->x,$this->y)";
        echo "<br>";
        echo "Toc do di chuyen cua diem 2D la: ($this->xSpeed,$this->ySpeed)";
        echo "<br>";
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
    }
}

?>