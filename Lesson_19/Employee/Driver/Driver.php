<?php

namespace TeoryAndPractic\Lesson_19\Employee\Driver;

use TeoryAndPractic\Lesson_19\Employee\Employee;

/**
 * Class Driver
 * @package TeoryAndPractic\Lesson_19\Employee\Driver
 */
class Driver extends Employee
{
    /**
     * @var mixed
     */
    private $driving_exp;

    /**
     * @var mixed
     */
    private $driving_category;


    /**
     * @return mixed
     */
    public function getDrivingExp()
    {
        return $this->driving_exp;
    }


    /**
     * @param mixed $driving_exp
     */
    public function setDrivingExp($driving_exp): void
    {
        $this->driving_exp = $driving_exp;
    }


    /**
     * @return mixed
     */
    public function getDrivingCategory()
    {
        return $this->driving_category;
    }


    /**
     * @param mixed $driving_category
     */
    public function setDrivingCategory($driving_category): void
    {
        $this->driving_category = $driving_category;
    }
}