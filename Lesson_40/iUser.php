<?php

namespace TeoryAndPractic\Lesson_40;

/**
 * Interface iUser
 * @package TeoryAndPractic\Lesson_40
 */
interface iUser
{
    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);

    /**
     * @return mixed
     */
    public function getAge();

    /**
     * @param $age
     * @return mixed
     */
    public function setAge($age);
}