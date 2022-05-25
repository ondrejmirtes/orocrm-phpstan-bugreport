<?php return array (
  'form' => 
  array (
    'synchronization_settings' => 
    array (
      'isTwoWaySyncEnabled' => 
      array (
        'type' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType',
        'options' => 
        array (
          'label' => 'oro.integration.integration.is_two_way_sync_enabled.label',
          'required' => false,
        ),
        'applicable' => 
        array (
          0 => '@oro_integration.utils.form_utils->hasTwoWaySyncConnectors($channelType$)',
        ),
      ),
      'syncPriority' => 
      array (
        'type' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType',
        'options' => 
        array (
          'label' => 'oro.integration.integration.sync_priority.label',
          'tooltip' => 'oro.integration.integration.sync_priority.tooltip',
          'required' => true,
          'choices' => 
          array (
            'oro.integration.integration.remote_wins.label' => 'remote',
            'oro.integration.integration.local_wins.label' => 'local',
          ),
        ),
        'applicable' => 
        array (
          0 => '@oro_integration.utils.form_utils->hasTwoWaySyncConnectors($channelType$)',
        ),
      ),
    ),
  ),
);