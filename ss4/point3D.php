<?php

class Point3D extends Point2D
{
    public $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getXYZ()
    {
        return [$this->x,$this->y,$this->z];
    }

    public function setXYZ($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function toString()
    {
        echo "Toa do x, y, z cua diem 3D la : ($this->x,$this->y,$this->z)";
    }
}

?>