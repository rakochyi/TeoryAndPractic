<?php

namespace TeoryAndPractic\Lesson_49;

require_once "ParentClass.php";
require_once "TestTrait.php";

/**
 * Class TestClass
 * @package TeoryAndPractic\Lesson_49
 */
class TestClass extends ParentClass
{
    /**
     * TestTrait
     */
    use TestTrait;
}
$testClass = new TestClass;
echo $testClass->method();