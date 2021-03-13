<?php

namespace TeoryAndPractic\Lesson_12;

/**
 * Class Student
 * @package TeoryAndPractic\Lesson_12
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
     * @var integer
     */
    public $course;


    /**
     * Student constructor.
     * @param $surname
     * @param $name
     * @param $parentname
     * @param $course
     */
    public function __construct($surname, $name, $parentname, $course)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->parentname = $parentname;
        $this->course = $course;
    }

    /**
     * @return mixed
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

$student = new Student('Rakochyi', 'Bogdan', 'Igorovych', 1);

echo $student->getCourse() . '<br>';
$student->transferToNextCourse();
echo $student->getCourse();


