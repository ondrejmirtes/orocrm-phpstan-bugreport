<?php return array (
  'oro-marketing-list-select-grid' => 
  array (
    'extends' => 'oro-base-marketing-list-grid',
    'inline_editing' => 
    array (
      'enable' => false,
    ),
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
    ),
  ),
);