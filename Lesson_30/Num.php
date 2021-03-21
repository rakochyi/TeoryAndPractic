<?php

namespace TeoryAndPractic\Lesson_30;

/**
 * Class Num
 * @package TeoryAndPractic\Lesson_30
 */
class Num
{
    /**
     * @var mixed
     */
    public static $num1;

    /**
     * @var mixed
     */
    public static $num2;
}
Num::$num1 = 5;
Num::$num2 = 5;
echo Num::$num1 + Num::$num2;