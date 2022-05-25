<?php return array (
  'digital-asset-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\DigitalAssetBundle\\Entity\\DigitalAsset',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'digitalAsset',
          1 => 'file',
          2 => 'digitalAsset.id',
          3 => 'file.originalFilename',
          4 => 'file.mimeType',
          5 => 'file.fileSize',
          6 => 'file.createdAt',
          7 => 'file.updatedAt',
          8 => 'CONCAT(owner.firstName, \' \', owner.lastName) as ownerName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\DigitalAssetBundle\\Entity\\DigitalAsset',
            'alias' => 'digitalAsset',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'digitalAsset.sourceFile',
              'alias' => 'file',
            ),
            1 => 
            array (
              'join' => 'digitalAsset.owner',
              'alias' => 'owner',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'title' => 
      array (
        'type' => 'localized_value',
        'label' => 'oro.digitalasset.titles.label',
        'data_name' => 'titles',
      ),
      'originalFilename' => 
      array (
        'type' => 'twig',
        'label' => 'oro.attachment.file.filename.label',
        'frontend_type' => 'html',
        'template' => '@OroDigitalAsset/DigitalAsset/Datagrid/Property/sourceFileLink.html.twig',
        'data_name' => 'sourceFile',
      ),
      'fileSize' => 
      array (
        'label' => 'oro.attachment.file.file_size.label',
        'cellClassName' => 'direction-ltr',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroDigitalAsset/DigitalAsset/Datagrid/Property/fileSize.html.twig',
      ),
      'mimeType' => 
      array (
        'label' => 'oro.attachment.file.mime_type.label',
      ),
      'owner' => 
      array (
        'label' => 'oro.attachment.file.owner.label',
        'data_name' => 'ownerName',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
      'updatedAt' => 
      array (
        'label' => 'oro.ui.updated_at',
        'frontend_type' => 'datetime',
        'renderable' => false,
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'title' => 
      array (
        'type' => 'localized_value',
        'data_name' => 'titles',
      ),
      'updateLink' => 
      array (
        'type' => 'url',
        'route' => 'oro_digital_asset_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'title' => 
        array (
          'data_name' => 'title',
        ),
        'originalFilename' => 
        array (
          'data_name' => 'file.originalFilename',
        ),
        'fileSize' => 
        array (
          'data_name' => 'file.fileSize',
        ),
        'mimeType' => 
        array (
          'data_name' => 'file.mimeType',
        ),
        'owner' => 
        array (
          'data_name' => 'ownerName',
        ),
        'createdAt' => 
        array (
          'data_name' => 'digitalAsset.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'digitalAsset.updatedAt',
        ),
      ),
      'default' => 
      array (
        'createdAt' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'title' => 
        array (
          'type' => 'string',
          'label' => 'oro.digitalasset.titles.label',
          'data_name' => 'title',
        ),
        'originalFilename' => 
        array (
          'type' => 'string',
          'label' => 'oro.attachment.file.filename.label',
          'data_name' => 'file.originalFilename',
        ),
        'fileSize' => 
        array (
          'type' => 'number',
          'label' => 'oro.digitalasset.datagrid.filter.file_size.label',
          'data_name' => 'file.fileSize',
        ),
        'mimeType' => 
        array (
          'type' => 'choice',
          'label' => 'oro.attachment.file.mime_type.label',
          'data_name' => 'file.mimeType',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_digital_asset.provider.file_constraints->getMimeTypesAsChoices',
              'translatable_options' => false,
            ),
          ),
        ),
        'owner' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.digitalasset.datagrid.column.owner.label',
          'data_name' => 'digitalAsset.owner',
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'digitalAsset.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'digitalAsset.updatedAt',
          'renderable' => false,
        ),
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'link' => 'updateLink',
        'icon' => 'edit',
        'acl_resource' => 'oro_digital_asset_update',
        'rowAction' => true,
      ),
    ),
  ),
);