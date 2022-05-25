<?php return array (
  'auditfield-log-grid' => 
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
              'condition' => 'diff.className = :objectClass AND diff.fieldName = :fieldName',
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
          'is_entity' => false,
          'field_name' => NULL,
        ),
      ),
    ),
  ),
);