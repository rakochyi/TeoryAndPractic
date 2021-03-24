<?php

namespace TeoryAndPractic\Lesson_33\Property_exists;

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_33\Property_exists
 */
class Test
{
    /**
     * @var mixed
     */
    public $mine = 12;

    /**
     * @var mixed
     */
    private $age = 13;

    /**
     * @var mixed
     */
    static protected $test = 14;


    static function test()
    {
        var_dump(property_exists('Test', 'test'));
    }
}
var_dump(property_exists('Test', 'age'));
echo '<br>';
var_dump(property_exists(new Test, 'mine'));
