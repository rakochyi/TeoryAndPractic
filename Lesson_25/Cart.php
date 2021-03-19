<?php

namespace TeoryAndPractic\Lesson_25;

/**
 * Class Cart
 * @package TeoryAndPractic\Lesson_25
 */
class Cart
{
    /**
     * @var array
     */
    private $products = [];


    /**
     * @param $product
     */
    public function add($product)
    {
        $this->products[] = $product;
    }


    /**
     * @param $name
     * @return array
     */
    public function remove($name)
    {
        $n = 0;
        foreach ($this->products as $key) {
            foreach ($key as $num) {
                if($name == $num){
                    unset($this->products[$n]);
                    sort($this->products);
                }
            }$n++;
        }
        return $this->products;
    }


    /**
     * @return int
     */
    public function getTotalCost()
    {
        $sum = 0;

        foreach ($this->products as $product) {
            $sum += $product->getCost();
        }
        return $sum;
    }


    /**
     * @return int
     */
    public function getTotalQuantity()
    {
        $sum = 0;

        foreach ($this->products as $product) {
            $sum += $product->getQuantity();
        }
        return $sum;
    }


    /**
     * @return float|int
     */
    public function getAvgPrice()
    {
        return $this->getTotalCost() / $this->getTotalQuantity();
    }
}