<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'oro_default', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::viewAction'], null, null, null, false, false, null]],
        '/sync/ticket' => [[['_route' => 'oro_sync_ticket', '_controller' => 'Oro\\Bundle\\SyncBundle\\Controller\\TicketController::syncTicketAction'], null, ['POST' => 0], null, false, false, null]],
        '/platform/information' => [[['_route' => 'oro_platform_system_info', '_controller' => 'Oro\\Bundle\\PlatformBundle\\Controller\\PlatformController::systemInfoAction'], null, null, null, false, false, null]],
        '/organization/business_unit/create' => [[['_route' => 'oro_business_unit_create', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::createAction'], null, null, null, false, false, null]],
        '/organization/update_current' => [[['_route' => 'oro_organization_update_current', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\OrganizationController::updateCurrentAction'], null, null, null, false, false, null]],
        '/message-queue/jobs' => [[['_route' => 'oro_message_queue_root_jobs', '_controller' => 'Oro\\Bundle\\MessageQueueBundle\\Controller\\JobController::rootJobsAction'], null, null, null, true, false, null]],
        '/email/check-smtp-connection' => [[['_route' => 'oro_email_check_smtp_connection', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::checkSmtpConnectionAction'], null, ['POST' => 0], null, false, false, null]],
        '/email/check-saved-smtp-connection' => [[['_route' => 'oro_email_check_saved_smtp_connection', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::checkSavedSmtpConnectionAction'], null, ['GET' => 0], null, false, false, null]],
        '/email/purge-emails-attachments' => [[['_route' => 'oro_email_purge_emails_attachments', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::purgeEmailsAttachmentsAction'], null, ['POST' => 0], null, false, false, null]],
        '/email/last' => [[['_route' => 'oro_email_last', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::lastAction'], null, null, null, false, false, null]],
        '/email/view-items' => [[['_route' => 'oro_email_items_view', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::itemsAction'], null, null, null, false, false, null]],
        '/email/create' => [[['_route' => 'oro_email_email_create', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::createAction'], null, null, null, false, false, 1]],
        '/email/widget' => [[['_route' => 'oro_email_widget_emails', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::emailsAction'], null, null, null, false, false, 1]],
        '/email/base-widget' => [[['_route' => 'oro_email_widget_base_emails', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::baseEmailsAction'], null, null, null, false, false, 1]],
        '/email/user-emails' => [[['_route' => 'oro_email_user_emails', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::userEmailsAction'], null, null, null, false, false, null]],
        '/email/user-sync-emails' => [[['_route' => 'oro_email_user_sync_emails', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::userEmailsSyncAction'], null, ['POST' => 0], null, false, false, null]],
        '/email/mark_all_as_seen' => [[['_route' => 'oro_email_mark_all_as_seen', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markAllEmailsAsSeenAction'], null, ['POST' => 0], null, false, false, null]],
        '/email/autocomplete-recipient' => [[['_route' => 'oro_email_autocomplete_recipient', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::autocompleteRecipientAction'], null, null, null, false, false, null]],
        '/email/emailtemplate/create' => [[['_route' => 'oro_email_emailtemplate_create', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::createAction'], null, null, null, false, false, null]],
        '/email/emailorigin/list' => [[['_route' => 'oro_email_emailorigin_list', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\OriginController::listAction'], null, null, null, false, false, null]],
        '/config/mailbox/create' => [[['_route' => 'oro_email_mailbox_create', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::createAction'], null, null, null, false, false, null]],
        '/cron/schedule' => [[['_route' => 'oro_cron_schedule_index', '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\ScheduleController::indexAction'], null, null, null, true, false, null]],
        '/login/check-google' => [
            [['_route' => 'oro_user_google_login'], null, null, null, false, false, null],
            [['_route' => 'oro_google_integration_sso_login_google'], null, null, null, false, false, null],
        ],
        '/user/group/create' => [[['_route' => 'oro_user_group_create', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::createAction'], null, null, null, false, false, null]],
        '/user/send-email' => [[['_route' => 'oro_user_reset_send_email', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/user/reset-request' => [[['_route' => 'oro_user_reset_request', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::requestAction'], null, ['GET' => 0], null, false, false, null]],
        '/user/mass-password-reset' => [[['_route' => 'oro_user_mass_password_reset', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::massPasswordResetAction'], null, null, null, true, false, null]],
        '/user/check-email' => [[['_route' => 'oro_user_reset_check_email', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/user/role/create' => [[['_route' => 'oro_user_role_create', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::createAction'], null, null, null, false, false, null]],
        '/user/login' => [[['_route' => 'oro_user_security_login', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/user/login-check' => [[['_route' => 'oro_user_security_check', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::checkAction'], null, null, null, false, false, null]],
        '/user/logout' => [[['_route' => 'oro_user_security_logout', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::logoutAction'], null, null, null, false, false, null]],
        '/user/profile/view' => [[['_route' => 'oro_user_profile_view', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewProfileAction'], null, null, null, false, false, null]],
        '/user/profile/edit' => [[['_route' => 'oro_user_profile_update', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateProfileAction'], null, null, null, false, false, null]],
        '/user/create' => [[['_route' => 'oro_user_create', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::createAction'], null, null, null, false, false, null]],
        '/user/login-attempts' => [[['_route' => 'oro_user_login_attempts', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::loginAttemptsAction'], null, null, null, false, false, null]],
        '/api/userprofile' => [[['_route' => 'oro_rest_api_user_profile', 'entity' => 'userprofile', '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::itemAction'], null, null, null, false, false, null]],
        '/translation' => [[['_route' => 'oro_translation_translation_index', '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\TranslationController::indexAction'], null, null, null, true, false, null]],
        '/language' => [[['_route' => 'oro_translation_language_index', '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\LanguageController::indexAction'], null, null, null, true, false, null]],
        '/login/check-office365' => [[['_route' => 'oro_microsoft_integration_sso_login_office365'], null, null, null, false, false, null]],
        '/locale/localization' => [[['_route' => 'oro_locale_localization_index', '_controller' => 'Oro\\Bundle\\LocaleBundle\\Controller\\LocalizationController::indexAction'], null, null, null, true, false, null]],
        '/locale/localization/create' => [[['_route' => 'oro_locale_localization_create', '_controller' => 'Oro\\Bundle\\LocaleBundle\\Controller\\LocalizationController::createAction'], null, null, null, false, false, null]],
        '/entity/config' => [[['_route' => 'oro_entityconfig_index', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::indexAction'], null, null, null, true, false, null]],
        '/entity/extend/entity/create' => [[['_route' => 'oro_entityextend_entity_create', '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::createAction'], null, null, null, false, false, null]],
        '/cms/digital-asset' => [[['_route' => 'oro_digital_asset_index', '_controller' => 'Oro\\Bundle\\DigitalAssetBundle\\Controller\\DigitalAssetController::indexAction'], null, null, null, true, false, null]],
        '/cms/digital-asset/create' => [[['_route' => 'oro_digital_asset_create', '_controller' => 'Oro\\Bundle\\DigitalAssetBundle\\Controller\\DigitalAssetController::createAction'], null, null, null, false, false, null]],
        '/cms/digital-asset/widget/choose-image' => [[['_route' => 'oro_digital_asset_widget_choose_image', '_controller' => 'Oro\\Bundle\\DigitalAssetBundle\\Controller\\DigitalAssetController::chooseImageAction'], null, null, null, false, false, null]],
        '/cms/digital-asset/widget/choose-file' => [[['_route' => 'oro_digital_asset_widget_choose_file', '_controller' => 'Oro\\Bundle\\DigitalAssetBundle\\Controller\\DigitalAssetController::chooseFileAction'], null, null, null, false, false, null]],
        '/integration' => [[['_route' => 'oro_integration_index', '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::indexAction'], null, null, null, true, false, null]],
        '/integration/create' => [[['_route' => 'oro_integration_create', '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::createAction'], null, null, null, false, false, null]],
        '/import' => [[['_route' => 'oro_importexport_import_form', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importFormAction'], null, null, null, false, false, null]],
        '/import_validate_export' => [[['_route' => 'oro_importexport_import_validate_export_template_form', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importValidateExportTemplateFormAction'], null, null, null, false, false, null]],
        '/import-validate' => [[['_route' => 'oro_importexport_import_validation_form', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importValidateFormAction'], null, null, null, false, false, null]],
        '/export/config' => [[['_route' => 'oro_importexport_export_config', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::configurableExportAction'], null, null, null, false, false, null]],
        '/export/template/config' => [[['_route' => 'oro_importexport_export_template_config', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::configurableTemplateExportAction'], null, null, null, false, false, null]],
        '/notification/email/create' => [[['_route' => 'oro_notification_emailnotification_create', '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::createAction'], null, null, null, false, false, null]],
        '/notification/notification-alert' => [[['_route' => 'oro_notification_notificationalert_index', '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\NotificationAlertController::indexAction'], null, null, null, true, false, null]],
        '/actionwidget/buttons' => [[['_route' => 'oro_action_widget_buttons', '_controller' => 'Oro\\Bundle\\ActionBundle\\Controller\\WidgetController::buttonsAction'], null, null, null, false, false, null]],
        '/activity-list/segment/activity-condition' => [[['_route' => 'oro_activitylist_segment_activitycondition', '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\SegmentController::activityConditionAction'], null, null, null, false, false, null]],
        '/embedded-form' => [[['_route' => 'oro_embedded_form_list', '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::indexAction'], null, null, null, true, false, null]],
        '/embedded-form/create' => [[['_route' => 'oro_embedded_form_create', '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::createAction'], null, null, null, false, false, null]],
        '/merge' => [[['_route' => 'oro_entity_merge', '_controller' => 'Oro\\Bundle\\EntityMergeBundle\\Controller\\MergeController::mergeAction'], null, null, null, false, false, null]],
        '/autocomplete/search' => [[['_route' => 'oro_form_autocomplete_search', '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\AutocompleteController::searchAction'], null, null, null, false, false, null]],
        '/connection/check' => [[['_route' => 'oro_imap_connection_check', '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\ConnectionController::checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/imap/connection/account/change' => [[['_route' => 'oro_imap_change_account_type', '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\ConnectionController::getFormAction'], null, ['POST' => 0], null, false, false, null]],
        '/gmail/connection/access-token' => [[['_route' => 'oro_imap_gmail_access_token', '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\GmailAccessTokenController::accessTokenAction'], null, ['POST' => 0], null, false, false, null]],
        '/gmail/connection/check' => [[['_route' => 'oro_imap_gmail_connection_check', '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\CheckConnectionController::checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/microsoft-identity/connection/access-token' => [[['_route' => 'oro_imap_microsoft_access_token', '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\MicrosoftAccessTokenController::accessTokenAction'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/microsoft-identity/connection/check' => [[['_route' => 'oro_imap_microsoft_connection_check', '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\CheckConnectionController::checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/notes/create' => [[['_route' => 'oro_note_create', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::createAction'], null, null, null, false, false, null]],
        '/report/create' => [[['_route' => 'oro_report_create', '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::createAction'], null, null, null, false, false, null]],
        '/search/advanced-search' => [[['_route' => 'oro_search_advanced', '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::ajaxAdvancedSearchAction'], null, null, null, false, false, null]],
        '/search/search-bar' => [[['_route' => 'oro_search_bar', '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchBarAction'], null, null, null, false, false, null]],
        '/search/suggestion' => [[['_route' => 'oro_search_suggestion', '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchSuggestionAction'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'oro_search_results', '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchResultsAction'], null, null, null, true, false, null]],
        '/segment/create' => [[['_route' => 'oro_segment_create', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::createAction'], null, null, null, false, false, null]],
        '/tag/create' => [[['_route' => 'oro_tag_create', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::createAction'], null, null, null, false, false, null]],
        '/taxonomy/create' => [[['_route' => 'oro_taxonomy_create', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TaxonomyController::createAction'], null, null, null, false, false, null]],
        '/processdefinition' => [[['_route' => 'oro_process_definition_index', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\ProcessDefinitionController::indexAction'], null, null, null, false, false, null]],
        '/workflowdefinition' => [[['_route' => 'oro_workflow_definition_index', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::indexAction'], null, null, null, false, false, null]],
        '/workflowdefinition/create' => [[['_route' => 'oro_workflow_definition_create', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::createAction'], null, null, null, false, false, null]],
        '/comments/form' => [[['_route' => 'oro_comment_form', '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\CommentController::getFormAction'], null, null, null, false, false, null]],
        '/dashboard/create' => [[['_route' => 'oro_dashboard_create', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::createAction'], null, null, null, false, false, null]],
        '/dashboard/launchpad' => [[['_route' => 'oro_dashboard_quick_launchpad', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::quickLaunchpadAction'], null, null, null, false, false, null]],
        '/calendar/calendarevents/autocomplete/attendees' => [[['_route' => 'oro_calendarevent_autocomplete_attendees', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AutocompleteController::autocompleteAttendeesAction'], null, null, null, false, false, null]],
        '/calendar/default' => [[['_route' => 'oro_calendar_view_default', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarController::viewDefaultAction'], null, null, null, false, false, null]],
        '/calendar/event' => [[['_route' => 'oro_calendar_event_index', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::indexAction'], null, null, null, false, false, null]],
        '/calendar/event/create' => [[['_route' => 'oro_calendar_event_create', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::createAction'], null, null, null, false, false, null]],
        '/system-calendar' => [[['_route' => 'oro_system_calendar_index', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::indexAction'], null, null, null, true, false, null]],
        '/system-calendar/create' => [[['_route' => 'oro_system_calendar_create', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::createAction'], null, null, null, false, false, null]],
        '/contact/create' => [[['_route' => 'oro_contact_create', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::createAction'], null, null, null, false, false, null]],
        '/contact/group/create' => [[['_route' => 'oro_contact_group_create', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\GroupController::createAction'], null, null, null, false, false, null]],
        '/menu/global' => [[['_route' => 'oro_navigation_global_menu_index', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalMenuController::indexAction'], null, null, null, true, false, null]],
        '/shortcutactionslist' => [[['_route' => 'oro_shortcut_actionslist', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\ShortcutController::actionslistAction'], null, null, null, false, false, null]],
        '/menu/user' => [[['_route' => 'oro_navigation_user_menu_index', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserMenuController::indexAction'], null, null, null, true, false, null]],
        '/marketing-list' => [[['_route' => 'oro_marketing_list_index', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::indexAction'], null, null, null, true, false, null]],
        '/marketing-list/create' => [[['_route' => 'oro_marketing_list_create', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::createAction'], null, null, null, false, false, null]],
        '/tracking/data/create' => [[['_route' => 'oro_tracking_data_create', '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingDataController::createAction'], null, null, null, false, false, null]],
        '/tracking/website/create' => [[['_route' => 'oro_tracking_website_create', '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::createAction'], null, null, null, false, false, null]],
        '/account/create' => [[['_route' => 'oro_account_create', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::createAction'], null, null, null, false, false, null]],
        '/call/create' => [[['_route' => 'oro_call_create', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::createAction'], null, null, null, false, false, null]],
        '/call' => [[['_route' => 'oro_call_index', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::indexAction'], null, null, null, true, false, null]],
        '/call/widget' => [[['_route' => 'oro_call_widget_calls', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::callsAction'], null, null, null, false, false, null]],
        '/call/base-widget' => [[['_route' => 'oro_call_base_widget_calls', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::baseCallsAction'], null, null, null, false, false, null]],
        '/campaign' => [[['_route' => 'oro_campaign_index', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\CampaignController::indexAction'], null, null, null, true, false, null]],
        '/campaign/create' => [[['_route' => 'oro_campaign_create', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\CampaignController::createAction'], null, null, null, false, false, null]],
        '/campaign/email' => [[['_route' => 'oro_email_campaign_index', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::indexAction'], null, null, null, true, false, null]],
        '/campaign/email/create' => [[['_route' => 'oro_email_campaign_create', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::createAction'], null, null, null, false, false, null]],
        '/channel/create' => [[['_route' => 'oro_channel_create', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelController::createAction'], null, null, null, false, false, null]],
        '/task/my' => [[['_route' => 'oro_task_my_tasks', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::myTasksAction'], null, null, null, false, false, null]],
        '/task' => [[['_route' => 'oro_task_index', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskCrudController::indexAction'], null, null, null, true, false, null]],
        '/task/create' => [[['_route' => 'oro_task_create', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskCrudController::createAction'], null, null, null, false, false, null]],
        '/b2bcustomer/create' => [[['_route' => 'oro_sales_b2bcustomer_create', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::createAction'], null, null, null, false, false, null]],
        '/lead/create' => [[['_route' => 'oro_sales_lead_create', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::createAction'], null, null, null, false, false, null]],
        '/opportunity/create' => [[['_route' => 'oro_sales_opportunity_create', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::createAction'], null, null, null, false, false, null]],
        '/salesfunnel/create' => [[['_route' => 'oro_sales_salesfunnel_create', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::createAction'], null, null, null, false, false, null]],
        '/contact-us' => [[['_route' => 'oro_contactus_request_index', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::indexAction'], null, null, null, true, false, null]],
        '/contact-us/create' => [[['_route' => 'oro_contactus_request_create', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::createAction'], null, null, null, false, false, null]],
        '/contact-reason' => [[['_route' => 'oro_contactus_reason_index', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactReasonController::indexAction'], null, null, null, true, false, null]],
        '/contact-reason/create' => [[['_route' => 'oro_contactus_reason_create', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactReasonController::createAction'], null, null, null, false, false, null]],
        '/case' => [[['_route' => 'oro_case_index', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::indexAction'], null, null, null, true, false, null]],
        '/case/create' => [[['_route' => 'oro_case_create', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::createAction'], null, null, null, false, false, null]],
        '/dotmailer/address-book/create' => [[['_route' => 'oro_dotmailer_address_book_create', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::createAction'], null, null, null, false, false, null]],
        '/dotmailer/data-field/create' => [[['_route' => 'oro_dotmailer_datafield_create', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldController::createAction'], null, null, null, false, false, null]],
        '/dotmailer/data-field/synchronize' => [[['_route' => 'oro_dotmailer_datafield_synchronize', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldController::synchronizeAction'], null, ['POST' => 0], null, false, false, null]],
        '/dotmailer/data-field-mapping/create' => [[['_route' => 'oro_dotmailer_datafield_mapping_create', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldMappingController::createAction'], null, null, null, false, false, null]],
        '/dotmailer/dotmailer/ping' => [[['_route' => 'oro_dotmailer_ping', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DotmailerController::pingAction'], null, null, null, false, false, null]],
        '/dotmailer/oauth/callback' => [[['_route' => 'oro_dotmailer_oauth_callback', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\OauthController::callbackAction'], null, null, ['https' => 0], false, false, null]],
        '/oauth2-token' => [
            [['_route' => 'oro_oauth2_server_auth_token', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\AuthorizationTokenController::tokenAction'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'oro_oauth2_server_auth_token_options', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\AuthorizationTokenController::optionsAction'], null, ['OPTIONS' => 0], null, false, false, null],
        ],
        '/oauth2' => [[['_route' => 'oro_oauth2_index', 'type' => 'backoffice', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::indexAction'], null, null, null, true, false, null]],
        '/oauth2/frontend' => [[['_route' => 'oro_oauth2_frontend_index', 'type' => 'frontend', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::indexAction'], null, null, null, false, false, null]],
        '/oauth2/create' => [[['_route' => 'oro_oauth2_create', 'type' => 'backoffice', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::createAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/oauth2/create/frontend' => [[['_route' => 'oro_oauth2_frontend_create', 'type' => 'frontend', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::createAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/oauth2/create/client' => [[['_route' => 'oro_oauth2_server_client_create', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::createClientAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/oauth2-token/login-check' => [[['_route' => 'oro_oauth2_server_login_check', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\LoginController::checkAction'], null, null, null, false, false, null]],
        '/oauth2-token/login' => [[['_route' => 'oro_oauth2_server_login_form', 'type' => 'backoffice', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\LoginController::loginAction'], null, null, null, false, false, null]],
        '/oauth2-token/authorize' => [[['_route' => 'oro_oauth2_server_authenticate', 'type' => 'backoffice', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\AuthorizeClientController::authorizeAction'], null, null, null, false, false, null]],
        '/view-switcher/get-application-url' => [[['_route' => 'oro_view_switcher_frontend_get_application_url', '_controller' => 'Oro\\Bundle\\ViewSwitcherBundle\\Controller\\Frontend\\AjaxApplicationUrlController::getApplicationUrl'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                    .'|template/(.+)(*:180)'
                .')'
                .'|/o(?'
                    .'|rganization/business_unit(?'
                        .'|/(?'
                            .'|view/(\\d+)(*:236)'
                            .'|search/(\\d+)(*:256)'
                            .'|update(?:/(\\d+))?(*:281)'
                        .')'
                        .'|(?:/(html|json))?(*:307)'
                        .'|/widget/(?'
                            .'|info/(\\d+)(*:336)'
                            .'|users/(\\d+)(*:355)'
                        .')'
                    .')'
                    .'|pportunity(?'
                        .'|/(?'
                            .'|view/(\\d+)(*:392)'
                            .'|info/(\\d+)(*:410)'
                            .'|update(?:/(\\d+))?(*:435)'
                        .')'
                        .'|(?:/(html|json))?(*:461)'
                        .'|/create/([^/]++)(?'
                            .'|(*:488)'
                            .'|/([^/]++)(*:505)'
                        .')'
                    .')'
                    .'|auth2/(?'
                        .'|(\\d+)(*:529)'
                        .'|frontend/(\\d+)(*:551)'
                        .'|update/(?'
                            .'|(\\d+)(*:574)'
                            .'|frontend/(\\d+)(*:596)'
                            .'|client/(\\d+)(*:616)'
                        .')'
                        .'|de(?'
                            .'|lete/(\\d+)(*:640)'
                            .'|activate/(\\d+)(*:662)'
                        .')'
                        .'|activate/(\\d+)(*:685)'
                    .')'
                .')'
                .'|/a(?'
                    .'|pi/(?'
                        .'|rest/(?'
                            .'|(latest|v1)/businessunit(?:\\.(json))?(*:751)'
                            .'|(latest|v1)/businessunits(?:\\.(json))?(?'
                                .'|(*:800)'
                            .')'
                            .'|(latest|v1)/businessunits/(\\d+)(?:\\.(json))?(?'
                                .'|(*:856)'
                            .')'
                            .'|(latest|v1)/businessunits(?:\\.(json))?(*:903)'
                            .'|(latest|v1)/businessunit(?:\\.(json))?(*:948)'
                            .'|(latest|v1)/attachments(?:\\.(json|html))?(*:997)'
                            .'|(latest|v1)/attachment(?:\\.(json|html))?(*:1045)'
                            .'|(latest|v1)/files(?:\\.(json|html))?(*:1089)'
                            .'|(latest|v1)/file(?:\\.(json|html))?(*:1132)'
                            .'|(latest|v1)/attachments/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:1191)'
                            .')'
                            .'|(latest|v1)/files/(\\d+)(?:\\.(json|binary))?(*:1244)'
                            .'|(latest|v1)/message\\-queue/job/interrupt/(\\d+)(?:\\.(json))?(*:1312)'
                            .'|(latest|v1)/autoresponserules(?:\\.(json))?(*:1363)'
                            .'|(latest|v1)/autoresponserule(?:\\.(json))?(*:1413)'
                            .'|(latest|v1)/emailtemplates(?:\\.(json))?(*:1461)'
                            .'|(latest|v1)/emailtemplate(?:\\.(json))?(*:1508)'
                            .'|(latest|v1)/email/activity/relations(?:\\.(json))?(*:1566)'
                            .'|(latest|v1)/email/search/relations(?:\\.(json))?(*:1622)'
                            .'|(latest|v1)/activity/email/suggestions(?:\\.(json))?(*:1682)'
                            .'|(latest|v1)/activity/email/suggestion(?:\\.(json))?(*:1741)'
                            .'|(latest|v1)/emails(?:\\.(json))?(*:1781)'
                            .'|(latest|v1)/emails/(\\d+)(?:\\.(json))?(?'
                                .'|(*:1830)'
                            .')'
                            .'|(latest|v1)/emails(?:\\.(json))?(?'
                                .'|(*:1874)'
                            .')'
                            .'|(latest|v1)/email(?:\\.(json))?(*:1914)'
                            .'|(latest|v1)/autoresponserules/(\\d+)(?:\\.(json))?(*:1971)'
                            .'|(latest|v1)/emailorigins(?:\\.(json))?(*:2017)'
                            .'|(latest|v1)/emailorigins/(\\d+)(?:\\.(json))?(*:2069)'
                            .'|(latest|v1)/emailorigins(?:\\.(json))?(*:2115)'
                            .'|(latest|v1)/emailorigin(?:\\.(json))?(*:2160)'
                            .'|(latest|v1)/emailtemplates/(\\d+)(?:\\.(json))?(*:2214)'
                            .'|(latest|v1)/emailtemplates/list(?:/(\\w+)(?:/(\\d+)(?:/(\\d+)(?:\\.(json))?)?)?)?(*:2300)'
                            .'|(latest|v1)/emailtemplates/variables(?:\\.(json))?(*:2358)'
                            .'|(latest|v1)/emailtemplates/compiled/(\\d+)/(\\d*)(?:\\.(json))?(*:2427)'
                            .'|(latest|v1)/activities/emails/relations(?:\\.(json))?(*:2488)'
                            .'|(latest|v1)/activities/emails/(\\d+)/relations(?:\\.(json))?(*:2555)'
                            .'|(latest|v1)/activities/emails/relations/search(?:\\.(json))?(*:2623)'
                            .'|(latest|v1)/activities/emails/(\\d+)/suggestions(?:\\.(json))?(*:2692)'
                            .'|(latest|v1)/role(?:\\.(json|html))?(*:2735)'
                            .'|(latest|v1)/user(?:\\.(json|html))?(*:2778)'
                            .'|(latest|v1)/group(?:\\.(json|html))?(*:2822)'
                            .'|(latest|v1)/users(?:\\.(json))?(*:2861)'
                            .'|(latest|v1)/users/(\\d+)(?:\\.(json))?(*:2906)'
                            .'|(latest|v1)/users(?:\\.(json))?(*:2945)'
                            .'|(latest|v1)/users/(\\d+)(?:\\.(json))?(?'
                                .'|(*:2993)'
                            .')'
                            .'|(latest|v1)/users/(\\d+)/roles(?:\\.(json))?(*:3045)'
                            .'|(latest|v1)/users/(\\d+)/groups(?:\\.(json))?(*:3097)'
                            .'|(latest|v1)/user/filter(?:\\.(json))?(*:3142)'
                            .'|(latest|v1)/users(?:\\.(json))?(*:3181)'
                            .'|(latest|v1)/user(?:\\.(json))?(*:3219)'
                            .'|(latest|v1)/roles(?:\\.(json))?(*:3258)'
                            .'|(latest|v1)/roles/(\\d+)(?:\\.(json))?(*:3303)'
                            .'|(latest|v1)/roles(?:\\.(json))?(*:3342)'
                            .'|(latest|v1)/roles/(\\d+)(?:\\.(json))?(?'
                                .'|(*:3390)'
                            .')'
                            .'|(latest|v1)/roles/([^/]++)/byname(?:\\.(json))?(*:3446)'
                            .'|(latest|v1)/roles(?:\\.(json))?(*:3485)'
                            .'|(latest|v1)/role(?:\\.(json))?(*:3523)'
                            .'|(latest|v1)/groups(?:\\.(json))?(*:3563)'
                            .'|(latest|v1)/groups/(\\d+)(?:\\.(json))?(*:3609)'
                            .'|(latest|v1)/groups(?:\\.(json))?(*:3649)'
                            .'|(latest|v1)/groups/(\\d+)(?:\\.(json))?(?'
                                .'|(*:3698)'
                            .')'
                            .'|(latest|v1)/groups(?:\\.(json))?(*:3739)'
                            .'|(latest|v1)/group(?:\\.(json))?(*:3778)'
                            .'|(latest|v1)/users/(\\d+)/permissions(?:\\.(json))?(*:3835)'
                            .'|(latest|v1)/user/permissions(?:\\.(json))?(*:3885)'
                            .'|(latest|v1)/user/permission(?:\\.(json))?(*:3934)'
                            .'|(latest|v1)/(?:\\.(json))?(*:3968)'
                            .'|(latest|v1)/gridviews(?:\\.(json))?(*:4011)'
                            .'|(latest|v1)/gridviews/(\\d+)(?:\\.(json))?(?'
                                .'|(*:4063)'
                            .')'
                            .'|(latest|v1)/gridviews/(.+)/default/(\\d+)/gridName(?:/([^/\\.]++)(?:\\.(json))?)?(*:4151)'
                            .'|(latest|v1)/translations(?:\\.(json))?(*:4197)'
                            .'|(latest|v1)/translations/([^/]++)/([^/]++)/([^/]++)/patch(?:\\.(json))?(*:4276)'
                            .'|(latest|v1)/entities/fields(?:\\.(json))?(*:4325)'
                            .'|(latest|v1)/entities(?:\\.(json))?(*:4367)'
                            .'|(latest|v1)/entities/((?:(?:\\w+)_)+(?:\\w+))/fields(?:\\.(json))?(*:4439)'
                            .'|(latest|v1)/entities/aliases(?:\\.(json))?(*:4489)'
                            .'|(latest|v1)/entity_data/([^/]++)/([^/\\.]++)(?:\\.(json))?(*:4554)'
                            .'|(latest|v1)/emailnotications(?:\\.(json))?(*:4604)'
                            .'|(latest|v1)/emailnotications/(\\d+)(?:\\.(json))?(*:4660)'
                            .'|(latest|v1)/activitylists(?:\\.(json))?(*:4707)'
                            .'|(latest|v1)/activitylist(?:\\.(json))?(*:4753)'
                            .'|(latest|v1)/activitylist/([^/]++)/(\\d+)(?:\\.(json))?(*:4814)'
                            .'|(latest|v1)/activitylist/(\\d+)(?:\\.(json))?(*:4866)'
                            .'|(latest|v1)/activitylists/(\\d+)/activity/list/item(?:\\.(json))?(*:4938)'
                            .'|(latest|v1)/activitylists/([^/\\.]++)(?:\\.(json))?(*:4996)'
                            .'|(latest|v1)/activitylist/activity/list/option(?:\\.(json))?(*:5063)'
                            .'|(latest|v1)/addresstypes(?:\\.(json))?(*:5109)'
                            .'|(latest|v1)/addresstypes/([^/\\.]++)(?:\\.(json))?(*:5166)'
                            .'|(latest|v1)/countries(?:\\.(json))?(*:5209)'
                            .'|(latest|v1)/countries/([^/\\.]++)(?:\\.(json))?(*:5263)'
                            .'|(latest|v1)/region/([^/\\.]++)(?:\\.(json))?(*:5314)'
                            .'|(latest|v1)/country/regions/([^/\\.]++)(?:\\.(json))?(*:5374)'
                            .'|(latest|v1)/configuration(?:\\.(json))?(*:5421)'
                            .'|(latest|v1)/configuration/([\\w\\-]+[\\w\\-\\/]*)(?:\\.(json))?(*:5487)'
                            .'|(latest|v1)/audits(?:\\.(json))?(*:5527)'
                            .'|(latest|v1)/audits/(\\d+)(?:\\.(json))?(*:5573)'
                            .'|(latest|v1)/audit/fields(?:\\.(json))?(*:5619)'
                            .'|(latest|v1)/audits(?:\\.(json))?(*:5659)'
                            .'|(latest|v1)/audit(?:\\.(json))?(*:5698)'
                            .'|(latest|v1)/autocomplete/search(?:\\.(json))?(*:5751)'
                            .'|(latest|v1)/notes/([^/]++)/(\\d+)(?:\\.(json|html))?(*:5810)'
                            .'|(latest|v1)/notes/(\\d+)(?:\\.(json|html))?(*:5860)'
                            .'|(latest|v1)/notes(?:\\.(json|html))?(*:5904)'
                            .'|(latest|v1)/notes/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:5957)'
                            .')'
                            .'|(latest|v1)/notes(?:\\.(json|html))?(*:6002)'
                            .'|(latest|v1)/note(?:\\.(json|html))?(*:6045)'
                            .'|(latest|v1)/querydesigner/entities/fields(?:\\.(json))?(*:6108)'
                            .'|(latest|v1)/reports(?:\\.(json))?(*:6149)'
                            .'|(latest|v1)/report(?:\\.(json))?(*:6189)'
                            .'|(latest|v1)/reports/(\\d+)(?:\\.(json))?(*:6236)'
                            .'|(latest|v1)/search(?:\\.(json|html))?(*:6281)'
                            .'|(latest|v1)/search/advanced(?:\\.(json))?(*:6330)'
                            .'|(latest|v1)/segments/([^/]++)/items(?:\\.(json))?(*:6387)'
                            .'|(latest|v1)/segments/(\\d+)/run(?:\\.(json))?(*:6439)'
                            .'|(latest|v1)/segments(?:\\.(json))?(*:6481)'
                            .'|(latest|v1)/segment(?:\\.(json))?(*:6522)'
                            .'|(latest|v1)/segment/items(?:\\.(json))?(*:6569)'
                            .'|(latest|v1)/segments/(\\d+)(?:\\.(json))?(*:6617)'
                            .'|(latest|v1)/segments/(\\d+)/runs(?:\\.(json))?(*:6670)'
                            .'|(latest|v1)/sidebarwidgets/([^/\\.]++)(?:\\.(json))?(?'
                                .'|(*:6732)'
                            .')'
                            .'|(latest|v1)/sidebarwidgets(?:\\.(json))?(*:6781)'
                            .'|(latest|v1)/sidebarwidgets/(\\d+)(?:\\.(json))?(?'
                                .'|(*:6838)'
                            .')'
                            .'|(latest|v1)/sidebars/([^/\\.]++)(?:\\.(json))?(*:6892)'
                            .'|(latest|v1)/sidebars(?:\\.(json))?(*:6934)'
                            .'|(latest|v1)/sidebars/(\\d+)(?:\\.(json))?(*:6982)'
                            .'|(latest|v1)/tags(?:\\.(json))?(*:7020)'
                            .'|(latest|v1)/tag(?:\\.(json))?(*:7057)'
                            .'|(latest|v1)/taxonomies(?:\\.(json))?(*:7101)'
                            .'|(latest|v1)/taxonomy(?:\\.(json))?(*:7143)'
                            .'|(latest|v1)/taggables(?:\\.(json))?(*:7186)'
                            .'|(latest|v1)/taggable(?:\\.(json))?(*:7228)'
                            .'|(latest|v1)/tags/(\\d+)(?:\\.(json))?(*:7272)'
                            .'|(latest|v1)/taxonomies/(\\d+)(?:\\.(json))?(*:7322)'
                            .'|(latest|v1)/tags/([^/]++)/(\\d+)(?:\\.(json))?(*:7375)'
                            .'|(latest|v1)/windows(?:\\.(json))?(?'
                                .'|(*:7419)'
                            .')'
                            .'|(latest|v1)/windows/(\\d+)(?:\\.(json))?(?'
                                .'|(*:7470)'
                            .')'
                            .'|(latest|v1)/process/activate/(.+)(?:\\.(json))?(*:7526)'
                            .'|(latest|v1)/process/deactivate/(.+)(?:\\.(json))?(*:7583)'
                            .'|(latest|v1)/workflowdefinition/(.+)(?:\\.(json))?(*:7640)'
                            .'|(latest|v1)/workflowdefinition(?:/([^/\\.]++)(?:\\.(json))?)?(*:7708)'
                            .'|(latest|v1)/workflowdefinition/(.+)(?:\\.(json))?(?'
                                .'|(*:7768)'
                            .')'
                            .'|(latest|v1)/workflowentity(?:\\.(json))?(*:7817)'
                            .'|(latest|v1)/workflow/(\\d+)(?:\\.(json))?(?'
                                .'|(*:7868)'
                            .')'
                            .'|(latest|v1)/workflow/activate/(.+)(?:\\.(json))?(*:7925)'
                            .'|(latest|v1)/workflow/deactivate/(.+)(?:\\.(json))?(*:7983)'
                            .'|(latest|v1)/workflow/start/(.+)/(.+)(?:\\.(json))?(*:8041)'
                            .'|(latest|v1)/workflow/transit/(\\d++)/(.+)(?:\\.(json))?(*:8103)'
                            .'|(latest|v1)/workflow/start/([^/]++)/([^/\\.]++)(?:\\.(json))?(*:8171)'
                            .'|(latest|v1)/workflow/transit/(\\d+)/([^/\\.]++)(?:\\.(json))?(*:8238)'
                            .'|(latest|v1)/workflow/(\\d+)(?:\\.(json))?(?'
                                .'|(*:8289)'
                            .')'
                            .'|(latest|v1)/workflow/activate/([^/\\.]++)(?:\\.(json))?(*:8352)'
                            .'|(latest|v1)/workflow/deactivate/([^/\\.]++)(?:\\.(json))?(*:8416)'
                            .'|(latest|v1)/workflowdefinition/([^/\\.]++)(?:\\.(json))?(?'
                                .'|(*:8482)'
                            .')'
                            .'|(latest|v1)/workflowdefinition(?:/([^/\\.]++)(?:\\.(json))?)?(*:8551)'
                            .'|(latest|v1)/workflowdefinition/([^/\\.]++)(?:\\.(json))?(*:8614)'
                            .'|(latest|v1)/workflowentity(?:\\.(json))?(*:8662)'
                            .'|(latest|v1)/process/activate/([^/\\.]++)(?:\\.(json))?(*:8723)'
                            .'|(latest|v1)/process/deactivate/([^/\\.]++)(?:\\.(json))?(*:8786)'
                            .'|(latest|v1)/relation/([^/]++)/(\\d+)/comment(?:\\.(json))?(?'
                                .'|(*:8854)'
                            .')'
                            .'|(latest|v1)/comment/(\\d+)(?:\\.(json))?(?'
                                .'|(*:8905)'
                            .')'
                            .'|(latest|v1)/comment/(\\d+)/removeAttachment(?:\\.(json))?(*:8970)'
                            .'|(latest|v1)/comment/(\\d+)(?:\\.(json))?(*:9017)'
                            .'|(latest|v1)/dashboard/widget/add/widget(?:\\.(json|html))?(*:9083)'
                            .'|(latest|v1)/dashboards/(\\d+)/widgets/(\\d+)(?:\\.(json))?(?'
                                .'|(*:9150)'
                            .')'
                            .'|(latest|v1)/dashboards/(\\d+)/widget/positions(?:\\.(json))?(*:9218)'
                            .'|(latest|v1)/dashboards/widgets/adds/widgets(?:\\.(json))?(*:9283)'
                            .'|(latest|v1)/dashboards/(\\d+)(?:\\.(json))?(*:9333)'
                            .'|(latest|v1)/calendars/(\\d+)/connections(?:\\.(json))?(*:9394)'
                            .'|(latest|v1)/calendarconnections/(\\d+)(?:\\.(json))?(*:9453)'
                            .'|(latest|v1)/calendarconnections(?:\\.(json))?(*:9506)'
                            .'|(latest|v1)/calendarconnections/(\\d+)(?:\\.(json))?(*:9565)'
                            .'|(latest|v1)/calendar/connections(?:\\.(json))?(*:9619)'
                            .'|(latest|v1)/calendar/connection(?:\\.(json))?(*:9672)'
                            .'|(latest|v1)/calendarevents(?:\\.(json))?(*:9720)'
                            .'|(latest|v1)/calendarevents/(\\d+)(?:\\.(json))?(*:9774)'
                            .'|(latest|v1)/calendars/(\\d+)/events/(\\d+)(?:\\.(json))?(*:9836)'
                            .'|(latest|v1)/calendarevents/(\\d+)(?:\\.(json))?(*:9890)'
                            .'|(latest|v1)/calendarevents(?:\\.(json))?(*:9938)'
                            .'|(latest|v1)/calendarevents/(\\d+)(?:\\.(json))?(*:9992)'
                            .'|(latest|v1)/calendarevents(?:\\.(json))?(*:10040)'
                            .'|(latest|v1)/calendarevent(?:\\.(json))?(*:10088)'
                            .'|(latest|v1)/calendars/default(?:\\.(json))?(*:10140)'
                            .'|(latest|v1)/systemcalendars/(\\d+)(?:\\.(json))?(*:10196)'
                            .'|(latest|v1)/systemcalendars(?:\\.(json))?(*:10246)'
                            .'|(latest|v1)/systemcalendar(?:\\.(json))?(*:10295)'
                            .'|(latest|v1)/contact(?:\\.(json|html))?(*:10342)'
                            .'|(latest|v1)/contactgroup(?:\\.(json|html))?(*:10394)'
                            .'|(latest|v1)/contacts(?:\\.(json|html))?(*:10442)'
                            .'|(latest|v1)/contacts/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:10499)'
                            .')'
                            .'|(latest|v1)/contacts(?:\\.(json|html))?(*:10548)'
                            .'|(latest|v1)/contacts/(\\d+)(?:\\.(json|html))?(*:10602)'
                            .'|(latest|v1)/contacts(?:\\.(json|html))?(*:10650)'
                            .'|(latest|v1)/contact(?:\\.(json|html))?(*:10697)'
                            .'|(latest|v1)/contactgroups(?:\\.(json|html))?(*:10750)'
                            .'|(latest|v1)/contactgroups/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:10812)'
                            .')'
                            .'|(latest|v1)/contactgroups(?:\\.(json|html))?(*:10866)'
                            .'|(latest|v1)/contactgroups/(\\d+)(?:\\.(json|html))?(*:10925)'
                            .'|(latest|v1)/contactgroups(?:\\.(json|html))?(*:10978)'
                            .'|(latest|v1)/contactgroup(?:\\.(json|html))?(*:11030)'
                            .'|(latest|v1)/contacts/(\\d+)/addresses/(\\d+)(?:\\.(json|html))?(*:11100)'
                            .'|(latest|v1)/contacts/(\\d+)/addresses(?:\\.(json|html))?(*:11164)'
                            .'|(latest|v1)/contacts/(\\d+)/addresses/(\\d+)(?:\\.(json|html))?(*:11234)'
                            .'|(latest|v1)/contacts/(\\d+)/addresses/([^/]++)/by/type(?:\\.(json|html))?(*:11315)'
                            .'|(latest|v1)/contacts/(\\d+)/address/primary(?:\\.(json|html))?(*:11385)'
                            .'|(latest|v1)/contact/addresses(?:\\.(json|html))?(*:11442)'
                            .'|(latest|v1)/contact/address(?:\\.(json|html))?(*:11497)'
                            .'|(latest|v1)/contacts/(\\d+)/phones(?:\\.(json|html))?(*:11558)'
                            .'|(latest|v1)/contacts/(\\d+)/phone/primary(?:\\.(json|html))?(*:11626)'
                            .'|(latest|v1)/contacts/phones(?:\\.(json|html))?(*:11681)'
                            .'|(latest|v1)/contacts/(\\d+)/phone(?:\\.(json|html))?(*:11741)'
                            .'|(latest|v1)/contact/phones(?:\\.(json|html))?(*:11795)'
                            .'|(latest|v1)/contact/phone(?:\\.(json|html))?(*:11848)'
                            .'|(latest|v1)/contacts/emails(?:\\.(json|html))?(*:11903)'
                            .'|(latest|v1)/contacts/(\\d+)/email(?:\\.(json|html))?(*:11963)'
                            .'|(latest|v1)/contact/emails(?:\\.(json|html))?(*:12017)'
                            .'|(latest|v1)/contact/email(?:\\.(json|html))?(*:12070)'
                            .'|(latest|v1)/pagestate(?:\\.(json|html))?(*:12119)'
                            .'|(latest|v1)/navigationitems/([^/\\.]++)(?:\\.(json))?(?'
                                .'|(*:12183)'
                            .')'
                            .'|(latest|v1)/navigationitems/([^/]++)/ids/(\\d+)(?:\\.(json))?(?'
                                .'|(*:12256)'
                            .')'
                            .'|(latest|v1)/shortcuts/([^/\\.]++)(?:\\.(json))?(*:12312)'
                            .'|(latest|v1)/pagestates(?:\\.(json))?(*:12357)'
                            .'|(latest|v1)/pagestates/(\\d+)(?:\\.(json))?(*:12408)'
                            .'|(latest|v1)/pagestates(?:\\.(json))?(*:12453)'
                            .'|(latest|v1)/pagestates/(\\d+)(?:\\.(json))?(?'
                                .'|(*:12507)'
                            .')'
                            .'|(latest|v1)/pagestate/checkid(?:\\.(json))?(*:12560)'
                            .'|(latest|v1)/marketinglist/removeditem(?:\\.(json|html))?(*:12625)'
                            .'|(latest|v1)/marketinglists/(\\d+)/segment/run(?:\\.(json|html))?(*:12697)'
                            .'|(latest|v1)/marketinglist/unsubscribeditem(?:\\.(json|html))?(*:12767)'
                            .'|(latest|v1)/marketinglists(?:\\.(json|html))?(*:12821)'
                            .'|(latest|v1)/marketinglist(?:\\.(json|html))?(*:12874)'
                            .'|(latest|v1)/marketinglist/removeditems(?:\\.(json|html))?(*:12940)'
                            .'|(latest|v1)/marketinglist/removeditem(?:\\.(json|html))?(*:13005)'
                            .'|(latest|v1)/marketinglist/unsubscribeditems(?:\\.(json|html))?(*:13076)'
                            .'|(latest|v1)/marketinglist/unsubscribeditem(?:\\.(json|html))?(*:13146)'
                            .'|(latest|v1)/marketinglist/segments(?:\\.(json|html))?(*:13208)'
                            .'|(latest|v1)/marketinglist/contact\\-information/field/type(?:\\.(json|html))?(*:13293)'
                            .'|(latest|v1)/marketinglist/contact\\-information/entity/fields(?:\\.(json|html))?(*:13381)'
                            .'|(latest|v1)/marketinglists/(\\d+)(?:\\.(json|html))?(*:13441)'
                            .'|(latest|v1)/marketinglist/(\\d+)/remove/(\\d+)(?:\\.(json|html))?(*:13513)'
                            .'|(latest|v1)/marketinglist/(\\d+)/unremove/(\\d+)(?:\\.(json|html))?(*:13587)'
                            .'|(latest|v1)/marketinglists/removeditems(?:\\.(json|html))?(*:13654)'
                            .'|(latest|v1)/marketinglists/(\\d+)/removeditem(?:\\.(json|html))?(*:13726)'
                            .'|(latest|v1)/marketinglist/(\\d+)/unsubscribe/(\\d+)(?:\\.(json|html))?(*:13803)'
                            .'|(latest|v1)/marketinglist/(\\d+)/subscribe/(\\d+)(?:\\.(json|html))?(*:13878)'
                            .'|(latest|v1)/marketinglists/unsubscribeditems(?:\\.(json|html))?(*:13950)'
                            .'|(latest|v1)/marketinglists/(\\d+)/unsubscribeditem(?:\\.(json|html))?(*:14027)'
                            .'|(latest|v1)/marketinglists/(\\d+)/segments/runs(?:\\.(json|html))?(*:14101)'
                            .'|(latest|v1)/tracking/websites(?:\\.(json))?(*:14153)'
                            .'|(latest|v1)/tracking/website(?:\\.(json))?(*:14204)'
                            .'|(latest|v1)/trackings/(\\d+)/website(?:\\.(json))?(*:14262)'
                            .'|(latest|v1)/account(?:\\.(json|html))?(*:14309)'
                            .'|(latest|v1)/accounts(?:\\.(json|html))?(*:14357)'
                            .'|(latest|v1)/accounts/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:14414)'
                            .')'
                            .'|(latest|v1)/accounts(?:\\.(json|html))?(*:14463)'
                            .'|(latest|v1)/accounts/(\\d+)(?:\\.(json|html))?(*:14517)'
                            .'|(latest|v1)/accounts(?:\\.(json|html))?(*:14565)'
                            .'|(latest|v1)/account(?:\\.(json|html))?(*:14612)'
                            .'|(latest|v1)/call(?:\\.(json|html))?(*:14656)'
                            .'|(latest|v1)/calls(?:\\.(json|html))?(*:14701)'
                            .'|(latest|v1)/calls/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:14755)'
                            .')'
                            .'|(latest|v1)/calls(?:\\.(json|html))?(*:14801)'
                            .'|(latest|v1)/calls/(\\d+)(?:\\.(json|html))?(*:14852)'
                            .'|(latest|v1)/calls(?:\\.(json|html))?(*:14897)'
                            .'|(latest|v1)/call(?:\\.(json|html))?(*:14941)'
                            .'|(latest|v1)/emailcampaign/email/templates(?:\\.(json|html))?(*:15010)'
                            .'|(latest|v1)/emailcampaigns/(\\d*)/email/templates(?:\\.(json|html))?(*:15086)'
                            .'|(latest|v1)/channels(?:\\.(json))?(*:15129)'
                            .'|(latest|v1)/channels/(\\d+)(?:\\.(json))?(*:15178)'
                            .'|(latest|v1)/channels(?:\\.(json))?(*:15221)'
                            .'|(latest|v1)/channel(?:\\.(json))?(*:15263)'
                            .'|(latest|v1)/customers/search(?:\\.(json))?(*:15314)'
                            .'|(latest|v1)/search/customers(?:\\.(json))?(*:15365)'
                            .'|(latest|v1)/reminder/shown(?:\\.(json|html))?(*:15419)'
                            .'|(latest|v1)/reminders/showns(?:\\.(json))?(*:15470)'
                            .'|(latest|v1)/task(?:\\.(json|html))?(*:15514)'
                            .'|(latest|v1)/tasks(?:\\.(json|html))?(*:15559)'
                            .'|(latest|v1)/tasks/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:15613)'
                            .')'
                            .'|(latest|v1)/tasks(?:\\.(json|html))?(*:15659)'
                            .'|(latest|v1)/tasks/(\\d+)(?:\\.(json|html))?(*:15710)'
                            .'|(latest|v1)/tasks(?:\\.(json|html))?(*:15755)'
                            .'|(latest|v1)/task(?:\\.(json|html))?(*:15799)'
                            .'|(latest|v1)/salesfunnel(?:\\.(json|html))?(*:15850)'
                            .'|(latest|v1)/lead(?:\\.(json|html))?(*:15894)'
                            .'|(latest|v1)/opportunity(?:\\.(json|html))?(*:15945)'
                            .'|(latest|v1)/opportunities(?:\\.(json|html))?(*:15998)'
                            .'|(latest|v1)/opportunities/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:16060)'
                            .')'
                            .'|(latest|v1)/opportunities(?:\\.(json|html))?(*:16114)'
                            .'|(latest|v1)/opportunities/(\\d+)(?:\\.(json|html))?(*:16173)'
                            .'|(latest|v1)/opportunities(?:\\.(json|html))?(*:16226)'
                            .'|(latest|v1)/opportunity(?:\\.(json|html))?(*:16277)'
                            .'|(latest|v1)/leads(?:\\.(json|html))?(*:16322)'
                            .'|(latest|v1)/leads/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:16376)'
                            .')'
                            .'|(latest|v1)/leads(?:\\.(json|html))?(*:16422)'
                            .'|(latest|v1)/leads/(\\d+)(?:\\.(json|html))?(*:16473)'
                            .'|(latest|v1)/leads(?:\\.(json|html))?(*:16518)'
                            .'|(latest|v1)/lead(?:\\.(json|html))?(*:16562)'
                            .'|(latest|v1)/leads/(\\d+)/addresses(?:\\.(json|html))?(*:16623)'
                            .'|(latest|v1)/leads/(\\d+)/address/primary(?:\\.(json|html))?(*:16690)'
                            .'|(latest|v1)/leads/(\\d+)/addresses/(\\d+)(?:\\.(json|html))?(*:16757)'
                            .'|(latest|v1)/lead/addresses(?:\\.(json|html))?(*:16811)'
                            .'|(latest|v1)/lead/address(?:\\.(json|html))?(*:16863)'
                            .'|(latest|v1)/salesfunnels(?:\\.(json|html))?(*:16915)'
                            .'|(latest|v1)/salesfunnels/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:16976)'
                            .')'
                            .'|(latest|v1)/salesfunnels(?:\\.(json|html))?(*:17029)'
                            .'|(latest|v1)/salesfunnels/(\\d+)(?:\\.(json|html))?(*:17087)'
                            .'|(latest|v1)/salesfunnels(?:\\.(json|html))?(*:17139)'
                            .'|(latest|v1)/salesfunnel(?:\\.(json|html))?(*:17190)'
                            .'|(latest|v1)/b2bcustomers(?:\\.(json|html))?(*:17242)'
                            .'|(latest|v1)/b2bcustomers/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:17303)'
                            .')'
                            .'|(latest|v1)/b2bcustomers(?:\\.(json|html))?(*:17356)'
                            .'|(latest|v1)/b2bcustomers/(\\d+)(?:\\.(json|html))?(*:17414)'
                            .'|(latest|v1)/b2bcustomers(?:\\.(json|html))?(*:17466)'
                            .'|(latest|v1)/b2bcustomer(?:\\.(json|html))?(*:17517)'
                            .'|(latest|v1)/leads/phones(?:\\.(json|html))?(*:17569)'
                            .'|(latest|v1)/leads/(\\d+)/phone(?:\\.(json|html))?(*:17626)'
                            .'|(latest|v1)/lead/phones(?:\\.(json|html))?(*:17677)'
                            .'|(latest|v1)/lead/phone(?:\\.(json|html))?(*:17727)'
                            .'|(latest|v1)/leademails(?:\\.(json|html))?(*:17777)'
                            .'|(latest|v1)/leademails/(\\d+)(?:\\.(json|html))?(*:17833)'
                            .'|(latest|v1)/leademails(?:\\.(json|html))?(*:17883)'
                            .'|(latest|v1)/leademail(?:\\.(json|html))?(*:17932)'
                            .'|(latest|v1)/b2bcustomers/emails(?:\\.(json|html))?(*:17991)'
                            .'|(latest|v1)/b2bcustomers/(\\d+)/email(?:\\.(json|html))?(*:18055)'
                            .'|(latest|v1)/b2bcustomer/emails(?:\\.(json|html))?(*:18113)'
                            .'|(latest|v1)/b2bcustomer/email(?:\\.(json|html))?(*:18170)'
                            .'|(latest|v1)/b2bcustomers/(\\d+)/phones(?:\\.(json|html))?(*:18235)'
                            .'|(latest|v1)/b2bcustomers/(\\d+)/phone/primary(?:\\.(json|html))?(*:18307)'
                            .'|(latest|v1)/b2bcustomers/phones(?:\\.(json|html))?(*:18366)'
                            .'|(latest|v1)/b2bcustomers/(\\d+)/phone(?:\\.(json|html))?(*:18430)'
                            .'|(latest|v1)/b2bcustomer/phones(?:\\.(json|html))?(*:18488)'
                            .'|(latest|v1)/b2bcustomer/phone(?:\\.(json|html))?(*:18545)'
                            .'|(latest|v1)/contactrequests(?:\\.(json))?(*:18595)'
                            .'|(latest|v1)/contactrequest(?:\\.(json))?(*:18644)'
                            .'|(latest|v1)/contactrequests/(\\d+)(?:\\.(json))?(*:18700)'
                            .'|(latest|v1)/case(?:\\.(json|html))?(*:18744)'
                            .'|(latest|v1)/cases(?:\\.(json|html))?(*:18789)'
                            .'|(latest|v1)/cases/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:18843)'
                            .')'
                            .'|(latest|v1)/cases(?:\\.(json|html))?(*:18889)'
                            .'|(latest|v1)/cases/(\\d+)(?:\\.(json|html))?(*:18940)'
                            .'|(latest|v1)/cases(?:\\.(json|html))?(*:18985)'
                            .'|(latest|v1)/case(?:\\.(json|html))?(*:19029)'
                            .'|(latest|v1)/case/(\\d+)/comments(?:\\.(json|html))?(*:19088)'
                            .'|(latest|v1)/case/comments/(\\d+)(?:\\.(json|html))?(?'
                                .'|(*:19150)'
                            .')'
                            .'|(latest|v1)/case/(\\d+)/comment(?:\\.(json|html))?(*:19209)'
                            .'|(latest|v1)/case/comments/(\\d+)(?:\\.(json|html))?(*:19268)'
                            .'|(latest|v1)/case/comments(?:\\.(json|html))?(*:19321)'
                            .'|(latest|v1)/ticket/sync/case/(\\d+)/channel/(\\d+)(?:\\.(json))?(*:19392)'
                            .'|(latest|v1)/dotmailer/datafields(?:\\.(json|html))?(*:19452)'
                            .'|(latest|v1)/dotmailer/datafield/mappings(?:\\.(json|html))?(*:19520)'
                            .'|(latest|v1)/dotmailers/(\\d+)/datafield(?:\\.(json|html))?(*:19586)'
                            .'|(latest|v1)/dotmailers/datafields/mappings/fields(?:\\.(json|html))?(*:19663)'
                            .'|(latest|v1)/dotmailers/(\\d+)/datafield/mapping(?:\\.(json|html))?(*:19737)'
                            .'|(latest|v1)/activity/target(?:\\.(json))?(*:19787)'
                            .'|(latest|v1)/activity/context(?:\\.(json))?(*:19838)'
                            .'|(latest|v1)/activity(?:\\.(json))?(*:19881)'
                            .'|(latest|v1)/activity/targets(?:\\.(json))?(*:19932)'
                            .'|(latest|v1)/activity/contexts(?:\\.(json))?(*:19984)'
                            .'|(latest|v1)/activity/relations(?:\\.(json))?(*:20037)'
                            .'|(latest|v1)/activity/search/relations(?:\\.(json))?(*:20097)'
                            .'|(latest|v1)/activities/targets(?:\\.(json))?(*:20150)'
                            .'|(latest|v1)/activities/targets/([^/\\.]++)(?:\\.(json))?(*:20214)'
                            .'|(latest|v1)/activities/targets/([^/]++)/([^/\\.]++)(?:\\.(json))?(*:20287)'
                            .'|(latest|v1)/activities/([^/]++)/(\\d+)/context(?:\\.(json))?(*:20355)'
                            .'|(latest|v1)/activities/([^/]++)/(\\d+)/relations(?:\\.(json))?(?'
                                .'|(*:20428)'
                            .')'
                            .'|(latest|v1)/activities/([^/]++)/(\\d+)/([^/]++)/([^/\\.]++)(?:\\.(json))?(*:20509)'
                            .'|(latest|v1)/activities/([^/]++)/relations/search(?:\\.(json))?(*:20580)'
                            .'|(latest|v1)/activities(?:\\.(json))?(*:20625)'
                            .'|(latest|v1)/activities/([^/\\.]++)(?:\\.(json))?(*:20681)'
                            .'|(latest|v1)/activities(?:\\.(json))?(*:20726)'
                            .'|(latest|v1)/dictionary/values(?:\\.(json))?(*:20778)'
                            .'|(latest|v1)/([^/\\.]++)(?:\\.(json))?(*:20823)'
                        .')'
                        .'|doc(?'
                            .'|(?:/([\\w-]+))?(?'
                                .'|(*:20857)'
                            .')'
                            .'|/([\\w-]+)/([^/]++)(?'
                                .'|(*:20889)'
                            .')'
                        .')'
                        .'|((?:(?!(?:rest)(?:/|$))[^/]+))/([^/]++)(*:20940)'
                        .'|((?:(?!(?:rest)(?:/|$))[^/]+))(*:20980)'
                        .'|((?:(?!(?:rest)(?:/|$))[^/]+))/([^/]++)/([^/]++)(*:21038)'
                        .'|((?:(?!(?:rest)(?:/|$))[^/]+))/([^/]++)/relationships/([^/]++)(*:21110)'
                    .')'
                    .'|tt(?'
                        .'|achment/(?'
                            .'|view/widget/([^/]++)/([^/]++)(*:21166)'
                            .'|create/([^/]++)/([^/]++)(*:21200)'
                            .'|update/([^/]++)(*:21225)'
                            .'|((?:get|download))/(\\d+)/([^/]++)(*:21268)'
                        .')'
                        .'|ribute/(?'
                            .'|create/([^/]++)(*:21304)'
                            .'|save/([^/]++)(*:21327)'
                            .'|u(?'
                                .'|pdate/(\\d+)(*:21352)'
                                .'|nremove(?:/(\\d+))?(*:21380)'
                            .')'
                            .'|index/([^/]++)(*:21405)'
                            .'|remove(?:/(\\d+))?(*:21432)'
                            .'|family/(?'
                                .'|create/([^/]++)(*:21467)'
                                .'|update/([^/]++)(*:21492)'
                                .'|index/([^/]++)(*:21516)'
                                .'|delete/([^/]++)(*:21541)'
                                .'|view/(\\d+)(*:21561)'
                            .')'
                        .')'
                    .')'
                    .'|c(?'
                        .'|ti(?'
                            .'|onwidget/form/([^/]++)(*:21605)'
                            .'|vit(?'
                                .'|ies/(?'
                                    .'|view/([^/]++)(*:21641)'
                                    .'|([^/]++)/(?'
                                        .'|([^/]++)/context(*:21679)'
                                        .'|search/autocomplete(*:21708)'
                                    .')'
                                .')'
                                .'|y\\-(?'
                                    .'|contact/metrics/([^/]++)/([^/]++)(*:21759)'
                                    .'|list/view/widget/([^/]++)/([^/]++)(*:21803)'
                                .')'
                            .')'
                        .')'
                        .'|count(?'
                            .'|/(?'
                                .'|view/(\\d+)(*:21838)'
                                .'|update/(\\d+)(*:21860)'
                            .')'
                            .'|(?:/(html|json))?(*:21888)'
                            .'|/widget/(?'
                                .'|contacts(?:/(\\d+))?(*:21928)'
                                .'|info/(\\d+)(*:21948)'
                            .')'
                        .')'
                    .')'
                    .'|jax/operation/execute/([^/]++)(*:21991)'
                    .'|udit(?'
                        .'|(?:/(html|json))?(*:22025)'
                        .'|/history(?:/([a-zA-Z0-9_]+)(?:/([a-zA-Z0-9_-]+)(?:/([^/]++))?)?)?(*:22100)'
                    .')'
                .')'
                .'|/s(?'
                    .'|e(?'
                        .'|curity/(?'
                            .'|acl\\-access\\-levels/([\\w]+:[\\w\\:\\(\\)\\|]+)(?:/([\\w/]+))?(*:22186)'
                            .'|switch\\-organization(?:/(\\d+)(?:\\.(html|json))?)?(*:22245)'
                        .')'
                        .'|gment(?'
                            .'|(?:/(html|json))?(*:22281)'
                            .'|/(?'
                                .'|view/(\\d+)(*:22305)'
                                .'|update/(\\d+)(*:22327)'
                                .'|clone/(\\d+)(*:22348)'
                                .'|refresh/(\\d+)(*:22371)'
                            .')'
                        .')'
                    .')'
                    .'|ystem\\-calendar/(?'
                        .'|view/(\\d+)(*:22413)'
                        .'|update/(\\d+)(*:22435)'
                        .'|widget/(?'
                            .'|events/(\\d+)(*:22467)'
                            .'|info/(\\d+)(?:/(\\d+))?(*:22498)'
                        .')'
                        .'|event/view/(\\d+)(*:22525)'
                        .'|(\\d+)/event/create(*:22553)'
                        .'|event/update/(\\d+)(*:22581)'
                    .')'
                    .'|ales(?'
                        .'|/customers/([^/]++)/search/autocomplete(*:22638)'
                        .'|funnel(?'
                            .'|(?:/(html|json))?(*:22674)'
                            .'|/(?'
                                .'|view/(\\d+)(*:22698)'
                                .'|info/(\\d+)(*:22718)'
                                .'|update(?:/(\\d+))?(*:22745)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/m(?'
                    .'|e(?'
                        .'|dia/(?'
                            .'|cache/(?'
                                .'|attachment/(?'
                                    .'|filter/([^/]++)/([0-9a-f]{32})/(\\d+)/([^/]++)(*:22843)'
                                    .'|resize/(\\d+)/(\\d+)/(\\d+)/([^/]++)(*:22886)'
                                .')'
                                .'|resolve/([a-z0-9_-]*)/(.+)(*:22923)'
                            .')'
                            .'|js/(?'
                                .'|routes\\.(json)(*:22954)'
                                .'|translation/([^/\\.]++)\\.json(*:22992)'
                            .')'
                            .'|([\\w-]+)/(.+)(*:23016)'
                        .')'
                        .'|ssage\\-queue/jobs/(\\d+)(*:23050)'
                        .'|rge/([^/]++)/massAction/([^/]++)(*:23092)'
                        .'|nu/(?'
                            .'|global/(?'
                                .'|reset/([^/]++)(*:23132)'
                                .'|create/([^/]++)/([^/]++)(*:23166)'
                                .'|delete/([^/]++)/([^/]++)(*:23200)'
                                .'|show/([^/]++)/([^/]++)(*:23232)'
                                .'|hide/([^/]++)/([^/]++)(*:23264)'
                                .'|move/([^/]++)(*:23287)'
                                .'|([^/]++)(?'
                                    .'|(*:23308)'
                                    .'|/(?'
                                        .'|create(?:/([^/]++))?(*:23342)'
                                        .'|update/([^/]++)(*:23367)'
                                        .'|move(*:23381)'
                                    .')'
                                .')'
                            .')'
                            .'|user/(?'
                                .'|reset/([^/]++)(*:23416)'
                                .'|create/([^/]++)/([^/]++)(*:23450)'
                                .'|delete/([^/]++)/([^/]++)(*:23484)'
                                .'|show/([^/]++)/([^/]++)(*:23516)'
                                .'|hide/([^/]++)/([^/]++)(*:23548)'
                                .'|move/([^/]++)(*:23571)'
                                .'|([^/]++)(?'
                                    .'|(*:23592)'
                                    .'|/(?'
                                        .'|create(?:/([^/]++))?(*:23626)'
                                        .'|update/([^/]++)(*:23651)'
                                        .'|move(*:23665)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|arketing\\-(?'
                        .'|list/(?'
                            .'|view(?:/(\\d+))?(*:23716)'
                            .'|update(?:/(\\d+))?(*:23743)'
                        .')'
                        .'|activity/(?'
                            .'|widget/marketing\\-activities/(?'
                                .'|summary/(\\d+)(*:23811)'
                                .'|info/(\\d+)(*:23831)'
                            .')'
                            .'|view/widget/marketing\\-activities/(?'
                                .'|([^/]++)/([^/]++)(*:23896)'
                                .'|list/([^/]++)/([^/]++)(*:23928)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|m(?'
                        .'|ail/(?'
                            .'|a(?'
                                .'|utoresponserule/(?'
                                    .'|create(?:/([^/]++))?(*:24001)'
                                    .'|update/(\\d+)(*:24023)'
                                .')'
                                .'|ctivity/view/([^/]++)/([^/]++)(*:24064)'
                                .'|ttachment(?'
                                    .'|/(?'
                                        .'|(\\d+)(*:24095)'
                                        .'|(\\d+)/link(*:24115)'
                                    .')'
                                    .'|s/(\\d+)(*:24133)'
                                .')'
                            .')'
                            .'|view(?'
                                .'|/(?'
                                    .'|(\\d+)(*:24161)'
                                    .'|thread/(\\d+)(*:24183)'
                                    .'|user\\-thread/(\\d+)(*:24211)'
                                .')'
                                .'|\\-group/(\\d+)(*:24235)'
                            .')'
                            .'|widget/(?'
                                .'|thread/(\\d+)(*:24268)'
                                .'|user\\-thread/(\\d+)(*:24296)'
                            .')'
                            .'|reply(?'
                                .'|/(\\d+)(*:24321)'
                                .'|all/(\\d+)(*:24340)'
                            .')'
                            .'|forward/(\\d+)(*:24364)'
                            .'|body/(\\d+)(*:24384)'
                            .'|m(?'
                                .'|edia/cache/email_attachment/resize/(\\d+)/(\\d+)/(\\d+)(*:24450)'
                                .'|ark\\-seen/(\\d+)/(\\d+)(?:/(\\d+))?(*:24492)'
                            .')'
                            .'|toggle\\-seen/(\\d+)(*:24521)'
                            .'|([^/]++)/massAction/([^/]++)(*:24559)'
                            .'|emailtemplate(?'
                                .'|(?:/(html|json))?(*:24602)'
                                .'|/(?'
                                    .'|update(?:/(\\d+))?(*:24633)'
                                    .'|clone(?:/(\\d+))?(*:24659)'
                                    .'|preview(?:/(\\d+))?(*:24687)'
                                .')'
                            .')'
                            .'|autoresponserule/template/([^/]++)(*:24733)'
                        .')'
                        .'|bedded\\-form/(?'
                            .'|su(?'
                                .'|bmit/([-\\d\\w]+)(*:24780)'
                                .'|ccess/([-\\d\\w]+)(*:24806)'
                            .')'
                            .'|de(?'
                                .'|lete/([-\\d\\w]+)(*:24837)'
                                .'|fault\\-data/([^/]++)(*:24867)'
                            .')'
                            .'|update/([-\\d\\w]+)(*:24895)'
                            .'|view/([-\\d\\w]+)(*:24920)'
                            .'|info/([-\\d\\w]+)(*:24945)'
                        .')'
                    .')'
                    .'|ntit(?'
                        .'|ies/(?'
                            .'|([^/]++)(*:24979)'
                            .'|de(?'
                                .'|tailed/([^/]++)/([^/]++)(?:/([^/]++))?(*:25032)'
                                .'|lete/([^/]++)/item/([^/]++)(*:25069)'
                            .')'
                            .'|relation/([^/]++)/([^/]++)(?:/([^/]++))?(*:25120)'
                            .'|view/([^/]++)/item/([^/]++)(*:25157)'
                            .'|update/([^/]++)/item(?:/([^/]++))?(*:25201)'
                        .')'
                        .'|y(?'
                            .'|/(?'
                                .'|config/(?'
                                    .'|audit(?'
                                        .'|(?:/([a-zA-Z0-9_]+)(?:/(\\d+)(?:/([^/]++))?)?)?(*:25284)'
                                        .'|_field(?:/([a-zA-Z0-9_]+)(?:/(\\d+)(?:/([^/]++))?)?)?(*:25346)'
                                    .')'
                                    .'|update/([^/]++)(*:25372)'
                                    .'|view/([^/]++)(*:25395)'
                                    .'|field(?'
                                        .'|s(?:/(\\d+))?(*:25425)'
                                        .'|/(?'
                                            .'|update/([^/]++)(*:25454)'
                                            .'|search(?:/([^/]++))?(*:25484)'
                                        .')'
                                    .')'
                                    .'|widget/(?'
                                        .'|info/([^/]++)(*:25519)'
                                        .'|unique_keys/([^/]++)(*:25549)'
                                        .'|entity_fields/([^/]++)(*:25581)'
                                    .')'
                                .')'
                                .'|extend/(?'
                                    .'|update(?:/([^/]++))?(*:25623)'
                                    .'|entity/(?'
                                        .'|un(?'
                                            .'|ique\\-key(?:/(\\d+))?(*:25668)'
                                            .'|remove(?:/(\\d+))?(*:25695)'
                                        .')'
                                        .'|remove(?:/(\\d+))?(*:25723)'
                                    .')'
                                    .'|field/(?'
                                        .'|create(?:/(\\d+))?(*:25760)'
                                        .'|u(?'
                                            .'|pdate(?:/(\\d+))?(*:25790)'
                                            .'|nremove(?:/(\\d+))?(*:25818)'
                                        .')'
                                        .'|remove(?:/(\\d+))?(*:25846)'
                                    .')'
                                .')'
                            .')'
                            .'|\\-pagination/(?'
                                .'|first/([^/]++)/([^/]++)/([^/]++)(*:25907)'
                                .'|previous/([^/]++)/([^/]++)/([^/]++)(*:25952)'
                                .'|next/([^/]++)/([^/]++)/([^/]++)(*:25993)'
                                .'|last/([^/]++)/([^/]++)/([^/]++)(*:26034)'
                            .')'
                        .')'
                    .')'
                    .'|xport/(?'
                        .'|instant/([^/]++)(*:26072)'
                        .'|template/([^/]++)(*:26099)'
                        .'|download/(\\d+)(*:26123)'
                    .')'
                .')'
                .'|/d(?'
                    .'|a(?'
                        .'|shboard(?'
                            .'|/recent_emails/([\\w\\-]+)(?:/(inbox|sent|new)(?:/(full|tab))?)?(*:26216)'
                            .'|(?:\\.(html|json))?(*:26244)'
                            .'|/(?'
                                .'|view(?:/(\\d+))?(*:26273)'
                                .'|c(?'
                                    .'|onfigure/(\\d+)(*:26301)'
                                    .'|ampaign_(?'
                                        .'|lead/chart/([\\w\\-]+)(*:26342)'
                                        .'|opportunity/chart/([\\w\\-]+)(*:26379)'
                                        .'|by_close_revenue/chart/([\\w\\-]+)(*:26421)'
                                    .')'
                                .')'
                                .'|update(?:/(\\d+))?(*:26450)'
                                .'|widget/([\\w\\-]+)/(\\w+)/([\\w\\-]+)(*:26492)'
                                .'|itemized_(?'
                                    .'|widget/([\\w\\-]+)/(\\w+)/([\\w\\-]+)(*:26546)'
                                    .'|data_widget/([\\w\\-]+)/(\\w+)/([\\w\\-]+)(*:26593)'
                                .')'
                                .'|grid/([^/]++)/([\\w\\:-]+)(*:26628)'
                                .'|my_calendar/([\\w\\-]+)(*:26659)'
                                .'|opportunit(?'
                                    .'|ies_by_lead_source/chart/([\\w\\-]+)(*:26716)'
                                    .'|y_state/chart/([\\w\\-]+)(*:26749)'
                                .')'
                                .'|sales_flow_b2b/chart/([\\w_-]+)(*:26790)'
                            .')'
                        .')'
                        .'|tagrid/(?'
                            .'|widget/([\\w\\:-]+)(*:26829)'
                            .'|([\\w\\:-]+)(*:26849)'
                            .'|([\\w\\:-]+)/export(*:26876)'
                            .'|([\\w\\:\\-]+)/massAction/([\\w\\-]+)(*:26918)'
                            .'|([^/]++)/filter\\-metadata(*:26953)'
                        .')'
                    .')'
                    .'|ictionary/([^/]++)/(?'
                        .'|search(*:26993)'
                        .'|values(*:27009)'
                    .')'
                    .'|otmailer/(?'
                        .'|address\\-book/(?'
                            .'|synchronize(?'
                                .'|/(\\d+)(*:27069)'
                                .'|_datafields/(\\d+)(*:27096)'
                            .')'
                            .'|marketing\\-list/(?'
                                .'|disconnect/(\\d+)(*:27142)'
                                .'|buttons/(\\d+)(*:27165)'
                            .')'
                            .'|widget/manage\\-connection/marketing\\-list/(\\d+)(*:27223)'
                        .')'
                        .'|d(?'
                            .'|ata\\-field(?'
                                .'|/(?'
                                    .'|view/(\\d+)(*:27265)'
                                    .'|info/(\\d+)(*:27285)'
                                .')'
                                .'|(?:/(html|json))?(*:27313)'
                                .'|\\-mapping(?'
                                    .'|(?:/(html|json))?(*:27352)'
                                    .'|/update/(\\d+)(*:27375)'
                                .')'
                            .')'
                            .'|otmailer/(?'
                                .'|email\\-campaign\\-status/(\\d+)(*:27428)'
                                .'|sync\\-status/(\\d+)(*:27456)'
                                .'|integration\\-connection(?:/(\\d+))?(*:27500)'
                            .')'
                        .')'
                        .'|oauth/disconnect/(\\d+)(*:27534)'
                    .')'
                .')'
                .'|/c(?'
                    .'|on(?'
                        .'|fig/(?'
                            .'|mailbox/(?'
                                .'|u(?'
                                    .'|pdate/([^/]++)(*:27592)'
                                    .'|sers/search/([^/]++)(*:27622)'
                                .')'
                                .'|delete/([^/]++)(*:27648)'
                            .')'
                            .'|user/(?'
                                .'|(\\d+)(?:/([^/]++)(?:/([^/]++))?)?(*:27700)'
                                .'|profile(?:/([^/]++)(?:/([^/]++))?)?(*:27745)'
                            .')'
                            .'|system(?:/([^/]++)(?:/([^/]++))?)?(*:27790)'
                        .')'
                        .'|tact(?'
                            .'|/(?'
                                .'|address\\-book/(\\d+)(*:27831)'
                                .'|(\\d+)/address\\-create(*:27862)'
                                .'|(\\d+)/address\\-update(?:/(\\d+))?(*:27904)'
                                .'|view/(\\d+)(*:27924)'
                                .'|info/(\\d+)(*:27944)'
                                .'|update/(\\d+)(*:27966)'
                            .')'
                            .'|(?:/(html|json))?(*:27994)'
                            .'|/(?'
                                .'|widget/account\\-contacts/(\\d+)(*:28038)'
                                .'|group(?'
                                    .'|/update(?:/(\\d+))?(*:28074)'
                                    .'|(?:/(html|json))?(*:28101)'
                                .')'
                            .')'
                            .'|\\-(?'
                                .'|us/(?'
                                    .'|view/(\\d+)(*:28134)'
                                    .'|info/(\\d+)(*:28154)'
                                    .'|update/(\\d+)(*:28176)'
                                    .'|delete/(\\d+)(*:28198)'
                                .')'
                                .'|reason/(?'
                                    .'|update/(\\d+)(*:28231)'
                                    .'|delete/(\\d+)(*:28253)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|ms/digital\\-asset/(?'
                        .'|update/(\\d+)(*:28300)'
                        .'|widget/choose/([^/]++)/([^/]++)(*:28341)'
                    .')'
                    .'|a(?'
                        .'|l(?'
                            .'|endar/(?'
                                .'|event/(?'
                                    .'|a(?'
                                        .'|jax/(?'
                                            .'|a(?'
                                                .'|ccepted/(\\d+)(*:28406)'
                                                .'|ttendees\\-autocomplete\\-data/([^/]++)(*:28453)'
                                            .')'
                                            .'|tentative/(\\d+)(*:28479)'
                                            .'|declined/(\\d+)(*:28503)'
                                        .')'
                                        .'|ctivity/view/([^/]++)/([^/]++)(*:28544)'
                                    .')'
                                    .'|view/(\\d+)(*:28565)'
                                    .'|widget/info/(\\d+)(?:/(\\d+))?(*:28603)'
                                    .'|update/(\\d+)(*:28625)'
                                    .'|delete/(\\d+)(*:28647)'
                                .')'
                                .'|view/(\\d+)(*:28668)'
                            .')'
                            .'|l/(?'
                                .'|activity/view/([^/]++)/([^/]++)(*:28715)'
                                .'|update/(\\d+)(*:28737)'
                                .'|view/([^/]++)(*:28760)'
                                .'|widget/info/(\\d+)(?:/(\\d+))?(*:28798)'
                            .')'
                        .')'
                        .'|mpaign/(?'
                            .'|update(?:/(\\d+))?(*:28837)'
                            .'|view/([^/]++)(*:28860)'
                            .'|e(?'
                                .'|vent/plot/([^/]++)/([^/]++)(*:28901)'
                                .'|mail/(?'
                                    .'|update(?:/(\\d+))?(*:28936)'
                                    .'|view/(\\d+)(*:28956)'
                                    .'|send/(\\d+)(*:28976)'
                                .')'
                            .')'
                        .')'
                        .'|se/(?'
                            .'|view/(\\d+)(*:29005)'
                            .'|widget/(?'
                                .'|account\\-cases/(\\d+)(*:29045)'
                                .'|contact\\-cases/(\\d+)(*:29075)'
                            .')'
                            .'|update/(\\d+)(*:29098)'
                            .'|(\\d+)/comment/list(?:\\.(json))?(*:29139)'
                            .'|(\\d+)/widget/comment(*:29169)'
                            .'|(\\d+)/comment/create(*:29199)'
                            .'|comment/(\\d+)/update(*:29229)'
                        .')'
                    .')'
                    .'|hannel(?'
                        .'|(?:/(html|json))?(*:29267)'
                        .'|/(?'
                            .'|update/(\\d+)(*:29293)'
                            .'|view/(\\d+)(*:29313)'
                            .'|widget/info/(\\d+)(*:29340)'
                            .'|integration/(?'
                                .'|create/(\\w+)(?:/([^/]++))?(*:29391)'
                                .'|update/(\\d+)(*:29413)'
                            .')'
                            .'|dashboard/chart/([\\w_-]+)(*:29449)'
                        .')'
                    .')'
                    .'|ustomer/customer/grid\\-dialog/([^/]++)(*:29499)'
                .')'
                .'|/user(?'
                    .'|/(?'
                        .'|group(?'
                            .'|/update(?:/(\\d+))?(*:29548)'
                            .'|(?:/(html|json))?(*:29575)'
                        .')'
                        .'|se(?'
                            .'|nd\\-forced\\-password\\-reset\\-email/(\\d+)(*:29631)'
                            .'|t\\-password/(\\d+)(*:29658)'
                        .')'
                        .'|r(?'
                            .'|eset/(\\w+)(*:29683)'
                            .'|ole(?'
                                .'|/(?'
                                    .'|view/(\\d+)(*:29713)'
                                    .'|update(?:/(\\d+))?(*:29740)'
                                .')'
                                .'|(?:/(html|json))?(*:29768)'
                            .')'
                        .')'
                        .'|view/(\\d+)(*:29790)'
                        .'|apigen/(\\d+)(*:29812)'
                        .'|update(?:/(\\d+))?(*:29839)'
                    .')'
                    .'|(?:/(html|json))?(*:29867)'
                    .'|/widget/info/(\\d+)(*:29895)'
                .')'
                .'|/t(?'
                    .'|ra(?'
                        .'|nslation/([^/]++)/massAction/([^/]++)(*:29953)'
                        .'|cking/website(?'
                            .'|(?:\\.(html|json))?(*:29997)'
                            .'|/(?'
                                .'|update/(\\d+)(*:30023)'
                                .'|view/(\\d+)(*:30043)'
                            .')'
                        .')'
                    .')'
                    .'|a(?'
                        .'|g(?'
                            .'|(?:/(html|json))?(*:30081)'
                            .'|/(?'
                                .'|update(?:/(\\d+))?(*:30112)'
                                .'|search(?:/(\\d+))?(*:30139)'
                            .')'
                        .')'
                        .'|xonomy(?'
                            .'|(?:/(html|json))?(*:30177)'
                            .'|/(?'
                                .'|update(?:/(\\d+))?(*:30208)'
                                .'|view/(\\d+)(*:30228)'
                                .'|widget/info/(\\d+)(*:30255)'
                            .')'
                        .')'
                        .'|sk/(?'
                            .'|widget/(?'
                                .'|sidebar\\-tasks(?:/(\\d+))?(*:30308)'
                                .'|info/(\\d+)(*:30328)'
                            .')'
                            .'|activity/view/(\\w+)/(\\d+)(*:30364)'
                            .'|u(?'
                                .'|ser/(\\d+)(*:30387)'
                                .'|pdate/(\\d+)(*:30408)'
                            .')'
                            .'|view/(\\d+)(*:30429)'
                        .')'
                    .')'
                .')'
                .'|/l(?'
                    .'|ocale/localization/(?'
                        .'|view/(\\d+)(*:30479)'
                        .'|update/(\\d+)(*:30501)'
                    .')'
                    .'|ead(?'
                        .'|/(?'
                            .'|address\\-book/(\\d+)(*:30541)'
                            .'|(\\d+)/address\\-create(*:30572)'
                            .'|(\\d+)/address\\-update(?:/(\\d+))?(*:30614)'
                            .'|view/(\\d+)(*:30634)'
                            .'|info/(\\d+)(*:30654)'
                            .'|update(?:/(\\d+))?(*:30681)'
                        .')'
                        .'|(?:/(html|json))?(*:30709)'
                        .'|/(?'
                            .'|widget/account\\-leads/(\\d+)(*:30750)'
                            .'|c(?'
                                .'|reate/([^/]++)(*:30778)'
                                .'|onvert/(\\d+)(*:30800)'
                            .')'
                            .'|disqualify/(\\d+)(*:30827)'
                        .')'
                    .')'
                .')'
                .'|/i(?'
                    .'|ntegration/(?'
                        .'|update/(\\d+)(*:30871)'
                        .'|schedule/(\\d+)(*:30895)'
                    .')'
                    .'|mport(?'
                        .'|/(?'
                            .'|validate/([^/]++)(*:30935)'
                            .'|process/([^/]++)(*:30961)'
                        .')'
                        .'|_export/job\\-error\\-log/(\\d+)\\.log(*:31006)'
                    .')'
                .')'
                .'|/not(?'
                    .'|ification/(?'
                        .'|email(?'
                            .'|(?:/(html|json))?(*:31063)'
                            .'|/update(?:/(\\d+))?(*:31091)'
                        .')'
                        .'|massnotification(?'
                            .'|(?:/(html|json))?(*:31138)'
                            .'|/(?'
                                .'|view/(\\d+)(*:31162)'
                                .'|info/(\\d+)(*:31182)'
                            .')'
                        .')'
                    .')'
                    .'|es/(?'
                        .'|view/(?'
                            .'|widget/([^/]++)/([^/]++)(*:31233)'
                            .'|([^/]++)/([^/]++)(*:31260)'
                        .')'
                        .'|widget/info/(\\d+)(?:/(\\d+))?(*:31299)'
                        .'|update/(\\d+)(*:31321)'
                    .')'
                .')'
                .'|/report(?'
                    .'|/(?'
                        .'|view/(?'
                            .'|(\\d+)(*:31360)'
                            .'|([-\\w]+)(*:31378)'
                        .')'
                        .'|update/(\\d+)(*:31401)'
                        .'|clone/(\\d+)(*:31422)'
                    .')'
                    .'|(?:/(html|json))?(*:31450)'
                    .'|/static/(\\w+)/(\\w+)(?:/(html|json))?(*:31496)'
                .')'
                .'|/processdefinition/view/([^/]++)(*:31539)'
                .'|/workflow(?'
                    .'|widget/(?'
                        .'|entity\\-workflows/([^/]++)/([^/]++)(*:31606)'
                        .'|transition/(?'
                            .'|create/attributes/([^/]++)/([^/]++)(*:31665)'
                            .'|edit/attributes/([^/]++)/([^/]++)(*:31708)'
                        .')'
                        .'|buttons/([^/]++)/([^/]++)(*:31744)'
                    .')'
                    .'|/(?'
                        .'|start/([^/]++)/([^/]++)(*:31782)'
                        .'|transit/([^/]++)/([^/]++)(*:31817)'
                    .')'
                    .'|definition/(?'
                        .'|update/([^/]++)(*:31857)'
                        .'|configure/([^/]++)(*:31885)'
                        .'|view/([^/]++)(*:31908)'
                        .'|activate\\-form/([^/]++)(*:31941)'
                    .')'
                .')'
                .'|/b2bcustomer(?'
                    .'|(?:/(html|json))?(*:31985)'
                    .'|/(?'
                        .'|view/(\\d+)(*:32009)'
                        .'|widget/(?'
                            .'|info/(\\d+)(*:32039)'
                            .'|b2bcustomer(?'
                                .'|\\-(?'
                                    .'|leads/(\\d+)(*:32079)'
                                    .'|opportunities/(\\d+)(*:32108)'
                                    .'|info/(\\d+)/channel/(\\d+)(*:32142)'
                                .')'
                                .'|s\\-info/account/(\\d+)/channel/(\\d+)(*:32188)'
                            .')'
                        .')'
                        .'|update(?:/(\\d+))?(*:32217)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        180 => [[['_route' => 'oro_twig_inspector_template_link', '_controller' => 'oro_twig_inspector.controller.open_template', 'line' => 1], ['template'], null, null, false, true, null]],
        236 => [[['_route' => 'oro_business_unit_view', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::viewAction'], ['id'], null, null, false, true, null]],
        256 => [[['_route' => 'oro_business_unit_search', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::searchAction'], ['organizationId'], null, null, false, true, null]],
        281 => [[['_route' => 'oro_business_unit_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::updateAction'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'oro_business_unit_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::indexAction'], ['_format'], null, null, false, true, null]],
        336 => [[['_route' => 'oro_business_unit_widget_info', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::infoAction'], ['id'], null, null, false, true, null]],
        355 => [[['_route' => 'oro_business_unit_widget_users', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::usersAction'], ['id'], null, null, false, true, null]],
        392 => [[['_route' => 'oro_sales_opportunity_view', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::viewAction'], ['id'], null, null, false, true, null]],
        410 => [[['_route' => 'oro_sales_opportunity_info', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::infoAction'], ['id'], null, null, false, true, null]],
        435 => [[['_route' => 'oro_sales_opportunity_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::updateAction'], ['id'], null, null, false, true, null]],
        461 => [[['_route' => 'oro_sales_opportunity_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::indexAction'], ['_format'], null, null, false, true, null]],
        488 => [[['_route' => 'oro_sales_opportunity_data_channel_aware_create', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::opportunityWithDataChannelCreateAction'], ['channelIds'], null, null, false, true, null]],
        505 => [[['_route' => 'oro_sales_opportunity_customer_aware_create', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\OpportunityController::opportunityWithCustomerCreateAction'], ['targetClass', 'targetId'], null, null, false, true, null]],
        529 => [[['_route' => 'oro_oauth2_view', 'type' => 'backoffice', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::viewAction'], ['id'], null, null, false, true, null]],
        551 => [[['_route' => 'oro_oauth2_frontend_view', 'type' => 'frontend', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::viewAction'], ['id'], null, null, false, true, null]],
        574 => [[['_route' => 'oro_oauth2_update', 'type' => 'backoffice', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::updateAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        596 => [[['_route' => 'oro_oauth2_frontend_update', 'type' => 'frontend', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::updateAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        616 => [[['_route' => 'oro_oauth2_server_client_update', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::updateClientAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        640 => [[['_route' => 'oro_oauth2_server_client_delete', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        662 => [[['_route' => 'oro_oauth2_server_client_deactivate', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::deactivateAction'], ['id'], ['POST' => 0], null, false, true, null]],
        685 => [[['_route' => 'oro_oauth2_server_client_activate', '_controller' => 'Oro\\Bundle\\OAuth2ServerBundle\\Controller\\ClientController::activateAction'], ['id'], ['POST' => 0], null, false, true, null]],
        751 => [[['_route' => 'oro_api_post_businessunit_deprecated', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        800 => [
            [['_route' => 'oro_api_get_businessunits', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_post_businessunit', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null],
        ],
        856 => [
            [['_route' => 'oro_api_put_businessunit', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_api_get_businessunit', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_businessunit', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        903 => [[['_route' => 'oro_api_options_businessunits', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        948 => [[['_route' => 'oro_api_options_businessunits_auto_850', '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        997 => [[['_route' => 'oro_api_options_attachments', '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1045 => [[['_route' => 'oro_api_options_attachments_auto_851', '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1089 => [[['_route' => 'oro_api_options_files', '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1132 => [[['_route' => 'oro_api_options_files_auto_852', '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1191 => [
            [['_route' => 'oro_api_get_attachment', '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_attachment', '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1244 => [[['_route' => 'oro_api_get_file', '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1312 => [[['_route' => 'oro_api_message_queue_job_interrupt_root_job', '_controller' => 'Oro\\Bundle\\MessageQueueBundle\\Controller\\Api\\Rest\\JobController::interruptRootJobAction', 'version' => 'latest', '_format' => 'json'], ['version', 'id', '_format'], ['POST' => 0], null, false, true, null]],
        1363 => [[['_route' => 'oro_api_options_autoresponserules', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1413 => [[['_route' => 'oro_api_options_autoresponserules_auto_853', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1461 => [[['_route' => 'oro_api_options_emailtemplates', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1508 => [[['_route' => 'oro_api_options_emailtemplates_auto_854', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1566 => [[['_route' => 'oro_api_options_email_activity_relations', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivityEntityController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1622 => [[['_route' => 'oro_api_options_email_search_relations', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySearchController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1682 => [[['_route' => 'oro_api_options_activity_email_suggestions', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySuggestionController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1741 => [[['_route' => 'oro_api_options_activity_email_suggestions_auto_855', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySuggestionController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1781 => [[['_route' => 'oro_api_get_emails', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        1830 => [
            [['_route' => 'oro_api_get_email', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_put_email', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1874 => [
            [['_route' => 'oro_api_post_email', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'oro_api_options_emails', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null],
        ],
        1914 => [[['_route' => 'oro_api_options_emails_auto_856', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        1971 => [[['_route' => 'oro_api_delete_autoresponserule', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        2017 => [[['_route' => 'oro_api_get_emailorigins', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        2069 => [[['_route' => 'oro_api_get_emailorigin', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2115 => [[['_route' => 'oro_api_options_emailorigins', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        2160 => [[['_route' => 'oro_api_options_emailorigins_auto_857', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        2214 => [[['_route' => 'oro_api_delete_emailtemplate', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        2300 => [[['_route' => 'oro_api_get_emailtemplates', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::cgetAction', 'entityName' => null, 'includeNonEntity' => false, 'includeSystemTemplates' => true, '_format' => 'json', 'version' => 'latest'], ['version', 'entityName', 'includeNonEntity', 'includeSystemTemplates', '_format'], ['GET' => 0], null, false, true, null]],
        2358 => [[['_route' => 'oro_api_get_emailtemplate_variables', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getVariablesAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        2427 => [[['_route' => 'oro_api_get_emailtemplate_compiled', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getCompiledAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', 'entityId', '_format'], ['GET' => 0], null, false, true, null]],
        2488 => [[['_route' => 'oro_api_get_email_activity_relations_by_filters', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivityController::cgetByFiltersAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        2555 => [[['_route' => 'oro_api_get_email_activity_relations', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivityEntityController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2623 => [[['_route' => 'oro_api_get_email_search_relations', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySearchController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        2692 => [[['_route' => 'oro_api_get_activity_email_suggestions', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySuggestionController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2735 => [[['_route' => 'oro_api_post_role_deprecated', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        2778 => [[['_route' => 'oro_api_post_user_deprecated', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        2822 => [[['_route' => 'oro_api_post_group_deprecated', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        2861 => [[['_route' => 'oro_api_get_users', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        2906 => [[['_route' => 'oro_api_get_user', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2945 => [[['_route' => 'oro_api_post_user', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        2993 => [
            [['_route' => 'oro_api_put_user', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_user', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3045 => [[['_route' => 'oro_api_get_user_roles', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getRolesAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3097 => [[['_route' => 'oro_api_get_user_groups', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getGroupsAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3142 => [[['_route' => 'oro_api_get_user_filter', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getFilterAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        3181 => [[['_route' => 'oro_api_options_users', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        3219 => [[['_route' => 'oro_api_options_users_auto_858', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        3258 => [[['_route' => 'oro_api_get_roles', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        3303 => [[['_route' => 'oro_api_get_role', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3342 => [[['_route' => 'oro_api_post_role', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        3390 => [
            [['_route' => 'oro_api_put_role', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_role', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3446 => [[['_route' => 'oro_api_get_role_byname', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getBynameAction', '_format' => 'json', 'version' => 'latest'], ['version', 'name', '_format'], ['GET' => 0], null, false, true, null]],
        3485 => [[['_route' => 'oro_api_options_roles', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        3523 => [[['_route' => 'oro_api_options_roles_auto_859', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        3563 => [[['_route' => 'oro_api_get_groups', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        3609 => [[['_route' => 'oro_api_get_group', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3649 => [[['_route' => 'oro_api_post_group', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        3698 => [
            [['_route' => 'oro_api_put_group', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_group', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3739 => [[['_route' => 'oro_api_options_groups', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        3778 => [[['_route' => 'oro_api_options_groups_auto_860', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        3835 => [[['_route' => 'oro_api_get_user_permissions', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        3885 => [[['_route' => 'oro_api_options_user_permissions', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        3934 => [[['_route' => 'oro_api_options_user_permissions_auto_861', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        3968 => [[['_route' => 'oro_datagrid_api_rest_gridview_options', '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        4011 => [[['_route' => 'oro_datagrid_api_rest_gridview_post', '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        4063 => [
            [['_route' => 'oro_datagrid_api_rest_gridview_put', '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_datagrid_api_rest_gridview_delete', '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4151 => [[['_route' => 'oro_datagrid_api_rest_gridview_default', '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::defaultAction', 'default' => false, 'gridName' => null, '_format' => 'json', 'version' => 'latest'], ['version', 'id', 'default', 'gridName', '_format'], ['POST' => 0], null, false, true, null]],
        4197 => [[['_route' => 'oro_api_get_translations', '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\Api\\Rest\\TranslationController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        4276 => [[['_route' => 'oro_api_patch_translation', '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\Api\\Rest\\TranslationController::patchAction', '_format' => 'json', 'version' => 'latest'], ['version', 'locale', 'domain', 'key', '_format'], ['PATCH' => 0], null, false, true, null]],
        4325 => [[['_route' => 'oro_api_fields_entity', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityController::fieldsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        4367 => [[['_route' => 'oro_api_get_entities', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        4439 => [[['_route' => 'oro_api_get_entity_fields', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityFieldController::getFieldsAction', '_format' => 'json', 'version' => 'latest'], ['version', 'entityName', '_format'], ['GET' => 0], null, false, true, null]],
        4489 => [[['_route' => 'oro_api_get_entity_aliases', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityAliasController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        4554 => [[['_route' => 'oro_api_patch_entity_data', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityDataController::patchAction', '_format' => 'json', 'version' => 'latest'], ['version', 'className', 'id', '_format'], ['PATCH' => 0], null, false, true, null]],
        4604 => [[['_route' => 'oro_api_options_emailnotications', '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\Api\\Rest\\EmailNotificationController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        4660 => [[['_route' => 'oro_api_delete_emailnotication', '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\Api\\Rest\\EmailNotificationController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        4707 => [[['_route' => 'oro_api_options_activitylists', '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        4753 => [[['_route' => 'oro_api_options_activitylists_auto_862', '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        4814 => [[['_route' => 'oro_activity_list_api_get_list', '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'entityClass', 'entityId', '_format'], ['GET' => 0], null, false, true, null]],
        4866 => [[['_route' => 'oro_activity_list_api_get_item', '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListItemAction', '_format' => 'json', 'version' => 'latest'], ['version', 'entityId', '_format'], ['GET' => 0], null, false, true, null]],
        4938 => [[['_route' => 'oro_api_get_activitylist_activity_list_item', '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListItemAction', '_format' => 'json', 'version' => 'latest'], ['version', 'entityId', '_format'], ['GET' => 0], null, false, true, null]],
        4996 => [[['_route' => 'oro_api_get_activitylists', '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'entityClass', '_format'], ['GET' => 0], null, false, true, null]],
        5063 => [[['_route' => 'oro_api_get_activitylist_activity_list_option', '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListOptionAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        5109 => [[['_route' => 'oro_api_get_addresstypes', '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        5166 => [[['_route' => 'oro_api_get_addresstype', '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'name', '_format'], ['GET' => 0], null, false, true, null]],
        5209 => [[['_route' => 'oro_api_get_countries', '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        5263 => [[['_route' => 'oro_api_get_country', '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        5314 => [[['_route' => 'oro_api_get_region', '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\RegionController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        5374 => [[['_route' => 'oro_api_country_get_regions', '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryRegionsController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'country', '_format'], ['GET' => 0], null, false, true, null]],
        5421 => [[['_route' => 'oro_api_get_configurations', '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        5487 => [[['_route' => 'oro_api_get_configuration', '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'path', '_format'], ['GET' => 0], null, false, true, null]],
        5527 => [[['_route' => 'oro_api_get_audits', '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        5573 => [[['_route' => 'oro_api_get_audit', '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        5619 => [[['_route' => 'oro_api_get_audit_fields', '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::getFieldsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        5659 => [[['_route' => 'oro_api_options_audits', '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        5698 => [[['_route' => 'oro_api_options_audits_auto_863', '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        5751 => [[['_route' => 'oro_api_autocomplete_search', '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\Api\\Rest\\AutocompleteController::searchAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        5810 => [[['_route' => 'oro_api_get_notes', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::cgetAction', '_format' => 'json'], ['version', 'entityClass', 'entityId', '_format'], ['GET' => 0], null, false, true, null]],
        5860 => [[['_route' => 'oro_api_get_note', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::getAction', '_format' => 'json'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        5904 => [[['_route' => 'oro_api_post_note', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::postAction', '_format' => 'json'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        5957 => [
            [['_route' => 'oro_api_put_note', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_note', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        6002 => [[['_route' => 'oro_api_options_notes', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        6045 => [[['_route' => 'oro_api_options_notes_auto_864', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        6108 => [[['_route' => 'oro_api_querydesigner_fields_entity', '_controller' => 'Oro\\Bundle\\QueryDesignerBundle\\Controller\\Api\\Rest\\QueryDesignerEntityController::fieldsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        6149 => [[['_route' => 'oro_api_options_reports', '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        6189 => [[['_route' => 'oro_api_options_reports_auto_865', '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        6236 => [[['_route' => 'oro_api_delete_report', '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        6281 => [[['_route' => 'oro_api_get_search', '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        6330 => [[['_route' => 'oro_api_get_search_advanced', '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchAdvancedController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        6387 => [[['_route' => 'oro_api_get_segment_items_deprecated', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::getItemsAction', '_format' => 'json', 'version' => 'latest'], ['version', 'entityName', '_format'], ['GET' => 0], null, false, true, null]],
        6439 => [[['_route' => 'oro_api_post_segment_run_deprecated', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['POST' => 0], null, false, true, null]],
        6481 => [[['_route' => 'oro_api_options_segments', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        6522 => [[['_route' => 'oro_api_options_segments_auto_866', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        6569 => [[['_route' => 'oro_api_get_segment_items', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::getItemsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        6617 => [[['_route' => 'oro_api_delete_segment', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        6670 => [[['_route' => 'oro_api_post_segment_run', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['POST' => 0], null, false, true, null]],
        6732 => [
            [['_route' => 'oro_api_cget_sidebarwidgets', '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'placement', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_get_sidebarwidgets', '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'placement', '_format'], ['GET' => 0], null, false, true, null],
        ],
        6781 => [[['_route' => 'oro_api_post_sidebarwidgets', '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        6838 => [
            [['_route' => 'oro_api_put_sidebarwidgets', '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'widgetId', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_sidebarwidgets', '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'widgetId', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        6892 => [[['_route' => 'oro_api_get_sidebars', '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'position', '_format'], ['GET' => 0], null, false, true, null]],
        6934 => [[['_route' => 'oro_api_post_sidebars', '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        6982 => [[['_route' => 'oro_api_put_sidebars', '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'stateId', '_format'], ['PUT' => 0], null, false, true, null]],
        7020 => [[['_route' => 'oro_api_options_tags', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        7057 => [[['_route' => 'oro_api_options_tags_auto_867', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        7101 => [[['_route' => 'oro_api_options_taxonomies', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaxonomyController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        7143 => [[['_route' => 'oro_api_options_taxonomies_auto_868', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaxonomyController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        7186 => [[['_route' => 'oro_api_options_taggables', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaggableController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        7228 => [[['_route' => 'oro_api_options_taggables_auto_869', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaggableController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        7272 => [[['_route' => 'oro_api_delete_tag', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        7322 => [[['_route' => 'oro_api_delete_taxonomy', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaxonomyController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        7375 => [[['_route' => 'oro_api_post_taggable', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TaggableController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', 'entity', 'entityId', '_format'], ['POST' => 0], null, false, true, null]],
        7419 => [
            [['_route' => 'oro_api_cget_windows', '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_get_windows', '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_post_windows', '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null],
        ],
        7470 => [
            [['_route' => 'oro_api_put_windows', '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'windowId', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_windows', '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'windowId', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        7526 => [[['_route' => 'oro_workflow_api_rest_process_activate', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::activateAction', '_format' => 'json', 'version' => 'latest'], ['version', 'processDefinition', '_format'], ['POST' => 0], null, false, true, null]],
        7583 => [[['_route' => 'oro_workflow_api_rest_process_deactivate', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::deactivateAction', '_format' => 'json', 'version' => 'latest'], ['version', 'processDefinition', '_format'], ['POST' => 0], null, false, true, null]],
        7640 => [[['_route' => 'oro_workflow_api_rest_workflowdefinition_get', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'workflowDefinition', '_format'], ['GET' => 0], null, false, true, null]],
        7708 => [[['_route' => 'oro_workflow_api_rest_workflowdefinition_post', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::postAction', '_format' => 'json', 'version' => 'latest', 'workflowDefinition' => null], ['version', 'workflowDefinition', '_format'], ['POST' => 0], null, false, true, null]],
        7768 => [
            [['_route' => 'oro_workflow_api_rest_workflowdefinition_put', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'workflowDefinition', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_workflow_api_rest_workflowdefinition_delete', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'workflowDefinition', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        7817 => [[['_route' => 'oro_workflow_api_rest_entity_get', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\EntityController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        7868 => [
            [['_route' => 'oro_workflow_api_rest_workflow_get', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'workflowItemId', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_workflow_api_rest_workflow_delete', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'workflowItemId', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        7925 => [[['_route' => 'oro_workflow_api_rest_workflow_activate', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::activateAction', '_format' => 'json', 'version' => 'latest'], ['version', 'workflowDefinition', '_format'], ['POST' => 0], null, false, true, null]],
        7983 => [[['_route' => 'oro_workflow_api_rest_workflow_deactivate', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deactivateAction', '_format' => 'json', 'version' => 'latest'], ['version', 'workflowDefinition', '_format'], ['POST' => 0], null, false, true, null]],
        8041 => [[['_route' => 'oro_workflow_api_rest_workflow_start', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::startAction', '_format' => 'json', 'version' => 'latest'], ['version', 'workflowName', 'transitionName', '_format'], ['POST' => 0], null, false, true, null]],
        8103 => [[['_route' => 'oro_workflow_api_rest_workflow_transit', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction', '_format' => 'json', 'version' => 'latest'], ['version', 'workflowItemId', 'transitionName', '_format'], ['POST' => 0], null, false, true, null]],
        8171 => [[['_route' => 'oro_api_workflow_start', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::startAction', 'version' => 'latest', '_format' => 'json'], ['version', 'workflowName', 'transitionName', '_format'], ['POST' => 0], null, false, true, null]],
        8238 => [[['_route' => 'oro_api_workflow_transit', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction', 'version' => 'latest', '_format' => 'json'], ['version', 'workflowItemId', 'transitionName', '_format'], ['POST' => 0], null, false, true, null]],
        8289 => [
            [['_route' => 'oro_api_workflow_get', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::getAction', 'version' => 'latest', '_format' => 'json'], ['version', 'workflowItemId', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_workflow_delete', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deleteAction', 'version' => 'latest', '_format' => 'json'], ['version', 'workflowItemId', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        8352 => [[['_route' => 'oro_api_workflow_activate', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::activateAction', 'version' => 'latest', '_format' => 'json'], ['version', 'workflowDefinition', '_format'], ['POST' => 0], null, false, true, null]],
        8416 => [[['_route' => 'oro_api_workflow_deactivate', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deactivateAction', 'version' => 'latest', '_format' => 'json'], ['version', 'workflowDefinition', '_format'], ['POST' => 0], null, false, true, null]],
        8482 => [
            [['_route' => 'oro_api_workflow_definition_get', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::getAction', 'version' => 'latest', '_format' => 'json'], ['version', 'workflowDefinition', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_workflow_definition_put', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::putAction', 'version' => 'latest', '_format' => 'json'], ['version', 'workflowDefinition', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        8551 => [[['_route' => 'oro_api_workflow_definition_post', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::postAction', 'version' => 'latest', '_format' => 'json', 'workflowDefinition' => null], ['version', 'workflowDefinition', '_format'], ['POST' => 0], null, false, true, null]],
        8614 => [[['_route' => 'oro_api_workflow_definition_delete', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::deleteAction', 'version' => 'latest', '_format' => 'json'], ['version', 'workflowDefinition', '_format'], ['DELETE' => 0], null, false, true, null]],
        8662 => [[['_route' => 'oro_api_workflow_entity_get', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\EntityController::getAction', 'version' => 'latest', '_format' => 'json'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        8723 => [[['_route' => 'oro_api_process_activate', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::activateAction', 'version' => 'latest', '_format' => 'json'], ['version', 'processDefinition', '_format'], ['POST' => 0], null, false, true, null]],
        8786 => [[['_route' => 'oro_api_process_deactivate', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::deactivateAction', 'version' => 'latest', '_format' => 'json'], ['version', 'processDefinition', '_format'], ['POST' => 0], null, false, true, null]],
        8854 => [
            [['_route' => 'oro_api_comment_get_items', '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'relationClass', 'relationId', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_comment_create_item', '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', 'relationClass', 'relationId', '_format'], ['POST' => 0], null, false, true, null],
        ],
        8905 => [
            [['_route' => 'oro_api_comment_get_item', '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_comment_update_item', '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['POST' => 0], null, false, true, null],
        ],
        8970 => [[['_route' => 'oro_api_comment_remove_attachment_item', '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::removeAttachmentAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['POST' => 0], null, false, true, null]],
        9017 => [[['_route' => 'oro_api_comment_delete_item', '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        9083 => [[['_route' => 'oro_api_post_dashboard_widget_add_widget_deprecated', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::postAddWidgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        9150 => [
            [['_route' => 'oro_api_put_dashboard_widget', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'dashboardId', 'widgetId', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_dashboard_widget', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'dashboardId', 'widgetId', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        9218 => [[['_route' => 'oro_api_put_dashboard_widget_positions', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::putPositionsAction', '_format' => 'json', 'version' => 'latest'], ['version', 'dashboardId', '_format'], ['PUT' => 0], null, false, true, null]],
        9283 => [[['_route' => 'oro_api_post_dashboard_widget_add_widget', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::postAddWidgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        9333 => [[['_route' => 'oro_api_delete_dashboard', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\DashboardController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        9394 => [[['_route' => 'oro_api_get_calendar_connections', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        9453 => [[['_route' => 'oro_api_put_calendar_connection', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null]],
        9506 => [[['_route' => 'oro_api_post_calendar_connection', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        9565 => [[['_route' => 'oro_api_delete_calendar_connection', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        9619 => [[['_route' => 'oro_api_options_calendar_connections', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        9672 => [[['_route' => 'oro_api_options_calendar_connections_auto_870', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        9720 => [[['_route' => 'oro_api_get_calendarevents', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        9774 => [[['_route' => 'oro_api_get_calendarevent', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        9836 => [[['_route' => 'oro_api_get_calendarevent_by_calendar', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::getByCalendarAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', 'eventId', '_format'], ['GET' => 0], null, false, true, null]],
        9890 => [[['_route' => 'oro_api_put_calendarevent', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null]],
        9938 => [[['_route' => 'oro_api_post_calendarevent', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        9992 => [[['_route' => 'oro_api_delete_calendarevent', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        10040 => [[['_route' => 'oro_api_options_calendarevents', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        10088 => [[['_route' => 'oro_api_options_calendarevents_auto_871', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        10140 => [[['_route' => 'oro_api_get_calendar_default', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarController::getDefaultAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        10196 => [[['_route' => 'oro_api_delete_systemcalendar', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        10246 => [[['_route' => 'oro_api_options_systemcalendars', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        10295 => [[['_route' => 'oro_api_options_systemcalendars_auto_872', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        10342 => [[['_route' => 'oro_api_post_contact_deprecated', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        10394 => [[['_route' => 'oro_api_post_contactgroup_deprecated', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        10442 => [[['_route' => 'oro_api_get_contacts', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        10499 => [
            [['_route' => 'oro_api_get_contact', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_put_contact', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        10548 => [[['_route' => 'oro_api_post_contact', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        10602 => [[['_route' => 'oro_api_delete_contact', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        10650 => [[['_route' => 'oro_api_options_contacts', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        10697 => [[['_route' => 'oro_api_options_contacts_auto_873', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        10750 => [[['_route' => 'oro_api_get_contactgroups', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        10812 => [
            [['_route' => 'oro_api_get_contactgroup', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_put_contactgroup', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        10866 => [[['_route' => 'oro_api_post_contactgroup', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        10925 => [[['_route' => 'oro_api_delete_contactgroup', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        10978 => [[['_route' => 'oro_api_options_contactgroups', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        11030 => [[['_route' => 'oro_api_options_contactgroups_auto_874', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        11100 => [[['_route' => 'oro_api_get_contact_address', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'contactId', 'addressId', '_format'], ['GET' => 0], null, false, true, null]],
        11164 => [[['_route' => 'oro_api_get_contact_addresses', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'contactId', '_format'], ['GET' => 0], null, false, true, null]],
        11234 => [[['_route' => 'oro_api_delete_contact_address', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'contactId', 'addressId', '_format'], ['DELETE' => 0], null, false, true, null]],
        11315 => [[['_route' => 'oro_api_get_contact_address_by_type', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::getByTypeAction', '_format' => 'json', 'version' => 'latest'], ['version', 'contactId', 'typeName', '_format'], ['GET' => 0], null, false, true, null]],
        11385 => [[['_route' => 'oro_api_get_contact_address_primary', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::getPrimaryAction', '_format' => 'json', 'version' => 'latest'], ['version', 'contactId', '_format'], ['GET' => 0], null, false, true, null]],
        11442 => [[['_route' => 'oro_api_options_contact_addresses', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        11497 => [[['_route' => 'oro_api_options_contact_addresses_auto_875', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        11558 => [[['_route' => 'oro_api_get_contact_phones', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'contactId', '_format'], ['GET' => 0], null, false, true, null]],
        11626 => [[['_route' => 'oro_api_get_contact_phone_primary', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::getPrimaryAction', '_format' => 'json', 'version' => 'latest'], ['version', 'contactId', '_format'], ['GET' => 0], null, false, true, null]],
        11681 => [[['_route' => 'oro_api_post_contact_phone', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        11741 => [[['_route' => 'oro_api_delete_contact_phone', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        11795 => [[['_route' => 'oro_api_options_contact_phones', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        11848 => [[['_route' => 'oro_api_options_contact_phones_auto_876', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        11903 => [[['_route' => 'oro_api_post_contact_email', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactEmailController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        11963 => [[['_route' => 'oro_api_delete_contact_email', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactEmailController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        12017 => [[['_route' => 'oro_api_options_contact_emails', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactEmailController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        12070 => [[['_route' => 'oro_api_options_contact_emails_auto_877', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactEmailController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        12119 => [[['_route' => 'oro_api_post_pagestate_deprecated', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        12183 => [
            [['_route' => 'oro_api_get_navigationitems', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'type', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_post_navigationitems', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', 'type', '_format'], ['POST' => 0], null, false, true, null],
        ],
        12256 => [
            [['_route' => 'oro_api_put_navigationitems_id', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::putIdAction', '_format' => 'json', 'version' => 'latest'], ['version', 'type', 'itemId', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_navigationitems_id', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::deleteIdAction', '_format' => 'json', 'version' => 'latest'], ['version', 'type', 'itemId', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        12312 => [[['_route' => 'oro_api_get_shortcuts', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\ShortcutsController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'query', '_format'], ['GET' => 0], null, false, true, null]],
        12357 => [[['_route' => 'oro_api_get_pagestates', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        12408 => [[['_route' => 'oro_api_get_pagestate', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        12453 => [[['_route' => 'oro_api_post_pagestate', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        12507 => [
            [['_route' => 'oro_api_put_pagestate', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'oro_api_delete_pagestate', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        12560 => [[['_route' => 'oro_api_get_pagestate_checkid', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getCheckidAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        12625 => [[['_route' => 'oro_api_post_marketinglist_removeditem_deprecated', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        12697 => [[['_route' => 'oro_api_post_marketinglist_segment_run_deprecated', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['POST' => 0], null, false, true, null]],
        12767 => [[['_route' => 'oro_api_post_marketinglist_unsubscribeditem_deprecated', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        12821 => [[['_route' => 'oro_api_options_marketinglists', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        12874 => [[['_route' => 'oro_api_options_marketinglists_auto_878', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        12940 => [[['_route' => 'oro_api_options_marketinglist_removeditems', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        13005 => [[['_route' => 'oro_api_options_marketinglist_removeditems_auto_879', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        13076 => [[['_route' => 'oro_api_options_marketinglist_unsubscribeditems', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        13146 => [[['_route' => 'oro_api_options_marketinglist_unsubscribeditems_auto_880', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        13208 => [[['_route' => 'oro_api_options_marketinglist_segments', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        13293 => [[['_route' => 'oro_api_contact_marketinglist_information_field_type', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::contactInformationFieldTypeAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        13381 => [[['_route' => 'oro_api_entity_marketinglist_contact_information_fields', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::entityContactInformationFieldsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        13441 => [[['_route' => 'oro_api_delete_marketinglist', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        13513 => [[['_route' => 'oro_api_remove_marketinglist_removeditem', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::removeAction', '_format' => 'json', 'version' => 'latest'], ['version', 'marketingList', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        13587 => [[['_route' => 'oro_api_unremove_marketinglist_removeditem', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::unremoveAction', '_format' => 'json', 'version' => 'latest'], ['version', 'marketingList', 'id', '_format'], ['POST' => 0], null, false, true, null]],
        13654 => [[['_route' => 'oro_api_post_marketinglist_removeditem', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        13726 => [[['_route' => 'oro_api_delete_marketinglist_removeditem', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        13803 => [[['_route' => 'oro_api_unsubscribe_marketinglist_unsubscribeditem', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::unsubscribeAction', '_format' => 'json', 'version' => 'latest'], ['version', 'marketingList', 'id', '_format'], ['POST' => 0], null, false, true, null]],
        13878 => [[['_route' => 'oro_api_subscribe_marketinglist_unsubscribeditem', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::subscribeAction', '_format' => 'json', 'version' => 'latest'], ['version', 'marketingList', 'id', '_format'], ['POST' => 0], null, false, true, null]],
        13950 => [[['_route' => 'oro_api_post_marketinglist_unsubscribeditem', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        14027 => [[['_route' => 'oro_api_delete_marketinglist_unsubscribeditem', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        14101 => [[['_route' => 'oro_api_post_marketinglist_segment_run', '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['POST' => 0], null, false, true, null]],
        14153 => [[['_route' => 'oro_api_options_tracking_websites', '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        14204 => [[['_route' => 'oro_api_options_tracking_websites_auto_881', '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        14262 => [[['_route' => 'oro_api_delete_tracking_website', '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        14309 => [[['_route' => 'oro_api_post_account_deprecated', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        14357 => [[['_route' => 'oro_api_get_accounts', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        14414 => [
            [['_route' => 'oro_api_get_account', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_put_account', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        14463 => [[['_route' => 'oro_api_post_account', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        14517 => [[['_route' => 'oro_api_delete_account', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        14565 => [[['_route' => 'oro_api_options_accounts', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        14612 => [[['_route' => 'oro_api_options_accounts_auto_882', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        14656 => [[['_route' => 'oro_api_post_call_deprecated', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        14701 => [[['_route' => 'oro_api_get_calls', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        14755 => [
            [['_route' => 'oro_api_get_call', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_put_call', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        14801 => [[['_route' => 'oro_api_post_call', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        14852 => [[['_route' => 'oro_api_delete_call', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        14897 => [[['_route' => 'oro_api_options_calls', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        14941 => [[['_route' => 'oro_api_options_calls_auto_883', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        15010 => [[['_route' => 'oro_api_options_emailcampaign_email_templates', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        15086 => [[['_route' => 'oro_api_get_emailcampaign_email_templates', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\EmailTemplateController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        15129 => [[['_route' => 'oro_api_get_channels', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        15178 => [[['_route' => 'oro_api_delete_channel', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        15221 => [[['_route' => 'oro_api_options_channels', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        15263 => [[['_route' => 'oro_api_options_channels_auto_884', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        15314 => [[['_route' => 'oro_api_get_search_customers', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\CustomerSearchController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        15365 => [[['_route' => 'oro_api_options_search_customers', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\CustomerSearchController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        15419 => [[['_route' => 'oro_api_post_reminder_shown_deprecated', '_controller' => 'Oro\\Bundle\\ReminderBundle\\Controller\\Api\\Rest\\ReminderController::postShownAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        15470 => [[['_route' => 'oro_api_post_reminder_shown', '_controller' => 'Oro\\Bundle\\ReminderBundle\\Controller\\Api\\Rest\\ReminderController::postShownAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        15514 => [[['_route' => 'oro_api_post_task_deprecated', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        15559 => [[['_route' => 'oro_api_get_tasks', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        15613 => [
            [['_route' => 'oro_api_get_task', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_put_task', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        15659 => [[['_route' => 'oro_api_post_task', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        15710 => [[['_route' => 'oro_api_delete_task', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        15755 => [[['_route' => 'oro_api_options_tasks', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        15799 => [[['_route' => 'oro_api_options_tasks_auto_885', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        15850 => [[['_route' => 'oro_api_post_salesfunnel_deprecated', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        15894 => [[['_route' => 'oro_api_post_lead_deprecated', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        15945 => [[['_route' => 'oro_api_post_opportunity_deprecated', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        15998 => [[['_route' => 'oro_api_get_opportunities', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        16060 => [
            [['_route' => 'oro_api_get_opportunity', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_put_opportunity', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        16114 => [[['_route' => 'oro_api_post_opportunity', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        16173 => [[['_route' => 'oro_api_delete_opportunity', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        16226 => [[['_route' => 'oro_api_options_opportunities', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        16277 => [[['_route' => 'oro_api_options_opportunities_auto_886', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        16322 => [[['_route' => 'oro_api_get_leads', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        16376 => [
            [['_route' => 'oro_api_get_lead', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_put_lead', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        16422 => [[['_route' => 'oro_api_post_lead', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        16473 => [[['_route' => 'oro_api_delete_lead', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        16518 => [[['_route' => 'oro_api_options_leads', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        16562 => [[['_route' => 'oro_api_options_leads_auto_887', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        16623 => [[['_route' => 'oro_api_get_lead_addresses', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadAddressController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'leadId', '_format'], ['GET' => 0], null, false, true, null]],
        16690 => [[['_route' => 'oro_api_get_lead_address_primary', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadAddressController::getPrimaryAction', '_format' => 'json', 'version' => 'latest'], ['version', 'leadId', '_format'], ['GET' => 0], null, false, true, null]],
        16757 => [[['_route' => 'oro_api_delete_lead_address', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadAddressController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'leadId', 'addressId', '_format'], ['DELETE' => 0], null, false, true, null]],
        16811 => [[['_route' => 'oro_api_options_lead_addresses', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadAddressController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        16863 => [[['_route' => 'oro_api_options_lead_addresses_auto_888', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadAddressController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        16915 => [[['_route' => 'oro_api_get_salesfunnels', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        16976 => [
            [['_route' => 'oro_api_get_salesfunnel', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_put_salesfunnel', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        17029 => [[['_route' => 'oro_api_post_salesfunnel', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        17087 => [[['_route' => 'oro_api_delete_salesfunnel', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        17139 => [[['_route' => 'oro_api_options_salesfunnels', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        17190 => [[['_route' => 'oro_api_options_salesfunnels_auto_889', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        17242 => [[['_route' => 'oro_api_get_b2bcustomers', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        17303 => [
            [['_route' => 'oro_api_get_b2bcustomer', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_put_b2bcustomer', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        17356 => [[['_route' => 'oro_api_post_b2bcustomer', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        17414 => [[['_route' => 'oro_api_delete_b2bcustomer', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        17466 => [[['_route' => 'oro_api_options_b2bcustomers', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        17517 => [[['_route' => 'oro_api_options_b2bcustomers_auto_890', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        17569 => [[['_route' => 'oro_api_post_lead_phone', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadPhoneController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        17626 => [[['_route' => 'oro_api_delete_lead_phone', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadPhoneController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        17677 => [[['_route' => 'oro_api_options_lead_phones', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadPhoneController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        17727 => [[['_route' => 'oro_api_options_lead_phones_auto_891', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadPhoneController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        17777 => [[['_route' => 'oro_api_post_leademail', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadEmailController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        17833 => [[['_route' => 'oro_api_delete_leademail', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadEmailController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        17883 => [[['_route' => 'oro_api_options_leademails', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadEmailController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        17932 => [[['_route' => 'oro_api_options_leademails_auto_892', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadEmailController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        17991 => [[['_route' => 'oro_api_post_b2bcustomer_email', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerEmailController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        18055 => [[['_route' => 'oro_api_delete_b2bcustomer_email', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerEmailController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        18113 => [[['_route' => 'oro_api_options_b2bcustomer_emails', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerEmailController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        18170 => [[['_route' => 'oro_api_options_b2bcustomer_emails_auto_893', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerEmailController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        18235 => [[['_route' => 'oro_api_get_b2bcustomer_phones', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'customerId', '_format'], ['GET' => 0], null, false, true, null]],
        18307 => [[['_route' => 'oro_api_get_b2bcustomer_phone_primary', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::getPrimaryAction', '_format' => 'json', 'version' => 'latest'], ['version', 'customerId', '_format'], ['GET' => 0], null, false, true, null]],
        18366 => [[['_route' => 'oro_api_post_b2bcustomer_phone', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        18430 => [[['_route' => 'oro_api_delete_b2bcustomer_phone', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        18488 => [[['_route' => 'oro_api_options_b2bcustomer_phones', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        18545 => [[['_route' => 'oro_api_options_b2bcustomer_phones_auto_894', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerPhoneController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        18595 => [[['_route' => 'oro_api_options_contactrequests', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\Api\\Rest\\ContactRequestController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        18644 => [[['_route' => 'oro_api_options_contactrequests_auto_895', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\Api\\Rest\\ContactRequestController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        18700 => [[['_route' => 'oro_api_get_contactrequest', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\Api\\Rest\\ContactRequestController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        18744 => [[['_route' => 'oro_case_api_post_case_deprecated', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        18789 => [[['_route' => 'oro_case_api_get_cases', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        18843 => [
            [['_route' => 'oro_case_api_get_case', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_case_api_put_case', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        18889 => [[['_route' => 'oro_case_api_post_case', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['POST' => 0], null, false, true, null]],
        18940 => [[['_route' => 'oro_case_api_delete_case', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        18985 => [[['_route' => 'oro_case_api_options_cases', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        19029 => [[['_route' => 'oro_case_api_options_cases_auto_896', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        19088 => [[['_route' => 'oro_case_api_get_comments', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        19150 => [
            [['_route' => 'oro_case_api_get_comment', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_case_api_put_comment', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::putAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        19209 => [[['_route' => 'oro_case_api_post_comment', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['POST' => 0], null, false, true, null]],
        19268 => [[['_route' => 'oro_case_api_delete_comment', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        19321 => [[['_route' => 'oro_case_api_options_comments', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        19392 => [[['_route' => 'oro_api_post_ticket_sync_case', '_controller' => 'Oro\\Bundle\\ZendeskBundle\\Controller\\Api\\Rest\\TicketController::postSyncCaseAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', 'channelId', '_format'], ['POST' => 0], null, false, true, null]],
        19452 => [[['_route' => 'oro_api_options_dotmailer_datafields', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\Api\\Rest\\DataFieldController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        19520 => [[['_route' => 'oro_api_options_dotmailer_datafield_mappings', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\Api\\Rest\\DataFieldMappingController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        19586 => [[['_route' => 'oro_api_delete_dotmailer_datafield', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\Api\\Rest\\DataFieldController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        19663 => [[['_route' => 'oro_api_fields_dotmailer_datafield_mapping', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\Api\\Rest\\DataFieldMappingController::fieldsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        19737 => [[['_route' => 'oro_api_delete_dotmailer_datafield_mapping', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\Api\\Rest\\DataFieldMappingController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'id', '_format'], ['DELETE' => 0], null, false, true, null]],
        19787 => [[['_route' => 'oro_api_options_activity_targets_auto_897', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        19838 => [[['_route' => 'oro_api_options_activity_contexts_auto_898', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityContextController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        19881 => [[['_route' => 'oro_api_options_activities_auto_899', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        19932 => [[['_route' => 'oro_api_options_activity_targets', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        19984 => [[['_route' => 'oro_api_options_activity_contexts', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityContextController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        20037 => [[['_route' => 'oro_api_options_activity_relations', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        20097 => [[['_route' => 'oro_api_options_activity_search_relations', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        20150 => [[['_route' => 'oro_api_get_activity_target_all_types', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getAllTypesAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        20214 => [[['_route' => 'oro_api_get_activity_target_activity_types', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getActivityTypesAction', '_format' => 'json', 'version' => 'latest'], ['version', 'entity', '_format'], ['GET' => 0], null, false, true, null]],
        20287 => [[['_route' => 'oro_api_get_activity_target_activities', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getActivitiesAction', '_format' => 'json', 'version' => 'latest'], ['version', 'entity', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        20355 => [[['_route' => 'oro_api_get_activity_context', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityContextController::getAction', '_format' => 'json', 'version' => 'latest'], ['version', 'activity', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        20428 => [
            [['_route' => 'oro_api_get_activity_relations', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'activity', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_post_activity_relation', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction', '_format' => 'json', 'version' => 'latest'], ['version', 'activity', 'id', '_format'], ['POST' => 0], null, false, true, null],
        ],
        20509 => [[['_route' => 'oro_api_delete_activity_relation', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction', '_format' => 'json', 'version' => 'latest'], ['version', 'activity', 'id', 'entity', 'entityId', '_format'], ['DELETE' => 0], null, false, true, null]],
        20580 => [[['_route' => 'oro_api_get_activity_search_relations', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'activity', '_format'], ['GET' => 0], null, false, true, null]],
        20625 => [[['_route' => 'oro_api_get_activity_types', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTypesAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['GET' => 0], null, false, true, null]],
        20681 => [[['_route' => 'oro_api_get_activity_target_types', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction', '_format' => 'json', 'version' => 'latest'], ['version', 'activity', '_format'], ['GET' => 0], null, false, true, null]],
        20726 => [[['_route' => 'oro_api_options_activities', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        20778 => [[['_route' => 'oro_api_options_dictionary_values', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::optionsAction', '_format' => 'json', 'version' => 'latest'], ['version', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        20823 => [[['_route' => 'oro_api_get_dictionary_values', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction', '_format' => 'json', 'version' => 'latest'], ['version', 'dictionary', '_format'], ['GET' => 0], null, false, true, null]],
        20857 => [
            [['_route' => 'nelmio_api_doc_index', 'view' => 'rest_json_api', '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiDocController::indexAction'], ['view'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_api_doc_index_not_allowed', 'view' => 'rest_json_api', '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiDocController::notAllowedAction'], ['view'], null, null, false, true, null],
        ],
        20889 => [
            [['_route' => 'oro_rest_api_doc_resource', '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiDocController::resourceAction'], ['view', 'resource'], ['GET' => 0], null, false, true, null],
            [['_route' => 'oro_rest_api_doc_resource_not_allowed', '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiDocController::notAllowedAction'], ['view', 'resource'], null, null, false, true, null],
        ],
        20940 => [[['_route' => 'oro_rest_api_item', '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::itemAction'], ['entity', 'id'], null, null, false, true, null]],
        20980 => [[['_route' => 'oro_rest_api_list', '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::listAction'], ['entity'], null, null, false, true, null]],
        21038 => [[['_route' => 'oro_rest_api_subresource', '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::subresourceAction'], ['entity', 'id', 'association'], null, null, false, true, null]],
        21110 => [[['_route' => 'oro_rest_api_relationship', '_controller' => 'Oro\\Bundle\\ApiBundle\\Controller\\RestApiController::relationshipAction'], ['entity', 'id', 'association'], null, null, false, true, null]],
        21166 => [[['_route' => 'oro_attachment_widget_attachments', '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::widgetAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        21200 => [[['_route' => 'oro_attachment_create', '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::createAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        21225 => [[['_route' => 'oro_attachment_update', '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::updateAction'], ['id'], null, null, false, true, null]],
        21268 => [[['_route' => 'oro_attachment_get_file', '_controller' => 'oro_attachment.controller.file::getFileAction'], ['action', 'id', 'filename'], null, null, false, true, null]],
        21304 => [[['_route' => 'oro_attribute_create', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::createAction'], ['alias'], null, null, false, true, null]],
        21327 => [[['_route' => 'oro_attribute_save', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::saveAction'], ['alias'], null, null, false, true, null]],
        21352 => [[['_route' => 'oro_attribute_update', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::updateAction'], ['id'], null, null, false, true, null]],
        21380 => [[['_route' => 'oro_attribute_unremove', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::unremoveAction'], ['id'], ['POST' => 0], null, false, true, null]],
        21405 => [[['_route' => 'oro_attribute_index', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::indexAction'], ['alias'], null, null, false, true, null]],
        21432 => [[['_route' => 'oro_attribute_remove', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeController::removeAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        21467 => [[['_route' => 'oro_attribute_family_create', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeFamilyController::createAction'], ['alias'], null, null, false, true, null]],
        21492 => [[['_route' => 'oro_attribute_family_update', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeFamilyController::updateAction'], ['id'], null, null, false, true, null]],
        21516 => [[['_route' => 'oro_attribute_family_index', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeFamilyController::indexAction'], ['alias'], null, null, false, true, null]],
        21541 => [[['_route' => 'oro_attribute_family_delete', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeFamilyController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        21561 => [[['_route' => 'oro_attribute_family_view', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AttributeFamilyController::viewAction'], ['id'], null, null, false, true, null]],
        21605 => [[['_route' => 'oro_action_widget_form', '_controller' => 'Oro\\Bundle\\ActionBundle\\Controller\\WidgetController::formAction'], ['operationName'], null, null, false, true, null]],
        21641 => [[['_route' => 'oro_activity_view_activities', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\ActivityController::activitiesAction'], ['entity'], null, null, false, true, null]],
        21679 => [[['_route' => 'oro_activity_context', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\ActivityController::contextAction'], ['activity', 'id'], null, null, false, false, null]],
        21708 => [[['_route' => 'oro_activity_form_autocomplete_search', '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\AutocompleteController::autocompleteAction'], ['activity'], null, null, false, false, null]],
        21759 => [[['_route' => 'oro_activity_contact_metrics', '_controller' => 'Oro\\Bundle\\ActivityContactBundle\\Controller\\ActivityContactController::metricsAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        21803 => [[['_route' => 'oro_activity_list_widget_activities', '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\ActivityListController::widgetAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        21838 => [[['_route' => 'oro_account_view', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::viewAction'], ['id'], null, null, false, true, null]],
        21860 => [[['_route' => 'oro_account_update', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::updateAction'], ['id'], null, null, false, true, null]],
        21888 => [[['_route' => 'oro_account_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::indexAction'], ['_format'], null, null, false, true, null]],
        21928 => [[['_route' => 'oro_account_widget_contacts_info', 'id' => 0, '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::contactsInfoAction'], ['id'], null, null, false, true, null]],
        21948 => [[['_route' => 'oro_account_widget_info', '_controller' => 'Oro\\Bundle\\AccountBundle\\Controller\\AccountController::infoAction'], ['id'], null, null, false, true, null]],
        21991 => [[['_route' => 'oro_action_operation_execute', '_controller' => 'Oro\\Bundle\\ActionBundle\\Controller\\AjaxController::executeAction'], ['operationName'], ['POST' => 0], null, false, true, null]],
        22025 => [[['_route' => 'oro_dataaudit_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::indexAction'], ['_format'], null, null, false, true, null]],
        22100 => [[['_route' => 'oro_dataaudit_history', 'entity' => 'entity', 'id' => 0, '_format' => 'html', '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::historyAction'], ['entity', 'id', '_format'], null, null, false, true, null]],
        22186 => [[['_route' => 'oro_security_access_levels', '_format' => 'json', 'permission' => null, '_controller' => 'Oro\\Bundle\\SecurityBundle\\Controller\\AclPermissionController::aclAccessLevelsAction'], ['oid', 'permission'], null, null, false, true, null]],
        22245 => [[['_route' => 'oro_security_switch_organization', 'id' => '0', '_format' => 'html', '_controller' => 'Oro\\Bundle\\SecurityBundle\\Controller\\SwitchOrganizationController::switchOrganizationAction'], ['id', '_format'], null, null, false, true, null]],
        22281 => [[['_route' => 'oro_segment_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::indexAction'], ['_format'], null, null, false, true, null]],
        22305 => [[['_route' => 'oro_segment_view', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::viewAction'], ['id'], null, null, false, true, null]],
        22327 => [[['_route' => 'oro_segment_update', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::updateAction'], ['id'], null, null, false, true, null]],
        22348 => [[['_route' => 'oro_segment_clone', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::cloneAction'], ['id'], null, null, false, true, null]],
        22371 => [[['_route' => 'oro_segment_refresh', '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::refreshAction'], ['id'], null, null, false, true, null]],
        22413 => [[['_route' => 'oro_system_calendar_view', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::viewAction'], ['id'], null, null, false, true, null]],
        22435 => [[['_route' => 'oro_system_calendar_update', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::updateAction'], ['id'], null, null, false, true, null]],
        22467 => [[['_route' => 'oro_system_calendar_widget_events', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::eventsAction'], ['id'], null, null, false, true, null]],
        22498 => [[['_route' => 'oro_system_calendar_event_widget_info', 'renderContexts' => true, '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::infoAction'], ['id', 'renderContexts'], null, null, false, true, null]],
        22525 => [[['_route' => 'oro_system_calendar_event_view', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::viewAction'], ['id'], null, null, false, true, null]],
        22553 => [[['_route' => 'oro_system_calendar_event_create', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::createAction'], ['id'], null, null, false, false, null]],
        22581 => [[['_route' => 'oro_system_calendar_event_update', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::updateAction'], ['id'], null, null, false, true, null]],
        22638 => [[['_route' => 'oro_sales_customers_form_autocomplete_search', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\AutocompleteController::autocompleteCustomersAction'], ['ownerClassAlias'], null, null, false, false, null]],
        22674 => [[['_route' => 'oro_sales_salesfunnel_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::indexAction'], ['_format'], null, null, false, true, null]],
        22698 => [[['_route' => 'oro_sales_salesfunnel_view', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::viewAction'], ['id'], null, null, false, true, null]],
        22718 => [[['_route' => 'oro_sales_salesfunnel_info', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::infoAction'], ['id'], null, null, false, true, null]],
        22745 => [[['_route' => 'oro_sales_salesfunnel_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::updateAction'], ['id'], null, null, false, true, null]],
        22843 => [[['_route' => 'oro_filtered_attachment', '_controller' => 'oro_attachment.controller.file::getFilteredImageAction'], ['filter', 'filterMd5', 'id', 'filename'], null, null, false, true, null]],
        22886 => [[['_route' => 'oro_resize_attachment', '_controller' => 'oro_attachment.controller.file::getResizedAttachmentImageAction'], ['id', 'width', 'height', 'filename'], null, null, false, true, null]],
        22923 => [[['_route' => 'oro_imagine_filter', '_controller' => 'oro_attachment.controller.imagine:getFilteredImageAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        22954 => [[['_route' => 'oro_navigation_js_routing_js', '_controller' => 'fos_js_routing.controller:indexAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        22992 => [[['_route' => 'oro_translation_jstranslation', '_controller' => 'oro_translation.controller:indexAction'], ['_locale'], null, null, false, false, null]],
        23016 => [[['_route' => 'oro_gaufrette_public_file', '_controller' => 'Oro\\Bundle\\GaufretteBundle\\Controller\\PublicFileController::getPublicFileAction'], ['subDirectory', 'fileName'], null, null, false, true, null]],
        23050 => [[['_route' => 'oro_message_queue_child_jobs', '_controller' => 'Oro\\Bundle\\MessageQueueBundle\\Controller\\JobController::childJobsAction'], ['id'], null, null, false, true, null]],
        23092 => [[['_route' => 'oro_entity_merge_massaction', '_controller' => 'Oro\\Bundle\\EntityMergeBundle\\Controller\\MergeController::mergeMassActionAction'], ['gridName', 'actionName'], null, null, false, true, null]],
        23132 => [[['_route' => 'oro_navigation_global_menu_ajax_reset', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::resetAction'], ['menuName'], ['DELETE' => 0], null, false, true, null]],
        23166 => [[['_route' => 'oro_navigation_global_menu_ajax_create', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::createAction'], ['menuName', 'parentKey'], ['POST' => 0], null, false, true, null]],
        23200 => [[['_route' => 'oro_navigation_global_menu_ajax_delete', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::deleteAction'], ['menuName', 'key'], ['DELETE' => 0], null, false, true, null]],
        23232 => [[['_route' => 'oro_navigation_global_menu_ajax_show', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::showAction'], ['menuName', 'key'], ['PUT' => 0], null, false, true, null]],
        23264 => [[['_route' => 'oro_navigation_global_menu_ajax_hide', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::hideAction'], ['menuName', 'key'], ['PUT' => 0], null, false, true, null]],
        23287 => [[['_route' => 'oro_navigation_global_menu_ajax_move', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalAjaxMenuController::moveAction'], ['menuName'], ['PUT' => 0], null, false, true, null]],
        23308 => [[['_route' => 'oro_navigation_global_menu_view', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalMenuController::viewAction'], ['menuName'], null, null, false, true, null]],
        23342 => [[['_route' => 'oro_navigation_global_menu_create', 'parentKey' => null, '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalMenuController::createAction'], ['menuName', 'parentKey'], null, null, false, true, null]],
        23367 => [[['_route' => 'oro_navigation_global_menu_update', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalMenuController::updateAction'], ['menuName', 'key'], null, null, false, true, null]],
        23381 => [[['_route' => 'oro_navigation_global_menu_move', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\GlobalMenuController::moveAction'], ['menuName'], null, null, false, false, null]],
        23416 => [[['_route' => 'oro_navigation_user_menu_ajax_reset', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::resetAction'], ['menuName'], ['DELETE' => 0], null, false, true, null]],
        23450 => [[['_route' => 'oro_navigation_user_menu_ajax_create', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::createAction'], ['menuName', 'parentKey'], ['POST' => 0], null, false, true, null]],
        23484 => [[['_route' => 'oro_navigation_user_menu_ajax_delete', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::deleteAction'], ['menuName', 'key'], ['DELETE' => 0], null, false, true, null]],
        23516 => [[['_route' => 'oro_navigation_user_menu_ajax_show', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::showAction'], ['menuName', 'key'], ['PUT' => 0], null, false, true, null]],
        23548 => [[['_route' => 'oro_navigation_user_menu_ajax_hide', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::hideAction'], ['menuName', 'key'], ['PUT' => 0], null, false, true, null]],
        23571 => [[['_route' => 'oro_navigation_user_menu_ajax_move', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserAjaxMenuController::moveAction'], ['menuName'], ['PUT' => 0], null, false, true, null]],
        23592 => [[['_route' => 'oro_navigation_user_menu_view', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserMenuController::viewAction'], ['menuName'], null, null, false, true, null]],
        23626 => [[['_route' => 'oro_navigation_user_menu_create', 'parentKey' => null, '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserMenuController::createAction'], ['menuName', 'parentKey'], null, null, false, true, null]],
        23651 => [[['_route' => 'oro_navigation_user_menu_update', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserMenuController::updateAction'], ['menuName', 'key'], null, null, false, true, null]],
        23665 => [[['_route' => 'oro_navigation_user_menu_move', '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\UserMenuController::moveAction'], ['menuName'], null, null, false, false, null]],
        23716 => [[['_route' => 'oro_marketing_list_view', 'id' => 0, '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::viewAction'], ['id'], null, null, false, true, null]],
        23743 => [[['_route' => 'oro_marketing_list_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::updateAction'], ['id'], null, null, false, true, null]],
        23811 => [[['_route' => 'oro_marketing_activity_widget_summary', '_controller' => 'Oro\\Bundle\\MarketingActivityBundle\\Controller\\MarketingActivityController::summaryAction'], ['campaignId'], null, null, false, true, null]],
        23831 => [[['_route' => 'oro_marketing_activity_widget_marketing_activities_info', '_controller' => 'Oro\\Bundle\\MarketingActivityBundle\\Controller\\MarketingActivityController::infoAction'], ['id'], null, null, false, true, null]],
        23896 => [[['_route' => 'oro_marketing_activity_widget_marketing_activities', '_controller' => 'Oro\\Bundle\\MarketingActivityBundle\\Controller\\MarketingActivityController::widgetAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        23928 => [[['_route' => 'oro_marketing_activity_widget_marketing_activities_list', '_controller' => 'Oro\\Bundle\\MarketingActivityBundle\\Controller\\MarketingActivityController::listAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        24001 => [[['_route' => 'oro_email_autoresponserule_create', 'mailbox' => null, '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\AutoResponseRuleController::createAction'], ['mailbox'], null, null, false, true, null]],
        24023 => [[['_route' => 'oro_email_autoresponserule_update', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\AutoResponseRuleController::updateAction'], ['id'], null, null, false, true, null]],
        24064 => [[['_route' => 'oro_email_activity_view', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::activityAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        24095 => [[['_route' => 'oro_email_attachment', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::attachmentAction'], ['id'], null, null, false, true, null]],
        24115 => [[['_route' => 'oro_email_attachment_link', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::linkAction'], ['id'], ['POST' => 0], null, false, false, null]],
        24133 => [[['_route' => 'oro_email_body_attachments', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::downloadAttachmentsAction'], ['id'], null, null, false, true, null]],
        24161 => [[['_route' => 'oro_email_view', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewAction'], ['id'], null, null, false, true, null]],
        24183 => [[['_route' => 'oro_email_thread_view', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewThreadAction'], ['id'], null, null, false, true, null]],
        24211 => [[['_route' => 'oro_email_user_thread_view', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewUserThreadAction'], ['id'], null, null, false, true, null]],
        24235 => [[['_route' => 'oro_email_view_group', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewGroupAction'], ['id'], null, null, false, true, 1]],
        24268 => [[['_route' => 'oro_email_thread_widget', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::threadWidgetAction'], ['id'], null, null, false, true, null]],
        24296 => [[['_route' => 'oro_email_user_thread_widget', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::userThreadWidgetAction'], ['id'], null, null, false, true, null]],
        24321 => [[['_route' => 'oro_email_email_reply', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::replyAction'], ['id'], null, null, false, true, 1]],
        24340 => [[['_route' => 'oro_email_email_reply_all', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::replyAllAction'], ['id'], null, null, false, true, 1]],
        24364 => [[['_route' => 'oro_email_email_forward', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::forwardAction'], ['id'], null, null, false, true, 1]],
        24384 => [[['_route' => 'oro_email_body', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::bodyAction'], ['id'], null, null, false, true, null]],
        24450 => [[['_route' => 'oro_resize_email_attachment', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::getResizedAttachmentImageAction'], ['id', 'width', 'height'], null, null, false, true, null]],
        24492 => [[['_route' => 'oro_email_mark_seen', 'checkThread' => true, '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markSeenAction'], ['id', 'status', 'checkThread'], ['POST' => 0], null, false, true, null]],
        24521 => [[['_route' => 'oro_email_toggle_seen', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::toggleSeenAction'], ['id'], ['POST' => 0], null, false, true, null]],
        24559 => [[['_route' => 'oro_email_mark_massaction', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markMassAction'], ['gridName', 'actionName'], null, null, false, true, null]],
        24602 => [[['_route' => 'oro_email_emailtemplate_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::indexAction'], ['_format'], null, null, false, true, null]],
        24633 => [[['_route' => 'oro_email_emailtemplate_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::updateAction'], ['id'], null, null, false, true, null]],
        24659 => [[['_route' => 'oro_email_emailtemplate_clone', 'id' => 0, '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::cloneAction'], ['id'], null, null, false, true, null]],
        24687 => [[['_route' => 'oro_email_emailtemplate_preview', 'id' => 0, '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::previewAction'], ['id'], null, null, false, true, null]],
        24733 => [[['_route' => 'oro_email_autoresponserule_edittemplate', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\AutoResponseRuleController::editTemplateAction'], ['id'], null, null, false, true, null]],
        24780 => [[['_route' => 'oro_embedded_form_submit', '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbedFormController::formAction'], ['id'], null, null, false, true, null]],
        24806 => [[['_route' => 'oro_embedded_form_success', '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbedFormController::formSuccessAction'], ['id'], null, null, false, true, null]],
        24837 => [[['_route' => 'oro_embedded_form_delete', '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        24867 => [[['_route' => 'oro_embedded_form_default_data', '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::defaultDataAction'], ['formType'], ['GET' => 0], null, false, true, null]],
        24895 => [[['_route' => 'oro_embedded_form_update', '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::updateAction'], ['id'], null, null, false, true, null]],
        24920 => [[['_route' => 'oro_embedded_form_view', '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::viewAction'], ['id'], null, null, false, true, null]],
        24945 => [[['_route' => 'oro_embedded_form_info', '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::infoAction'], ['id'], null, null, false, true, null]],
        24979 => [[['_route' => 'oro_entity_index', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::indexAction'], ['entityName'], null, null, false, true, null]],
        25032 => [[['_route' => 'oro_entity_detailed', 'id' => 0, 'fieldName' => '', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::detailedAction'], ['id', 'entityName', 'fieldName'], null, null, false, true, null]],
        25069 => [[['_route' => 'oro_entity_delete', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::deleteAction'], ['entityName', 'id'], ['DELETE' => 0], null, false, true, null]],
        25120 => [[['_route' => 'oro_entity_relation', 'id' => 0, 'className' => '', 'fieldName' => '', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::relationAction'], ['id', 'entityName', 'fieldName'], null, null, false, true, null]],
        25157 => [[['_route' => 'oro_entity_view', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::viewAction'], ['entityName', 'id'], null, null, false, true, null]],
        25201 => [[['_route' => 'oro_entity_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::updateAction'], ['entityName', 'id'], null, null, false, true, null]],
        25284 => [[['_route' => 'oro_entityconfig_audit', 'entity' => 'entity', 'id' => 0, '_format' => 'html', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditAction'], ['entity', 'id', '_format'], null, null, false, true, null]],
        25346 => [[['_route' => 'oro_entityconfig_audit_field', 'entity' => 'entity', 'id' => 0, '_format' => 'html', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditFieldAction'], ['entity', 'id', '_format'], null, null, false, true, null]],
        25372 => [[['_route' => 'oro_entityconfig_update', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::updateAction'], ['id'], null, null, false, true, null]],
        25395 => [[['_route' => 'oro_entityconfig_view', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::viewAction'], ['id'], null, null, false, true, null]],
        25425 => [[['_route' => 'oro_entityconfig_fields', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldsAction'], ['id'], null, null, false, true, null]],
        25454 => [[['_route' => 'oro_entityconfig_field_update', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldUpdateAction'], ['id'], null, null, false, true, null]],
        25484 => [[['_route' => 'oro_entityconfig_field_search', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldSearchAction'], ['id'], null, null, false, true, null]],
        25519 => [[['_route' => 'oro_entityconfig_widget_info', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::infoAction'], ['id'], null, null, false, true, null]],
        25549 => [[['_route' => 'oro_entityconfig_widget_unique_keys', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::uniqueKeysAction'], ['id'], null, null, false, true, null]],
        25581 => [[['_route' => 'oro_entityconfig_widget_entity_fields', '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::entityFieldsAction'], ['id'], null, null, false, true, null]],
        25623 => [[['_route' => 'oro_entityextend_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ApplyController::updateAction'], ['id'], null, null, false, true, null]],
        25668 => [[['_route' => 'oro_entityextend_entity_unique_key', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::uniqueAction'], ['id'], null, null, false, true, null]],
        25695 => [[['_route' => 'oro_entityextend_entity_unremove', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::unremoveAction'], ['id'], ['POST' => 0], null, false, true, null]],
        25723 => [[['_route' => 'oro_entityextend_entity_remove', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::removeAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        25760 => [[['_route' => 'oro_entityextend_field_create', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::createAction'], ['id'], null, null, false, true, null]],
        25790 => [[['_route' => 'oro_entityextend_field_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::updateAction'], ['id'], null, null, false, true, null]],
        25818 => [[['_route' => 'oro_entityextend_field_unremove', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::unremoveAction'], ['id'], ['POST' => 0], null, false, true, null]],
        25846 => [[['_route' => 'oro_entityextend_field_remove', 'id' => 0, '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::removeAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        25907 => [[['_route' => 'oro_entity_pagination_first', '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::firstAction'], ['_entityName', '_scope', '_routeName'], null, null, false, true, null]],
        25952 => [[['_route' => 'oro_entity_pagination_previous', '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::previousAction'], ['_entityName', '_scope', '_routeName'], null, null, false, true, null]],
        25993 => [[['_route' => 'oro_entity_pagination_next', '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::nextAction'], ['_entityName', '_scope', '_routeName'], null, null, false, true, null]],
        26034 => [[['_route' => 'oro_entity_pagination_last', '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::lastAction'], ['_entityName', '_scope', '_routeName'], null, null, false, true, null]],
        26072 => [[['_route' => 'oro_importexport_export_instant', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::instantExportAction'], ['processorAlias'], ['POST' => 0], null, false, true, null]],
        26099 => [[['_route' => 'oro_importexport_export_template', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::templateExportAction'], ['processorAlias'], null, null, false, true, null]],
        26123 => [[['_route' => 'oro_importexport_export_download', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::downloadExportResultAction'], ['jobId'], null, null, false, true, null]],
        26216 => [[['_route' => 'oro_email_dashboard_recent_emails', 'activeTab' => 'inbox', 'contentType' => 'full', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Dashboard\\DashboardController::recentEmailsAction'], ['widget', 'activeTab', 'contentType'], null, null, false, true, null]],
        26244 => [[['_route' => 'oro_dashboard_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::indexAction'], ['_format'], null, null, false, true, null]],
        26273 => [[['_route' => 'oro_dashboard_view', 'id' => '0', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::viewAction'], ['id'], null, null, false, true, null]],
        26301 => [[['_route' => 'oro_dashboard_configure', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::configureAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        26342 => [[['_route' => 'oro_campaign_dashboard_campaigns_leads_chart', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\Dashboard\\DashboardController::campaignLeadsAction'], ['widget'], null, null, false, true, null]],
        26379 => [[['_route' => 'oro_campaign_dashboard_campaigns_opportunity_chart', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\Dashboard\\DashboardController::campaignOpportunityAction'], ['widget'], null, null, false, true, null]],
        26421 => [[['_route' => 'oro_campaign_dashboard_campaigns_by_close_revenue_chart', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\Dashboard\\DashboardController::campaignByCloseRevenueAction'], ['widget'], null, null, false, true, null]],
        26450 => [[['_route' => 'oro_dashboard_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::updateAction'], ['id'], null, null, false, true, null]],
        26492 => [[['_route' => 'oro_dashboard_widget', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::widgetAction'], ['widget', 'bundle', 'name'], null, null, false, true, null]],
        26546 => [[['_route' => 'oro_dashboard_itemized_widget', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::itemizedWidgetAction'], ['widget', 'bundle', 'name'], null, null, false, true, null]],
        26593 => [[['_route' => 'oro_dashboard_itemized_data_widget', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::itemizedDataWidgetAction'], ['widget', 'bundle', 'name'], null, null, false, true, null]],
        26628 => [[['_route' => 'oro_dashboard_grid', '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::gridAction'], ['widget', 'gridName'], null, null, false, true, null]],
        26659 => [[['_route' => 'oro_calendar_dashboard_my_calendar', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Dashboard\\DashboardController::myCalendarAction'], ['widget'], null, null, false, true, null]],
        26716 => [[['_route' => 'oro_sales_dashboard_opportunities_by_lead_source_chart', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Dashboard\\DashboardController::opportunitiesByLeadSourceAction'], ['widget'], null, null, false, true, null]],
        26749 => [[['_route' => 'oro_sales_dashboard_opportunity_by_state_chart', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Dashboard\\DashboardController::opportunityByStatusAction'], ['widget'], null, null, false, true, null]],
        26790 => [[['_route' => 'oro_sales_dashboard_sales_flow_b2b_chart', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\Dashboard\\DashboardController::mySalesFlowB2BAction'], ['widget'], null, null, false, true, null]],
        26829 => [[['_route' => 'oro_datagrid_widget', '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::widgetAction'], ['gridName'], null, null, false, true, null]],
        26849 => [[['_route' => 'oro_datagrid_index', '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::getAction'], ['gridName'], null, null, false, true, null]],
        26876 => [[['_route' => 'oro_datagrid_export_action', '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::exportAction'], ['gridName'], null, null, true, false, null]],
        26918 => [[['_route' => 'oro_datagrid_mass_action', '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::massActionAction'], ['gridName', 'actionName'], null, null, false, true, null]],
        26953 => [[['_route' => 'oro_datagrid_filter_metadata', '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::filterMetadataAction'], ['gridName'], null, null, false, false, null]],
        26993 => [[['_route' => 'oro_dictionary_search', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\DictionaryController::searchAction'], ['dictionary'], null, null, false, false, null]],
        27009 => [[['_route' => 'oro_dictionary_value', '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\DictionaryController::valuesAction'], ['dictionary'], null, null, false, false, null]],
        27069 => [[['_route' => 'oro_dotmailer_synchronize_adddress_book', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::synchronizeAddressBookAction'], ['id'], ['POST' => 0], null, false, true, null]],
        27096 => [[['_route' => 'oro_dotmailer_synchronize_adddress_book_datafields', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::synchronizeAddressBookDataFieldsAction'], ['id'], ['POST' => 0], null, false, true, null]],
        27142 => [[['_route' => 'oro_dotmailer_marketing_list_disconnect', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::disconnectMarketingListAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        27165 => [[['_route' => 'oro_dotmailer_marketing_list_buttons', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::connectionButtonsAction'], ['entity'], null, null, false, true, null]],
        27223 => [[['_route' => 'oro_dotmailer_marketing_list_connect', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\AddressBookController::addressBookConnectionUpdateAction'], ['id'], null, null, false, true, null]],
        27265 => [[['_route' => 'oro_dotmailer_datafield_view', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldController::viewAction'], ['id'], null, null, false, true, null]],
        27285 => [[['_route' => 'oro_dotmailer_datafield_info', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldController::infoAction'], ['id'], null, null, false, true, null]],
        27313 => [[['_route' => 'oro_dotmailer_datafield_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldController::indexAction'], ['_format'], null, null, false, true, null]],
        27352 => [[['_route' => 'oro_dotmailer_datafield_mapping_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldMappingController::indexAction'], ['_format'], null, null, false, true, null]],
        27375 => [[['_route' => 'oro_dotmailer_datafield_mapping_update', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DataFieldMappingController::updateAction'], ['id'], null, null, false, true, null]],
        27428 => [[['_route' => 'oro_dotmailer_email_campaign_status', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DotmailerController::emailCampaignStatsAction'], ['entity'], null, null, false, true, null]],
        27456 => [[['_route' => 'oro_dotmailer_sync_status', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DotmailerController::marketingListSyncStatusAction'], ['marketingList'], null, null, false, true, null]],
        27500 => [[['_route' => 'oro_dotmailer_integration_connection', 'id' => '0', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\DotmailerController::integrationConnectionAction'], ['id'], null, null, false, true, null]],
        27534 => [[['_route' => 'oro_dotmailer_oauth_disconnect', '_controller' => 'Oro\\Bundle\\DotmailerBundle\\Controller\\OauthController::disconnectAction'], ['id'], null, null, false, true, null]],
        27592 => [[['_route' => 'oro_email_mailbox_update', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::updateAction'], ['id'], null, null, false, true, null]],
        27622 => [[['_route' => 'oro_email_mailbox_users_search', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::searchUsersAction'], ['organizationId'], null, null, false, true, null]],
        27648 => [[['_route' => 'oro_email_mailbox_delete', '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        27700 => [[['_route' => 'oro_user_config', 'activeGroup' => null, 'activeSubGroup' => null, '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ConfigurationController::userConfigAction'], ['id', 'activeGroup', 'activeSubGroup'], null, null, false, true, null]],
        27745 => [[['_route' => 'oro_user_profile_configuration', 'activeGroup' => null, 'activeSubGroup' => null, '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ConfigurationController::userProfileConfigAction'], ['activeGroup', 'activeSubGroup'], null, null, false, true, null]],
        27790 => [[['_route' => 'oro_config_configuration_system', 'activeGroup' => null, 'activeSubGroup' => null, '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\ConfigurationController::systemAction'], ['activeGroup', 'activeSubGroup'], null, null, false, true, null]],
        27831 => [[['_route' => 'oro_contact_address_book', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactAddressController::addressBookAction'], ['id'], null, null, false, true, null]],
        27862 => [[['_route' => 'oro_contact_address_create', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactAddressController::createAction'], ['contactId'], null, null, false, false, null]],
        27904 => [[['_route' => 'oro_contact_address_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactAddressController::updateAction'], ['contactId', 'id'], null, null, false, true, null]],
        27924 => [[['_route' => 'oro_contact_view', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::viewAction'], ['id'], null, null, false, true, null]],
        27944 => [[['_route' => 'oro_contact_info', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::infoAction'], ['id'], null, null, false, true, null]],
        27966 => [[['_route' => 'oro_contact_update', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::updateAction'], ['id'], null, null, false, true, null]],
        27994 => [[['_route' => 'oro_contact_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::indexAction'], ['_format'], null, null, false, true, null]],
        28038 => [[['_route' => 'oro_account_widget_contacts', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\ContactController::accountContactsAction'], ['id'], null, null, false, true, null]],
        28074 => [[['_route' => 'oro_contact_group_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\GroupController::updateAction'], ['id'], null, null, false, true, null]],
        28101 => [[['_route' => 'oro_contact_group_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\ContactBundle\\Controller\\GroupController::indexAction'], ['_format'], null, null, false, true, null]],
        28134 => [[['_route' => 'oro_contactus_request_view', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::viewAction'], ['id'], null, null, false, true, null]],
        28154 => [[['_route' => 'oro_contactus_request_info', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::infoAction'], ['id'], null, null, false, true, null]],
        28176 => [[['_route' => 'oro_contactus_request_update', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::updateAction'], ['id'], null, null, false, true, null]],
        28198 => [[['_route' => 'oro_contactus_request_delete', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        28231 => [[['_route' => 'oro_contactus_reason_update', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactReasonController::updateAction'], ['id'], null, null, false, true, null]],
        28253 => [[['_route' => 'oro_contactus_reason_delete', '_controller' => 'Oro\\Bundle\\ContactUsBundle\\Controller\\ContactReasonController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null]],
        28300 => [[['_route' => 'oro_digital_asset_update', '_controller' => 'Oro\\Bundle\\DigitalAssetBundle\\Controller\\DigitalAssetController::updateAction'], ['id'], null, null, false, true, null]],
        28341 => [[['_route' => 'oro_digital_asset_widget_choose', '_controller' => 'Oro\\Bundle\\DigitalAssetBundle\\Controller\\DigitalAssetController::chooseAction'], ['parentEntityClass', 'parentEntityFieldName'], null, null, false, true, null]],
        28406 => [[['_route' => 'oro_calendar_event_accepted', 'status' => 'accepted', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatusAction'], ['id'], ['POST' => 0], null, false, true, null]],
        28453 => [[['_route' => 'oro_calendar_event_attendees_autocomplete_data', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::attendeesAutocompleteDataAction'], ['id'], null, null, false, true, null]],
        28479 => [[['_route' => 'oro_calendar_event_tentative', 'status' => 'tentative', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatusAction'], ['id'], ['POST' => 0], null, false, true, null]],
        28503 => [[['_route' => 'oro_calendar_event_declined', 'status' => 'declined', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatusAction'], ['id'], ['POST' => 0], null, false, true, null]],
        28544 => [[['_route' => 'oro_calendar_event_activity_view', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::activityAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        28565 => [[['_route' => 'oro_calendar_event_view', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::viewAction'], ['id'], null, null, false, true, null]],
        28603 => [[['_route' => 'oro_calendar_event_widget_info', 'renderContexts' => true, '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::infoAction'], ['id', 'renderContexts'], null, null, false, true, null]],
        28625 => [[['_route' => 'oro_calendar_event_update', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::updateAction'], ['id'], null, null, false, true, null]],
        28647 => [[['_route' => 'oro_calendar_event_delete', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::deleteAction'], ['id'], null, null, false, true, null]],
        28668 => [[['_route' => 'oro_calendar_view', '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarController::viewAction'], ['id'], null, null, false, true, null]],
        28715 => [[['_route' => 'oro_call_activity_view', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::activityAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        28737 => [[['_route' => 'oro_call_update', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::updateAction'], ['id'], null, null, false, true, null]],
        28760 => [[['_route' => 'oro_call_view', '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::viewAction'], ['id'], null, null, false, true, null]],
        28798 => [[['_route' => 'oro_call_widget_info', 'renderContexts' => true, '_controller' => 'Oro\\Bundle\\CallBundle\\Controller\\CallController::infoAction'], ['id', 'renderContexts'], null, null, false, true, null]],
        28837 => [[['_route' => 'oro_campaign_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\CampaignController::updateAction'], ['id'], null, null, false, true, null]],
        28860 => [[['_route' => 'oro_campaign_view', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\CampaignController::viewAction'], ['id'], null, null, false, true, null]],
        28901 => [[['_route' => 'oro_campaign_event_plot', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\CampaignEventController::plotAction'], ['period', 'campaign'], null, null, false, true, null]],
        28936 => [[['_route' => 'oro_email_campaign_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::updateAction'], ['id'], null, null, false, true, null]],
        28956 => [[['_route' => 'oro_email_campaign_view', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::viewAction'], ['id'], null, null, false, true, null]],
        28976 => [[['_route' => 'oro_email_campaign_send', '_controller' => 'Oro\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::sendAction'], ['id'], null, null, false, true, null]],
        29005 => [[['_route' => 'oro_case_view', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::viewAction'], ['id'], null, null, false, true, null]],
        29045 => [[['_route' => 'oro_case_account_widget_cases', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::accountCasesAction'], ['id'], null, null, false, true, null]],
        29075 => [[['_route' => 'oro_case_contact_widget_cases', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::contactCasesAction'], ['id'], null, null, false, true, null]],
        29098 => [[['_route' => 'oro_case_update', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CaseController::updateAction'], ['id'], null, null, false, true, null]],
        29139 => [[['_route' => 'oro_case_comment_list', '_format' => 'json', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CommentController::commentsListAction'], ['id', '_format'], null, null, false, true, null]],
        29169 => [[['_route' => 'oro_case_widget_comments', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CommentController::commentsWidgetAction'], ['id'], null, null, false, false, null]],
        29199 => [[['_route' => 'oro_case_comment_create', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CommentController::createAction'], ['caseId'], null, null, false, false, null]],
        29229 => [[['_route' => 'oro_case_comment_update', '_controller' => 'Oro\\Bundle\\CaseBundle\\Controller\\CommentController::updateAction'], ['id'], null, null, false, false, null]],
        29267 => [[['_route' => 'oro_channel_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelController::indexAction'], ['_format'], null, null, false, true, null]],
        29293 => [[['_route' => 'oro_channel_update', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelController::updateAction'], ['id'], null, null, false, true, null]],
        29313 => [[['_route' => 'oro_channel_view', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelController::viewAction'], ['id'], null, null, false, true, null]],
        29340 => [[['_route' => 'oro_channel_widget_info', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelController::infoAction'], ['id'], null, null, false, true, null]],
        29391 => [[['_route' => 'oro_channel_integration_create', 'channelName' => null, '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelIntegrationController::createAction'], ['type', 'channelName'], null, null, false, true, null]],
        29413 => [[['_route' => 'oro_channel_integration_update', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\ChannelIntegrationController::updateAction'], ['id'], null, null, false, true, null]],
        29449 => [[['_route' => 'oro_channel_dashboard_average_lifetime_sales_chart', '_controller' => 'Oro\\Bundle\\ChannelBundle\\Controller\\Dashboard\\DashboardController::averageLifetimeSalesAction'], ['widget'], null, null, false, true, null]],
        29499 => [[['_route' => 'oro_sales_customer_grid_dialog', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\CustomerController::gridDialogAction'], ['entityClass'], null, null, false, true, null]],
        29548 => [[['_route' => 'oro_user_group_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::updateAction'], ['id'], null, null, false, true, null]],
        29575 => [[['_route' => 'oro_user_group_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::indexAction'], ['_format'], null, null, false, true, null]],
        29631 => [[['_route' => 'oro_user_send_forced_password_reset_email', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendForcedResetEmailAction'], ['id'], null, null, false, true, null]],
        29658 => [[['_route' => 'oro_user_reset_set_password', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::setPasswordAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        29683 => [[['_route' => 'oro_user_reset_reset', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        29713 => [[['_route' => 'oro_user_role_view', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::viewAction'], ['id'], null, null, false, true, null]],
        29740 => [[['_route' => 'oro_user_role_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::updateAction'], ['id'], null, null, false, true, null]],
        29768 => [[['_route' => 'oro_user_role_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::indexAction'], ['_format'], null, null, false, true, null]],
        29790 => [[['_route' => 'oro_user_view', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewAction'], ['id'], null, null, false, true, null]],
        29812 => [[['_route' => 'oro_user_apigen', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::apigenAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        29839 => [[['_route' => 'oro_user_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateAction'], ['id'], null, null, false, true, null]],
        29867 => [[['_route' => 'oro_user_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::indexAction'], ['_format'], null, null, false, true, null]],
        29895 => [[['_route' => 'oro_user_widget_info', '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::infoAction'], ['id'], null, null, false, true, null]],
        29953 => [[['_route' => 'oro_translation_mass_reset', '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\TranslationController::resetMassAction'], ['gridName', 'actionName'], null, null, false, true, null]],
        29997 => [[['_route' => 'oro_tracking_website_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::indexAction'], ['_format'], null, null, false, true, null]],
        30023 => [[['_route' => 'oro_tracking_website_update', '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::updateAction'], ['id'], null, null, false, true, null]],
        30043 => [[['_route' => 'oro_tracking_website_view', '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::viewAction'], ['id'], null, null, false, true, null]],
        30081 => [[['_route' => 'oro_tag_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::indexAction'], ['_format'], null, null, false, true, null]],
        30112 => [[['_route' => 'oro_tag_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::updateAction'], ['id'], null, null, false, true, null]],
        30139 => [[['_route' => 'oro_tag_search', 'id' => 0, '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::searchAction'], ['id'], null, null, false, true, null]],
        30177 => [[['_route' => 'oro_taxonomy_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TaxonomyController::indexAction'], ['_format'], null, null, false, true, null]],
        30208 => [[['_route' => 'oro_taxonomy_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TaxonomyController::updateAction'], ['id'], null, null, false, true, null]],
        30228 => [[['_route' => 'oro_taxonomy_view', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TaxonomyController::viewAction'], ['id'], null, null, false, true, null]],
        30255 => [[['_route' => 'oro_taxonomy_widget_info', '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TaxonomyController::infoAction'], ['id'], null, null, false, true, null]],
        30308 => [[['_route' => 'oro_task_widget_sidebar_tasks', 'perPage' => 10, '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::tasksWidgetAction'], ['perPage'], null, null, false, true, null]],
        30328 => [[['_route' => 'oro_task_widget_info', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::infoAction'], ['id'], null, null, false, true, null]],
        30364 => [[['_route' => 'oro_task_activity_view', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::activityAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        30387 => [[['_route' => 'oro_task_user_tasks', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskController::userTasksAction'], ['user'], null, null, false, true, null]],
        30408 => [[['_route' => 'oro_task_update', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskCrudController::updateAction'], ['id'], null, null, false, true, null]],
        30429 => [[['_route' => 'oro_task_view', '_controller' => 'Oro\\Bundle\\TaskBundle\\Controller\\TaskCrudController::viewAction'], ['id'], null, null, false, true, null]],
        30479 => [[['_route' => 'oro_locale_localization_view', '_controller' => 'Oro\\Bundle\\LocaleBundle\\Controller\\LocalizationController::viewAction'], ['id'], null, null, false, true, null]],
        30501 => [[['_route' => 'oro_locale_localization_update', '_controller' => 'Oro\\Bundle\\LocaleBundle\\Controller\\LocalizationController::updateAction'], ['id'], null, null, false, true, null]],
        30541 => [[['_route' => 'oro_sales_lead_address_book', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadAddressController::addressBookAction'], ['id'], null, null, false, true, null]],
        30572 => [[['_route' => 'oro_sales_lead_address_create', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadAddressController::createAction'], ['leadId'], null, null, false, false, null]],
        30614 => [[['_route' => 'oro_sales_lead_address_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadAddressController::updateAction'], ['leadId', 'id'], null, null, false, true, null]],
        30634 => [[['_route' => 'oro_sales_lead_view', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::viewAction'], ['id'], null, null, false, true, null]],
        30654 => [[['_route' => 'oro_sales_lead_info', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::infoAction'], ['id'], null, null, false, true, null]],
        30681 => [[['_route' => 'oro_sales_lead_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::updateAction'], ['id'], null, null, false, true, null]],
        30709 => [[['_route' => 'oro_sales_lead_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::indexAction'], ['_format'], null, null, false, true, null]],
        30750 => [[['_route' => 'oro_sales_widget_account_leads', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::accountLeadsAction'], ['id'], null, null, false, true, null]],
        30778 => [[['_route' => 'oro_sales_lead_data_channel_aware_create', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::leadWithDataChannelCreateAction'], ['channelIds'], null, null, false, true, null]],
        30800 => [[['_route' => 'oro_sales_lead_convert_to_opportunity', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::convertToOpportunityAction'], ['id'], null, null, false, true, null]],
        30827 => [[['_route' => 'oro_sales_lead_disqualify', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\LeadController::disqualifyAction'], ['id'], ['POST' => 0], null, false, true, null]],
        30871 => [[['_route' => 'oro_integration_update', '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::updateAction'], ['id'], null, null, false, true, null]],
        30895 => [[['_route' => 'oro_integration_schedule', '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::scheduleAction'], ['id'], ['POST' => 0], null, false, true, null]],
        30935 => [[['_route' => 'oro_importexport_import_validate', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importValidateAction'], ['processorAlias'], ['POST' => 0], null, false, true, null]],
        30961 => [[['_route' => 'oro_importexport_import_process', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importProcessAction'], ['processorAlias'], ['POST' => 0], null, false, true, null]],
        31006 => [[['_route' => 'oro_importexport_job_error_log', '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importExportJobErrorLogAction'], ['jobId'], null, null, false, false, null]],
        31063 => [[['_route' => 'oro_notification_emailnotification_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::indexAction'], ['_format'], null, null, false, true, null]],
        31091 => [[['_route' => 'oro_notification_emailnotification_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::updateAction'], ['id'], null, null, false, true, null]],
        31138 => [[['_route' => 'oro_notification_massnotification_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\MassNotificationController::indexAction'], ['_format'], null, null, false, true, null]],
        31162 => [[['_route' => 'oro_notification_massnotification_view', '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\MassNotificationController::viewAction'], ['id'], null, null, false, true, null]],
        31182 => [[['_route' => 'oro_notification_massnotification_info', '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\MassNotificationController::infoAction'], ['id'], null, null, false, true, null]],
        31233 => [[['_route' => 'oro_note_widget_notes', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::widgetAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        31260 => [[['_route' => 'oro_note_notes', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::getAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        31299 => [[['_route' => 'oro_note_widget_info', 'renderContexts' => true, '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::infoAction'], ['id', 'renderContexts'], null, null, false, true, null]],
        31321 => [[['_route' => 'oro_note_update', '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::updateAction'], ['id'], null, null, false, true, null]],
        31360 => [[['_route' => 'oro_report_view', '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::viewAction'], ['id'], null, null, false, true, null]],
        31378 => [[['_route' => 'oro_report_view_grid', '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::viewFromGridAction'], ['gridName'], null, null, false, true, null]],
        31401 => [[['_route' => 'oro_report_update', '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::updateAction'], ['id'], null, null, false, true, null]],
        31422 => [[['_route' => 'oro_report_clone', '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::cloneAction'], ['id'], null, null, false, true, null]],
        31450 => [[['_route' => 'oro_report_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::indexAction'], ['_format'], null, null, false, true, null]],
        31496 => [[['_route' => 'oro_reportcrm_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\ReportCRMBundle\\Controller\\ReportController::indexAction'], ['reportGroupName', 'reportName', '_format'], null, null, false, true, null]],
        31539 => [[['_route' => 'oro_process_definition_view', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\ProcessDefinitionController::viewAction'], ['name'], null, null, false, true, null]],
        31606 => [[['_route' => 'oro_workflow_widget_entity_workflows', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::entityWorkflowsAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        31665 => [[['_route' => 'oro_workflow_widget_start_transition_form', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::startTransitionFormAction'], ['workflowName', 'transitionName'], null, null, false, true, null]],
        31708 => [[['_route' => 'oro_workflow_widget_transition_form', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::transitionFormAction'], ['workflowItemId', 'transitionName'], null, null, false, true, null]],
        31744 => [[['_route' => 'oro_workflow_widget_buttons', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::buttonsAction'], ['entityClass', 'entityId'], null, null, false, true, null]],
        31782 => [[['_route' => 'oro_workflow_start_transition_form', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowController::startTransitionAction'], ['workflowName', 'transitionName'], null, null, false, true, null]],
        31817 => [[['_route' => 'oro_workflow_transition_form', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowController::transitionAction'], ['workflowItemId', 'transitionName'], null, null, false, true, null]],
        31857 => [[['_route' => 'oro_workflow_definition_update', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::updateAction'], ['name'], null, null, false, true, null]],
        31885 => [[['_route' => 'oro_workflow_definition_configure', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::configureAction'], ['name'], null, null, false, true, null]],
        31908 => [[['_route' => 'oro_workflow_definition_view', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::viewAction'], ['name'], null, null, false, true, null]],
        31941 => [[['_route' => 'oro_workflow_definition_activate_from_widget', '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::activateFormAction'], ['name'], null, null, false, true, null]],
        31985 => [[['_route' => 'oro_sales_b2bcustomer_index', '_format' => 'html', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::indexAction'], ['_format'], null, null, false, true, null]],
        32009 => [[['_route' => 'oro_sales_b2bcustomer_view', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::viewAction'], ['id'], null, null, false, true, null]],
        32039 => [[['_route' => 'oro_sales_b2bcustomer_widget_info', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::infoAction'], ['id'], null, null, false, true, null]],
        32079 => [[['_route' => 'oro_sales_b2bcustomer_widget_leads', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::b2bCustomerLeadsAction'], ['id'], null, null, false, true, null]],
        32108 => [[['_route' => 'oro_sales_b2bcustomer_widget_opportunities', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::b2bCustomerOpportunitiesAction'], ['id'], null, null, false, true, null]],
        32142 => [[['_route' => 'oro_sales_widget_b2bcustomer_info', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::customerInfoAction'], ['id', 'channelId'], null, null, false, true, null]],
        32188 => [[['_route' => 'oro_sales_widget_account_b2bcustomers_info', '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::accountCustomersInfoAction'], ['accountId', 'channelId'], null, null, false, true, null]],
        32217 => [
            [['_route' => 'oro_sales_b2bcustomer_update', 'id' => 0, '_controller' => 'Oro\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::updateAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    static function ($condition, $context, $request) { // $checkCondition
        switch ($condition) {
            case 1: return (($request !== null) && $request->get("_widgetContainer"));
        }
    },
];
