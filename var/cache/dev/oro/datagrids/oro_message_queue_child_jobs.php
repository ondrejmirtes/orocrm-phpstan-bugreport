<?php return array (
  'oro_message_queue_child_jobs' => 
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
            0 => 'j.rootJob = :root_job_id',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'root_job_id',
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
      ),
    ),
  ),
);