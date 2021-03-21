<?php

namespace TeoryAndPractic\Lesson_30;

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_30
 */
class Test
{
    /**
     * @var mixed
     */
    private static $property;


    /**
     * @return mixed
     */
    public static function getProperty()
    {
        return self::$property;
    }


    /**
     * @param mixed $property
     */
    public static function setProperty($property): void
    {
        self::$property = $property;
    }
}
Test::setProperty('Test');
echo Test::getProperty();