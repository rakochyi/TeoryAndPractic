<?php
namespace TeoryAndPractic\Lesson_26;

    /**
     * Class EmployeesCollection
     * @package TeoryAndPractic\Lesson_26
     */
    class EmployeesCollection
    {
        /**
         * @var array
         */
        private $employees = [];


        /**
         * @param $newEmployee
         */
        public function add($newEmployee)
        {
            $this->employees[] = $newEmployee;
        }


        /**
         * @return array
         */
        public function get()
        {
            return $this->employees;
        }


        /**
         * @param $newEmployee
         */
        public function exists($newEmployee)
        {
            if (!in_array($newEmployee, $this->employees, true)) {
                $this->employees[] = $newEmployee;
            }
        }
    }
    $employeesCollection = new EmployeesCollection;

    $employeesCollection->add(new Employee('Bogdan', 100));
    $employeesCollection->add(new Employee('Bogdan', 100));
    echo '<pre>';
    var_dump($employeesCollection->get());

