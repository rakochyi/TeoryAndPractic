<?php

namespace TeoryAndPractic\Lesson_43;

/**
 * Interface iProgrammer
 * @package TeoryAndPractic\Lesson_43
 */
interface iProgrammer
{
    /**
     * iProgrammer constructor.
     * @param $name
     * @param $salary
     * @param $languages
     */
    public function __construct($name, $salary, $languages);

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getSalary();

    /**
     * @return mixed
     */
    public function getLangs();

    /**
     * @param $lang
     * @return mixed
     */
    public function addLangs($lang);
}