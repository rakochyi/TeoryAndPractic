<?php

namespace TeoryAndPractic\Lesson_31;

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_31
 */
class Test
{
    /**
     * @var mixed
     */
    public static $staticProperty;

    /**
     * @var mixed
     */
    public $usualProperty;



    public static function method()
    {
        echo '<pre>';
        var_dump(self::$staticProperty);
        var_dump(self::$staticProperty);
        echo '</pre>';
    }
}
$test = new Test;

$test->usualProperty = 'Usual Property';
echo $test->usualProperty . '<br>';

Test::$staticProperty = 'Static Property';
echo Test::$staticProperty . '<br>';

$test1 = new Test;

$test1::$staticProperty = 'Static Property';
echo $test1::$staticProperty . '<br>';

$test2 = new Test;
echo $test2::$staticProperty . '<br>';

$test::method();