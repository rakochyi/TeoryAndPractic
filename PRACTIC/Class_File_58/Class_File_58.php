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


    /**
     * @param $text
     * @return false|int
     */
    public function appendText($text)
    {
        $arr = [];
        $str = explode('-', array_push($arr, $text));
        $string = implode('-', $str);

        $f = rtrim(self::File) . $this->path;
        $fil = file_put_contents($f, $string);
        return $fil;
    }


    /**
     *
     * @param $copyPath
     * @return false|int
     */
    public function Copy($copyPath)
    {
        if (!isset($copyPath)) {
            echo file_put_contents($copyPath, '');
        }
        $copy_file = rtrim(self::File) . $this->path;
        $new_file = rtrim(self::File) . $copyPath;
        return copy($copy_file, $new_file);

    }



    /**
     * @param $file_name
     * @return bool
     */
    public function delete($file_name)
    {
        $delete = rtrim(self::File) . $file_name;
        return unlink($delete);
    }



    /**
     * @param $newName
     * @return bool
     */
    public function Rename($newName)
    {
        $old_name = rtrim(self::File) . $this->path;
        $new_name = rtrim(self::File) . $newName;
        return rename($old_name, $new_name);
    }


    /**
     * @param $newPath
     * @return bool
     */
    public function replace($newPath)
    {
        $old_replace = rtrim(self::File) . $this->path;
        $new_place = rtrim(self::File) . $newPath;
        return rename($old_replace, $new_place);
    }
}
$file = new Class_File_58('Arr.php');