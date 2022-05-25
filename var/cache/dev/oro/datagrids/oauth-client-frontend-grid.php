<?php return array (
  'oauth-client-frontend-grid' => 
  array (
    'extends' => 'oauth-client-backend-grid',
    'properties' => 
    array (
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_oauth2_frontend_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_oauth2_frontend_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
  ),
);