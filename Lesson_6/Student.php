<?php

namespace TeoryAndPractic\Lesson_6;

/**
 * Class Student
 * @package TeoryAndPractic\Lesson_6
 */
class Student
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
     */
    public $course;


    /**
     * @param $course
     */
    public function setCourse($course)
    {
        if ($this->isCourseCorrect($course)) {
            $this->course = $course;
        }
    }


    /**
     * @param $course
     * @return bool
     */
    private function isCourseCorrect($course)
    {
        return $course != 0 and $course <= 5;
    }
}
$student = new Student;
$student->setCourse(1);
echo $student->course;