<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-header.yml
 */
class __Oro_Layout_Update_0b51f3029aaf66973c8335cb36ce97c5df8be692db0d0154224f9619fbc326e3 implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroUI/layouts/blank/page/page-header.html.twig' );
        $layoutManipulator->add( 'page_header', 'page_container', 'container', array (
        ), NULL, true );
    }
}
