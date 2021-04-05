<?php

namespace TeoryAndPractic\PRACTIC\Class_Tag_59;

class Tag
{
    private $name; // Властивість для зберігання іменні тегу

    private $attrs;



    public function __construct($name, $attrs = [])
    {
        $this->name = $name;
        $this->attrs = $attrs; // записуєм атрибути у властивість
    }



    // Відкриваючий метод тегу, тобто тег відривання, наприклад <input>
    public function open()
    {
        $name = $this->name;
        $attrsStr = $this->getAttrsStr($this->attrs); // формуємо рядок з атрибутами
        return "<$name$attrsStr>"; //добавляємо атрибут після відкривання тегу
    }



    // Закриваюча частина тегу, тобто тег закривання, наприклад </header>
    public function close()
    {
        $name = $this->name;
        return "</$name>";
    }



    // формуємо рядок з атрибутами
    private function getAttrsStr($attrs)
    {
        if (!empty($attrs)) {
            $result = '';

            foreach ($attrs as $name => $value) {
                $result .= " $name=\"$value\"";
            }
            return $result;
        }
        else {
            return '';
        }
    }
}



