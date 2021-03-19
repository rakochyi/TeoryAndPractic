<?php

namespace TeoryAndPractic\Lesson_24;

/**
 * Class Arr
 * @package TeoryAndPractic\Lesson_24
 */
class Arr
{
    /**
     * @var array
     */
    private $numbers = [];

    /**
     * @var SumHelper
     */
    private $sumHelper;


    /**
     * @var AvgHelper
     */
    private $avgHelper;


    /**
     * Arr constructor.
     */
    public function __construct()
    {
        $this->sumHelper = new SumHelper;
        $this->avgHelper = new AvgHelper;
    }


    /**
     * @return float|int
     */
    public function getSum23()
    {
        return $this->sumHelper->getSum2($numbers) + $this->sumHelper->getSum3($numbers);
    }


    public function getAvgMeatSum()
    {
        return $this->avgHelper->getAvg($numbers) + $this->avgHelper->getMeanSquare($numbers);
    }


    /**
     * @param $number
     */
    public function add($number)
    {
        $this->numbers[] = $number;
    }
}

$arr = new Arr;
$arr->add(1);
$arr->add(2);
$arr->add(3);

echo $arr->getSum23();
echo $arr->getAvgMeatSum();