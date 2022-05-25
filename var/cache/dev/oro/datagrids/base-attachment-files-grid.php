<?php return array (
  'base-attachment-files-grid' => 
  array (
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'file_item as root',
          1 => 'file_item.sortOrder',
          2 => 'file.originalFilename as originalFilename',
          3 => 'CONCAT_WS(\' \', fileOwner.firstName, fileOwner.lastName) as uploadedBy',
          4 => 'file.createdAt',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\AttachmentBundle\\Entity\\FileItem',
            'alias' => 'file_item',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'file_item.file',
              'alias' => 'file',
            ),
            1 => 
            array (
              'join' => 'file.owner',
              'alias' => 'fileOwner',
            ),
            2 => 
            array (
              'join' => 'file.digitalAsset',
              'alias' => 'digitalAsset',
            ),
            3 => 
            array (
              'join' => 'digitalAsset.owner',
              'alias' => 'sourceOwner',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'entity.id = :entityId',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'sortOrder' => 
      array (
        'label' => 'oro.attachment.fileitem.sort_order.label',
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
        'sortOrder' => 
        array (
          'data_name' => 'file_item.sortOrder',
        ),
        'createdAt' => 
        array (
          'data_name' => 'file.createdAt',
        ),
      ),
      'default' => 
      array (
        'sortOrder' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'originalFilename' => 
        array (
          'type' => 'string',
          'data_name' => 'originalFilename',
        ),
        'uploadedBy' => 
        array (
          'type' => 'string',
          'data_name' => 'uploadedBy',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'language.createdAt',
        ),
      ),
    ),
  ),
);