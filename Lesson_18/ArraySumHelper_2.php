<?php

namespace TeoryAndPractic\Lesson_18;

class ArraySumHelper_2
{

    /**
     * @param $arr
     * @return float|int
     */
    public function getSum1($arr)
    {
        return $this->getSum($arr, 1);
    }


    /**
     * @param $arr
     * @return float|int
     */
    public function getSum2($arr)
    {
        return $this->getSum($arr, 2);
    }


    /**
     * @param $arr
     * @return float|int
     */
    public function getSum3($arr)
    {
        return $this->getSum($arr, 3);
    }


    /**
     * @param $arr
     * @return float|int
     */
    public function getSum4($arr)
    {
        return $this->getSum($arr, 4);
    }



    /**
     * @param $arr
     * @param $power
     * @return float|int
     */
    private function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }
        return $sum;
    }
}

$arraySumHelper = new ArraySumHelper_2;

$arr = [1, 2, 3];
echo $arraySumHelper->getSum1($arr) . '<br>';
echo $arraySumHelper->getSum2($arr) . '<br>';
echo $arraySumHelper->getSum3($arr) . '<br>';
echo $arraySumHelper->getSum4($arr) . '<br>';