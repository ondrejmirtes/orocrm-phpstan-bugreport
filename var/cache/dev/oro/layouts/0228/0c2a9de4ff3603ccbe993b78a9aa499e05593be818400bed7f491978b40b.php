<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/default.yml
 */
class __Oro_Layout_Update_02280c2a9de4ff3603ccbe993b78a9aa499e05593be818400bed7f491978b40b implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroDataGrid/layouts/blank/default.html.twig' );
    }
}
