<?php return array (
  'oro-marketing-list-grid' => 
  array (
    'extends' => 'oro-base-marketing-list-grid',
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'link' => 'view_link',
        'icon' => 'eye',
        'acl_resource' => 'oro_marketing_list_view',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_marketing_list_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
        'launcherOptions' => 
        array (
          'className' => 'no-hash mobile-hide',
        ),
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_marketing_list_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
        'launcherOptions' => 
        array (
          'className' => 'no-hash mobile-hide',
        ),
      ),
    ),
  ),
);