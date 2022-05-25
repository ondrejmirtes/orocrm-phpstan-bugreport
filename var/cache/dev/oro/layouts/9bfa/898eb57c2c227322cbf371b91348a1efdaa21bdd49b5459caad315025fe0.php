<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/oro_embedded_form_submit/default.yml
 */
class __Oro_Layout_Update_9bfa898eb57c2c227322cbf371b91348a1efdaa21bdd49b5459caad315025fe0 implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->add( 'embedded_form_start', 'content', 'embed_form_start', array (
          'form_name' => 'embedded_form',
        ) );
        $layoutManipulator->add( 'embedded_form', 'content', 'embed_form_fields', array (
          'form_name' => 'embedded_form',
        ) );
        $layoutManipulator->add( 'embedded_form_end', 'content', 'embed_form_end', array (
          'form_name' => 'embedded_form',
        ) );
    }
}
