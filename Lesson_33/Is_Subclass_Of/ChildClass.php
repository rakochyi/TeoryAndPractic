<?php

namespace TeoryAndPractic\Lesson_33\Is_Subclass_Of;

/**
 * Class ChildClass
 * @package TeoryAndPractic\Lesson_33\Is_Subclass_Of
 */
class ChildClass extends ParentClass
{
    /**
     * @var string
     */
    protected $childClass = 'melon';
}
$child_class = new ChildClass;
$parent_class = new ParentClass;
$grand_parent_class = new GrandParentClass;

if (is_subclass_of($child_class, 'GrandParentClass')) {
    echo 'Yes $child_class is extends GrandParentClass';
} else {
    echo 'No $child_class is not extends GrandParentClass';
}



if (is_subclass_of($parent_class, 'GrandParentClass')) {
    echo 'Yes $parent_class is extends GrandParentClass';
} else {
    echo 'No $parent_class is not extends GrandParentClass';
}




if (is_subclass_of($child_class, 'ParentClass')) {
    echo 'Yes $child_class is extends ParentClass';
} else {
    echo 'No $child_class is not extends ParentClass';
}


