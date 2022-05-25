<?php return array (
  'oro_dotmailer_datafield_mapping_grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\DotmailerBundle\\Entity\\DataFieldMapping',
    'options' => 
    array (
      'entityHint' => 'oro.dotmailer.datafieldmapping.entity_plural_label',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'mapping.id',
          1 => 'mapping.entity',
          2 => 'mapping.syncPriority',
          3 => 'channel.name as channelName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\DotmailerBundle\\Entity\\DataFieldMapping',
            'alias' => 'mapping',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'mapping.channel',
              'alias' => 'channel',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'channelName' => 
      array (
        'label' => 'oro.dotmailer.datafieldmapping.channel.label',
      ),
      'entity' => 
      array (
        'label' => 'oro.dotmailer.datafieldmapping.entity.label',
        'type' => 'twig',
        'template' => '@OroEntity/Datagrid/Property/entity.html.twig',
        'frontend_type' => 'html',
        'context' => 
        array (
          'entity_provider' => '@oro_dotmailer.entity_provider',
        ),
      ),
      'syncPriority' => 
      array (
        'label' => 'oro.dotmailer.datafieldmapping.sync_priority.label',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'entity' => 
        array (
          'data_name' => 'mapping.entity',
        ),
        'channelName' => 
        array (
          'data_name' => 'channel.name',
        ),
        'syncPriority' => 
        array (
          'data_name' => 'mapping.syncPriority',
        ),
      ),
      'default' => 
      array (
        'entity' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'channelName' => 
        array (
          'type' => 'entity',
          'data_name' => 'channel.id',
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\IntegrationBundle\\Entity\\Channel',
              'choice_label' => 'name',
              'translatable_options' => false,
            ),
          ),
        ),
        'entity' => 
        array (
          'type' => 'string',
          'data_name' => 'mapping.entity',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_dotmailer_datafield_mapping_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_dotmailer_datafield_mapping',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_dotmailer_datafield_mapping_update',
        'label' => 'oro.grid.action.view',
        'icon' => 'edit',
        'link' => 'update_link',
        'rowAction' => true,
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_dotmailer_datafield_mapping_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
  ),
);