<?php return array (
  'website-tracking-events-grid' => 
  array (
    'extends' => 'tracking-events-grid',
    'source' => 
    array (
      'query' => 
      array (
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'e.website',
              'alias' => 'w',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'w.identifier = :websiteIdentifier',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'websiteIdentifier',
      ),
    ),
  ),
);