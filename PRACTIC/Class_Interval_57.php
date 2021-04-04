<?php

namespace TeoryAndPractic\PRACTIC;

use TeoryAndPractic\PRACTIC\Class_Date_56;

require_once "Class_Date_56.php";

/**
 * Class Class_Interval_57
 * @package TeoryAndPractic\PRACTIC
 */
class Class_Interval_57 extends Class_Date_56
{
    /**
     * Class_Interval_57 constructor.
     * @param \TeoryAndPractic\PRACTIC\Class_Date_56 $date1
     * @param \TeoryAndPractic\PRACTIC\Class_Date_56 $date2
     */
    public function __construct(Class_Date_56 $date1, Class_Date_56 $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }


    /**
     * @return mixed|string
     */
    public function toDays()
    {
        $arr_1 = explode('-', $this->date1);
        $arr_2 = explode('-', $this->date2);
        if ($arr_1[2] > $arr_2[2]) {
            return $arr_1[2] - $arr_2[2];
        }
        elseif ($arr_1[2] < $arr_2[2]) {
            return $arr_2[2] - $arr_1[2];
        }
        else {
            return 'No Funcykliren';
        }
    }


    /**
     * @return mixed|string
     */
    public function toMonths()
    {
        $arr_1 = explode('-', $this->date1);
        $arr_2 = explode('-', $this->date2);
        if ($arr_1[1] > $arr_2[1]) {
            return $arr_1[1] - $arr_2[1];
        }
        elseif ($arr_1[1] < $arr_2[1]) {
            return $arr_2[1] - $arr_1[1];
        }
        else {
            return 'No Funcykliren';
        }
    }


    /**
     * @return mixed|string
     */
    public function toYears()
    {
        $arr_1 = explode('-', $this->date1);
        $arr_2 = explode('-', $this->date2);
        if ($arr_1[0] > $arr_2[0]) {
            return $arr_1[0] - $arr_2[0];
        }
        elseif ($arr_1[0] < $arr_2[0]) {
            return $arr_2[0] - $arr_1[0];
        }
        else {
            return 'No Funcykliren';
        }
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return "['years' => $this->year, 'months' => $this->month, 'days' => $this->day]";
    }
}
$interval = new Class_Interval_57($date1, $date2);
echo $interval->toDays() . '<br>';
echo $interval->toMonths(). '<br>';
echo $interval->toYears() . '<br>';

echo $interval->date1 . '<br>';
echo $interval->date2 . '<br>';

echo '<pre>';
print_r($interval);
echo '</pre>';

