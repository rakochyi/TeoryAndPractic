<?php

namespace TeoryAndPractic\Lesson_22;

/**
 * Class Student
 * @package TeoryAndPractic\Lesson_22
 */
class Student extends User
{
    /**
     * @var integer
     */
    private $course;


    /**
     * Student constructor.
     * @param $name
     * @param $age
     * @param $course
     */
   public function __construct($name, $age, $course)
   {
       parent::__construct($name, $age);
       $this->course = $course;
   }


    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }
}

$student = new Student('Bogdan', 29, 2);

echo $student->getName();
echo $student->getAge();
echo $student->getCourse();