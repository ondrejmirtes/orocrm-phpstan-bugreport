<?php return array (
  'recent_emails' => 
  array (
    'title' => 'oro.email.recent_emails_widget.title',
    'iconClass' => 'mail-icon',
    'dialogIcon' => 'bundles/oroemail/sidebar_widgets/recent_emails/img/recent_emails.png',
    'module' => 'oroemail/sidebar_widgets/recent_emails/js/widget',
    'placement' => 'both',
    'cssClass' => 'sidebar-widget-recent-emails',
    'description' => 'oro.email.recent_emails_widget.description',
    'settings' => 
    array (
      'folderId' => 0,
      'limit' => 4,
      'defaultActionId' => 1,
    ),
    'icon' => NULL,
    'showRefreshButton' => true,
    'isNew' => false,
  ),
  'sticky_note' => 
  array (
    'title' => 'oro.sidebar.sticky_note_widget.title',
    'iconClass' => 'fa-sticky-note-o',
    'dialogIcon' => 'bundles/orosidebar/sidebar_widgets/sticky_note/img/icon-sticky.png',
    'module' => 'orosidebar/widget/sticky-note',
    'placement' => 'both',
    'cssClass' => 'sidebar-widget-sticky-note',
    'description' => 'oro.sidebar.sticky_note_widget.description',
    'settings' => 
    array (
      'content' => 'Welcome to OroCRM!
OroCRM is an easy-to-use, open source CRM with built-in marketing tools for your ecommerce business. learn more at www.orocrm.com
',
    ),
    'icon' => NULL,
    'showRefreshButton' => true,
    'isNew' => false,
  ),
  'assigned_tasks' => 
  array (
    'title' => 'oro.task.assigned_tasks_widget.title',
    'iconClass' => 'fa-tasks',
    'dialogIcon' => 'bundles/orotask/sidebar_widgets/assigned_tasks/img/icon-task.png',
    'module' => 'oro/sidebar/widget/assigned_tasks',
    'placement' => 'both',
    'cssClass' => 'sidebar-widget-assigned-tasks',
    'description' => 'oro.task.assigned_tasks_widget.description',
    'settings' => 
    array (
      'perPage' => 5,
    ),
    'icon' => NULL,
    'showRefreshButton' => true,
    'isNew' => false,
  ),
);