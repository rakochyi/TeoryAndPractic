<?php

namespace TeoryAndPractic\Lesson_20;

/**
 * Class Student
 * @package TeoryAndPractic\Lesson_20
 */
class Student extends User
{
    /**
     * @var mixed
     */
    private $course;


    public function addOneYear()
    {
        $this->age++;
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

$student->setName('Bogdan');
$student->setAge(29);
$student->setCourse(5);

echo $student->getName() . ' - ';
echo $student->getAge() . ' - ';
echo $student->getCourse();
