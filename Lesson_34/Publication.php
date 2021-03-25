<?php

namespace TeoryAndPractic\Lesson_34;

/**
 * Class Publication
 * @package TeoryAndPractic\Lesson_34
 */
abstract class Publication
{
    /**
     * @var mixed
     */
    protected $table;

    /**
     * @var array|string[]|null
     */
    protected $properties = [];


    /**
     * Publication constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $result = mysqli_query ('SELECT * FROM `'.$this->table.'` WHERE `id`="'.$id.'" LIMIT 1');
        $this->properties = mysqli_fetch_assoc($result);
    }


    /**
     * @param $name
     * @return bool|mixed|string
     */
    public function get_property($name)
    {
        if (isset($this->properties[$name9])) {
            return $this->properties[$name];
        }
        return false;
    }


    /**
     * @param $name
     * @param $value
     * @return bool
     */
    public function set_property($name, $value)
    {
        if (!isset($this->properties[$name])) {
            return false;
        }
        $this->properties[$name] = $value;
        return $value;
    }


    /**
     * @return mixed
     */
    abstract public function do_print();
}

$publications[] = new News($news_id);
$publications[] = new Announcement($announcement_id);
$publications[] = new Article($article_id);

foreach ($publications as $publication) {
    if ($publication instanceof Publication) {
        $publication->do_print();
    } else {

    }
}