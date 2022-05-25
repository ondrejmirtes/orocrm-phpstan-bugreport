<?php return array (
  'menu-global-grid' => 
  array (
    'source' => 
    array (
      'type' => 'menu-update',
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.navigation.menuitem.name.label',
      ),
    ),
    'properties' => 
    array (
      'view_link' => 
      array (
        'route' => 'oro_navigation_global_menu_view',
        'type' => 'url',
        'params' => 
        array (
          'menuName' => 'name',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'link' => 'view_link',
        'icon' => 'eye',
        'rowAction' => true,
      ),
    ),
    'options' => 
    array (
      'toolbarOptions' => 
      array (
        'hide' => true,
      ),
    ),
  ),
);