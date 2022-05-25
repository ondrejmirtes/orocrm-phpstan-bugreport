<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/oro_embedded_form_success/default.yml
 */
class __Oro_Layout_Update_a081e35805c105952e4d539fd1c00dad996a23a4b82585b67079098239a573f8 implements Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        $layoutManipulator->add( 'success_message', 'content', 'embed_form_success', array (
          'message' => '=data["embedded_form_entity"].getSuccessMessage()',
          'form_id' => '=data["embedded_form_entity"].getId()',
        ) );
    }
}
