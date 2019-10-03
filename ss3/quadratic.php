<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    function __construct($a, $b, $c)
    {
        $this->a = (double)$a;
        $this->b = (double)$b;
        $this->c = (double)$c;
    }

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    function getC()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        return $delta = $this->b * $this->b - 4 * $this->a * $this->c;
    }

    function getRoot1()
    {
        return $r1 = (-$this->b + sqrt($this->b * $this->b - 4 * $this->a * $this->c)) / (2 * $this->a);
    }

    function getRoot2()
    {
        return $r2 = (-$this->b - sqrt($this->b * $this->b - 4 * $this->a * $this->c)) / (2 * $this->a);
    }
}

?>