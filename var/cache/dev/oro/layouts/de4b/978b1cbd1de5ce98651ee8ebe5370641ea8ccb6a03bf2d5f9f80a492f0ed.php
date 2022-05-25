<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/oro_embedded_form_submit/form_session_id.yml
 */
class __Oro_Layout_Update_de4b978b1cbd1de5ce98651ee8ebe5370641ea8ccb6a03bf2d5f9f80a492f0ed implements Oro\Component\Layout\LayoutUpdateInterface, Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }

        $layoutManipulator->add( 'embedded_form_session_id', 'embedded_form', 'input', array (
          'type' => 'hidden',
          'name' => '=data["embedded_form_session_id_field_name"]',
          'value' => '=data["embedded_form_session_id"]',
        ) );
    }

    public function isApplicable(Oro\Component\Layout\ContextInterface $context)
    {
        return ($context["embedded_form"] !== null);
    }
}
