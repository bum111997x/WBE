<?php


class Birthday
{
    private $birthday;

    public function __construct($birthday)
    {
        $this->birthday = $birthday;
    }

    public function calculateAge()
    {
        return (date("Y")-date('Y',strtotime($this->birthday)));
    }
}