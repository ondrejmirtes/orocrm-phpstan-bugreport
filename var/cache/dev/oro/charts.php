<?php return array (
  'line_chart' => 
  array (
    'label' => 'oro.chart.line_chart.label',
    'data_schema' => 
    array (
      0 => 
      array (
        'name' => 'label',
        'label' => 'oro.chart.line_chart.params.label',
        'required' => true,
        'default_type' => 'string',
        'type_filter' => 
        array (
        ),
      ),
      1 => 
      array (
        'name' => 'value',
        'label' => 'oro.chart.line_chart.params.value',
        'required' => true,
        'type_filter' => 
        array (
          0 => 'percent',
          1 => 'number',
        ),
        'default_type' => 'decimal',
      ),
    ),
    'default_settings' => 
    array (
      'connect_dots_with_line' => true,
      'available_in_reports' => true,
      'chartColors' => 
      array (
        0 => '#ACD39C',
        1 => '#BE9DE2',
        2 => '#6598DA',
        3 => '#ECC87E',
        4 => '#A4A2F6',
        5 => '#6487BF',
        6 => '#65BC87',
        7 => '#8985C2',
        8 => '#ECB574',
        9 => '#84A377',
      ),
      'chartFontSize' => 9,
      'chartFontColor' => '#454545',
      'chartHighlightColor' => '#FF5E5E',
    ),
    'template' => '@OroChart/Chart/line.html.twig',
    'settings_schema' => 
    array (
    ),
    'xaxis' => 
    array (
      'mode' => 'normal',
      'noTicks' => 5,
    ),
  ),
  'multiline_chart' => 
  array (
    'label' => 'oro.chart.multiline_chart.label',
    'data_schema' => 
    array (
      0 => 
      array (
        'name' => 'label',
        'label' => 'oro.chart.multiline_chart.params.label',
        'required' => true,
        'default_type' => 'string',
        'type_filter' => 
        array (
        ),
      ),
      1 => 
      array (
        'name' => 'value',
        'label' => 'oro.chart.multiline_chart.params.value',
        'required' => true,
        'type_filter' => 
        array (
          0 => 'percent',
          1 => 'number',
        ),
        'default_type' => 'decimal',
      ),
    ),
    'default_settings' => 
    array (
      'connect_dots_with_line' => true,
      'chartColors' => 
      array (
        0 => '#ACD39C',
        1 => '#BE9DE2',
        2 => '#6598DA',
        3 => '#ECC87E',
        4 => '#A4A2F6',
        5 => '#6487BF',
        6 => '#65BC87',
        7 => '#8985C2',
        8 => '#ECB574',
        9 => '#84A377',
      ),
      'chartFontSize' => 9,
      'chartFontColor' => '#454545',
      'chartHighlightColor' => '#FF5E5E',
    ),
    'template' => '@OroChart/Chart/multiline.html.twig',
    'settings_schema' => 
    array (
    ),
    'xaxis' => 
    array (
      'mode' => 'normal',
      'noTicks' => 5,
    ),
  ),
  'bar_chart' => 
  array (
    'label' => 'oro.chart.bar_chart.label',
    'data_schema' => 
    array (
      0 => 
      array (
        'name' => 'label',
        'label' => 'oro.chart.bar_chart.params.label',
        'required' => true,
        'default_type' => 'string',
        'type_filter' => 
        array (
        ),
      ),
      1 => 
      array (
        'name' => 'value',
        'label' => 'oro.chart.bar_chart.params.value',
        'required' => true,
        'type_filter' => 
        array (
          0 => 'percent',
          1 => 'number',
        ),
        'default_type' => 'decimal',
      ),
    ),
    'default_settings' => 
    array (
      'chartColors' => 
      array (
        0 => '#ACD39C',
        1 => '#BE9DE2',
        2 => '#6598DA',
        3 => '#ECC87E',
        4 => '#A4A2F6',
        5 => '#6487BF',
        6 => '#65BC87',
        7 => '#8985C2',
        8 => '#ECB574',
        9 => '#84A377',
      ),
      'chartFontSize' => 9,
      'chartFontColor' => '#454545',
      'chartHighlightColor' => '#FF5E5E',
    ),
    'template' => '@OroChart/Chart/bar.html.twig',
    'settings_schema' => 
    array (
    ),
    'xaxis' => 
    array (
      'mode' => 'normal',
      'noTicks' => 5,
    ),
  ),
  'horizontal_bar_chart' => 
  array (
    'label' => 'oro.chart.bar_chart.label',
    'data_schema' => 
    array (
      0 => 
      array (
        'name' => 'label',
        'label' => 'oro.chart.bar_chart.params.label',
        'required' => true,
        'default_type' => 'string',
        'type_filter' => 
        array (
        ),
      ),
      1 => 
      array (
        'name' => 'value',
        'label' => 'oro.chart.bar_chart.params.value',
        'required' => true,
        'type_filter' => 
        array (
          0 => 'percent',
          1 => 'number',
        ),
        'default_type' => 'decimal',
      ),
    ),
    'default_settings' => 
    array (
      'chartColors' => 
      array (
        0 => '#ACD39C',
        1 => '#BE9DE2',
        2 => '#6598DA',
        3 => '#ECC87E',
        4 => '#A4A2F6',
        5 => '#6487BF',
        6 => '#65BC87',
        7 => '#8985C2',
        8 => '#ECB574',
        9 => '#84A377',
      ),
      'chartFontSize' => 9,
      'chartFontColor' => '#454545',
      'chartHighlightColor' => '#FF5E5E',
    ),
    'template' => '@OroChart/Chart/horizontal_bar.html.twig',
    'settings_schema' => 
    array (
    ),
    'xaxis' => 
    array (
      'mode' => 'normal',
      'noTicks' => 5,
    ),
  ),
  'stackedbar_chart' => 
  array (
    'label' => 'oro.chart.bar_chart.label',
    'data_schema' => 
    array (
      0 => 
      array (
        'name' => 'label',
        'label' => 'oro.chart.bar_chart.params.label',
        'required' => true,
        'default_type' => 'string',
        'type_filter' => 
        array (
        ),
      ),
      1 => 
      array (
        'name' => 'value',
        'label' => 'oro.chart.bar_chart.params.value',
        'required' => true,
        'type_filter' => 
        array (
          0 => 'percent',
          1 => 'number',
        ),
        'default_type' => 'decimal',
      ),
    ),
    'default_settings' => 
    array (
      'chartColors' => 
      array (
        0 => '#ACD39C',
        1 => '#BE9DE2',
        2 => '#6598DA',
        3 => '#ECC87E',
        4 => '#A4A2F6',
        5 => '#6487BF',
        6 => '#65BC87',
        7 => '#8985C2',
        8 => '#ECB574',
        9 => '#84A377',
      ),
      'chartFontSize' => 9,
      'chartFontColor' => '#454545',
      'chartHighlightColor' => '#FF5E5E',
    ),
    'template' => '@OroChart/Chart/stackedbar.html.twig',
    'settings_schema' => 
    array (
    ),
    'xaxis' => 
    array (
      'mode' => 'normal',
      'noTicks' => 5,
    ),
  ),
  'pie_chart' => 
  array (
    'label' => 'oro.chart.pie_chart.label',
    'data_schema' => 
    array (
      0 => 
      array (
        'name' => 'label',
        'label' => 'oro.chart.pie_chart.params.label',
        'required' => true,
        'default_type' => 'string',
        'type_filter' => 
        array (
        ),
      ),
      1 => 
      array (
        'name' => 'value',
        'label' => 'oro.chart.pie_chart.params.value',
        'required' => true,
        'type_filter' => 
        array (
          0 => 'percent',
          1 => 'number',
        ),
        'default_type' => 'decimal',
      ),
    ),
    'default_settings' => 
    array (
      'fraction_input_data_field' => 'value',
      'fraction_output_data_field' => 'fraction',
      'chartColors' => 
      array (
        0 => '#ACD39C',
        1 => '#BE9DE2',
        2 => '#6598DA',
        3 => '#ECC87E',
        4 => '#A4A2F6',
        5 => '#6487BF',
        6 => '#65BC87',
        7 => '#8985C2',
        8 => '#ECB574',
        9 => '#84A377',
      ),
      'chartFontSize' => 9,
      'chartFontColor' => '#454545',
      'chartHighlightColor' => '#FF5E5E',
    ),
    'data_transformer' => 'oro_chart.data_transformer.pie_chart',
    'template' => '@OroChart/Chart/pie.html.twig',
    'settings_schema' => 
    array (
    ),
    'xaxis' => 
    array (
      'mode' => 'normal',
      'noTicks' => 5,
    ),
  ),
  'flow_chart' => 
  array (
    'label' => 'oro.chart.flow_chart.label',
    'data_schema' => 
    array (
      0 => 
      array (
        'name' => 'label',
        'label' => 'oro.chart.flow_chart.params.label',
        'required' => true,
        'default_type' => 'string',
        'type_filter' => 
        array (
        ),
      ),
      1 => 
      array (
        'name' => 'value',
        'label' => 'oro.chart.flow_chart.params.value',
        'required' => true,
        'type_filter' => 
        array (
          0 => 'percent',
          1 => 'number',
        ),
        'default_type' => 'currency',
      ),
      2 => 
      array (
        'name' => 'isNozzle',
        'label' => 'oro.chart.flow_chart.params.is_nozzle',
        'required' => false,
        'default_type' => 'boolean',
        'type_filter' => 
        array (
          0 => 'boolean',
        ),
      ),
    ),
    'default_settings' => 
    array (
      'chartColors' => 
      array (
        0 => '#ACD39C',
        1 => '#BE9DE2',
        2 => '#6598DA',
        3 => '#ECC87E',
        4 => '#A4A2F6',
        5 => '#6487BF',
        6 => '#65BC87',
        7 => '#8985C2',
        8 => '#ECB574',
        9 => '#84A377',
      ),
      'chartFontSize' => 9,
      'chartFontColor' => '#454545',
      'chartHighlightColor' => '#FF5E5E',
    ),
    'template' => '@OroChart/Chart/flow.html.twig',
    'settings_schema' => 
    array (
    ),
    'xaxis' => 
    array (
      'mode' => 'normal',
      'noTicks' => 5,
    ),
  ),
  'campaign_line_chart' => 
  array (
    'label' => 'oro.chart.line_chart.label',
    'data_schema' => 
    array (
      'label' => 
      array (
        'name' => 'label',
        'label' => 'oro.campaign.trackingevent.report.date.label',
        'required' => true,
        'default_type' => 'string',
        'field_name' => 'logTime',
        'type_filter' => 
        array (
        ),
      ),
      'value' => 
      array (
        'name' => 'value',
        'label' => 'oro.campaign.trackingevent.report.visits_count.label',
        'required' => true,
        'default_type' => 'integer',
        'field_name' => 'visitsCount',
        'type_filter' => 
        array (
        ),
      ),
    ),
    'default_settings' => 
    array (
      'connect_dots_with_line' => true,
      'available_in_reports' => false,
      'chartColors' => 
      array (
        0 => '#6598DA',
        1 => '#ECC87E',
        2 => '#A4A2F6',
        3 => '#65BC87',
        4 => '#8985C2',
        5 => '#ECB574',
        6 => '#84A377',
      ),
      'chartFontSize' => 9,
      'chartFontColor' => '#454545',
      'chartHighlightColor' => '#FF5E5E',
      'groupingOption' => 'name',
    ),
    'data_transformer' => 'oro_campaign.data_transformer.multi_line',
    'template' => '@OroCampaign/Chart/multiline.html.twig',
    'settings_schema' => 
    array (
    ),
    'xaxis' => 
    array (
      'mode' => 'normal',
      'noTicks' => 5,
    ),
  ),
  'average_lifetime_sales' => 
  array (
    'label' => 'oro.chart.multiline_chart.label',
    'data_schema' => 
    array (
      'label' => 
      array (
        'name' => 'label',
        'label' => 'oro.channel.dashboard.average_lifetime_sales_chart.month',
        'required' => true,
        'default_type' => 'string',
        'type' => 'month',
        'field_name' => 'month_year',
        'type_filter' => 
        array (
        ),
      ),
      'value' => 
      array (
        'name' => 'value',
        'label' => 'oro.channel.dashboard.average_lifetime_sales_chart.axis_label',
        'required' => true,
        'default_type' => 'decimal',
        'type' => 'currency',
        'field_name' => 'amount',
        'type_filter' => 
        array (
        ),
      ),
    ),
    'xaxis' => 
    array (
      'mode' => 'time',
      'noTicks' => 12,
    ),
    'template' => '@OroCharts/Chart/multiline.html.twig',
    'settings_schema' => 
    array (
    ),
    'default_settings' => 
    array (
    ),
  ),
);