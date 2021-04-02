<?php

namespace TeoryAndPractic\Lesson_52;

/**
 * Trait Trait_1
 * @package TeoryAndPractic\Lesson_52
 */
trait Trait_1
{
    /**
     * @return int
     */
    public function method_1()
    {
        return 1;
    }
}


echo '<pre>';
print_r(get_declared_traits());
echo '</pre>';