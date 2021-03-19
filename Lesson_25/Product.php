<?php

namespace TeoryAndPractic\Lesson_25;

/**
 * Class Product
 * @package TeoryAndPractic\Lesson_25
 */
class Product
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $quantity;


    /**
     * Product constructor.
     * @param $name
     * @param $price
     * @param $quantity
     */
    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * @return float|int
     */
    public function getCost()
    {
        return $this->price * $this->quantity;
    }
}