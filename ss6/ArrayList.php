<?php


class ArrayList
{
    public $arrayList;

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("Error");
        }
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);
            $this->arrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }
}