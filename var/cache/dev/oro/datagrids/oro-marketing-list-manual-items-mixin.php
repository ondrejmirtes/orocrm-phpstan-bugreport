<?php return array (
  'oro-marketing-list-manual-items-mixin' => 
  array (
    'extends' => 'oro-marketing-list-manual-items-base-unsubscribe-mixin',
    'source' => 
    array (
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => 'mlr.id IS NULL',
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'remove_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_remove_marketinglist_removeditem',
        'params' => 
        array (
          0 => 'marketingList',
          1 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'remove' => 
      array (
        'type' => 'ajaxdelete',
        'requestType' => 'DELETE',
        'label' => 'oro.marketinglist.action.remove',
        'link' => 'remove_link',
        'icon' => 'remove',
        'acl_resource' => 'oro_marketing_list_removed_item_create',
        'defaultMessages' => 
        array (
          'confirm_title' => 'oro.marketinglist.remove_dialog.confirm_title',
          'confirm_ok' => 'oro.marketinglist.remove_dialog.confirm_ok',
          'confirm_cancel' => 'oro.marketinglist.remove_dialog.confirm_cancel',
          'confirm_content' => 'oro.marketinglist.remove_dialog.content',
          'success' => 'oro.marketinglist.remove_dialog.success',
        ),
      ),
    ),
  ),
);