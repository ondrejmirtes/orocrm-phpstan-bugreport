<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/noscript.yml
 */
class __Oro_Layout_Update_01a9857237af589bd84da386a46dd5014a29b8fe87b0bdc2bd06917a8676519d implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroUI/layouts/blank/page/noscript.html.twig' );
        $layoutManipulator->add( 'nosctipt', 'body', 'block', array (
        ), NULL, true );
    }
}
