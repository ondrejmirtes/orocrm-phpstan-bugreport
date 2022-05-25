<?php return array (
  'VIEW' => 
  array (
    'label' => 'VIEW',
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_all' => true,
    'apply_to_entities' => 
    array (
    ),
    'exclude_entities' => 
    array (
    ),
    'apply_to_interfaces' => 
    array (
    ),
  ),
  'CREATE' => 
  array (
    'exclude_entities' => 
    array (
      0 => 'Oro\\Bundle\\CronBundle\\Entity\\Schedule',
      1 => 'Oro\\Bundle\\ImportExportBundle\\Entity\\ImportExportResult',
      2 => 'Oro\\Bundle\\CalendarBundle\\Entity\\Calendar',
    ),
    'label' => 'CREATE',
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_all' => true,
    'apply_to_entities' => 
    array (
    ),
    'apply_to_interfaces' => 
    array (
    ),
  ),
  'EDIT' => 
  array (
    'exclude_entities' => 
    array (
      0 => 'Oro\\Bundle\\CronBundle\\Entity\\Schedule',
      1 => 'Oro\\Bundle\\ImportExportBundle\\Entity\\ImportExportResult',
      2 => 'Oro\\Bundle\\CalendarBundle\\Entity\\Calendar',
    ),
    'label' => 'EDIT',
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_all' => true,
    'apply_to_entities' => 
    array (
    ),
    'apply_to_interfaces' => 
    array (
    ),
  ),
  'DELETE' => 
  array (
    'exclude_entities' => 
    array (
      0 => 'Oro\\Bundle\\EmailBundle\\Entity\\EmailUser',
      1 => 'Oro\\Bundle\\CronBundle\\Entity\\Schedule',
      2 => 'Oro\\Bundle\\TranslationBundle\\Entity\\Language',
      3 => 'Oro\\Bundle\\ImportExportBundle\\Entity\\ImportExportResult',
      4 => 'Oro\\Bundle\\CalendarBundle\\Entity\\Calendar',
    ),
    'label' => 'DELETE',
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_all' => true,
    'apply_to_entities' => 
    array (
    ),
    'apply_to_interfaces' => 
    array (
    ),
  ),
  'ASSIGN' => 
  array (
    'exclude_entities' => 
    array (
      0 => 'Oro\\Bundle\\EmailBundle\\Entity\\EmailUser',
      1 => 'Oro\\Bundle\\CronBundle\\Entity\\Schedule',
      2 => 'Oro\\Bundle\\ImportExportBundle\\Entity\\ImportExportResult',
      3 => 'Oro\\Bundle\\CalendarBundle\\Entity\\Calendar',
      4 => 'Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent',
      5 => 'Oro\\Bundle\\CalendarBundle\\Entity\\SystemCalendar',
    ),
    'label' => 'ASSIGN',
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_all' => true,
    'apply_to_entities' => 
    array (
    ),
    'apply_to_interfaces' => 
    array (
    ),
  ),
  'VIEW_PRIVATE' => 
  array (
    'label' => 'oro.email.permission.view_private.label',
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_all' => false,
    'apply_to_entities' => 
    array (
      0 => 'Oro\\Bundle\\EmailBundle\\Entity\\EmailUser',
    ),
    'exclude_entities' => 
    array (
    ),
    'apply_to_interfaces' => 
    array (
    ),
  ),
  'CONFIGURE' => 
  array (
    'label' => 'oro.workflow.permission.update_configuration.label',
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_all' => false,
    'apply_to_entities' => 
    array (
      0 => 'Oro\\Bundle\\UserBundle\\Entity\\User',
      1 => 'Oro\\Bundle\\WorkflowBundle\\Entity\\WorkflowDefinition',
    ),
    'exclude_entities' => 
    array (
    ),
    'apply_to_interfaces' => 
    array (
    ),
  ),
  'MANAGE_API_KEY' => 
  array (
    'label' => 'oro.user.permission.manage_api_key.label',
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_all' => false,
    'apply_to_entities' => 
    array (
      0 => 'Oro\\Bundle\\UserBundle\\Entity\\User',
    ),
    'exclude_entities' => 
    array (
    ),
    'apply_to_interfaces' => 
    array (
    ),
  ),
  'TRANSLATE' => 
  array (
    'label' => 'oro.translation.language.permission.translate.label',
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_all' => false,
    'apply_to_entities' => 
    array (
      0 => 'Oro\\Bundle\\TranslationBundle\\Entity\\Language',
    ),
    'exclude_entities' => 
    array (
    ),
    'apply_to_interfaces' => 
    array (
    ),
  ),
  'CREATE_DRAFT' => 
  array (
    'label' => 'oro.draft.permission.create.label',
    'apply_to_all' => false,
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_interfaces' => 
    array (
      0 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
    ),
    'apply_to_entities' => 
    array (
    ),
    'exclude_entities' => 
    array (
    ),
  ),
  'VIEW_ALL_DRAFTS' => 
  array (
    'label' => 'oro.draft.permission.view_all.label',
    'apply_to_all' => false,
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_interfaces' => 
    array (
      0 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
    ),
    'apply_to_entities' => 
    array (
    ),
    'exclude_entities' => 
    array (
    ),
  ),
  'EDIT_ALL_DRAFTS' => 
  array (
    'label' => 'oro.draft.permission.edit_all.label',
    'apply_to_all' => false,
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_interfaces' => 
    array (
      0 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
    ),
    'apply_to_entities' => 
    array (
    ),
    'exclude_entities' => 
    array (
    ),
  ),
  'DELETE_DRAFT' => 
  array (
    'label' => 'oro.draft.permission.delete_own.label',
    'apply_to_all' => false,
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_interfaces' => 
    array (
      0 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
    ),
    'apply_to_entities' => 
    array (
    ),
    'exclude_entities' => 
    array (
    ),
  ),
  'DELETE_ALL_DRAFTS' => 
  array (
    'label' => 'oro.draft.permission.delete_all.label',
    'apply_to_all' => false,
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_interfaces' => 
    array (
      0 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
    ),
    'apply_to_entities' => 
    array (
    ),
    'exclude_entities' => 
    array (
    ),
  ),
  'PUBLISH_DRAFT' => 
  array (
    'label' => 'oro.draft.permission.publish.label',
    'apply_to_all' => false,
    'group_names' => 
    array (
      0 => 'default',
    ),
    'apply_to_interfaces' => 
    array (
      0 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
    ),
    'apply_to_entities' => 
    array (
    ),
    'exclude_entities' => 
    array (
    ),
  ),
);