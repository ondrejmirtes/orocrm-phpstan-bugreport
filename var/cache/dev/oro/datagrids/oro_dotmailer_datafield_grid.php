<?php return array (
  'oro_dotmailer_datafield_grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\DotmailerBundle\\Entity\\DataField',
    'channel_limitation' => 
    array (
      'channel_relation_path' => '.channel',
    ),
    'options' => 
    array (
      'entityHint' => 'oro.dotmailer.datafield.entity_plural_label',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'field.id',
          1 => 'field.name',
          2 => 'field.notes',
          3 => 'channel.name as channelName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\DotmailerBundle\\Entity\\DataField',
            'alias' => 'field',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'field.channel',
              'alias' => 'channel',
            ),
          ),
        ),
      ),
    ),
    'inline_editing' => 
    array (
      'enable' => true,
      'behaviour' => 'enable_selected',
    ),
    'columns' => 
    array (
      'channelName' => 
      array (
        'label' => 'oro.dotmailer.datafield.channel.label',
      ),
      'name' => 
      array (
        'label' => 'oro.dotmailer.datafield.name.label',
      ),
      'notes' => 
      array (
        'label' => 'oro.dotmailer.datafield.notes.label',
        'inline_editing' => 
        array (
          'enable' => true,
          'editor' => 
          array (
            'view' => 'oroform/js/app/views/editor/text-editor-view',
          ),
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'field.name',
        ),
        'channelName' => 
        array (
          'data_name' => 'channel.name',
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
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'field.name',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_dotmailer_datafield_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_dotmailer_datafield',
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
        'acl_resource' => 'oro_dotmailer_datafield_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye-open',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_dotmailer_datafield_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
  ),
);