<?php return array (
  'digital-asset-select-file-grid' => 
  array (
    'extends' => 'digital-asset-grid',
    'options' => 
    array (
      'entityHint' => 'oro.digitalasset.datagrid.entity_hint.files',
    ),
    'source' => 
    array (
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => 'file.fileSize < CAST(:max_file_size as int)',
            1 => 'file.mimeType IN (:mime_types)',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 
        array (
          'name' => 'mime_types',
        ),
        1 => 
        array (
          'name' => 'max_file_size',
          'type' => 'integer',
        ),
      ),
    ),
    'properties' => 
    array (
      'previewMetadata' => 
      array (
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_digital_asset.provider.preview_metadata',
          1 => 'getMetadata',
        ),
        'params' => 
        array (
          0 => 'sourceFile',
        ),
        'frontend_type' => 'row_array',
      ),
    ),
    'columns' => 
    array (
      'originalFilename' => 
      array (
        'label' => 'oro.digitalasset.datagrid.column.original_filename.label',
        'order' => 20,
      ),
      'title' => 
      array (
        'order' => 30,
      ),
      'fileSize' => 
      array (
        'order' => 40,
        'renderable' => false,
        'cellClassName' => 'direction-ltr',
      ),
      'mimeType' => 
      array (
        'order' => 50,
        'renderable' => false,
      ),
      'owner' => 
      array (
        'label' => 'oro.digitalasset.datagrid.column.owner.label',
        'order' => 60,
      ),
      'createdAt' => 
      array (
        'order' => 70,
      ),
      'updatedAt' => 
      array (
        'renderable' => false,
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'fileSize' => 
        array (
          'renderable' => false,
        ),
        'mimeType' => 
        array (
          'renderable' => false,
        ),
      ),
    ),
    'action_configuration' => 
    array (
      'update' => false,
      'delete' => true,
    ),
  ),
);