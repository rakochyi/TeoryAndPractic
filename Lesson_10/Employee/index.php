<?php

namespace TeoryAndPractic\Lesson_10\Employee;

require_once 'Employee.php';

$employee = new Employee('Bogdan', 'Rakochyi', 'Igorovych', 2000);

echo $employee->getSurname() . ' ';
echo $employee->getName() . ' ';
echo $employee->getPatronymic() . ' - ';
echo $employee->getSalary() . '.';