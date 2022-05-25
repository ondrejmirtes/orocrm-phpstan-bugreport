<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/layout_mobile.yml
 */
class __Oro_Layout_Update_a4bf361ee958f18fcf5092b714748249a0ac2cb3f2f7a6c4402e495aa895964c implements Oro\Component\Layout\LayoutUpdateInterface, Oro\Component\Layout\LayoutUpdateImportInterface, Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    private $import = null;
    private $parentLayoutUpdate = null;

    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }

        if (null === $this->import) {
            throw new \RuntimeException('Missing import configuration for layout update');
        }

        if ($this->parentLayoutUpdate instanceof \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
            && !$this->parentLayoutUpdate->isApplicable($item->getContext())) {
            return;
        }

        $layoutManipulator = new \Oro\Component\Layout\ImportLayoutManipulator($layoutManipulator, $this->import);
        $layoutManipulator->setBlockTheme( '@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout_mobile.html.twig' );
        $layoutManipulator->remove( '__datagrid_toolbar_extra_actions' );
        $layoutManipulator->remove( '__datagrid_toolbar_tools_container' );
        $layoutManipulator->move( '__datagrid_toolbar_actions', 'datagrid_toolbar', NULL, true );
        $layoutManipulator->add( '__datagrid_toolbar_pagination_container', '__datagrid_toolbar', 'container' );
        $layoutManipulator->move( '__datagrid_toolbar_pagination', '__datagrid_toolbar_pagination_container' );
        $layoutManipulator->move( '__datagrid_toolbar_page_size', '__datagrid_toolbar_pagination_container', '__datagrid_toolbar_pagination' );
    }

    public function isApplicable(Oro\Component\Layout\ContextInterface $context)
    {
        return ($context["is_mobile"] == true);
    }

    public function getImport()
    {
        return $this->import;
    }

    public function setImport(Oro\Component\Layout\Model\LayoutUpdateImport $import)
    {
        $this->import = $import;
    }

    public function setParentUpdate(Oro\Component\Layout\ImportsAwareLayoutUpdateInterface $parentLayoutUpdate)
    {
        $this->parentLayoutUpdate = $parentLayoutUpdate;
    }
}
