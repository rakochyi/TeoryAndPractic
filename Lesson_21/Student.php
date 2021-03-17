<?php

namespace TeoryAndPractic\Lesson_21;

/**
 * Class Student
 * @package TeoryAndPractic\Lesson_21
 */
class Student extends User
{
    /**
     * @var integer
     */
    private $course;



    public function setAge($age): void
    {
        if ($age <= 25) {
            parent::setAge($age);
        }
    }


    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }


    /**
     * @param mixed $course
     */
    public function setCourse($course): void
    {
        $this->course = $course;
    }
}


$student = new Student;

$student->setAge(24);
echo $student->getAge() . '<br>';

$student->setAge(30);
echo $student->getAge();