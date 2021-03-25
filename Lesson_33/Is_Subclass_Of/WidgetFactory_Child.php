<?php

namespace TeoryAndPractic\Lesson_33\Is_Subclass_Of;

/**
 * Class WidgetFactory_Child
 * @package TeoryAndPractic\Lesson_33\Is_Subclass_Of
 */
class WidgetFactory_Child extends WidgetFactory
{
    /**
     * @var string
     */
    public $variable_child = 'oom';
}

$widgetFactory = new WidgetFactory;
$widgetFactory_Child = new WidgetFactory_Child;

if (is_subclass_of($widgetFactory_Child, 'WidgetFactory')) {
    echo 'Yes $widgetFactory_Child is extends WidgetFactory';
} else {
    echo 'No $widgetFactory_Child is not extends WidgetFactory';
}


if (is_subclass_of($widgetFactory, 'WidgetFactory')) {
    echo 'Yes $widgetFactory is extends WidgetFactory';
} else {
    echo 'No $widgetFactory is not extends WidgetFactory';
}


if (is_subclass_of('WidgetFactory_Child', 'WidgetFactory')) {
    echo 'Yes $widgetFactory_Child is extends WidgetFactory';
} else {
    echo 'No $widgetFactory_Child is not extends WidgetFactory';
}