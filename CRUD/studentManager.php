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

    public function getListStudent()
    {
        $data = $this->readFileJson();
        $studentList = [];
        foreach ($data as $item) {
            $student = new Student($item["name"], $item["phone"], $item["address"], $item["role"], $item["group"]);
            array_push($studentList, $student);
        }
        return $studentList;
    }

    public function deleteStudent($index)
    {
        $students = $this->getListStudent();
        if (array_key_exists($index, $students)) {
            array_splice($students, $index, 1);
            $newData = json_encode($students);
            file_put_contents($this->path, $newData);
        }
    }

    public function getStudentByIndex($index)
    {
        $students = $this->getListStudent();
        $student = null;
        if (array_key_exists($index, $students)) {
            $student = $students[$index];
        }
        return $student;
    }

    public function edit($index, $student)
    {
        $students = $this->getListStudent();
        if(array_key_exists($index,$students)){
            $students[$index] = $student;
        }
    }
}

?>