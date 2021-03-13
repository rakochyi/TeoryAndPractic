<?php

namespace TeoryAndPractic\Lesson_13;

/**
 * Class Student
 * @package TeoryAndPractic\Lesson_13
 */
class Student
{
    /**
     * @var string
     */
    public $surname;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentname;

    /**
     * @var int
     */
    public $course = 1;


    /**
     * Student constructor.
     * @param $surname
     * @param $name
     * @param $parentname
     */
    public function __construct($surname, $name, $parentname)
    {
        $this->surname = $name;
        $this->name = $name;
        $this->parentname = $parentname;
    }


    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return string
     */
    public function getParentname()
    {
        return $this->parentname;
    }


    /**
     * @return int
     */
    public function getCourse()
    {
        return $this->course;
    }



    public function transferToNextCourse()
    {
        $this->course++;
    }
}

$student = new Student('Rakochyi', 'Bogdan', 'Igorovych');

echo $student->getSurname() . ' ';
echo $student->getName() . ' ';
echo $student->getParentname() . ' - ';
$student->transferToNextCourse();
echo $student->getCourse();