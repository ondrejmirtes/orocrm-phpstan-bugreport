<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/components.yml
 */
class __Oro_Layout_Update_7be5105081aded46bb9a4d6e70af366b26e01961f424871853392629c3a95697 implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroUI/layouts/blank/page/components.html.twig' );
        $layoutManipulator->add( 'copyright', 'page_footer', 'block', array (
        ), NULL, false );
    }
}
