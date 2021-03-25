<?php

namespace TeoryAndPractic\Lesson_33\Is_A;

/**
 * Class WidgetFactory
 * @package TeoryAndPractic\Lesson_33\Is_A
 */
class WidgetFactory
{
    /**
     * @var string
     */
    public $moo = 'moo';
}

$wf = new WidgetFactory;

if (is_a($wf, 'WidgetFactory')) {
    echo 'Yes $wf is a WidgetFactory';
}


if ($wf instanceof WidgetFactory) {
    echo ' Yes $wf - WidgetFactory';
}