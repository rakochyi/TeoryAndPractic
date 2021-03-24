<?php

namespace TeoryAndPractic\Lesson_33\Get_Parent_Class;

/**
 * Class Children
 * @package TeoryAndPractic\Lesson_33\Get_Parent_Class
 */
class Children extends Parents
{
    /**
     * @var integer
     */
    public $age;


    /**
     * @return int
     */
    public function age()
    {
        return 29;
    }
}
$children = new Children;

var_dump(get_parent_class($children));