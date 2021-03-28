<?php

namespace TeoryAndPractic\Lesson_38;

/**
 * Interface iUser
 * @package TeoryAndPractic\Lesson_38
 */
interface iUser
{
    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param $age
     * @return mixed
     */
    public function setAge($age);

    /**
     * @return mixed
     */
    public function getAge();
}