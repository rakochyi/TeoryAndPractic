<?php

namespace TeoryAndPractic\Lesson_40;


require_once "iUser.php";
/**
 * Interface iEmployee
 * @package TeoryAndPractic\Lesson_40
 */
interface iEmployee extends iUser
{
    /**
     * @return mixed
     */
    public function getSalary();

    /**
     * @param $salary
     * @return mixed
     */
    public function setSalary($salary);
}