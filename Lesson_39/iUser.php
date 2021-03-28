<?php

namespace TeoryAndPractic\Lesson_39;

/**
 * Interface iUser
 * @package TeoryAndPractic\Lesson_39
 */
interface iUser
{
    /**
     * iUser constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age);

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getAge();
}