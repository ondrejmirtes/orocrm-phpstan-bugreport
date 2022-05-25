<?php return array (
  'oro-channels-grid' => 
  array (
    'acl_resource' => 'oro_channel_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'c.id',
          1 => 'c.name',
          2 => 'c.channelType',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\ChannelBundle\\Entity\\Channel',
            'alias' => 'c',
          ),
        ),
        'groupBy' => 'c.id',
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.channel.name.label',
      ),
      'channelType' => 
      array (
        'label' => 'oro.channel.channel_type.label',
        'frontend_type' => 'select',
        'choices' => '@oro_channel.provider.settings_provider->getChannelTypeChoiceList',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'c.name',
        ),
        'channelType' => 
        array (
          'data_name' => 'c.channelType',
        ),
      ),
      'default' => 
      array (
        'name' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'c.name',
        ),
        'channelType' => 
        array (
          'type' => 'choice',
          'data_name' => 'c.channelType',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_channel.provider.settings_provider->getChannelTypeChoiceList',
            ),
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_channel_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_channel',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_channel_view',
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
        'type' => 'navigate',
        'link' => 'view_link',
        'acl_resource' => 'oro_channel_view',
        'icon' => 'eye',
        'label' => 'oro.grid.action.view',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'link' => 'update_link',
        'acl_resource' => 'oro_channel_update',
        'icon' => 'edit',
        'label' => 'oro.grid.action.update',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'link' => 'delete_link',
        'acl_resource' => 'oro_channel_delete',
        'icon' => 'trash',
        'label' => 'oro.grid.action.delete',
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => true,
    ),
    'mass_actions' => 
    array (
      'delete' => 
      array (
        'disabled' => true,
      ),
    ),
  ),
);