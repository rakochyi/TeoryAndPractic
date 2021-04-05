<?php

namespace TeoryAndPractic\PRACTIC\Class_Tag_59;

class Tag
{
    private $name; // Властивість для зберігання іменні тегу



    public function __construct($name)
    {
        $this->name = $name;
    }



    // Відкриваючий метод тегу, тобто тег відривання, наприклад <input>
    public function open()
    {
        $name = $this->name;
        return "<$name>";
    }



    // Закриваюча частина тегу, тобто тег закривання, наприклад </header>
    public function close()
    {
        $name = $this->name;
        return "</$name>";
    }
}
$tag = new Tag('header');
echo $tag->open() . 'header сайту' . $tag->close();
