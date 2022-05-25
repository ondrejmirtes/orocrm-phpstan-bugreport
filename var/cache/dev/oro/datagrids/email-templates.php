<?php return array (
  'email-templates' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\EmailBundle\\Entity\\EmailTemplate',
    'acl_resource' => 'oro_email_emailtemplate_index',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 't.id',
          1 => 't.entityName',
          2 => 't.name',
          3 => 't.type',
          4 => 't.isSystem',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EmailBundle\\Entity\\EmailTemplate',
            'alias' => 't',
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 't.visible = true',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'entityName' => 
      array (
        'label' => 'oro.email.emailtemplate.entity_name.label',
        'type' => 'twig',
        'template' => '@OroEntity/Datagrid/Property/entity.html.twig',
        'frontend_type' => 'html',
        'context' => 
        array (
          'entity_provider' => '@oro_entity.entity_provider',
        ),
      ),
      'name' => 
      array (
        'label' => 'oro.email.emailtemplate.name.label',
      ),
      'type' => 
      array (
        'frontend_type' => 'select',
        'label' => 'oro.email.emailtemplate.type.label',
        'choices' => '@oro_email.emailtemplate.datagrid_helper->getTypeChoices',
      ),
      'isSystem' => 
      array (
        'frontend_type' => 'boolean',
        'label' => 'oro.email.emailtemplate.is_system.label',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_emailtemplate_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'clone_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_emailtemplate_clone',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_emailtemplate',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'entityName' => 
        array (
          'type' => 'choice',
          'data_name' => 't.entityName',
          'null_value' => '_empty_',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_email.emailtemplate.datagrid_helper->getEntityNames',
              'translatable_options' => false,
            ),
          ),
        ),
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 't.name',
        ),
        'type' => 
        array (
          'type' => 'choice',
          'data_name' => 't.type',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_email.emailtemplate.datagrid_helper->getTypeChoices',
            ),
          ),
        ),
        'isSystem' => 
        array (
          'type' => 'boolean',
          'data_name' => 't.isSystem',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 't.name',
        ),
        'type' => 
        array (
          'data_name' => 't.type',
        ),
        'isSystem' => 
        array (
          'data_name' => 't.isSystem',
        ),
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'link' => 'update_link',
        'icon' => 'pencil-square-o',
        'acl_resource' => 'oro_email_emailtemplate_update',
        'rowAction' => true,
      ),
      'clone' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.clone',
        'link' => 'clone_link',
        'icon' => 'files-o',
        'acl_resource' => 'oro_email_emailtemplate_create',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'acl_resource' => 'oro_email_emailtemplate_delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => true,
      'entityHint' => 'oro.email.emailtemplate.entity_plural_label',
    ),
    'action_configuration' => '@oro_email.emailtemplate.datagrid_helper->getActionConfigurationClosure',
    'views_list' => '@oro_email.emailtemplate.datagrid_view_list',
  ),
);