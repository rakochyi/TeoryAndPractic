<?php

namespace TeoryAndPractic\PRACTIC\Class_Tag_59_60_61;

class Tag
{
    private $name; // Властивість для зберігання іменні тегу

    private $attrs = [];



    public function __construct($name)
    {
        $this->name = $name;
    }



    // Реалізація методу для атрибутів
    public function setArrt($name, $value)
    {
        $this->attrs[$name] = $value;
        return $this;
    }



    // Метод для видалення атрибутів
    public function removeAttr($name, $value)
    {
        $arr = $this->setArrt($name, $value);
        foreach ($arr as $value) {
            foreach ($value as $key=>$item) {
                if ($key == $name) {
                    unset($key);
                }
            }
        }

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
$tag = new Tag('input');

echo $tag
    ->setArrt('type', 'password')
    ->setArrt('value', 'pass')
    ->setArrt('class', 'bbb')
    ->open();
echo $tag->removeAttr('class', 'bbb');



