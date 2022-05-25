<?php return array (
  'attachment-images-grid' => 
  array (
    'extends' => 'base-attachment-files-grid',
    'options' => 
    array (
      'entityHint' => 'oro.attachment.fileitem.image.plural_label',
    ),
    'columns' => 
    array (
      'image' => 
      array (
        'label' => 'oro.attachment.file.image.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroAttachment/Attachment/Datagrid/Property/image.html.twig',
      ),
      'originalFilename' => 
      array (
        'label' => 'oro.attachment.file.name.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroAttachment/Attachment/Datagrid/Property/fileLink.html.twig',
      ),
      'uploadedBy' => 
      array (
        'label' => 'oro.attachment.file.uploaded_by.label',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
    ),
  ),
);