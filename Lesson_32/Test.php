<?php

namespace TeoryAndPractic\Lesson_32;

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_32
 */
class Test
{
    /**
     * @var string
     */
    const CONSTANT = 'test';


    /**
     * @return string
     */
    public function getConstant()
    {
        return self::CONSTANT;
    }
}
echo Test::CONSTANT . '<br>';

$test = new Test;
echo $test->getConstant();
