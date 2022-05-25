<?php return array (
  'audit-log-grid' => 
  array (
    'extends' => 'entity-audit-grid',
    'source' => 
    array (
      'query' => 
      array (
        'join' => 
        array (
          'inner' => 
          array (
            'diffs' => 
            array (
              'condition' => 'diff.className = :objectClass AND diff.fieldName IS NULL',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'diffs' => 
      array (
        'context' => 
        array (
          'is_entity' => true,
        ),
      ),
    ),
  ),
);