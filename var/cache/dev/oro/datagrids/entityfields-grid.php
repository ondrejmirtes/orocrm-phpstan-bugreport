<?php return array (
  'entityfields-grid' => 
  array (
    'extends' => 'base-entityfields-grid',
    'acl_resource' => 'oro_entityconfig_manage',
    'properties' => 
    array (
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_entityconfig_field_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
);