<?php

namespace TeoryAndPractic\Lesson_23;

/**
 * Class Product
 * @package TeoryAndPractic\Lesson_23
 */
class Product
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $price;


    /**
     * Product constructor.
     * @param $name
     * @param $price
     */
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}
$product = new Product('Euro', 33.33);

$product1 = $product->name;
$product1 = 'Dolar';
$product1 = $product;
echo $product->name;

echo '<br>';
$product2 = $product1;
$product2->name = 'Funt';
echo $product->name;