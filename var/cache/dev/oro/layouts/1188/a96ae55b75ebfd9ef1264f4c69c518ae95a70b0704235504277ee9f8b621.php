<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout_mobile.yml
 */
class __Oro_Layout_Update_1188a96ae55b75ebfd9ef1264f4c69c518ae95a70b0704235504277ee9f8b621 implements Oro\Component\Layout\LayoutUpdateInterface, Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }

        $layoutManipulator->setOption( 'meta_viewport', 'content', 'width=device-width, initial-scale=1, viewport-fit=cover' );
    }

    public function isApplicable(Oro\Component\Layout\ContextInterface $context)
    {
        return $context["is_mobile"];
    }
}
