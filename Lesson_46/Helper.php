<?php

namespace TeoryAndPractic\Lesson_46;

/**
 * Trait Helper
 * @package TeoryAndPractic\Lesson_46
 */
trait Helper
{
    /**
     * @var mixed
     */
    private $name;

    /**
     * @var mixed
     */
    private $age;


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
    public function getAge()
    {
        return $this->age;
    }
}