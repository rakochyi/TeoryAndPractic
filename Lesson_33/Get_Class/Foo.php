<?php

namespace TeoryAndPractic\Lesson_33\Get_Class;

/**
 * Class Foo
 * @package TeoryAndPractic\Lesson_33\Get_Class
 */
class Foo
{
    /**
     * @return string
     */
    public function nameClass()
    {
        return 'My name is ' . get_class($this) . " class \n";
    }
}
$foo = new Foo;

echo $foo->nameClass();