<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/layouts/blank/layout.yml
 */
class __Oro_Layout_Update_c2f30177ee8e5e57c0cc50e8aea5e4f4b60276a2965f21db2e128ef8aa23a4f0 implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroEntityConfig/layouts/blank/layout.html.twig' );
    }
}
