<?php

namespace TeoryAndPractic\Lesson_30;

/**
 * Class Test_1
 * @package TeoryAndPractic\Lesson_30
 */
class Test_1
{
    /**
     * @var string
     */
    private static $property = 'Test';


    /**
     * @return mixed
     */
    public static function getProperty()
    {
        return self::$property;
    }
}
echo Test_1::getProperty();