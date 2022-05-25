<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/logo.yml
 */
class __Oro_Layout_Update_b8a7e411ccb55054e854db0b40a3919bf6736b6ac72365e55751674b482bbc14 implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->add( 'logo', 'middle_bar_logo', 'logo', array (
          'width' => 167,
          'height' => 32,
        ) );
        $layoutManipulator->add( 'logo_print', 'page_container', 'logo', array (
          'attr' =>
          array (
            'class' => 'logo--print-only',
          ),
          'renderLink' => false,
        ), 'page_header' );
    }
}
