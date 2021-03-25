<?php

namespace TeoryAndPractic\Lesson_34;

use TeoryAndPractic\Lesson_34\Publication;

/**
 * Class Article
 * @package TeoryAndPractic\Lesson_34
 */
class Article extends Publication
{
    /**
     * Article constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->table = 'article_table';
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
        echo '<br>' . $this->properties['author'];
    }
}