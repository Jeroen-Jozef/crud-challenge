<?php


class Class_room {

    private $classId;
    private $className;
    private $location;

    public function __construct(int $_id, string $_name, string $_location)
    {
        $this->classId = $_id;
        $this->className = $_name;
        $this->location = $_location;

    }

    public function getClassID () : int {
        return $this->classId;
    }

    public function ()

}
