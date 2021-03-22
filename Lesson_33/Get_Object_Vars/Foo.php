<?php

namespace TeoryAndPractic\Lesson_33\Get_Object_Vars;

/**
 * Class Foo
 * @package TeoryAndPractic\Lesson_33\Get_Object_Vars
 */
class Foo
{
    /**
     * @var mixed
     */
    private $a;

    /**
     * @var int
     */
    public $b = 1;

    /**
     * @var mixed
     */
    public $c;

    /**
     * @var mixed
     */
    private $d;

    /**
     * @var mixed
     */
    static $e;



    public function test()
    {
        echo '<pre>';
        print_r(get_object_vars($this));
        echo '</pre>';
    }
}
$test = new Foo;
echo '<pre>';
print_r(get_object_vars($test));
echo '</pre>' . '<br>';

$test->test();
