<?php

namespace TeoryAndPractic\Lesson_43;

require_once "Employee.php";
require_once "iProgrammer.php";

/**
 * Class Programmer
 * @package TeoryAndPractic\Lesson_43
 */
class Programmer extends Employee implements iProgrammer
{
    /**
     * @var array|string
     */
    private $languages = [];


    /**
     * Programmer constructor.
     * @param $name
     * @param $salary
     * @param $languages
     */
    public function __construct($name, $salary, $languages)
    {
        parent::__construct($name, $salary);
        $this->languages = $languages;
    }


    /**
     * @return mixed|string|true
     */
    public function getLangs()
    {
        return print_r($this->languages);
    }


    /**
     * @param $lang
     * @return mixed|void|string
     */
    public function addLangs($lang):string
    {
        $this->languages[] = $lang;
    }
}
$programmer = new Programmer('Bogdan', '1000', 'PHP -');

echo $programmer->getName() . ' - ';
echo $programmer->getSalary() . ' - ';
echo $programmer->getLangs();