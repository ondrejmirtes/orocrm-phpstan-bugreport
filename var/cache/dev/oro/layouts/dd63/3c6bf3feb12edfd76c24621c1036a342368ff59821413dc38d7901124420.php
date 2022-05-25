<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/inline.yml
 */
class __Oro_Layout_Update_dd633c6bf3feb12edfd76c24621c1036a342368ff59821413dc38d7901124420 implements Oro\Component\Layout\LayoutUpdateInterface, Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }

        $layoutManipulator->changeBlockType( 'root', 'container' );
        $layoutManipulator->setBlockTheme( '@OroEmbeddedForm/layouts/embedded_default/form_inline.html.twig' );
        $layoutManipulator->add( 'content', 'root', 'container' );
        $layoutManipulator->add( 'form_css', 'content', 'style', array (
          'content' => '=data["embedded_form_entity"].getCss()',
        ) );
    }

    public function isApplicable(Oro\Component\Layout\ContextInterface $context)
    {
        return ($context["embedded_form_inline"] == true);
    }
}
