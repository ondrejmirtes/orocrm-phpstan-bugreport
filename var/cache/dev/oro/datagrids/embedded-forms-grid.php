<?php return array (
  'embedded-forms-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\EmbeddedFormBundle\\Entity\\EmbeddedForm',
    'acl_resource' => 'oro_embedded_form_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'embedded_form.id',
          1 => 'embedded_form.title',
          2 => 'embedded_form.formType',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EmbeddedFormBundle\\Entity\\EmbeddedForm',
            'alias' => 'embedded_form',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'title' => 
      array (
        'label' => 'oro.embeddedform.title.label',
      ),
      'formType' => 
      array (
        'label' => 'oro.embeddedform.form_type.label',
        'type' => 'embedded_form_type',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'title' => 
        array (
          'data_name' => 'embedded_form.title',
        ),
      ),
      'default' => 
      array (
        'title' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'title' => 
        array (
          'type' => 'string',
          'data_name' => 'embedded_form.title',
        ),
        'formType' => 
        array (
          'type' => 'choice',
          'data_name' => 'embedded_form.formType',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_embedded_form.manager->getAllChoices',
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
        'route' => 'oro_embedded_form_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_embedded_form_delete',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_embedded_form_view',
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
        'acl_resource' => 'oro_embedded_form_view',
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'acl_resource' => 'oro_embedded_form_update',
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'acl_resource' => 'oro_embedded_form_delete',
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.embeddedform.entity_plural_label',
      'entity_pagination' => true,
    ),
  ),
);