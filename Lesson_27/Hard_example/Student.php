<?php

namespace TeoryAndPractic\Lesson_27\Hard_example;

/**
 * Class Student
 * @package TeoryAndPractic\Lesson_27\Hard_example
 */
class Student
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var mixed
     */
    private $scholarship;


    /**
     * Student constructor.
     * @param $name
     * @param $scholarship
     */
    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getScholarship()
    {
        return $this->scholarship;
    }
}