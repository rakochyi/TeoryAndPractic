<?php

namespace TeoryAndPractic\PRACTIC\Class_Tag_59_60_61_62;

class Tag
{
    private $name; // Властивість для зберігання іменні тегу

    private $attrs = [];



    public function __construct($name)
    {
        $this->name = $name;
    }



    // Реалізація методу для атрибутів
    public function setAttr($name, $value)
    {
        $this->attrs[$name] = $value;
        return $this;
    }



    public function setAttrs($attrs, array $array)
    {
        foreach ($attrs as $name => $value) {
            $this->setAttr($name, $value);
        }
        return $this;
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
$tag_br = new Tag('br');
$tag1 = new Tag('input');

echo $tag
    ->setAttr('type', 'password')
    ->setAttr('value', 'pass')
    ->setAttr('class', 'bbb')
    ->open();
echo $tag_br->open();
echo $tag1
    ->setAttrs(['type' => 'submit'], ['value' => ''])
    ->open();