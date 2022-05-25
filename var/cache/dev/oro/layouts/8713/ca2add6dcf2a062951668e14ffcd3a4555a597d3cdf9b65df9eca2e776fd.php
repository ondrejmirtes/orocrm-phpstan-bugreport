<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/layout.yml
 */
class __Oro_Layout_Update_8713ca2add6dcf2a062951668e14ffcd3a4555a597d3cdf9b65df9eca2e776fd implements Oro\Component\Layout\LayoutUpdateInterface, Oro\Component\Layout\LayoutUpdateImportInterface, Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    private $import = null;
    private $parentLayoutUpdate = null;

    public function updateLayout(
        Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator,
        Oro\Component\Layout\LayoutItemInterface $item
    ) {
        if (null === $this->import) {
            throw new \RuntimeException('Missing import configuration for layout update');
        }

        if ($this->parentLayoutUpdate instanceof \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
            && !$this->parentLayoutUpdate->isApplicable($item->getContext())) {
            return;
        }

        $layoutManipulator = new \Oro\Component\Layout\ImportLayoutManipulator($layoutManipulator, $this->import);
        $layoutManipulator->setBlockTheme( '@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout.html.twig' );
        $layoutManipulator->add( '__datagrid_toolbar', '__root', 'container' );
        $layoutManipulator->add( '__datagrid_items_counter', '__datagrid_toolbar', 'block' );
        $layoutManipulator->add( '__datagrid_toolbar_sorting', '__datagrid_toolbar', 'block' );
        $layoutManipulator->add( '__datagrid_toolbar_actions_container', '__datagrid_toolbar', 'container' );
        $layoutManipulator->add( '__datagrid_toolbar_mass_actions', '__datagrid_toolbar_actions_container', 'container' );
        $layoutManipulator->add( '__datagrid_toolbar_extra_actions', '__datagrid_toolbar_actions_container', 'container' );
        $layoutManipulator->add( '__datagrid_toolbar_tools_container', '__datagrid_toolbar', 'container' );
        $layoutManipulator->add( '__datagrid_toolbar_actions', '__datagrid_toolbar_tools_container', 'container' );
        $layoutManipulator->add( '__datagrid_toolbar_page_size', '__datagrid_toolbar_tools_container', 'block' );
        $layoutManipulator->add( '__datagrid_toolbar_pagination', '__datagrid_toolbar', 'block' );
    }

    public function isApplicable(Oro\Component\Layout\ContextInterface $context)
    {
        return true;
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
