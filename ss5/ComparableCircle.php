<?php

include_once ('Comparable.php');
include_once ('Circle.php');

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }
    public function compareTo($circleTwo)
    {
        $circleTwoRadius = $circleTwo->getRadius();
        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        } elseif ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}