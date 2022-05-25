<?php return array (
  'tag-results-grid' => 
  array (
    'options' => 
    array (
      'entityHint' => 'oro.tag.tagging.datagrid.entity_hint',
    ),
    'acl_resource' => 'oro_tag_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'tt.entityName',
          1 => 'tt.recordId',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\TagBundle\\Entity\\Tagging',
            'alias' => 'tt',
          ),
        ),
        'groupBy' => 'tt.entityName, tt.recordId',
        'where' => 
        array (
          'and' => 
          array (
            0 => 'tt.tag = :tag',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'entity' => 
      array (
        'label' => 'Item',
        'type' => 'tag-search-result',
        'frontend_type' => 'html',
      ),
    ),
  ),
);