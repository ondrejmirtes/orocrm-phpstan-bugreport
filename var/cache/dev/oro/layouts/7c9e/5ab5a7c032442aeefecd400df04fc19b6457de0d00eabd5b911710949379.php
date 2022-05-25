<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/layout.yml
 */
class __Oro_Layout_Update_7c9e5ab5a7c032442aeefecd400df04fc19b6457de0d00eabd5b911710949379 implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->setBlockTheme( '@OroEmbeddedForm/layouts/embedded_default/layout.html.twig' );
    }
}
