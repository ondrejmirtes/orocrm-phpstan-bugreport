<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/dialog/dialog.yml
 */
class __Oro_Layout_Update_780ebf26c038e224b4e13e3ab02204bc105339bdd33057515b5e07dfd09e8a1b implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroUI/layouts/blank/dialog/dialog.html.twig' );
        $layoutManipulator->add( 'widget_content', 'root', 'widget_content' );
        $layoutManipulator->add( 'widget_actions', 'widget_content', 'widget_actions' );
    }
}
