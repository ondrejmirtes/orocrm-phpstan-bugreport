<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/default.yml
 */
class __Oro_Layout_Update_22123213a94ad282895d91e06b45ead3d4d70c266f510f8e2892da98033fedc3 implements Oro\Component\Layout\LayoutUpdateInterface, Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }

        $layoutManipulator->add( 'head', 'root', 'head' );
        $layoutManipulator->add( 'title', 'head', 'title', array (
          'value' => 'Form',
        ) );
        $layoutManipulator->add( 'meta_charset', 'head', 'meta', array (
          'charset' => 'utf-8',
        ) );
        $layoutManipulator->add( 'meta_x_ua_compatible', 'head', 'meta', array (
          'http_equiv' => 'X-UA-Compatible',
          'content' => 'IE=edge,chrome=1',
        ) );
        $layoutManipulator->add( 'meta_viewport', 'head', 'meta', array (
          'name' => 'viewport',
          'content' => 'width=device-width, initial-scale=1.0',
        ) );
        $layoutManipulator->add( 'base_css', 'head', 'style' );
        $layoutManipulator->add( 'form_css', 'head', 'style', array (
          'content' => '=data["embedded_form_entity"].getCss()',
        ) );
        $layoutManipulator->add( 'content', 'root', 'body' );
        $layoutManipulator->setBlockTheme( '@OroEmbeddedForm/layouts/embedded_default/form.html.twig' );
    }

    public function isApplicable(Oro\Component\Layout\ContextInterface $context)
    {
        return ($context["embedded_form_inline"] == false);
    }
}
