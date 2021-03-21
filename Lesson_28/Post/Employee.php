<?php

namespace TeoryAndPractic\Lesson_28\Post;

use TeoryAndPractic\Lesson_28\Post;

/**
 * Class Employee
 * @package TeoryAndPractic\Lesson_28\Post
 */
class Employee
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;


    /**
     * @var Post
     */
    private $name_post;


    /**
     * @var Post
     */
    private $salary;
    /**
     * Employee constructor.
     * @param $name
     * @param $surname
     * @param $name_post
     * @param $salary
     */
    public function __construct($name, $surname, $name_post, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->name_post = new Post;
        $this->salary = new Post;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }


    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }


    /**
     * @param Post $post
     */
    public function add(Post $post)
    {
        $this->name_post = $post;
    }


    /**
     * @return Post
     */
    public function getNamePost(): Post
    {
        return $this->name_post;
    }


    /**
     * @return Post
     */
    public function getSalary(): Post
    {
        return $this->salary;
    }


    public function changePost(Post $name_post)
    {
        $this->name_post = $name_post;
    }
}

$employee = new Employee('Bogdan', 'Rakochyi', 'Junior Magento 2 Developer', 1000);

echo $employee->getName() . ' ';
echo $employee->getSurname() . ' ';
echo $employee->getNamePost() . ' - ';
echo $employee->getSalary();