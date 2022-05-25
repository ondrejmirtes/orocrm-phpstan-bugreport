<?php return array (
  'oro-cron-schedules-grid' => 
  array (
    'acl_resource' => 'oro_cron_schedule_view',
    'options' => 
    array (
      'entityHint' => 'oro.cron.schedule.entity_plural_label',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query_builder' => '@oro_cron.repository.schedule->getEnabledSchedulesQb',
    ),
    'columns' => 
    array (
      'command' => 
      array (
        'label' => 'oro.cron.schedule.command.label',
        'cellClassName' => 'direction-ltr',
        'type' => 'twig',
        'template' => '@OroCron/Schedule/Datagrid/command.html.twig',
        'frontend_type' => 'html',
      ),
      'definition' => 
      array (
        'label' => 'oro.cron.schedule.definition.label',
        'cellClassName' => 'direction-ltr',
        'type' => 'twig',
        'template' => '@OroCron/Schedule/Datagrid/definition.html.twig',
        'frontend_type' => 'html',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'command' => 
        array (
          'data_name' => 's.command',
        ),
        'definition' => 
        array (
          'data_name' => 's.definition',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'command' => 
        array (
          'type' => 'command_with_args',
          'data_name' => 's.command, s.arguments',
        ),
        'definition' => 
        array (
          'type' => 'string',
          'data_name' => 's.definition',
        ),
      ),
    ),
  ),
);