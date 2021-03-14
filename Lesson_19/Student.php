<?php

namespace TeoryAndPractic\Lesson_19;

/**
 * Class Student
 * @package TeoryAndPractic\Lesson_19
 */
class Student extends User
{
    /**
     * @var integer
     */
    private $course;


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
$student->setCourse(1);

echo $student->getName() . ' - ';
echo $student->getAge() . ' - ';
echo $student->getCourse();