<?php return array (
  'oro-marketing-list-removed-items-mixin' => 
  array (
    'extends' => 'oro-marketing-list-items-base-mixin',
    'source' => 
    array (
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => 'mlr.id IS NOT NULL',
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'unremove_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_unremove_marketinglist_removeditem',
        'params' => 
        array (
          0 => 'marketingList',
          1 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'unremove' => 
      array (
        'type' => 'ajaxdelete',
        'requestType' => 'POST',
        'label' => 'oro.marketinglist.action.unremove',
        'link' => 'unremove_link',
        'icon' => 'undo',
        'acl_resource' => 'oro_marketing_list_removed_item_delete',
        'defaultMessages' => 
        array (
          'confirm_title' => 'oro.marketinglist.unremove_dialog.confirm_title',
          'confirm_ok' => 'oro.marketinglist.unremove_dialog.confirm_ok',
          'confirm_cancel' => 'oro.marketinglist.unremove_dialog.confirm_cancel',
          'confirm_content' => 'oro.marketinglist.unremove_dialog.content',
          'success' => 'oro.marketinglist.unremove_dialog.success',
        ),
      ),
    ),
  ),
);