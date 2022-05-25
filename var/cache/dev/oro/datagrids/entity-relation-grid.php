<?php return array (
  'entity-relation-grid' => 
  array (
    'acl_resource' => NULL,
    'options' => 
    array (
      'entityHint' => 'oro.entity.plural_label',
      'routerEnabled' => false,
      'rowSelection' => 
      array (
        'dataField' => 'id',
        'columnName' => 'assigned',
        'selectors' => 
        array (
          'included' => '#appendRelation',
          'excluded' => '#removeRelation',
        ),
      ),
    ),
    'source' => 
    array (
      'type' => 'orm',
    ),
    'columns' => 
    array (
      'assigned' => 
      array (
        'frontend_type' => 'boolean',
        'label' => 'oro.entity.datagrid.assigned',
        'editable' => true,
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'assigned' => 
        array (
          'data_name' => 'assigned',
        ),
      ),
      'default' => 
      array (
        'assigned' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'assigned' => 
        array (
          'type' => 'boolean',
          'data_name' => 'assigned',
          'filter_by_having' => true,
        ),
      ),
    ),
  ),
);