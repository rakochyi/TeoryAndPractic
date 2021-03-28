<?php

namespace TeoryAndPractic\Lesson_34;


use \TeoryAndPractic\Lesson_34\Publication;

require_once "Publication.php";
/**
 * Class News
 * @package TeoryAndPractic\Lesson_34
 */
class News extends Publication
{
    /**
     * News constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->table = 'news_table';
        parent::__construct($id);
    }


    /**
     * @return mixed|void
     */
    public function do_print()
    {
        echo $this->properties['title'];
        echo '<br>';
        echo $this->properties['text'];
        echo '<br> Джерело: ' . $this->properties['source'];
    }
}