<?php return array (
  'widgets' => 
  array (
    'recent_emails' => 
    array (
      'label' => 'oro.dashboard.recent_emails.title',
      'route' => 'oro_email_dashboard_recent_emails',
      'acl' => 'oro_email_email_view',
      'description' => 'oro.dashboard.recent_emails.description',
      'icon' => 'bundles/oroemail/img/recent_emails.png',
      'icon_class' => 'fa-envelope',
      'route_parameters' => 
      array (
        'widget' => 'recent_emails',
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
      ),
      'data_items' => 
      array (
      ),
    ),
    'quick_launchpad' => 
    array (
      'items' => 
      array (
        'accounts' => 
        array (
          'label' => 'oro.account.entity_plural_label',
          'icon' => 'suitcase',
          'route' => 'oro_account_index',
          'acl' => 'oro_account_view',
          'route_parameters' => 
          array (
          ),
          'enabled' => true,
        ),
        'leads' => 
        array (
          'label' => 'oro.sales.lead.entity_plural_label',
          'icon' => 'phone-square',
          'route' => 'oro_sales_lead_index',
          'acl' => 'oro_sales_lead_view',
          'route_parameters' => 
          array (
          ),
          'enabled' => true,
        ),
        'contacts' => 
        array (
          'label' => 'oro.contact.entity_plural_label',
          'icon' => 'group',
          'route' => 'oro_contact_index',
          'acl' => 'oro_contact_view',
          'route_parameters' => 
          array (
          ),
          'enabled' => true,
        ),
        'opportunities' => 
        array (
          'label' => 'oro.sales.opportunity.entity_plural_label',
          'icon' => 'usd',
          'route' => 'oro_sales_opportunity_index',
          'acl' => 'oro_sales_opportunity_view',
          'route_parameters' => 
          array (
          ),
          'enabled' => true,
        ),
        'settings' => 
        array (
          'label' => 'oro.dashboard.widgets.quick_launchpad.title',
          'icon' => 'cogs',
          'class' => 'mobile-hide',
          'route' => 'oro_config_configuration_system',
          'acl' => 'oro_config_system',
          'route_parameters' => 
          array (
          ),
          'enabled' => true,
        ),
      ),
      'label' => 'oro.dashboard.title.quick_launchpad',
      'route' => 'oro_dashboard_itemized_widget',
      'route_parameters' => 
      array (
        'bundle' => 'OroDashboard',
        'name' => 'quickLaunchpad',
        'widget' => 'quick_launchpad',
      ),
      'description' => 'oro.dashboard.quick_launchpad_widget_description',
      'icon' => 'bundles/orodashboard/img/quick_launchpad.png',
      'icon_class' => 'fa-rocket',
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
      ),
      'data_items' => 
      array (
      ),
    ),
    'my_calendar' => 
    array (
      'label' => 'oro.calendar.my_calendar_widget_title',
      'route' => 'oro_calendar_dashboard_my_calendar',
      'acl' => 'oro_calendar_view',
      'description' => 'oro.calendar.my_calendar_widget_description',
      'icon' => 'bundles/orocalendar/img/my_calendar.png',
      'icon_class' => 'fa-calendar-check-o',
      'route_parameters' => 
      array (
        'widget' => 'my_calendar',
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
      ),
      'data_items' => 
      array (
      ),
    ),
    'my_contacts_activity' => 
    array (
      'label' => 'oro.dashboard.my_contacts_activity.title',
      'route' => 'oro_dashboard_widget',
      'route_parameters' => 
      array (
        'bundle' => 'OroContact',
        'name' => 'myContactsActivity',
        'widget' => 'my_contacts_activity',
      ),
      'acl' => 'oro_contact_view',
      'description' => 'oro.dashboard.my_contacts_activity.description',
      'icon' => 'bundles/orocontact/img/recently_accessed_contacts.png',
      'icon_class' => 'fa-id-card-o',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'owners' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Form\\Type\\WidgetOwnersType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.user.dashboard.owners',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'my_accounts_activity' => 
    array (
      'label' => 'oro.dashboard.my_accounts_activity.title',
      'route' => 'oro_dashboard_widget',
      'route_parameters' => 
      array (
        'bundle' => 'OroAccount',
        'name' => 'myAccountsActivity',
        'widget' => 'my_accounts_activity',
      ),
      'acl' => 'oro_account_view',
      'description' => 'oro.dashboard.my_accounts_activity.description',
      'icon' => 'bundles/oroaccount/img/recent_accessed_accounts.png',
      'icon_class' => 'fa-users',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'owners' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Form\\Type\\WidgetOwnersType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.user.dashboard.owners',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'recent_calls' => 
    array (
      'label' => 'oro.dashboard.recent_calls.title',
      'route' => 'oro_dashboard_widget',
      'route_parameters' => 
      array (
        'bundle' => 'OroCall',
        'name' => 'recentCalls',
        'widget' => 'recent_calls',
      ),
      'acl' => 'oro_call_view',
      'description' => 'oro.dashboard.recent_calls.description',
      'icon' => 'bundles/orocall/img/recent_calls.png',
      'icon_class' => 'fa-volume-control-phone',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'owners' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Form\\Type\\WidgetOwnersType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.user.dashboard.owners',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'opportunities_by_lead_source_chart' => 
    array (
      'label' => 'oro.sales.dashboard.opportunities_by_lead_source_chart.title',
      'route' => 'oro_sales_dashboard_opportunities_by_lead_source_chart',
      'acl' => 'oro_sales_opportunity_view',
      'description' => 'oro.sales.dashboard.opportunities_by_lead_source_chart.description',
      'icon' => 'bundles/orosales/img/opportunities_by_lead_source.png',
      'icon_class' => 'fa-handshake-o',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'owners' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Form\\Type\\WidgetOwnersType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.user.dashboard.owners',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'dateRange' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.date_range.label',
            'value_types' => true,
          ),
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'excludedSources' => 
        array (
          'type' => 'Oro\\Bundle\\SalesBundle\\Form\\Type\\LeadSourceSelectType',
          'options' => 
          array (
            'label' => 'oro.sales.dashboard.opportunities_by_lead_source_chart.excluded_sources.label',
            'tooltip' => 'oro.sales.dashboard.opportunities_by_lead_source_chart.excluded_sources.tooltip',
            'required' => false,
            'configs' => 
            array (
              'placeholder' => 'oro.sales.dashboard.opportunities_by_lead_source_chart.excluded_sources.placeholder',
            ),
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'byAmount' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetChoiceType',
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
            'default_selected' => 0,
          ),
          'options' => 
          array (
            'label' => 'oro.sales.dashboard.opportunities_by_lead_source_chart.by_amount.label',
            'tooltip' => 'oro.sales.dashboard.opportunities_by_lead_source_chart.by_amount.tooltip',
            'required' => true,
            'choices' => 
            array (
              'oro.sales.dashboard.opportunities_by_lead_source_chart.by_amount.count' => 0,
              'oro.sales.dashboard.opportunities_by_lead_source_chart.by_amount.amount' => 1,
            ),
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'route_parameters' => 
      array (
        'widget' => 'opportunities_by_lead_source_chart',
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'opportunities_by_state' => 
    array (
      'label' => 'oro.sales.dashboard.opportunities_by_state.title',
      'route' => 'oro_sales_dashboard_opportunity_by_state_chart',
      'acl' => 'oro_sales_opportunity_view',
      'description' => 'oro.sales.dashboard.opportunities_by_state.description',
      'icon' => 'bundles/orosales/img/opportunity_by_status.png',
      'icon_class' => 'fa-check',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'owners' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Form\\Type\\WidgetOwnersType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.user.dashboard.owners',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'dateRange' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.date_range.label',
            'value_types' => true,
          ),
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'excluded_statuses' => 
        array (
          'type' => 'Oro\\Bundle\\SalesBundle\\Form\\Type\\WidgetOpportunityStatusSelectType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.sales.dashboard.opportunities_by_state.excluded_statuses.label',
            'required' => false,
            'configs' => 
            array (
              'placeholder' => 'oro.sales.dashboard.opportunities_list.excluded_statuses.placeholder',
            ),
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'useQuantityAsData' => 
        array (
          'type' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType',
          'options' => 
          array (
            'label' => 'oro.sales.dashboard.opportunities_by_state.quantity_as_data.label',
            'tooltip' => 'oro.sales.dashboard.opportunities_by_state.quantity_as_data.tooltip',
            'required' => true,
            'choices' => 
            array (
              'oro.sales.dashboard.opportunities_by_state.quantity_as_data.amount' => 0,
              'oro.sales.dashboard.opportunities_by_state.quantity_as_data.count' => 1,
            ),
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'route_parameters' => 
      array (
        'widget' => 'opportunities_by_state',
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'my_sales_flow_b2b_chart' => 
    array (
      'label' => 'oro.sales.dashboard.my_sales_flow_b2b_chart.title',
      'route' => 'oro_sales_dashboard_sales_flow_b2b_chart',
      'acl' => 'oro_sales_opportunity_view',
      'description' => 'oro.sales.dashboard.my_sales_flow_b2b_chart.description',
      'icon' => 'bundles/orosales/img/my_sales_flow_b2b.png',
      'icon_class' => 'fa-globe',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'dateRange' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.date_range.label',
            'value_types' => true,
          ),
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'route_parameters' => 
      array (
        'widget' => 'my_sales_flow_b2b_chart',
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'campaigns_leads' => 
    array (
      'label' => 'oro.campaign.dashboard.campaigns_leads.title',
      'route' => 'oro_campaign_dashboard_campaigns_leads_chart',
      'acl' => 'oro_campaign_view',
      'description' => 'oro.campaign.dashboard.campaigns_leads.description',
      'icon' => 'bundles/orocampaign/img/Lead-generation-of-most-recently-created-campaigns.png',
      'icon_class' => 'fa-clock-o',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'dateRange' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.date_range.label',
            'value_types' => true,
          ),
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'route_parameters' => 
      array (
        'widget' => 'campaigns_leads',
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'campaigns_opportunity' => 
    array (
      'label' => 'oro.campaign.dashboard.campaigns_opportunity.title',
      'route' => 'oro_campaign_dashboard_campaigns_opportunity_chart',
      'acl' => 'oro_campaign_view',
      'description' => 'oro.campaign.dashboard.campaigns_opportunity.description',
      'icon' => 'bundles/orocampaign/img/Top-5-opportunity-generating-campaigns.png',
      'icon_class' => 'fa-check-circle-o',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'dateRange' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.date_range.label',
            'value_types' => true,
          ),
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'route_parameters' => 
      array (
        'widget' => 'campaigns_opportunity',
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'campaigns_by_close_revenue' => 
    array (
      'label' => 'oro.campaign.dashboard.campaigns_by_close_revenue.title',
      'route' => 'oro_campaign_dashboard_campaigns_by_close_revenue_chart',
      'acl' => 'oro_campaign_view',
      'description' => 'oro.campaign.dashboard.campaigns_by_close_revenue.description',
      'icon' => 'bundles/orocampaign/img/Top-5-revenue-generating-campaigns.png',
      'icon_class' => 'fa-money',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'dateRange' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.date_range.label',
            'value_types' => true,
          ),
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'route_parameters' => 
      array (
        'widget' => 'campaigns_by_close_revenue',
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'forecast_of_opportunities' => 
    array (
      'label' => 'oro.sales.dashboard.forecast_of_opportunities.title',
      'route' => 'oro_dashboard_itemized_data_widget',
      'route_parameters' => 
      array (
        'bundle' => 'OroSales',
        'name' => 'forecastOfOpportunities',
        'widget' => 'forecast_of_opportunities',
      ),
      'acl' => 'oro_sales_opportunity_view',
      'description' => 'oro.sales.dashboard.forecast_of_opportunities.description',
      'icon' => 'bundles/orosales/img/opportunity_by_status.png',
      'icon_class' => 'fa-pie-chart',
      'configuration_dialog_options' => 
      array (
        'resizable' => true,
        'minWidth' => 780,
      ),
      'data_items' => 
      array (
        'in_progress' => 
        array (
          'data_provider' => '@oro_sales.provider.forecast_of_opportunities->getForecastOfOpportunitiesValues($widgetOptions$, inProgressCount, integer)',
          'label' => 'oro.sales.dashboard.forecast_of_opportunities.in_progress.label',
          'acl' => 'oro_sales_opportunity_view',
          'template' => '@OroSales/Dashboard/forecastOfOpportunitiesSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
        'total_forecast' => 
        array (
          'data_provider' => '@oro_sales.provider.forecast_of_opportunities->getForecastOfOpportunitiesValues($widgetOptions$, budgetAmount, currency)',
          'label' => 'oro.sales.dashboard.forecast_of_opportunities.total_forecast.label',
          'acl' => 'oro_sales_opportunity_view',
          'template' => '@OroSales/Dashboard/forecastOfOpportunitiesSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
        'weighted_forecast' => 
        array (
          'data_provider' => '@oro_sales.provider.forecast_of_opportunities->getForecastOfOpportunitiesValues($widgetOptions$, weightedForecast, currency)',
          'label' => 'oro.sales.dashboard.forecast_of_opportunities.weighted_forecast.label',
          'acl' => 'oro_sales_opportunity_view',
          'template' => '@OroSales/Dashboard/forecastOfOpportunitiesSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
        'total_indeterminate_forecast' => 
        array (
          'data_provider' => '@oro_sales.provider.opportunity.indeterminate_forecast->getForecastOfOpportunitiesValues($widgetOptions$, totalIndeterminate)',
          'label' => 'oro.sales.dashboard.forecast_of_opportunities.total_indeterminate_forecast.label',
          'acl' => 'oro_sales_opportunity_view',
          'template' => '@OroSales/Dashboard/forecastOfOpportunitiesSimpleSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
        'weighted_indeterminate_forecast' => 
        array (
          'data_provider' => '@oro_sales.provider.opportunity.indeterminate_forecast->getForecastOfOpportunitiesValues($widgetOptions$, weightedIndeterminate)',
          'label' => 'oro.sales.dashboard.forecast_of_opportunities.weighted_indeterminate_forecast.label',
          'acl' => 'oro_sales_opportunity_view',
          'template' => '@OroSales/Dashboard/forecastOfOpportunitiesSimpleSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
      ),
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'owners' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Form\\Type\\WidgetOwnersType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.user.dashboard.owners',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'dateRange' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.date_range.label',
            'value_types' => true,
          ),
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
            'save_open_range' => true,
            'create_previous_period' => true,
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'compareToDate' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateType',
          'options' => 
          array (
            'label' => 'oro.sales.dashboard.forecast_of_opportunities.compareToDate',
            'required' => false,
            'enable_date' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'queryFilter' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetFilterType',
          'options' => 
          array (
            'required' => false,
            'label' => 'oro.dashboard.query_filter.label',
            'widgetType' => 'forecast_of_opportunities',
            'entity' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
            'collapsible' => true,
            'expand_filled' => true,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'subWidgets' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetItemsType',
          'options' => 
          array (
            'label' => 'oro.sales.dashboard.forecast_of_opportunities.metrics',
            'attr' => 
            array (
              'placeholder' => 'oro.dashboard.widget.big_number.choose_metrics_placeholder',
            ),
            'item_label' => 'oro.sales.opportunity.datagrid.columns.metric_name',
            'required' => false,
            'widget_name' => 'forecast_of_opportunities',
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'enabled' => true,
      'isNew' => false,
    ),
    'opportunity_statistics' => 
    array (
      'label' => 'oro.dashboard.opportunity_statistics.title',
      'route' => 'oro_dashboard_itemized_data_widget',
      'route_parameters' => 
      array (
        'bundle' => 'OroDashboard',
        'name' => 'bigNumbers',
        'widget' => 'opportunity_statistics',
      ),
      'acl' => 'oro_sales_b2bcustomer_view',
      'description' => 'oro.dashboard.opportunity_statistics.description',
      'icon' => 'bundles/orosales/img/icon-big_numbers.png',
      'icon_class' => 'fa-line-chart',
      'applicable' => '@oro_sales.provider.enitity_state->isEntityB2bCustomerEnabled()',
      'data_items' => 
      array (
        'new_opportunities_count' => 
        array (
          'data_provider' => '@oro_dashboard.provider.big_number.processor->getBigNumberValues($widgetOptions$, opportunity_stats, getNewOpportunitiesCount, integer)',
          'label' => 'oro.dashboard.opportunity_statistics.new_opportunities_count.label',
          'acl' => 'oro_sales_opportunity_view',
          'template' => '@OroDashboard/Dashboard/bigNumberSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
        'new_opportunities_amount' => 
        array (
          'data_provider' => '@oro_dashboard.provider.big_number.processor->getBigNumberValues($widgetOptions$, opportunity_stats, getNewOpportunitiesAmount, currency)',
          'label' => 'oro.dashboard.opportunity_statistics.new_opportunities_amount.label',
          'acl' => 'oro_sales_opportunity_view',
          'template' => '@OroDashboard/Dashboard/bigNumberSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
        'won_opportunities_to_date_count' => 
        array (
          'data_provider' => '@oro_dashboard.provider.big_number.processor->getBigNumberValues($widgetOptions$, opportunity_stats, getWonOpportunitiesToDateCount, integer)',
          'label' => 'oro.dashboard.opportunity_statistics.won_opportunities_to_date_count.label',
          'acl' => 'oro_sales_opportunity_view',
          'template' => '@OroDashboard/Dashboard/bigNumberSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
        'won_opportunities_to_date_amount' => 
        array (
          'data_provider' => '@oro_dashboard.provider.big_number.processor->getBigNumberValues($widgetOptions$, opportunity_stats, getWonOpportunitiesToDateAmount, currency)',
          'label' => 'oro.dashboard.opportunity_statistics.won_opportunities_to_date_amount.label',
          'acl' => 'oro_sales_opportunity_view',
          'template' => '@OroDashboard/Dashboard/bigNumberSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
      ),
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'owners' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Form\\Type\\WidgetOwnersType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.user.dashboard.owners',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'dateRange' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.date_range.label',
            'value_types' => true,
          ),
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'usePreviousInterval' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetPreviousDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.previous_date_range.label',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
            'dateRangeField' => 'dateRange',
            'default_checked' => true,
          ),
          'show_on_widget' => false,
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'queryFilter' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetFilterType',
          'options' => 
          array (
            'required' => false,
            'label' => 'oro.dashboard.query_filter.label',
            'widgetType' => 'opportunity_statistics',
            'entity' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
            'collapsible' => true,
            'expand_filled' => true,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'subWidgets' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetItemsType',
          'options' => 
          array (
            'label' => 'oro.dashboard.widget.big_number.choose_metrics',
            'attr' => 
            array (
              'placeholder' => 'oro.dashboard.widget.big_number.choose_metrics_placeholder',
            ),
            'item_label' => 'oro.dashboard.widget.big_number.metricName',
            'required' => false,
            'widget_name' => 'opportunity_statistics',
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
    ),
    'lead_statistics' => 
    array (
      'label' => 'oro.dashboard.lead_statistics.title',
      'route' => 'oro_dashboard_itemized_data_widget',
      'route_parameters' => 
      array (
        'bundle' => 'OroDashboard',
        'name' => 'bigNumbers',
        'widget' => 'lead_statistics',
      ),
      'acl' => 'oro_sales_lead_view',
      'description' => 'oro.dashboard.lead_statistics.description',
      'icon' => 'bundles/orosales/img/icon-big_numbers.png',
      'icon_class' => 'fa-area-chart',
      'applicable' => '@oro_sales.provider.enitity_state->isEntityB2bCustomerEnabled()',
      'data_items' => 
      array (
        'open_leads_count' => 
        array (
          'data_provider' => '@oro_dashboard.provider.big_number.processor->getBigNumberValues($widgetOptions$, lead_stats, getOpenLeadsCount, integer, false, false, false)',
          'label' => 'oro.dashboard.lead_statistics.open_leads_count.label',
          'acl' => 'oro_sales_lead_view',
          'template' => '@OroDashboard/Dashboard/bigNumberSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
        'new_leads_count' => 
        array (
          'data_provider' => '@oro_dashboard.provider.big_number.processor->getBigNumberValues($widgetOptions$, lead_stats, getNewLeadsCount, integer)',
          'label' => 'oro.dashboard.lead_statistics.new_leads_count.label',
          'acl' => 'oro_sales_lead_view',
          'template' => '@OroDashboard/Dashboard/bigNumberSubwidget.html.twig',
          'enabled' => true,
          'position' => 0,
        ),
      ),
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'owners' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Form\\Type\\WidgetOwnersType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.user.dashboard.owners',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'dateRange' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.date_range.label',
            'value_types' => true,
          ),
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'usePreviousInterval' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetPreviousDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.previous_date_range.label',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
            'dateRangeField' => 'dateRange',
            'default_checked' => true,
          ),
          'show_on_widget' => false,
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'queryFilter' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetFilterType',
          'options' => 
          array (
            'required' => false,
            'label' => 'oro.dashboard.query_filter.label',
            'widgetType' => 'lead_statistics',
            'entity' => 'Oro\\Bundle\\SalesBundle\\Entity\\Lead',
            'collapsible' => true,
            'expand_filled' => true,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'subWidgets' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetItemsType',
          'options' => 
          array (
            'label' => 'oro.dashboard.widget.big_number.choose_metrics',
            'attr' => 
            array (
              'placeholder' => 'oro.dashboard.widget.big_number.choose_metrics_placeholder',
            ),
            'item_label' => 'oro.dashboard.widget.big_number.metricName',
            'required' => false,
            'widget_name' => 'lead_statistics',
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
    ),
    'average_lifetime_sales_chart' => 
    array (
      'label' => 'oro.channel.dashboard.average_lifetime_sales_chart.title',
      'route' => 'oro_channel_dashboard_average_lifetime_sales_chart',
      'acl' => 'oro_channel_view',
      'description' => 'oro.channel.dashboard.average_lifetime_sales_chart.description',
      'icon' => 'bundles/orochannel/img/average_lifetime_sales_chart.png',
      'icon_class' => 'fa-suitcase',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'dateRange' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetDateRangeType',
          'options' => 
          array (
            'label' => 'oro.dashboard.date_range.label',
            'value_types' => true,
            'all_time_value' => false,
          ),
          'show_on_widget' => true,
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'route_parameters' => 
      array (
        'widget' => 'average_lifetime_sales_chart',
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'opportunities_list' => 
    array (
      'label' => 'oro.sales.dashboard.opportunities_list.title',
      'route' => 'oro_dashboard_widget',
      'route_parameters' => 
      array (
        'bundle' => 'OroSales',
        'name' => 'opportunitiesList',
        'widget' => 'opportunities_list',
      ),
      'acl' => 'oro_sales_opportunity_view',
      'description' => 'oro.sales.dashboard.opportunities_list.description',
      'icon' => 'bundles/orosales/img/opportunity_by_status.png',
      'icon_class' => 'fa-usd',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'owners' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Form\\Type\\WidgetOwnersType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.user.dashboard.owners',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
            'default_selected' => 
            array (
              'users' => 
              array (
                0 => 'current_user',
              ),
            ),
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'excluded_statuses' => 
        array (
          'type' => 'Oro\\Bundle\\SalesBundle\\Form\\Type\\WidgetOpportunityStatusSelectType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.sales.dashboard.opportunities_list.excluded_statuses.label',
            'required' => false,
            'configs' => 
            array (
              'placeholder' => 'oro.sales.dashboard.opportunities_list.excluded_statuses.placeholder',
            ),
          ),
          'converter_attributes' => 
          array (
            'default_selected' => 
            array (
              0 => 'won',
              1 => 'lost',
            ),
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'sortBy' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetSortByType',
          'show_on_widget' => true,
          'options' => 
          array (
            'required' => false,
            'class_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
            'label' => 'oro.dashboard.widget.sort_by.label',
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
    'leads_list' => 
    array (
      'label' => 'oro.sales.dashboard.leads_list.title',
      'route' => 'oro_dashboard_widget',
      'route_parameters' => 
      array (
        'bundle' => 'OroSales',
        'name' => 'leadsList',
        'widget' => 'leads_list',
      ),
      'acl' => 'oro_sales_lead_view',
      'description' => 'oro.sales.dashboard.leads_list.description',
      'icon' => 'bundles/orosales/img/opportunities_by_lead_source.png',
      'icon_class' => 'fa-phone',
      'configuration' => 
      array (
        'title' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetTitleType',
          'options' => 
          array (
            'label' => 'oro.dashboard.title.label',
            'required' => false,
          ),
          'show_on_widget' => false,
          'converter_attributes' => 
          array (
          ),
        ),
        'owners' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Form\\Type\\WidgetOwnersType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.user.dashboard.owners',
            'required' => false,
          ),
          'converter_attributes' => 
          array (
            'default_selected' => 
            array (
              'users' => 
              array (
                0 => 'current_user',
              ),
            ),
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'excluded_statuses' => 
        array (
          'type' => 'Oro\\Bundle\\SalesBundle\\Form\\Type\\LeadStatusSelectType',
          'show_on_widget' => true,
          'options' => 
          array (
            'label' => 'oro.sales.dashboard.leads_list.excluded_statuses.label',
            'required' => false,
            'configs' => 
            array (
              'placeholder' => 'oro.sales.dashboard.leads_list.excluded_statuses.placeholder',
            ),
          ),
          'converter_attributes' => 
          array (
            'default_selected' => 
            array (
              0 => 'canceled',
              1 => 'qualified',
            ),
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
        'sortBy' => 
        array (
          'type' => 'Oro\\Bundle\\DashboardBundle\\Form\\Type\\WidgetSortByType',
          'show_on_widget' => true,
          'options' => 
          array (
            'required' => false,
            'class_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Lead',
            'label' => 'oro.dashboard.widget.sort_by.label',
          ),
          'converter_attributes' => 
          array (
          ),
          'aclClass' => false,
          'aclPermission' => false,
        ),
      ),
      'enabled' => true,
      'isNew' => false,
      'configuration_dialog_options' => 
      array (
        'resizable' => false,
      ),
      'data_items' => 
      array (
      ),
    ),
  ),
  'dashboards' => 
  array (
    'main' => 
    array (
      'twig' => '@OroDashboard/Index/default.html.twig',
    ),
    'e_commerce' => 
    array (
      'twig' => '@OroDashboard/Index/default.html.twig',
    ),
  ),
);