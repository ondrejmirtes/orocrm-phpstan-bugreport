<?php return array (
  'email-auto-response-rules' => 
  array (
    'acl_resource' => 'oro_email_autoresponserule_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'r.id',
          1 => 'r.name',
          2 => 'r.active',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EmailBundle\\Entity\\AutoResponseRule',
            'alias' => 'r',
          ),
        ),
        'where' => 
        array (
          'or' => 
          array (
            0 => 'r.mailbox = :mailbox',
            1 => 'r.id IN (:ids)',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        'mailbox' => 
        array (
          'default' => 0,
        ),
        'ids' => 
        array (
          'default' => 
          array (
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.email.autoresponserule.name.label',
      ),
      'active' => 
      array (
        'label' => 'oro.email.autoresponserule.status.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroEmail/AutoResponseRule/Datagrid/Property/active.html.twig',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_autoresponserule_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_autoresponserule',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'r.name',
        ),
        'active' => 
        array (
          'data_name' => 'r.active',
        ),
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'dialog',
        'acl_resource' => 'oro_email_autoresponserule_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
        'rowAction' => true,
        'widgetOptions' => 
        array (
          'reload-grid-name' => 'email-auto-response-rules',
          'options' => 
          array (
            'dialogOptions' => 
            array (
              'title' => '@translator->trans(oro.email.autoresponserule.action.update.title)',
              'allowMaximize' => false,
              'allowMinimize' => false,
              'modal' => true,
              'dblclick' => 'maximize',
              'maximizedHeightDecreaseBy' => 'minimize-bar',
              'width' => 1000,
            ),
          ),
        ),
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_email_autoresponserule_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
    'options' => 
    array (
      'toolbarOptions' => 
      array (
        'hide' => true,
      ),
      'jsmodules' => 
      array (
        0 => 'oroemail/js/datagrid/auto-response-rules-extension',
      ),
    ),
  ),
);