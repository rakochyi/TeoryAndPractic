<?php

namespace TeoryAndPractic\Lesson_34;

use TeoryAndPractic\Lesson_34\Publication;

require_once "Publication.php";
/**
 * Class Announcement
 * @package TeoryAndPractic\Lesson_34
 */
class Announcement extends Publication
{

    /**
     * Announcement constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->table = 'announcements_table';
        parent::__construct($id);
    }


    /**
     * @return mixed|void
     */
    public function do_print()
    {
        echo $this->properties['title'];
        echo '<br> adasd asdasd asdads do ' . $this->properties['end_date'];
        echo '<br>' . $this->properties['text'];
    }
}

