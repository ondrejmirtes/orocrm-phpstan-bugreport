<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/page/layout.yml
 */
class __Oro_Layout_Update_475de48b26921327bfc4a2cb37a3e609eef353d4fc5075f4a8220f0072ac235c implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroDataGrid/layouts/blank/page/layout.html.twig' );
    }
}
