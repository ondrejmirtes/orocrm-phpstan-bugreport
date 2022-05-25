<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-footer.yml
 */
class __Oro_Layout_Update_631900fa0f9c35842b7c1733f952966d957d607b4b177346ef5a8f52deab597e implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroUI/layouts/blank/page/page-footer.html.twig' );
        $layoutManipulator->add( 'page_footer', 'page_container', 'container', array (
        ), NULL, false );
        $layoutManipulator->add( 'page_footer_container', 'page_footer', 'container' );
        $layoutManipulator->add( 'page_footer_base', 'page_footer_container', 'container' );
        $layoutManipulator->add( 'page_footer_side', 'page_footer_container', 'container' );
    }
}
