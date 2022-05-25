<?php return array (
  'digital-asset-select-image-grid' => 
  array (
    'extends' => 'digital-asset-select-file-grid',
    'options' => 
    array (
      'entityHint' => 'oro.digitalasset.datagrid.entity_hint.images',
    ),
    'columns' => 
    array (
      'file' => 
      array (
        'type' => 'twig',
        'label' => 'oro.digitalasset.datagrid.column.file.label',
        'frontend_type' => 'html',
        'template' => '@OroDigitalAsset/DigitalAsset/Datagrid/Property/image.html.twig',
        'data_name' => 'sourceFile',
        'order' => 10,
      ),
      'originalFilename' => 
      array (
        'order' => 20,
      ),
      'title' => 
      array (
        'order' => 30,
      ),
      'fileSize' => 
      array (
        'order' => 40,
      ),
      'mimeType' => 
      array (
        'order' => 50,
      ),
      'owner' => 
      array (
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
  ),
);