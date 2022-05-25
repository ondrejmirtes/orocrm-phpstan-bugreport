<?php return array (
  'attachment-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\AttachmentBundle\\Entity\\Attachment',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'attachment as att',
          1 => 'attachment.id as id',
          2 => 'attachment.comment as comment',
          3 => 'file.originalFilename as originalFilename',
          4 => 'file.fileSize as fileSize',
          5 => 'file.createdAt as createdAt',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\AttachmentBundle\\Entity\\Attachment',
            'alias' => 'attachment',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'attachment.file',
              'alias' => 'file',
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
      'originalFilename' => 
      array (
        'type' => 'twig',
        'label' => 'oro.attachment.file.filename.label',
        'frontend_type' => 'html',
        'template' => '@OroAttachment/Attachment/Datagrid/Property/attachmentLink.html.twig',
      ),
      'fileSize' => 
      array (
        'label' => 'oro.attachment.file.file_size.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroAttachment/Attachment/Datagrid/Property/fileSize.html.twig',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
      'comment' => 
      array (
        'label' => 'oro.attachment.comment.label',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_attachment_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_attachment',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'dialog',
        'acl_resource' => 'oro_attachment_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
        'widgetOptions' => 
        array (
          'reload-grid-name' => 'attachment-grid',
          'options' => 
          array (
            'dialogOptions' => 
            array (
              'title' => 'Update attachment',
              'width' => 550,
              'allowMaximize' => false,
              'allowMinimize' => false,
              'modal' => true,
              'maximizedHeightDecreaseBy' => 'minimize-bar',
            ),
          ),
        ),
        'messages' => 
        array (
          'saved' => 'oro.attachment.action.saved',
        ),
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_attachment_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
  ),
);