<?php

namespace TeoryAndPractic\Lesson_28;

/**
 * Class Post
 * @package TeoryAndPractic\Lesson_28
 */
class Post
{
    /**
     * @var string
     */
    private $name_post;

    /**
     * @var mixed
     */
    private $salary;


    /**
     * Post constructor.
     * @param $name_post
     * @param $salary
     */
    public function __construct($name_post, $salary)
    {
        $this->name_post = $name_post;
        $this->salary = $salary;
    }


    /**
     * @return mixed
     */
    public function getNamePost()
    {
        return $this->name_post;
    }


    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }
}

$post1 = new Post('Programmer', 1000);
$post2 = new Post('Manager', 800);
$post3 = new Post('Driver', 500);

