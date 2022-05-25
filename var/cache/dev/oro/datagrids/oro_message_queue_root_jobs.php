<?php return array (
  'oro_message_queue_root_jobs' => 
  array (
    'acl_resource' => 'oro_message_queue_job',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'j',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\MessageQueueBundle\\Entity\\Job',
            'alias' => 'j',
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'j.rootJob IS NULL',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.message_queue_job.grid.columns.id',
        'frontend_type' => 'integer',
      ),
      'name' => 
      array (
        'label' => 'oro.message_queue_job.grid.columns.name',
      ),
      'status' => 
      array (
        'label' => 'oro.message_queue_job.grid.columns.status',
        'type' => 'twig',
        'template' => '@OroMessageQueue/Job/Datagrid/status.html.twig',
        'frontend_type' => 'html',
      ),
      'unique' => 
      array (
        'label' => 'oro.message_queue_job.grid.columns.unique',
        'frontend_type' => 'boolean',
      ),
      'interrupted' => 
      array (
        'label' => 'oro.message_queue_job.grid.columns.interrupted',
        'frontend_type' => 'boolean',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.message_queue_job.grid.columns.createdAt',
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_locale.twig.date_time',
          1 => 'dateTimeMediumFormat',
        ),
        'params' => 
        array (
          'fieldName' => 'createdAt',
        ),
      ),
      'startedAt' => 
      array (
        'label' => 'oro.message_queue_job.grid.columns.startedAt',
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_locale.twig.date_time',
          1 => 'dateTimeMediumFormat',
        ),
        'params' => 
        array (
          'fieldName' => 'startedAt',
        ),
      ),
      'stoppedAt' => 
      array (
        'label' => 'oro.message_queue_job.grid.columns.stoppedAt',
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_locale.twig.date_time',
          1 => 'dateTimeMediumFormat',
        ),
        'params' => 
        array (
          'fieldName' => 'stoppedAt',
        ),
      ),
      'lastActiveAt' => 
      array (
        'label' => 'oro.message_queue_job.grid.columns.lastActiveAt',
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_locale.twig.date_time',
          1 => 'dateTimeMediumFormat',
        ),
        'params' => 
        array (
          'fieldName' => 'lastActiveAt',
        ),
        'renderable' => false,
      ),
      'percent' => 
      array (
        'label' => 'Progress',
        'type' => 'twig',
        'template' => '@OroMessageQueue/Job/Datagrid/percent.html.twig',
        'frontend_type' => 'html',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'data_name' => 'j.id',
        ),
        'status' => 
        array (
          'data_name' => 'j.status',
        ),
        'createdAt' => 
        array (
          'data_name' => 'j.createdAt',
        ),
        'startedAt' => 
        array (
          'data_name' => 'j.startedAt',
        ),
        'stoppedAt' => 
        array (
          'data_name' => 'j.stoppedAt',
        ),
        'lastActiveAt' => 
        array (
          'data_name' => 'j.lastActiveAt',
        ),
      ),
      'default' => 
      array (
        'id' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'j.name',
        ),
        'status' => 
        array (
          'type' => 'choice',
          'data_name' => 'j.status',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'oro.message_queue_job.status.new' => 'oro.message_queue_job.status.new',
                'oro.message_queue_job.status.running' => 'oro.message_queue_job.status.running',
                'oro.message_queue_job.status.success' => 'oro.message_queue_job.status.success',
                'oro.message_queue_job.status.failed' => 'oro.message_queue_job.status.failed',
                'oro.message_queue_job.status.cancelled' => 'oro.message_queue_job.status.cancelled',
                'oro.message_queue_job.status.stale' => 'oro.message_queue_job.status.stale',
              ),
            ),
          ),
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'j.createdAt',
        ),
        'startedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'j.startedAt',
        ),
        'stoppedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'j.stoppedAt',
        ),
        'lastActiveAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'j.lastActiveAt',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'child_jobs_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_message_queue_child_jobs',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'interrupt_root_job_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_message_queue_job_interrupt_root_job',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'type' => 'navigate',
        'link' => 'child_jobs_link',
        'acl_resource' => 'oro_message_queue_job',
        'rowAction' => true,
      ),
      'interrupt_root_job' => 
      array (
        'type' => 'ajax',
        'acl_resource' => 'oro_workflow_definition_delete',
        'label' => 'oro.message_queue_job.grid.action.interrupt',
        'icon' => 'close',
        'link' => 'interrupt_root_job_link',
      ),
    ),
    'action_configuration' => 
    array (
      0 => '@oro_message_queue.job.grid.root_job_action_configuration',
      1 => 'getConfiguration',
    ),
  ),
);