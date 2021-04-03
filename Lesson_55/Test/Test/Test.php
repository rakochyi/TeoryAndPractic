<?php

namespace TeoryAndPractic\Lesson_55\Test\Test;

/**
 * Class Test
 * @package TeoryAndPractic\Lesson_55\Test\Test
 */
class Test
{
    /**
     * @var string
     */
    private $prop1;

    /**
     * @var string
     */
    private $prop2;


    /**
     * @param $property
     * @param $value
     */
    public function __set($property, $value)
    {
        switch ($property) {
            case 'prop1' :
                if ($value > 0 and $value < 10) {
                    $this->$property = $value;
                }
            break;

            case 'prop2' :
                if ($value > 10 and $value < 20) {
                    $this->$property = $value;
                }
            break;

            default:

            break;
        }
    }


    /**
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->$property;
    }
}