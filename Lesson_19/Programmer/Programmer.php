<?php

namespace TeoryAndPractic\Lesson_19\Programmer;

use TeoryAndPractic\Lesson_19\Employee\Employee;

/**
 * Class Programmer
 * @package TeoryAndPractic\Lesson_19\Programmer
 */
class Programmer extends Employee
{
    /**
     * @var mixed
     */
    private $langs;


    /**
     * @return mixed
     */
    public function getLangs()
    {
        return $this->langs;
    }


    /**
     * @param mixed $langs
     */
    public function setLangs($langs): void
    {
        $this->langs = $langs;
    }
}