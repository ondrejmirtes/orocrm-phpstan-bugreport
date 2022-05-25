<?php return array (
  'attachment-files-grid' => 
  array (
    'extends' => 'base-attachment-files-grid',
    'options' => 
    array (
      'entityHint' => 'oro.attachment.fileitem.file.plural_label',
    ),
    'columns' => 
    array (
      'originalFilename' => 
      array (
        'label' => 'oro.attachment.file.filename.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroAttachment/Attachment/Datagrid/Property/fileLink.html.twig',
      ),
      'uploadedBy' => 
      array (
        'label' => 'oro.attachment.file.uploaded_by.label',
        'frontend_type' => 'relation',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
    ),
  ),
);