<?php


class Teacher
{

    private $teacherId;
    private $teacherName;
    private $teacherEmail;
    private $class;

    public function __construct(int $_id, string $_name, string $_email, int $_class) {
        $this->teacherId = $_id;
        $this->teacherName = $_name;
        $this->teacherEmail = $_email;
        $this->class = $_class;
    }

    public function getTeacherId () : int {
        //the getter
        return $this->teacherId;
    }

    public function getTeacherName () : string {
        //the getter
        return $this->teacherName;
    }

    public function getTeacherEmail () : string {
        //the getter
        return $this->teacherEmail;
    }

    public function getTeacherClass() : int {
        //the getter
        return $this->class;
    }

}
