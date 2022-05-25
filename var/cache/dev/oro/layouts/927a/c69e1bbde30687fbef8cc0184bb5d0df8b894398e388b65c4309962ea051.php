<?php

/**
 * Filename: /home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/layouts/default/imports/oro_workflow_transition_form/layout.yml
 */
class __Oro_Layout_Update_927ac69e1bbde30687fbef8cc0184bb5d0df8b894398e388b65c4309962ea051 implements Oro\Component\Layout\LayoutUpdateInterface, Oro\Component\Layout\LayoutUpdateImportInterface, Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '@OroWorkflow/layouts/default/imports/oro_workflow_transition_form/layout.html.twig' );
        $layoutManipulator->add( 'transition_form_wrapper', 'transition_form_holder', 'container' );
        $layoutManipulator->add( 'form_warning_message', 'transition_form_wrapper', 'text', array (
          'text' => '=data["translator"].getTrans(data["transition"].getMessage(),[],"workflows")',
          'visible' => '=((data["transition"].getMessage()!="")&&(data["translator"].getTrans(data["transition"].getMessage(),[],"workflows")!=data["transition"].getMessage()))',
        ) );
        $layoutManipulator->add( 'form_start', 'transition_form_wrapper', 'form_start', array (
          'form' => '=data["transitionFormView"]',
          'form_route_name' => '=data["formRouteName"]',
          'form_route_parameters' =>
          array (
            'workflowItemId' => '=data["workflowItem"].getId()',
            'transitionName' => '=data["transition"].getName()',
            'originalUrl' => '=data["originalUrl"]',
          ),
        ) );
        $layoutManipulator->add( 'form_fields', 'transition_form_wrapper', 'form_fields', array (
          'form' => '=data["transitionFormView"]',
        ) );
        $layoutManipulator->add( 'form_actions', 'transition_form_wrapper', 'container' );
        $layoutManipulator->add( 'form_actions_submit', 'form_actions', 'button', array (
          'action' => 'submit',
          'text' => 'oro.workflow.transition.form.submit.label',
          'style' => 'auto',
        ) );
        $layoutManipulator->add( 'form_end', 'transition_form_wrapper', 'form_end', array (
          'form' => '=data["transitionFormView"]',
        ) );
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
