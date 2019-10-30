<?php
declare(strict_types=1);

class Student
{
    private $studentId;
    private $studentName;
    private $studentEmail;
    private $assignedTeacher;

    public function __construct(int $_id, string $_name, string $_email, string $_assTeacher)
    {
        $this->studentId = $_id;
        $this->studentName = $_name;
        $this->studentEmail = $_email;
        $this->assignedTeacher = $_assTeacher;
    }

    public function getStudentId () : int {
        //the getter
        return $this->studentId;
    }

    public function getStudentName () : string {
        //the getter
        return $this->studentName;
    }

    public function getStudentEmail () : string {
        //the getter
        return $this->studentEmail;
    }

    public function getAssTeacher () : string {
        //the getter
        return $this->assignedTeacher;
    }

}


