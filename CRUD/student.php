<?php

class Student extends User{
    public $group;

    public function __construct($name, $phone, $address, $role, $group)
    {
        parent::__construct($name, $phone, $address, $role);
        $this->group = $group;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }
}

?>