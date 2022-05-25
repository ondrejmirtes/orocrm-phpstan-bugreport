<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/imports/datagrid/layout.yml
 */
class __Oro_Layout_Update_64619a65033f0e594a362f60e721221735675b377e8b1f8b8769a8f97c9d6a0c implements Oro\Component\Layout\LayoutUpdateInterface, Oro\Component\Layout\ImportsAwareLayoutUpdateInterface, Oro\Component\Layout\LayoutUpdateImportInterface, Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->add( '__datagrid', '__root', 'datagrid' );
    }

    public function getImports()
    {
        return array (
          0 =>
          array (
            'id' => 'datagrid_toolbar',
            'root' => '__root',
          ),
        );
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
