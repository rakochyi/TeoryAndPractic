<?php

namespace TeoryAndPractic\PRACTIC\Class_File_58;

interface Interface_File_58
{
    public function __construct($filePath);

    public function getPath(); // путь к файлу

    public function getDir();  // папка файла

    public function getName(); // имя файла

    public function getExt();  // расширение файла

    public function getSize(); // размер файла

    public function getText();          // получает текст файла

    public function setText($text);     // устанавливает текст файла

    public function appendText($text);  // добавляет текст в конец файла

    public function Copy($copyPath);    // копирует файл

    public function delete($file_name);           // удаляет файл

    public function Rename($newName);   // переименовывает файл

    public function replace($newPath);  // перемещает файл
}