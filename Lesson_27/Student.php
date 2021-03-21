<?php

namespace TeoryAndPractic\Lesson_27;

/**
 * Class Student
 * @package TeoryAndPractic\Lesson_27
 */
class Student
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $scholarship;


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
    public function getScholarship()
    {
        return $this->scholarship;
    }
}

$student1 = new Student('Bogdan', 1000);
$student2 = new Student('Ivan', 290);
$student3 = new Student('Stepan', 290);
$arr = [];
array_unshift($arr, $student1, $student2, $student3);

foreach ($arr as $elem) {
    echo $elem . '<br>';
}


$sum = 0;
foreach ($this->arr as $value) {
    $sum += $value->getScholarship();
}