<?php

namespace TeoryAndPractic\Lesson_35;

use mysql_xdevapi\TableInsert;

require_once "User.php";


/**
 * Class Student
 * @package TeoryAndPractic\Lesson_35
 */
class Student extends User
{
    /**
     * @var mixed
     */
    private $scholarship;


    /**
     * @return mixed
     */
    public function getScholarship()
    {
        return $this->scholarship;
    }


    /**
     * @param mixed $scholarship
     */
    public function setScholarship($scholarship): void
    {
        $this->scholarship = $scholarship;
    }


    /**
     * @param $value
     * @return mixed|void
     */
    public function increaseRevenue($value)
    {
        $this->scholarship += $value;
    }


    /**
     * @param $value
     * @return mixed|void
     */
    public function inDicreaseRevenue($value)
    {
        $this->scholarship -= $value;
    }
}
$student = new Student;
$student->setName('Bogdan');
$student->setScholarship(1000);
$student->increaseRevenue(200);
$student->inDicreaseRevenue(150);

echo $student->getName() . ' - ';
echo $student->getScholarship();