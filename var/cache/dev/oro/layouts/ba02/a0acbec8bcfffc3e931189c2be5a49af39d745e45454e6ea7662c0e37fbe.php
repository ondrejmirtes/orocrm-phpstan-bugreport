<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ContactUsBundle/Resources/views/layouts/embedded_default/oro_embedded_form_submit/default.yml
 */
class __Oro_Layout_Update_ba02a0acbec8bcfffc3e931189c2be5a49af39d745e45454e6ea7662c0e37fbe implements Oro\Component\Layout\LayoutUpdateInterface, Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }

        $layoutManipulator->setBlockTheme( '@OroContactUs/layouts/embedded_default/oro_embedded_form_submit/form.html.twig' );
        $layoutManipulator->setOption( 'embedded_form', 'preferred_fields', array (
          0 => 'firstName',
          1 => 'lastName',
          2 => 'emailAddress',
          3 => 'phone',
        ) );
        $layoutManipulator->add( 'name_group', 'embedded_form', 'fieldset' );
        $layoutManipulator->move( 'embedded_form_firstName', 'name_group' );
        $layoutManipulator->move( 'embedded_form_lastName', 'name_group' );
    }

    public function isApplicable(Oro\Component\Layout\ContextInterface $context)
    {
        return ($context["embedded_form_type"] == "Oro\\Bundle\\ContactUsBundle\\Form\\Type\\ContactRequestType");
    }
}
