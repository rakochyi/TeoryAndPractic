<?php

namespace TeoryAndPractic\Lesson_33\Get_Object_Vars;

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_33\Get_Object_Vars
 */
class Test
{
    /**
     * @var mixed
     */
    public $prop1;

    /**
     * @var mixed
     */
    public $prop2;

    /**
     * @var mixed
     */
    protected $prop3;

    /**
     * @var mixed
     */
    protected $prop4;


    /**
     * @var array
     */
    public function test()
    {
        echo '<pre>';
        print_r(get_object_vars($this));
        echo '</pre>';
    }
}
$test = new Test;

echo '<pre>';
$test->test();
echo '<hr>';
print_r(get_object_vars($test));
echo '</pre>';
