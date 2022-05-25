<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/middle_bar.yml
 */
class __Oro_Layout_Update_a44dc10b28d0358847de123446de076c5cf163b2f58b2825e086ca3fe8c0e0ac implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroUI/layouts/blank/page/middle_bar.html.twig' );
        $layoutManipulator->add( 'middle_bar', 'page_header', 'container', array (
        ), NULL, true );
        $layoutManipulator->add( 'middle_bar_logo', 'middle_bar', 'container' );
        $layoutManipulator->add( 'middle_bar_center', 'middle_bar', 'container' );
        $layoutManipulator->add( 'middle_bar_right', 'middle_bar', 'container' );
    }
}
