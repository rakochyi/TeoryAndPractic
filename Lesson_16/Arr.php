<?php

namespace TeoryAndPractic\Lesson_16;

/**
 * Class Arr
 * @package TeoryAndPractic\Lesson_16
 */
class Arr
{
    /**
     * @var array
     */
    private $numbers = [];

    /**
     * Arr constructor.
     * @param $numbers
     */
    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }


    /**
     * @param $number
     */
    public function add($number)
    {
        $this->numbers[] = $number;
    }


    /**
     * @return float|int
     */
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

echo (new Arr([1, 2, 3, 4, 5, 6]))->getSum();

