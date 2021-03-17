<?php

namespace TeoryAndPractic\Lesson_21\Repository;

/**
 * Class Student
 * @package TeoryAndPractic\Lesson_21\Repository
 */
class Student extends User
{
    /**
     * @var integer
     */
    private $course;


    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        if (strlen($name) <= 10) {
            parent::setName($name);
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