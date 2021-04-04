<?php

namespace TeoryAndPractic\PRACTIC\Class_File_58;

require_once "Interface_File_58.php";

/**
 * Class Class_File_58
 * @package TeoryAndPractic\PRACTIC\Class_File_58
 */
class Class_File_58 implements Interface_File_58
{
    /**
     * @var mixed
     */
    private $path;

    /**
     * @var mixed
     */
    private $dir;

    /**
     * @var mixed
     */
    private $name;

    /**
     * @var mixed
     */
    private $ext;

    /**
     * @var mixed
     */
    private $size;

    /**
     * @var mixed
     */
    private $text;

    /**
     * File constant
     */
    const File = 'E:\OpenServer\domains\localhost\TeoryAndPractic\Lesson_53\ ';


    /**
     * Class_File_58 constructor.
     * @param $path
     */
    public function __construct($path)
    {
        self::File;
        $this->path = $path;
    }


    /**
     * @return string
     */
    public function getPath()
    {
        return rtrim(self::File) . $this->path;
    }


    /**
     * @return false|string
     */
    public function getDir()
    {
        $shlah = self::File;
        return substr($shlah, 48, 10);
    }


    /**
     * @return false|string
     */
    public function getName()
    {
        $name_file = $this->path;
        return substr($name_file, 0, 3);
    }


    /**
     * @return false|string
     */
    public function getExt()
    {
        $name_file = $this->path;
        return substr($name_file, 3, 4);
    }


    /**
     * @return string
     */
    public function getSize()
    {
        $str = rtrim(self::File) . $this->path;
        return filesize($str) . ' bite';
    }


    /**
     * @return false|string
     */
    public function getText()
    {
        $str = rtrim(self::File) . $this->path;
        return file_get_contents($str);
    }


    /**
     * @param $text
     * @return false|int
     */
    public function setText($text)
    {
        $str = rtrim(self::File) . $this->path;
        return file_put_contents($str, $text);
    }



    public function appendText($text)
    {
        // TODO: Implement appendText() method.
    }



    public function copy($copyPath)
    {
        // TODO: Implement copy() method.
    }



    public function delete()
    {
        // TODO: Implement delete() method.
    }



    public function rename($newName)
    {
        // TODO: Implement rename() method.
    }



    public function replace($newPath)
    {
        // TODO: Implement replace() method.
    }
}
$file = new Class_File_58('Arr.php');
echo $file->getPath() . '<br>';
echo $file->getDir() . '<br>';
echo $file->getName() . '<br>';
echo $file->getExt() . '<br>';
echo $file->getSize() . '<br>';
echo $file->getText() . '<br>';
$file->setText('Hello world!!!');
echo $file->getText() . '<br>';