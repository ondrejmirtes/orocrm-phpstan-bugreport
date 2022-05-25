<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.yml
 */
class __Oro_Layout_Update_fd72189eb14a655b161abb25313e8240dbc52f3d3a01299f82925ba4900a3f83 implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroForm/layouts/blank/layout.html.twig' );
        $layoutManipulator->setFormTheme( '@OroForm/layouts/blank/form_theme.html.twig' );
    }
}
