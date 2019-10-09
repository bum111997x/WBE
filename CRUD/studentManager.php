<?php

class StudentManager
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function add($student)
    {
        $studentInfor = [
            'name' => $student->getName(),
            'phone' => $student->getPhone(),
            'address' => $student->getAddress(),
            'role' => $student->getRole(),
            'group' => $student->getGroup()
        ];

        $this->saveDataToFileJson($studentInfor);
    }

    public function readFileJson()
    {
        $dataFile = file_get_contents($this->path);
        return json_decode($dataFile, true);
    }

    public function saveDataToFileJson($data)
    {
        $currentData = $this->readFileJson();
        array_push($currentData, $data);
        $newData = json_encode($currentData);
        file_put_contents($this->path, $newData);
    }
}

?>