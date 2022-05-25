<?php return array (
  'menu_config' => 
  array (
    'items' => 
    array (
      'oro_platform_system_info' => 
      array (
        'label' => 'oro.platform.system_info',
        'position' => 120,
        'route' => 'oro_platform_system_info',
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_business_unit_list' => 
      array (
        'label' => 'oro.organization.businessunit.entity_plural_label',
        'route' => 'oro_business_unit_index',
        'position' => 40,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_business_unit_*',
          ),
          'description' => 'oro.business_unit.menu.list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_organization_list' => 
      array (
        'label' => 'oro.organization.entity_label',
        'route' => 'oro_organization_update_current',
        'position' => 50,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_organization_*',
          ),
          'description' => 'oro.organization.menu.list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_message_queue_job' => 
      array (
        'label' => 'oro.message_queue_job.menu.label',
        'route' => 'oro_message_queue_root_jobs',
        'position' => 60,
        'extras' => 
        array (
          'description' => 'Job queue',
          'routes' => 
          array (
            0 => 'oro_message_queue_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_message_queue_job_shortcut' => 
      array (
        'label' => 'oro.message_queue_job.menu.shortcut.label',
        'route' => 'oro_message_queue_root_jobs',
        'extras' => 
        array (
          'description' => 'oro.message_queue_job.menu.shortcut.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'emails' => 
      array (
        'label' => 'oro.email.entity_plural_label',
        'uri' => '#',
        'position' => 40,
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_email_emailtemplate_list' => 
      array (
        'label' => 'oro.email.menu.emailtemplate.entity_plural_label',
        'route' => 'oro_email_emailtemplate_index',
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_email_emailtemplate_*',
          ),
          'description' => 'oro.email.menu.emailtemplate_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_email_user_emails' => 
      array (
        'label' => 'oro.email.menu.user_emails',
        'route' => 'oro_email_user_emails',
        'position' => 15,
        'attributes' => 
        array (
          'class' => 'oro-email-user-emails',
        ),
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_compose_email' => 
      array (
        'label' => 'oro.email.menu.shortcut_compose_email.label',
        'route' => 'oro_email_email_create',
        'extras' => 
        array (
          'description' => 'oro.email.menu.shortcut_compose_email.description',
          'is_custom_action' => true,
          'dialog' => true,
          'dialog_config' => 
          array (
            'dataUrl' => 'oro_email_email_create',
            'aCss' => 'no-hash',
            'iCss' => '',
            'label' => 'oro.email.menu.shortcut_compose_email.label',
            'widget' => 
            array (
              'type' => 'dialog',
              'multiple' => true,
              'refreshWidgetAlias' => 'activity-list-widget',
              'reloadGridName' => 'user-email-grid',
              'options' => 
              array (
                'alias' => 'email-dialog',
                'dialogOptions' => 
                array (
                  'title' => 'oro.email.menu.shortcut_compose_email.label',
                  'allowMaximize' => true,
                  'allowMinimize' => true,
                  'dblclick' => 'maximize',
                  'maximizedHeightDecreaseBy' => 'minimize-bar',
                  'width' => 1000,
                ),
              ),
            ),
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_cron_schedule' => 
      array (
        'label' => 'oro.cron.menu.cron_schedule.label',
        'route' => 'oro_cron_schedule_index',
        'position' => 70,
        'extras' => 
        array (
          'description' => 'oro.cron.menu.cron_schedule.description',
          'routes' => 
          array (
            0 => 'oro_cron_schedule_index',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'system_tab' => 
      array (
        'label' => 'oro.user.menu.system_tab.label',
        'uri' => '#',
        'attributes' => 
        array (
          'class' => 'mobile-hide',
        ),
        'position' => 100,
        'extras' => 
        array (
          'icon' => 'fa-gear',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'users_management' => 
      array (
        'label' => 'oro.user.menu.users_management.label',
        'uri' => '#',
        'position' => 20,
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'user_list' => 
      array (
        'label' => 'oro.user.entity_plural_label',
        'route' => 'oro_user_index',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_user_(?!role\\w+|group\\w+|security\\w+|reset\\w+)\\w+$/',
          ),
          'description' => 'oro.user.menu.user_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'user_create' => 
      array (
        'label' => 'oro.user.menu.user_create.label',
        'route' => 'oro_user_create',
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'user_roles' => 
      array (
        'label' => 'oro.user.role.entity_plural_label',
        'route' => 'oro_user_role_index',
        'position' => 20,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_user_role_*',
          ),
          'description' => 'oro.user.menu.user_roles.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'user_groups' => 
      array (
        'label' => 'oro.user.group.entity_plural_label',
        'route' => 'oro_user_group_index',
        'position' => 30,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_user_group_*',
          ),
          'description' => 'oro.user.menu.user_groupes.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_new_user' => 
      array (
        'label' => 'oro.user.menu.shortcut_new_user.label',
        'route' => 'oro_user_create',
        'extras' => 
        array (
          'description' => 'oro.user.menu.shortcut_new_user.description',
          'is_custom_action' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_list_users' => 
      array (
        'label' => 'oro.user.menu.shortcut_list_users.label',
        'route' => 'oro_user_index',
        'extras' => 
        array (
          'description' => 'oro.user.menu.shortcut_list_users.description',
          'is_custom_action' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_new_role' => 
      array (
        'label' => 'oro.user.menu.shortcut_new_role.label',
        'route' => 'oro_user_role_create',
        'extras' => 
        array (
          'description' => 'oro.user.menu.shortcut_new_role.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_new_group' => 
      array (
        'label' => 'oro.user.menu.shortcut_new_group.label',
        'route' => 'oro_user_group_create',
        'extras' => 
        array (
          'description' => 'oro.user.menu.shortcut_new_group.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_user_profile_view' => 
      array (
        'label' => 'oro.user.menu.oro_user_profile_view.label',
        'route' => 'oro_user_profile_view',
        'position' => 10,
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_user_profile_configuration' => 
      array (
        'label' => 'oro.user.menu.oro_user_profile_configuration.label',
        'route' => 'oro_user_profile_configuration',
        'position' => 12,
        'attributes' => 
        array (
          'class' => 'mobile-hide',
        ),
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'login_attempts' => 
      array (
        'label' => 'oro.user.userloginattempt.entity_plural_label',
        'route' => 'oro_user_login_attempts',
        'extras' => 
        array (
          'description' => 'oro.user.userloginattempt.entity_description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'languages' => 
      array (
        'label' => 'oro.translation.menu.languages.label',
        'route' => 'oro_translation_language_index',
        'position' => 200,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_translation_language/',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'translations' => 
      array (
        'label' => 'oro.translation.menu.translations.label',
        'route' => 'oro_translation_translation_index',
        'position' => 300,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_translation_translation/',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'localization' => 
      array (
        'label' => 'oro.locale.menu.localization.label',
        'uri' => '#',
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'localizations' => 
      array (
        'label' => 'oro.locale.menu.localizations.label',
        'route' => 'oro_locale_localization_index',
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_locale/',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'entities_list' => 
      array (
        'label' => 'oro.entity_config.menu.entities_list.label',
        'uri' => '#',
        'position' => 80,
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'entity_management' => 
      array (
        'label' => 'oro.entity_config.menu.entity_management.label',
        'route' => 'oro_entityconfig_index',
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_entityconfig*',
            1 => 'oro_entityextend*',
          ),
          'description' => 'oro.entity_config.menu.entity_management.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'attributes_list' => 
      array (
        'label' => 'oro.entity_config.menu.attributes_list.label',
        'uri' => '#',
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'digital_asset_list' => 
      array (
        'label' => 'oro.digitalasset.entity_plural_label',
        'route' => 'oro_digital_asset_index',
        'position' => 110,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_digital_asset/',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'integrations_submenu' => 
      array (
        'label' => 'oro.integration.menu.integrations_submenu.label',
        'uri' => '#',
        'position' => 50,
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'integrations_list' => 
      array (
        'label' => 'oro.integration.menu.integrations_list.label',
        'route' => 'oro_integration_index',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 'oro_integration_*',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_notification_emailnotification_list' => 
      array (
        'label' => 'oro.notification.emailnotification.entity_plural_label',
        'route' => 'oro_notification_emailnotification_index',
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_notification_emailnotification_*',
          ),
          'description' => 'oro.notification.menu.emailnotification_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_notification_massnotification_list' => 
      array (
        'label' => 'oro.notification.massnotification.entity_plural_label',
        'route' => 'oro_notification_massnotification_index',
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_notification_massnotification_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_notification_notificationalerts_list' => 
      array (
        'label' => 'oro.notification.menu.notification_alerts.label',
        'route' => 'oro_notification_notificationalert_index',
        'acl_resource_id' => 'oro_notification_notificationalert_view',
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'activities_tab' => 
      array (
        'label' => 'oro.activity.menu.activities_tab.label',
        'uri' => '#',
        'position' => 30,
        'extras' => 
        array (
          'icon' => 'fa-puzzle-piece',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'system_configuration' => 
      array (
        'label' => 'oro.config.menu.system_configuration.label',
        'position' => 10,
        'extras' => 
        array (
          'description' => 'oro.config.menu.system_configuration.description',
        ),
        'route' => 'oro_config_configuration_system',
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'audit_list' => 
      array (
        'label' => 'oro.dataaudit.menu.audit_list.label',
        'route' => 'oro_dataaudit_index',
        'position' => 70,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_dataaudit_*',
          ),
          'description' => 'oro.dataaudit.menu.audit_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'embedded_forms' => 
      array (
        'label' => 'oro.embeddedform.entity_plural_label',
        'route' => 'oro_embedded_form_list',
        'position' => 20,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_embedded_form_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'manage_reports' => 
      array (
        'label' => 'oro.report.menu.manage_reports.label',
        'route' => 'oro_report_index',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_report_update',
            1 => 'oro_report_create',
          ),
        ),
        'attributes' => 
        array (
          'class' => 'mobile-hide',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'static_reports_tab' => 
      array (
        'label' => 'oro.reportcrm.menu.static_reports_tab.label',
        'uri' => '#',
        'position' => 5,
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'accounts_report_tab' => 
      array (
        'label' => 'oro.reportcrm.menu.accounts_report_tab.label',
        'uri' => '#',
        'position' => 10,
        'extras' => 
        array (
          'skipBreadcrumbs' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'leads_report_tab' => 
      array (
        'label' => 'oro.reportcrm.menu.leads_report_tab.label',
        'uri' => '#',
        'position' => 20,
        'extras' => 
        array (
          'skipBreadcrumbs' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'opportunities_report_tab' => 
      array (
        'label' => 'oro.reportcrm.menu.opportunities_report_tab.label',
        'uri' => '#',
        'position' => 30,
        'extras' => 
        array (
          'skipBreadcrumbs' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'accounts_life_time_value' => 
      array (
        'label' => 'oro.reportcrm.menu.accounts_life_time_value.label',
        'route' => 'oro_reportcrm_index',
        'extras' => 
        array (
          'description' => 'oro.reportcrm.menu.accounts_life_time_value.description',
          'skipBreadcrumbs' => true,
        ),
        'routeParameters' => 
        array (
          'reportGroupName' => 'accounts',
          'reportName' => 'life_time_value',
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'accounts_by_opportunities' => 
      array (
        'label' => 'oro.reportcrm.menu.accounts_by_opportunities.label',
        'route' => 'oro_reportcrm_index',
        'extras' => 
        array (
          'description' => 'oro.reportcrm.menu.accounts_by_opportunities.description',
          'skipBreadcrumbs' => true,
        ),
        'routeParameters' => 
        array (
          'reportGroupName' => 'accounts',
          'reportName' => 'by_opportunities',
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'leads_by_date' => 
      array (
        'label' => 'oro.reportcrm.menu.leads_by_date.label',
        'route' => 'oro_reportcrm_index',
        'extras' => 
        array (
          'description' => 'oro.reportcrm.menu.leads_by_date.description',
          'skipBreadcrumbs' => true,
        ),
        'routeParameters' => 
        array (
          'reportGroupName' => 'leads',
          'reportName' => 'by_date',
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'opportunities_by_status' => 
      array (
        'label' => 'oro.reportcrm.menu.opportunities_by_status.label',
        'route' => 'oro_reportcrm_index',
        'extras' => 
        array (
          'description' => 'oro.reportcrm.menu.opportunities_by_status.description',
          'skipBreadcrumbs' => true,
        ),
        'routeParameters' => 
        array (
          'reportGroupName' => 'opportunities',
          'reportName' => 'by_status',
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'won_by_period' => 
      array (
        'label' => 'oro.reportcrm.menu.won_by_period.label',
        'route' => 'oro_reportcrm_index',
        'extras' => 
        array (
          'description' => 'oro.reportcrm.menu.won_by_period.description',
          'skipBreadcrumbs' => true,
        ),
        'routeParameters' => 
        array (
          'reportGroupName' => 'opportunities',
          'reportName' => 'won_by_period',
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'total_forecast' => 
      array (
        'label' => 'oro.reportcrm.menu.total_forecast.label',
        'route' => 'oro_reportcrm_index',
        'extras' => 
        array (
          'description' => 'oro.reportcrm.menu.total_forecast.description',
          'skipBreadcrumbs' => true,
        ),
        'routeParameters' => 
        array (
          'reportGroupName' => 'opportunities',
          'reportName' => 'total_forecast',
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'reports_tab' => 
      array (
        'label' => 'oro.segment.menu.reports_tab.label',
        'uri' => '#',
        'position' => 50,
        'extras' => 
        array (
          'icon' => 'fa-folder-open',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'segments_divider' => 
      array (
        'label' => '',
        'position' => 100,
        'extras' => 
        array (
          'divider' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'manage_segments' => 
      array (
        'label' => 'oro.segment.menu.manage_segments.label',
        'route' => 'oro_segment_index',
        'position' => 105,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_segment_index',
            1 => 'oro_segment_update',
            2 => 'oro_segment_create',
            3 => 'oro_segment_view',
          ),
        ),
        'attributes' => 
        array (
          'class' => 'mobile-hide',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'tags_management' => 
      array (
        'label' => 'oro.tag.menu.tags_management.label',
        'uri' => '#',
        'position' => 90,
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_tag_list' => 
      array (
        'label' => 'oro.tag.entity_plural_label',
        'route' => 'oro_tag_index',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_tag_*',
          ),
          'description' => 'oro.tag.menu.tag_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_taxonomy_list' => 
      array (
        'label' => 'oro.taxonomy.entity_plural_label',
        'route' => 'oro_taxonomy_index',
        'position' => 20,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_taxonomy_*',
          ),
          'description' => 'oro.taxonomy.menu.tag_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_new_tag' => 
      array (
        'label' => 'oro.tag.menu.shortcut_new_tag.label',
        'route' => 'oro_tag_create',
        'extras' => 
        array (
          'description' => 'oro.tag.menu.shortcut_new_tag.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_new_taxonomy' => 
      array (
        'label' => 'oro.taxonomy.menu.shortcut_new_taxonomy.label',
        'route' => 'oro_taxonomy_create',
        'extras' => 
        array (
          'description' => 'oro.taxonomy.menu.shortcut_new_taxonomy.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'process_definition_list' => 
      array (
        'label' => 'oro.workflow.processdefinition.entity_plural_label',
        'position' => 105,
        'extras' => 
        array (
          'description' => 'oro.workflow.menu.process_definition_list.description',
          'routes' => 
          array (
            0 => '/^oro_process_definition/',
          ),
        ),
        'route' => 'oro_process_definition_index',
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'workflow_definition_list' => 
      array (
        'label' => 'oro.workflow.workflowdefinition.entity_plural_label',
        'position' => 100,
        'extras' => 
        array (
          'description' => 'oro.workflow.menu.workflow_definition_list.description',
          'routes' => 
          array (
            0 => '/^oro_workflow_definition/',
          ),
        ),
        'route' => 'oro_workflow_definition_index',
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'dashboard_tab' => 
      array (
        'label' => 'oro.dashboard.menu.dashboards_tab.label',
        'uri' => '#',
        'position' => 0,
        'extras' => 
        array (
          'icon' => 'fa-bar-chart-o',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_dashboard_index' => 
      array (
        'label' => 'oro.dashboard.menu.dashboards_list.label',
        'route' => 'oro_dashboard_index',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_dashboard_update',
            1 => 'oro_dashboard_create',
            2 => 'oro_dashboard_view',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_calendar_view_default' => 
      array (
        'label' => 'oro.calendar.menu.view_default',
        'route' => 'oro_calendar_view_default',
        'position' => 20,
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_calendar_remove_action' => 
      array (
        'label' => 'oro.calendar.context.remove',
        'uri' => '#',
        'position' => 20,
        'linkAttributes' => 
        array (
          'class' => 'dropdown-item action',
        ),
        'extras' => 
        array (
          'module' => 'orocalendar/js/calendar/menu/remove-calendar',
          'template' => '@OroCalendar/Calendar/Menu/removeCalendar.html.twig',
          'icon' => 'fa-trash',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_calendar_toggle_action' => 
      array (
        'uri' => '#',
        'position' => 10,
        'linkAttributes' => 
        array (
          'class' => 'dropdown-item action',
        ),
        'extras' => 
        array (
          'module' => 'orocalendar/js/calendar/menu/toggle-calendar',
          'template' => '@OroCalendar/Calendar/Menu/toggleCalendar.html.twig',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_calendar_menu_divider' => 
      array (
        'label' => '',
        'position' => 95,
        'attributes' => 
        array (
          'class' => 'dropdown-divider context-menu-divider',
        ),
        'extras' => 
        array (
          'divider' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_calendar_color_action' => 
      array (
        'uri' => '#',
        'position' => 100,
        'linkAttributes' => 
        array (
          'class' => 'dropdown-item custom-color-link',
        ),
        'extras' => 
        array (
          'module' => 'orocalendar/js/calendar/menu/change-calendar-color',
          'template' => '@OroCalendar/Calendar/Menu/changeCalendarColor.html.twig',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'calendar_event_list' => 
      array (
        'label' => 'oro.calendar.calendarevent.entity_plural_label',
        'route' => 'oro_calendar_event_index',
        'position' => 50,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_calendar_event_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_system_calendar_list' => 
      array (
        'label' => 'oro.calendar.systemcalendar.entity_plural_label',
        'route' => 'oro_system_calendar_index',
        'position' => 95,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_system_calendar_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'contact_list' => 
      array (
        'label' => 'oro.contact.entity_plural_label',
        'route' => 'oro_contact_index',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_contact_(?!group\\w+|group\\w+)\\w+$/',
          ),
          'description' => 'oro.contact.menu.contact_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'contact_group_list' => 
      array (
        'label' => 'oro.contact.group.entity_plural_label',
        'route' => 'oro_contact_group_index',
        'position' => 30,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_contact_group_*',
          ),
          'description' => 'oro.contact.menu.contact_group_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_new_contact' => 
      array (
        'label' => 'oro.contact.menu.shortcut_new_contact.label',
        'route' => 'oro_contact_create',
        'extras' => 
        array (
          'description' => 'oro.contact.menu.shortcut_new_contact.description',
          'isCustomAction' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_list_contacts' => 
      array (
        'label' => 'oro.contact.menu.shortcut_list_contacts.label',
        'route' => 'oro_contact_index',
        'extras' => 
        array (
          'description' => 'oro.contact.menu.shortcut_list_contacts.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_new_contact_group' => 
      array (
        'label' => 'oro.contact.menu.shortcut_new_contact_group.label',
        'route' => 'oro_contact_group_create',
        'extras' => 
        array (
          'description' => 'oro.contact.menu.shortcut_new_contact_group.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'pinbar' => 
      array (
        'label' => 'oro.navigation.menu.pinbar.label',
        'extras' => 
        array (
          'icon' => 'fa-folder',
          'max_items' => 10,
        ),
        'uri' => '#',
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'history' => 
      array (
        'label' => 'oro.navigation.menu.history.label',
        'extras' => 
        array (
          'icon' => 'fa-clock-o',
          'active_if_first_is_empty' => true,
          'component_options' => 
          array (
            'view' => 'oronavigation/js/app/views/history-view',
          ),
        ),
        'uri' => '#',
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'favorite' => 
      array (
        'label' => 'oro.navigation.menu.favorite.label',
        'extras' => 
        array (
          'icon' => 'fa-star-o',
        ),
        'uri' => '#',
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'mostviewed' => 
      array (
        'label' => 'oro.navigation.menu.mostviewed.label',
        'extras' => 
        array (
          'icon' => 'fa-flag',
          'component_options' => 
          array (
            'view' => 'oronavigation/js/app/views/most-viewed-view',
          ),
        ),
        'uri' => '#',
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'menu_list_default' => 
      array (
        'label' => 'oro.navigation.menu.menu_list_default.label',
        'route' => 'oro_navigation_global_menu_index',
        'position' => 90,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_navigation_global_menu_[\\w_]+$/',
          ),
          'description' => 'Manage menus in default scope type',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'marketing_lists_list' => 
      array (
        'label' => 'oro.marketinglist.entity_plural_label',
        'route' => 'oro_marketing_list_index',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_marketing_list_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'customers_tab' => 
      array (
        'label' => 'oro.account.menu.customers_tab.label',
        'uri' => '#',
        'position' => 10,
        'extras' => 
        array (
          'icon' => 'fa-users',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'account_list' => 
      array (
        'label' => 'oro.account.entity_plural_label',
        'route' => 'oro_account_index',
        'position' => 5,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_account_*',
          ),
          'description' => 'oro.account.menu.account_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_new_account' => 
      array (
        'label' => 'oro.account.menu.shortcut_new_account.label',
        'route' => 'oro_account_create',
        'extras' => 
        array (
          'description' => 'oro.account.menu.shortcut_new_account.description',
          'isCustomAction' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_list_accounts' => 
      array (
        'label' => 'oro.account.menu.shortcut_list_accounts.label',
        'route' => 'oro_account_index',
        'extras' => 
        array (
          'description' => 'oro.account.menu.shortcut_list_accounts.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'call_list' => 
      array (
        'label' => 'oro.call.entity_plural_label',
        'route' => 'oro_call_index',
        'position' => 20,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_call_*',
          ),
          'description' => 'oro.call.menu.call_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_call_list' => 
      array (
        'label' => 'oro.call.menu.shortcut_call_list.label',
        'route' => 'oro_call_index',
        'extras' => 
        array (
          'description' => 'oro.call.menu.shortcut_call_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'marketing_tab' => 
      array (
        'label' => 'oro.campaign.menu.marketing_tab.label',
        'uri' => '#',
        'position' => 40,
        'extras' => 
        array (
          'icon' => 'fa-sitemap',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'campaigns_list' => 
      array (
        'label' => 'oro.campaign.entity_plural_label',
        'route' => 'oro_campaign_index',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_campaign_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'email_campaigns_list' => 
      array (
        'label' => 'oro.campaign.emailcampaign.entity_plural_label',
        'route' => 'oro_email_campaign_index',
        'position' => 20,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_email_campaign_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'websites_list' => 
      array (
        'label' => 'oro.tracking.trackingwebsite.entity_plural_label',
        'route' => 'oro_tracking_website_index',
        'position' => 25,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_tracking_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'channels_list' => 
      array (
        'label' => 'oro.channel.entity_plural_label',
        'route' => 'oro_channel_index',
        'position' => 55,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_channel_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'task_list' => 
      array (
        'label' => 'oro.task.entity_plural_label',
        'route' => 'oro_task_index',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_task_update',
            1 => 'oro_task_create',
            2 => 'oro_task_view',
          ),
          'description' => 'oro.task.menu.task_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_task_my_tasks' => 
      array (
        'label' => 'oro.task.menu.my_tasks',
        'route' => 'oro_task_my_tasks',
        'position' => 15,
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'sales_tab' => 
      array (
        'label' => 'oro.sales.menu.sales_tab.label',
        'uri' => '#',
        'position' => 20,
        'extras' => 
        array (
          'icon' => 'fa-shopping-cart',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'lead_list' => 
      array (
        'label' => 'oro.sales.lead.entity_plural_label',
        'route' => 'oro_sales_lead_index',
        'position' => 20,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_sales_lead/',
          ),
          'description' => 'oro.sales.menu.lead_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'opportunity_list' => 
      array (
        'label' => 'oro.sales.opportunity.entity_plural_label',
        'route' => 'oro_sales_opportunity_index',
        'position' => 30,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_sales_opportunity/',
          ),
          'description' => 'oro.sales.menu.opportunity_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'sales_salesfunnel_list' => 
      array (
        'label' => 'oro.sales.salesfunnel.entity_plural_label',
        'route' => 'oro_sales_salesfunnel_index',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_sales_salesfunnel/',
          ),
          'description' => 'oro.sales.menu.sales_salesfunnel_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'b2bcustomer_list' => 
      array (
        'label' => 'oro.sales.b2bcustomer.entity_plural_label',
        'route' => 'oro_sales_b2bcustomer_index',
        'display' => false,
        'position' => 70,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_sales_b2bcustomer_*',
          ),
          'description' => 'oro.sales.menu.b2bcustomer_list.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_list_b2bcustomers' => 
      array (
        'label' => 'oro.sales.menu.shortcut_list_b2bcustomers.label',
        'route' => 'oro_sales_lead_index',
        'display' => false,
        'extras' => 
        array (
          'description' => 'oro.sales.menu.shortcut_list_b2bcustomers.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_list_leads' => 
      array (
        'label' => 'oro.sales.menu.shortcut_list_leads.label',
        'route' => 'oro_sales_lead_index',
        'display' => false,
        'extras' => 
        array (
          'description' => 'oro.sales.menu.shortcut_list_leads.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_list_opportunities' => 
      array (
        'label' => 'oro.sales.menu.shortcut_list_opportunities.label',
        'route' => 'oro_sales_opportunity_index',
        'display' => false,
        'extras' => 
        array (
          'description' => 'oro.sales.menu.shortcut_list_opportunities.description',
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_new_lead' => 
      array (
        'label' => 'oro.sales.menu.shortcut_new_lead.label',
        'route' => 'oro_sales_lead_create',
        'display' => false,
        'extras' => 
        array (
          'description' => 'oro.sales.menu.shortcut_new_lead.description',
          'isCustomAction' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'shortcut_new_opportunity' => 
      array (
        'label' => 'oro.sales.menu.shortcut_new_opportunity.label',
        'route' => 'oro_sales_opportunity_create',
        'display' => false,
        'extras' => 
        array (
          'description' => 'oro.sales.menu.shortcut_new_opportunity.description',
          'isCustomAction' => true,
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_contactus_requests' => 
      array (
        'label' => 'oro.contactus.contactrequest.entity_plural_label',
        'route' => 'oro_contactus_request_index',
        'position' => 30,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_contactus_request_*',
          ),
        ),
        'display' => true,
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_contactus_reasons' => 
      array (
        'label' => 'oro.contactus.contactreason.entity_plural_label',
        'route' => 'oro_contactus_reason_index',
        'position' => 30,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_contactus_reason_*',
          ),
        ),
        'display' => true,
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_case_index' => 
      array (
        'label' => 'oro.case.menu.index.label',
        'route' => 'oro_case_index',
        'position' => 30,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_case_update',
            1 => 'oro_case_create',
            2 => 'oro_case_view',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_dotmailer' => 
      array (
        'label' => 'oro.dotmailer.channel_type.label',
        'uri' => '#',
        'linkAttributes' => 
        array (
          'class' => 'dotmailer',
        ),
        'position' => 50,
        'extras' => 
        array (
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_dotmailer_data_field_list' => 
      array (
        'label' => 'oro.dotmailer.datafield.entity_plural_label',
        'route' => 'oro_dotmailer_datafield_index',
        'extras' => 
        array (
          'routes' => 
          array (
            0 => '/^oro_dotmailer_datafield_(?!mapping\\w+)\\w+$/',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_dotmailer_data_field_mapping_list' => 
      array (
        'label' => 'oro.dotmailer.datafieldmapping.entity_plural_label',
        'route' => 'oro_dotmailer_datafield_mapping_index',
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_dotmailer_datafield_mapping_*',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'oro_dotmailer_integration_connection' => 
      array (
        'label' => 'oro.dotmailer.integration.connection.label',
        'route' => 'oro_dotmailer_integration_connection',
        'position' => 10,
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_dotmailer_integration_connection',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
      'backoffice_oauth_applications' => 
      array (
        'label' => 'oro.oauth2server.menu.backoffice_oauth_application.label',
        'route' => 'oro_oauth2_index',
        'acl_resource_id' => 'oro_oauth2_view',
        'extras' => 
        array (
          'routes' => 
          array (
            0 => 'oro_oauth2_view',
            1 => 'oro_oauth2_create',
            2 => 'oro_oauth2_update',
          ),
        ),
        'routeParameters' => 
        array (
        ),
        'translateParameters' => 
        array (
        ),
      ),
    ),
    'tree' => 
    array (
      'application_menu' => 
      array (
        'children' => 
        array (
          'system_tab' => 
          array (
            'children' => 
            array (
              'oro_platform_system_info' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'users_management' => 
              array (
                'children' => 
                array (
                  'oro_business_unit_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'oro_organization_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'user_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'user_roles' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'user_groups' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'login_attempts' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'backoffice_oauth_applications' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                ),
                'merge_strategy' => 'move',
              ),
              'oro_message_queue_job' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'emails' => 
              array (
                'children' => 
                array (
                  'oro_email_emailtemplate_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'oro_notification_emailnotification_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'oro_notification_massnotification_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                ),
                'merge_strategy' => 'move',
              ),
              'oro_cron_schedule' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'localization' => 
              array (
                'children' => 
                array (
                  'languages' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'translations' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'localizations' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                ),
                'merge_strategy' => 'move',
              ),
              'entities_list' => 
              array (
                'children' => 
                array (
                  'entity_management' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                ),
                'merge_strategy' => 'move',
              ),
              'digital_asset_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'integrations_submenu' => 
              array (
                'children' => 
                array (
                  'integrations_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'embedded_forms' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                ),
                'merge_strategy' => 'move',
              ),
              'oro_notification_notificationalerts_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'system_configuration' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'audit_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'tags_management' => 
              array (
                'children' => 
                array (
                  'oro_tag_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'oro_taxonomy_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                ),
                'merge_strategy' => 'move',
              ),
              'process_definition_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'workflow_definition_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'oro_system_calendar_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'contact_group_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'menu_list_default' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'channels_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'oro_contactus_reasons' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
            ),
            'merge_strategy' => 'move',
          ),
          'activities_tab' => 
          array (
            'children' => 
            array (
              'calendar_event_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'call_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'task_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'oro_contactus_requests' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'oro_case_index' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
            ),
            'merge_strategy' => 'move',
          ),
          'reports_tab' => 
          array (
            'children' => 
            array (
              'manage_reports' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'static_reports_tab' => 
              array (
                'children' => 
                array (
                  'accounts_report_tab' => 
                  array (
                    'children' => 
                    array (
                      'accounts_life_time_value' => 
                      array (
                        'merge_strategy' => 'move',
                        'children' => 
                        array (
                        ),
                      ),
                      'accounts_by_opportunities' => 
                      array (
                        'merge_strategy' => 'move',
                        'children' => 
                        array (
                        ),
                      ),
                    ),
                    'merge_strategy' => 'move',
                  ),
                  'leads_report_tab' => 
                  array (
                    'children' => 
                    array (
                      'leads_by_date' => 
                      array (
                        'merge_strategy' => 'move',
                        'children' => 
                        array (
                        ),
                      ),
                    ),
                    'merge_strategy' => 'move',
                  ),
                  'opportunities_report_tab' => 
                  array (
                    'children' => 
                    array (
                      'opportunities_by_status' => 
                      array (
                        'merge_strategy' => 'move',
                        'children' => 
                        array (
                        ),
                      ),
                      'won_by_period' => 
                      array (
                        'merge_strategy' => 'move',
                        'children' => 
                        array (
                        ),
                      ),
                      'total_forecast' => 
                      array (
                        'merge_strategy' => 'move',
                        'children' => 
                        array (
                        ),
                      ),
                    ),
                    'merge_strategy' => 'move',
                  ),
                ),
                'merge_strategy' => 'move',
              ),
              'segments_divider' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'manage_segments' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
            ),
            'merge_strategy' => 'move',
          ),
          'dashboard_tab' => 
          array (
            'children' => 
            array (
              'oro_dashboard_index' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
            ),
            'merge_strategy' => 'move',
          ),
          'customers_tab' => 
          array (
            'children' => 
            array (
              'contact_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'account_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'b2bcustomer_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
            ),
            'merge_strategy' => 'move',
          ),
          'marketing_tab' => 
          array (
            'children' => 
            array (
              'marketing_lists_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'campaigns_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'email_campaigns_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'websites_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'oro_dotmailer' => 
              array (
                'children' => 
                array (
                  'oro_dotmailer_integration_connection' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'oro_dotmailer_data_field_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                  'oro_dotmailer_data_field_mapping_list' => 
                  array (
                    'merge_strategy' => 'move',
                    'children' => 
                    array (
                    ),
                  ),
                ),
                'merge_strategy' => 'move',
              ),
            ),
            'merge_strategy' => 'move',
          ),
          'sales_tab' => 
          array (
            'children' => 
            array (
              'sales_salesfunnel_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'lead_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
              'opportunity_list' => 
              array (
                'merge_strategy' => 'move',
                'children' => 
                array (
                ),
              ),
            ),
            'merge_strategy' => 'move',
          ),
        ),
        'type' => 'application_menu',
        'max_nesting_level' => 4,
        'extras' => 
        array (
        ),
      ),
      'dots_menu' => 
      array (
        'type' => 'dots_menu',
        'read_only' => true,
        'children' => 
        array (
          'history' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'favorite' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'mostviewed' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
        ),
        'extras' => 
        array (
        ),
      ),
      'shortcuts' => 
      array (
        'type' => 'shortcuts',
        'children' => 
        array (
          'oro_message_queue_job_shortcut' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_compose_email' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'oro_cron_job_shortcut' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_new_user' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_list_users' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_new_role' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_new_group' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_new_tag' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_new_taxonomy' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_new_contact' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_list_contacts' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_new_contact_group' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_new_account' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_list_accounts' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_call_list' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_list_leads' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_list_opportunities' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_new_lead' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'shortcut_new_opportunity' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
        ),
        'extras' => 
        array (
        ),
      ),
      'usermenu' => 
      array (
        'children' => 
        array (
          'oro_email_user_emails' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'oro_user_profile_view' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'oro_user_profile_configuration' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'oro_calendar_view_default' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'oro_task_my_tasks' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
        ),
        'extras' => 
        array (
        ),
      ),
      'calendar_menu' => 
      array (
        'type' => 'calendar_menu',
        'children' => 
        array (
          'oro_calendar_remove_action' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'oro_calendar_toggle_action' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'oro_calendar_menu_divider' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'oro_calendar_color_action' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
        ),
        'extras' => 
        array (
        ),
      ),
      'calendar_menu_mobile' => 
      array (
        'type' => 'calendar_menu',
        'children' => 
        array (
          'oro_calendar_remove_action' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
          'oro_calendar_toggle_action' => 
          array (
            'merge_strategy' => 'move',
            'children' => 
            array (
            ),
          ),
        ),
        'extras' => 
        array (
        ),
      ),
    ),
    'templates' => 
    array (
      'application_menu' => 
      array (
        'template' => '@OroNavigation/Menu/application_menu.html.twig',
        'allow_safe_labels' => true,
        'compressed' => true,
        'currentClass' => 'active',
        'ancestorClass' => 'active',
        'rootClass' => 'nav-multilevel main-menu',
      ),
      'dots_menu' => 
      array (
        'template' => '@OroNavigation/Menu/dots_menu.html.twig',
      ),
      'shortcuts' => 
      array (
        'template' => '@OroNavigation/Menu/shortcuts.html.twig',
      ),
      'calendar_menu' => 
      array (
        'template' => '@OroCalendar/Calendar/Menu/contextMenu.html.twig',
        'rootClass' => 'context-menu',
      ),
      'navbar' => 
      array (
        'template' => '@OroNavigation/Menu/navbar.html.twig',
      ),
      'dropdown' => 
      array (
        'template' => '@OroNavigation/Menu/dropdown.html.twig',
      ),
      'user_menu' => 
      array (
        'template' => '@OroNavigation/Menu/user_menu.html.twig',
      ),
      'horizontal_tabs' => 
      array (
        'template' => '@OroNavigation/Menu/horizontal_tabs.html.twig',
      ),
      'favorite' => 
      array (
        'template' => '@OroNavigation/Menu/favorites.html.twig',
      ),
      'mostviewed' => 
      array (
        'template' => '@OroNavigation/Menu/mostviewed.html.twig',
        'rootClass' => 'extra-list',
      ),
      'history' => 
      array (
        'template' => '@OroNavigation/Menu/history.html.twig',
        'rootClass' => 'extra-list',
        'currentAsLink' => false,
      ),
    ),
  ),
  'titles' => 
  array (
    'oro_platform_system_info' => NULL,
    'oro_default' => 'Dashboard',
    'oro_business_unit_index' => NULL,
    'oro_business_unit_update' => '%business_unit.name% - Edit',
    'oro_business_unit_create' => 'Create Business Unit',
    'oro_business_unit_view' => '%business_unit.name%',
    'oro_organization_update_current' => '%organization.name% - Edit',
    'oro_message_queue_root_jobs' => NULL,
    'oro_message_queue_child_jobs' => 'Job "%name%"',
    'oro_email_view' => '%subject% - My Emails - %username%',
    'oro_email_emailtemplate_index' => NULL,
    'oro_email_emailtemplate_update' => 'Template %name% - Edit',
    'oro_email_emailtemplate_create' => 'Create Email Template',
    'oro_email_emailtemplate_clone' => 'Clone Email Template',
    'oro_email_user_emails' => 'My Emails - %username%',
    'oro_email_thread_view' => '%subject% - My Emails',
    'oro_email_mailbox_update' => 'Mailbox %label% - Edit',
    'oro_email_mailbox_create' => 'Create Mailbox',
    'oro_email_user_thread_view' => '%subject% - My Emails',
    'oro_cron_schedule_index' => NULL,
    'oro_user_index' => NULL,
    'oro_user_view' => '%username% - oro.ui.view',
    'oro_user_update' => '%username% - oro.ui.edit',
    'oro_user_create' => 'oro.ui.create_entity',
    'oro_user_config' => '%username% - oro.user.configure.label',
    'oro_user_profile_view' => '%username% - oro.ui.view',
    'oro_user_profile_update' => '%username% - oro.ui.edit',
    'oro_user_profile_configuration' => '%username% - oro.user.configure.label',
    'oro_user_role_index' => NULL,
    'oro_user_role_view' => '%role% - oro.ui.view',
    'oro_user_role_update' => '%role% - oro.ui.edit',
    'oro_user_role_create' => 'oro.ui.create_entity',
    'oro_user_security_login' => 'Login',
    'oro_user_reset_reset' => 'Password Reset',
    'oro_user_reset_request' => 'Forgot Password',
    'oro_user_reset_check_email' => 'Password Reset - Check Email',
    'oro_user_group_index' => NULL,
    'oro_user_group_create' => 'oro.ui.create_entity',
    'oro_user_group_update' => '%group% - oro.ui.edit',
    'oro_user_login_attempts' => 'oro.user.userloginattempt.entity_plural_label',
    'oro_translation_language_index' => NULL,
    'oro_translation_translation_index' => NULL,
    'oro_entity_index' => '%entityName% - Entities - System',
    'oro_entity_view' => '%recordName% - %entityName% - Entities - System',
    'oro_entity_update' => '%entityName% - Entities - System',
    'oro_locale_localization_index' => NULL,
    'oro_locale_localization_view' => 'oro.locale.localization.navigation.view',
    'oro_locale_localization_update' => 'oro.locale.localization.navigation.view - oro.ui.edit',
    'oro_locale_localization_create' => 'oro.ui.create_entity',
    'oro_entityconfig_index' => NULL,
    'oro_entityconfig_view' => '%entityName%',
    'oro_entityconfig_update' => '%entityName%',
    'oro_entityconfig_field_update' => '%fieldName% - %entityName%',
    'oro_attribute_create' => 'oro.ui.create_entity',
    'oro_attribute_save' => 'oro.ui.create_entity',
    'oro_attribute_update' => '%attributeName% - oro.ui.edit',
    'oro_attribute_index' => NULL,
    'oro_attribute_family_index' => NULL,
    'oro_attribute_family_view' => '%name%',
    'oro_attribute_family_create' => 'oro.ui.create_entity',
    'oro_attribute_family_update' => '%familyName% - oro.ui.edit',
    'oro_entityextend_entity_create' => 'New Entity',
    'oro_entityextend_field_create' => 'New Field - %entityName%',
    'oro_entityextend_field_update' => '%fieldName% - New Field - %entityName%',
    'oro_entityextend_entity_unique_key' => 'oro.entity_extend.unique_keys',
    'oro_digital_asset_index' => NULL,
    'oro_digital_asset_update' => '%title% - oro.ui.edit',
    'oro_digital_asset_create' => 'oro.ui.create',
    'oro_integration_index' => NULL,
    'oro_integration_update' => '%integration.name%',
    'oro_integration_create' => 'Create Integration',
    'oro_notification_emailnotification_index' => NULL,
    'oro_notification_emailnotification_update' => 'Notification Rule %id% - Edit',
    'oro_notification_emailnotification_create' => 'Add Notification Rule',
    'oro_notification_massnotification_index' => NULL,
    'oro_notification_notificationalert_index' => NULL,
    'oro_config_configuration_system' => NULL,
    'oro_dataaudit_index' => NULL,
    'oro_embedded_form_list' => NULL,
    'oro_embedded_form_view' => '%form.title%',
    'oro_embedded_form_create' => 'oro.ui.create_entity',
    'oro_embedded_form_update' => '%form.title% - Edit',
    'oro_entity_merge_massaction' => 'oro.entity_merge.action.merge',
    'oro_entity_merge' => 'oro.entity_merge.action.merge',
    'oro_report_index' => NULL,
    'oro_report_view' => '%report.name% - %report.group% - Reports',
    'oro_report_create' => 'Create Report - Reports',
    'oro_report_update' => '%report.name% - Edit - Reports',
    'oro_reportcrm_index' => '%reportName% - %reportGroup%',
    'oro_search_results' => '%keyword% - Search Results',
    'oro_segment_index' => NULL,
    'oro_segment_view' => '%segment.name% - %segment.group%',
    'oro_segment_create' => 'Create segment',
    'oro_segment_update' => '%segment.name% - Edit',
    'oro_tag_index' => NULL,
    'oro_tag_update' => '%tag.name% Tag - Edit',
    'oro_tag_create' => 'Create Tag',
    'oro_tag_search' => 'Records tagged as "%tag.name%"',
    'oro_process_definition_index' => NULL,
    'oro_process_definition_view' => '%process_definition.label%',
    'oro_workflow_definition_create' => 'Create Workflow',
    'oro_workflow_definition_index' => NULL,
    'oro_workflow_definition_update' => '%workflow_definition.label% - Edit',
    'oro_workflow_definition_configure' => '%workflow_definition.label% - Configuration',
    'oro_workflow_definition_view' => '%workflow_definition.label%',
    'oro_workflow_start_transition_form' => '%workflow_title%',
    'oro_workflow_transition_form' => '%workflow_title%',
    'oro_dashboard_index' => NULL,
    'oro_dashboard_quick_launchpad' => 'oro.dashboard.title.quick_launchpad',
    'oro_dashboard_update' => '%label% - Edit',
    'oro_dashboard_create' => 'oro.ui.create_entity',
    'oro_dashboard_view' => '%name%',
    'oro_calendar_view_default' => 'My Calendar - %username%',
    'oro_calendar_view' => '%calendarname% - Calendars - %username%',
    'oro_calendar_event_index' => NULL,
    'oro_calendar_event_view' => '%entity.title%',
    'oro_calendar_event_create' => 'oro.ui.create_entity',
    'oro_calendar_event_update' => '%entity.title% - Edit',
    'oro_system_calendar_index' => NULL,
    'oro_system_calendar_view' => '%entity.title%',
    'oro_system_calendar_create' => 'oro.ui.create_entity',
    'oro_system_calendar_update' => '%entity.title% - Edit',
    'oro_system_calendar_event_view' => '%entity.title% - %parent.name%',
    'oro_system_calendar_event_create' => 'oro.ui.create_entity - %parent.name%',
    'oro_system_calendar_event_update' => '%entity.title% - Edit - %parent.name%',
    'oro_contact_index' => NULL,
    'oro_contact_view' => '%contact.name%',
    'oro_contact_create' => 'Create Contact',
    'oro_contact_update' => '%contact.name% - Edit',
    'oro_contact_group_index' => NULL,
    'oro_contact_group_create' => 'Create Contact Group',
    'oro_contact_group_update' => '%group.label% - Edit',
    'oro_shortcut_actionslist' => 'Shortcut Actions List',
    'oro_pinbar_help' => 'How To Use Pinbar',
    'oro_navigation_user_menu_index' => 'Menus - %username%',
    'oro_navigation_user_menu_view' => '%title% - Menus - %username%',
    'oro_navigation_user_menu_create' => 'Create Menu Item - Menus - %username%',
    'oro_navigation_user_menu_update' => '%title% - Edit - Menus - %username%',
    'oro_navigation_global_menu_index' => 'Menus',
    'oro_navigation_global_menu_view' => '%title% - Menus',
    'oro_navigation_global_menu_create' => 'Create Menu Item - Menus',
    'oro_navigation_global_menu_update' => '%title% - Edit - Menus',
    'oro_marketing_list_index' => NULL,
    'oro_marketing_list_update' => '%entityName% - Edit',
    'oro_marketing_list_view' => '%entityName%',
    'oro_marketing_list_create' => 'oro.ui.create_entity',
    'oro_tracking_website_index' => NULL,
    'oro_tracking_website_view' => '%entity.name%',
    'oro_tracking_website_create' => 'oro.ui.create_entity',
    'oro_tracking_website_update' => '%entity.name% - oro.ui.edit',
    'oro_account_index' => NULL,
    'oro_account_view' => '%account.name%',
    'oro_account_create' => 'Create Account',
    'oro_account_update' => '%account.name% - Edit',
    'oro_call_index' => NULL,
    'oro_call_view' => '%subject%',
    'oro_call_update' => '%subject% - Edit',
    'oro_call_create' => 'Log Call',
    'oro_campaign_index' => NULL,
    'oro_campaign_view' => '%entity.name%',
    'oro_campaign_create' => 'oro.ui.create_entity',
    'oro_campaign_update' => '%entity.name% - Edit',
    'oro_email_campaign_index' => NULL,
    'oro_email_campaign_view' => '%entity.name%',
    'oro_email_campaign_create' => 'oro.ui.create_entity',
    'oro_email_campaign_update' => '%entity.name% - Edit',
    'oro_channel_index' => NULL,
    'oro_channel_create' => 'Create Channel',
    'oro_channel_update' => '%channel.name% - Edit',
    'oro_channel_view' => '%channel.name%',
    'oro_task_index' => NULL,
    'oro_task_view' => '%entity.subject%',
    'oro_task_create' => 'oro.ui.create_entity',
    'oro_task_update' => '%entity.subject% - Edit',
    'oro_task_my_tasks' => 'My Tasks - %username%',
    'oro_sales_opportunity_index' => NULL,
    'oro_sales_opportunity_view' => '%opportunity.name%',
    'oro_sales_opportunity_create' => 'Create Opportunity',
    'oro_sales_opportunity_update' => '%opportunity.name% - Edit',
    'oro_sales_lead_index' => NULL,
    'oro_sales_lead_view' => '%lead.name%',
    'oro_sales_lead_create' => 'Create Lead',
    'oro_sales_lead_update' => '%lead.name% - Edit',
    'oro_sales_lead_convert_to_opportunity' => '%lead.name% - Convert To Opportunity',
    'oro_sales_salesfunnel_index' => NULL,
    'oro_sales_salesfunnel_view' => '%sales_funnel%',
    'oro_sales_salesfunnel_create' => 'Create Sales Activity',
    'oro_sales_salesfunnel_update' => '%sales_funnel% - Edit',
    'oro_sales_b2bcustomer_index' => NULL,
    'oro_sales_b2bcustomer_view' => '%b2bcustomer.name%',
    'oro_sales_b2bcustomer_create' => 'Create Business Customer',
    'oro_sales_b2bcustomer_update' => '%b2bcustomer.name% - Edit',
    'oro_contactus_request_index' => NULL,
    'oro_contactus_request_view' => '%request.clientName%',
    'oro_contactus_request_create' => 'Create contact request',
    'oro_contactus_request_update' => '%request.clientName% - Edit',
    'oro_contactus_reason_index' => NULL,
    'oro_contactus_reason_create' => 'Create contact reason',
    'oro_contactus_reason_update' => 'Edit contact reason',
    'oro_case_index' => NULL,
    'oro_case_view' => '%entity.subject%',
    'oro_case_create' => 'oro.ui.create_entity',
    'oro_case_update' => '%entity.subject% - Edit',
    'oro_dotmailer_datafield_index' => NULL,
    'oro_dotmailer_datafield_create' => 'Add dotdigital Data Field',
    'oro_dotmailer_datafield_view' => '%datafield.name%',
    'oro_dotmailer_datafield_mapping_index' => NULL,
    'oro_dotmailer_datafield_mapping_create' => 'Add dotdigital Data Field Mapping',
    'oro_dotmailer_datafield_mapping_update' => 'Update dotdigital Data Field Mapping',
    'oro_dotmailer_integration_connection' => '%title%',
    'oro_oauth2_index' => NULL,
    'oro_oauth2_frontend_index' => NULL,
    'oro_oauth2_view' => '%application.name% - oro.ui.view',
    'oro_oauth2_frontend_view' => '%application.name% - oro.ui.view',
    'oro_oauth2_update' => '%application.name% - oro.ui.edit',
    'oro_oauth2_frontend_update' => '%application.name% - oro.ui.edit',
    'oro_oauth2_create' => 'oro.ui.create',
    'oro_oauth2_frontend_create' => 'oro.ui.create',
  ),
  'navigation_elements' => 
  array (
    'pinButton' => 
    array (
      'routes' => 
      array (
        'oro_report_create' => false,
        'oro_report_update' => false,
        'oro_segment_create' => false,
        'oro_segment_update' => false,
        'oro_workflow_definition_update' => false,
        'oro_workflow_definition_create' => false,
        'oro_default' => false,
        'oro_dashboard_view' => false,
        'oro_calendar_view' => false,
        'oro_calendar_view_default' => false,
        'oro_marketing_list_create' => false,
        'oro_marketing_list_update' => false,
        'oro_sales_lead_convert_to_opportunity' => false,
      ),
      'default' => true,
    ),
    'favoriteButton' => 
    array (
      'routes' => 
      array (
        'oro_default' => false,
        'oro_dashboard_view' => false,
        'oro_calendar_view' => false,
        'oro_calendar_view_default' => false,
        'oro_sales_lead_convert_to_opportunity' => false,
      ),
      'default' => true,
    ),
  ),
);