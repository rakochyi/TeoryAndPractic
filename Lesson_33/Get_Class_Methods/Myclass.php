<?php

namespace TeoryAndPractic\Lesson_33\Get_Class_Methods;

/**
 * Class Myclass
 * @package TeoryAndPractic\Lesson_33\Get_Class_Methods
 */
class Myclass
{
    /**
     * Myclass constructor.
     */
    public function __construct()
    {
        return true;
    }


    /**
     * @return bool
     */
    public function function_1()
    {
        return true;
    }


    /**
     * @return bool
     */
    public function function_2()
    {
        return true;
    }
}
$myclass = get_class_methods('Myclass');

$myclass = get_class_methods(new Myclass());

foreach ($myclass as $name_method) {
    echo $name_method . '<br>';
}