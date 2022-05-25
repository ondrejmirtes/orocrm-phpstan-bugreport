<?php return array (
  'filters' => 
  array (
    'activityList' => 
    array (
      'type' => 'activityList',
      'query_type' => 
      array (
        0 => 'all',
      ),
      'applicable' => 
      array (
      ),
      'template_theme' => 'embedded',
    ),
    'audit' => 
    array (
      'type' => 'audit',
      'query_type' => 
      array (
        0 => 'all',
      ),
      'applicable' => 
      array (
      ),
      'template_theme' => 'embedded',
    ),
    'string' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'string',
        ),
        1 => 
        array (
          'type' => 'text',
        ),
        2 => 
        array (
          'type' => 'ref-one',
        ),
        3 => 
        array (
          'type' => 'currency',
        ),
      ),
      'type' => 'string',
      'query_type' => 
      array (
        0 => 'all',
      ),
      'template_theme' => 'embedded',
    ),
    'numberDecimal' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'decimal',
        ),
        1 => 
        array (
          'type' => 'float',
        ),
        2 => 
        array (
          'type' => 'money',
        ),
      ),
      'type' => 'number',
      'options' => 
      array (
        'data_type' => 'data_decimal',
      ),
      'query_type' => 
      array (
        0 => 'all',
      ),
      'template_theme' => 'embedded',
    ),
    'number' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'integer',
        ),
        1 => 
        array (
          'type' => 'smallint',
        ),
        2 => 
        array (
          'type' => 'bigint',
        ),
        3 => 
        array (
          'type' => 'money_value',
        ),
      ),
      'type' => 'number',
      'options' => 
      array (
        'data_type' => 'data_integer',
      ),
      'query_type' => 
      array (
        0 => 'all',
      ),
      'template_theme' => 'embedded',
    ),
    'date' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'date',
        ),
      ),
      'type' => 'date',
      'query_type' => 
      array (
        0 => 'all',
      ),
      'template_theme' => 'embedded',
    ),
    'datetime' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'datetime',
        ),
      ),
      'type' => 'datetime',
      'query_type' => 
      array (
        0 => 'all',
      ),
      'template_theme' => 'embedded',
    ),
    'boolean' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'boolean',
        ),
      ),
      'type' => 'boolean',
      'query_type' => 
      array (
        0 => 'all',
      ),
      'placeholder' => 'oro.query_designer.filter.boolean.select_value.label',
      'template_theme' => 'embedded',
    ),
    'percent' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'percent',
        ),
      ),
      'type' => 'percent',
      'query_type' => 
      array (
        0 => 'all',
      ),
      'template_theme' => 'embedded',
    ),
    'enum' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'enum',
        ),
      ),
      'type' => 'enum',
      'options' => 
      array (
        'null_value' => ':empty:',
        'populate_default' => true,
        'default_value' => 'Any',
        'class' => '',
      ),
      'init_module' => 'oroquerydesigner/js/enum-filter-initialized',
      'query_type' => 
      array (
        0 => 'all',
      ),
      'template_theme' => 'embedded',
    ),
    'multiEnum' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'multiEnum',
        ),
      ),
      'type' => 'multi_enum',
      'options' => 
      array (
        'null_value' => ':empty:',
        'populate_default' => true,
        'default_value' => 'Any',
        'class' => '',
      ),
      'init_module' => 'oroquerydesigner/js/enum-filter-initialized',
      'query_type' => 
      array (
        0 => 'all',
      ),
      'template_theme' => 'embedded',
    ),
    'dictionary' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'dictionary',
        ),
      ),
      'type' => 'dictionary',
      'options' => 
      array (
        'null_value' => ':empty:',
        'populate_default' => true,
        'default_value' => 'Any',
        'class' => '',
      ),
      'init_module' => 'oroquerydesigner/js/dictionary-filter-initialized',
      'query_type' => 
      array (
        0 => 'all',
      ),
      'template_theme' => 'embedded',
    ),
    'segment' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'entity',
        ),
      ),
      'type' => 'segment',
      'query_type' => 
      array (
        0 => 'segment',
        1 => 'report',
      ),
      'template_theme' => 'embedded',
    ),
    'tag' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'tag',
        ),
      ),
      'type' => 'tags-report',
      'options' => 
      array (
        'null_value' => ':empty:',
        'populate_default' => true,
        'default_value' => 'Any',
        'class' => '',
      ),
      'init_module' => 'orotag/js/tags-report-filter-initialized',
      'query_type' => 
      array (
        0 => 'report',
        1 => 'segment',
      ),
      'template_theme' => 'embedded',
    ),
  ),
  'grouping' => 
  array (
    'exclude' => 
    array (
      0 => 
      array (
        'type' => 'array',
      ),
      1 => 
      array (
        'type' => 'json_array',
      ),
      2 => 
      array (
        'type' => 'simple_array',
      ),
      3 => 
      array (
        'type' => 'object',
      ),
      4 => 
      array (
        'type' => 'multiEnum',
      ),
    ),
  ),
  'converters' => 
  array (
    'date' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'date',
        ),
        1 => 
        array (
          'type' => 'datetime',
        ),
      ),
      'functions' => 
      array (
        0 => 
        array (
          'name' => 'Year',
          'expr' => 'YEAR($column)',
          'return_type' => 'number',
          'name_label' => 'oro.query_designer.converters.date.Year.name',
          'hint_label' => 'oro.query_designer.converters.date.Year.hint',
        ),
        1 => 
        array (
          'name' => 'Month',
          'expr' => 'MONTH($column)',
          'return_type' => 'number',
          'name_label' => 'oro.query_designer.converters.date.Month.name',
          'hint_label' => 'oro.query_designer.converters.date.Month.hint',
        ),
        2 => 
        array (
          'name' => 'Day',
          'expr' => 'DAY($column)',
          'return_type' => 'number',
          'name_label' => 'oro.query_designer.converters.date.Day.name',
          'hint_label' => 'oro.query_designer.converters.date.Day.hint',
        ),
        3 => 
        array (
          'name' => 'Day of year',
          'expr' => 'DAYOFYEAR($column)',
          'return_type' => 'number',
          'name_label' => 'oro.query_designer.converters.date.Day of year.name',
          'hint_label' => 'oro.query_designer.converters.date.Day of year.hint',
        ),
      ),
      'query_type' => 
      array (
        0 => 'report',
      ),
    ),
  ),
  'aggregates' => 
  array (
    'identifier' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'identifier' => true,
        ),
      ),
      'functions' => 
      array (
        0 => 
        array (
          'name' => 'Count',
          'expr' => 'COUNT($column)',
          'return_type' => 'integer',
          'name_label' => 'oro.query_designer.aggregates.identifier.Count.name',
          'hint_label' => 'oro.query_designer.aggregates.identifier.Count.hint',
        ),
      ),
      'query_type' => 
      array (
        0 => 'report',
      ),
    ),
    'string' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'string',
        ),
        1 => 
        array (
          'type' => 'text',
        ),
        2 => 
        array (
          'type' => 'currency',
        ),
      ),
      'functions' => 
      array (
        0 => 
        array (
          'name' => 'Count',
          'expr' => 'COUNT($column)',
          'return_type' => 'integer',
          'name_label' => 'oro.query_designer.aggregates.string.Count.name',
          'hint_label' => 'oro.query_designer.aggregates.string.Count.hint',
        ),
      ),
      'query_type' => 
      array (
        0 => 'report',
      ),
    ),
    'number' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'integer',
        ),
        1 => 
        array (
          'type' => 'smallint',
        ),
        2 => 
        array (
          'type' => 'bigint',
        ),
        3 => 
        array (
          'type' => 'decimal',
        ),
        4 => 
        array (
          'type' => 'float',
        ),
        5 => 
        array (
          'type' => 'money',
        ),
        6 => 
        array (
          'type' => 'percent',
        ),
        7 => 
        array (
          'type' => 'money_value',
        ),
      ),
      'functions' => 
      array (
        0 => 
        array (
          'name' => 'Count',
          'expr' => 'COUNT($column)',
          'return_type' => 'integer',
          'name_label' => 'oro.query_designer.aggregates.number.Count.name',
          'hint_label' => 'oro.query_designer.aggregates.number.Count.hint',
        ),
        1 => 
        array (
          'name' => 'Sum',
          'expr' => 'SUM($column)',
          'name_label' => 'oro.query_designer.aggregates.number.Sum.name',
          'hint_label' => 'oro.query_designer.aggregates.number.Sum.hint',
        ),
        2 => 
        array (
          'name' => 'Avg',
          'expr' => 'AVG($column)',
          'name_label' => 'oro.query_designer.aggregates.number.Avg.name',
          'hint_label' => 'oro.query_designer.aggregates.number.Avg.hint',
        ),
        3 => 
        array (
          'name' => 'Min',
          'expr' => 'MIN($column)',
          'name_label' => 'oro.query_designer.aggregates.number.Min.name',
          'hint_label' => 'oro.query_designer.aggregates.number.Min.hint',
        ),
        4 => 
        array (
          'name' => 'Max',
          'expr' => 'MAX($column)',
          'name_label' => 'oro.query_designer.aggregates.number.Max.name',
          'hint_label' => 'oro.query_designer.aggregates.number.Max.hint',
        ),
      ),
      'query_type' => 
      array (
        0 => 'report',
      ),
    ),
    'money' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'money',
        ),
      ),
      'functions' => 
      array (
        0 => 
        array (
          'name' => 'Avg',
          'expr' => 'CAST ((AVG($column)) AS DECIMAL(19, 4))',
          'name_label' => 'oro.query_designer.aggregates.money.Avg.name',
          'hint_label' => 'oro.query_designer.aggregates.money.Avg.hint',
        ),
      ),
      'query_type' => 
      array (
        0 => 'report',
      ),
    ),
    'date' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'type' => 'date',
        ),
        1 => 
        array (
          'type' => 'datetime',
        ),
      ),
      'functions' => 
      array (
        0 => 
        array (
          'name' => 'Count',
          'expr' => 'COUNT($column)',
          'return_type' => 'integer',
          'name_label' => 'oro.query_designer.aggregates.date.Count.name',
          'hint_label' => 'oro.query_designer.aggregates.date.Count.hint',
        ),
        1 => 
        array (
          'name' => 'Min',
          'expr' => 'MIN($column)',
          'name_label' => 'oro.query_designer.aggregates.date.Min.name',
          'hint_label' => 'oro.query_designer.aggregates.date.Min.hint',
        ),
        2 => 
        array (
          'name' => 'Max',
          'expr' => 'MAX($column)',
          'name_label' => 'oro.query_designer.aggregates.date.Max.name',
          'hint_label' => 'oro.query_designer.aggregates.date.Max.hint',
        ),
      ),
      'query_type' => 
      array (
        0 => 'report',
      ),
    ),
    'marketing_activity_type' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'entity' => 'Oro\\Bundle\\MarketingActivityBundle\\Entity\\MarketingActivity',
          'field' => 'type',
        ),
      ),
      'functions' => 
      array (
        0 => 
        array (
          'name' => 'SendCount',
          'return_type' => 'integer',
          'expr' => '@Oro\\Bundle\\MarketingActivityBundle\\QueryDesigner\\SendTypeCountFunction',
          'name_label' => 'oro.query_designer.aggregates.marketing_activity_type.SendCount.name',
          'hint_label' => 'oro.query_designer.aggregates.marketing_activity_type.SendCount.hint',
        ),
        1 => 
        array (
          'name' => 'OpenCount',
          'return_type' => 'integer',
          'expr' => '@Oro\\Bundle\\MarketingActivityBundle\\QueryDesigner\\OpenTypeCountFunction',
          'name_label' => 'oro.query_designer.aggregates.marketing_activity_type.OpenCount.name',
          'hint_label' => 'oro.query_designer.aggregates.marketing_activity_type.OpenCount.hint',
        ),
        2 => 
        array (
          'name' => 'ClickCount',
          'return_type' => 'integer',
          'expr' => '@Oro\\Bundle\\MarketingActivityBundle\\QueryDesigner\\ClickTypeCountFunction',
          'name_label' => 'oro.query_designer.aggregates.marketing_activity_type.ClickCount.name',
          'hint_label' => 'oro.query_designer.aggregates.marketing_activity_type.ClickCount.hint',
        ),
        3 => 
        array (
          'name' => 'SoftBounceCount',
          'return_type' => 'integer',
          'expr' => '@Oro\\Bundle\\MarketingActivityBundle\\QueryDesigner\\SoftBounceTypeCountFunction',
          'name_label' => 'oro.query_designer.aggregates.marketing_activity_type.SoftBounceCount.name',
          'hint_label' => 'oro.query_designer.aggregates.marketing_activity_type.SoftBounceCount.hint',
        ),
        4 => 
        array (
          'name' => 'HardBounceCount',
          'return_type' => 'integer',
          'expr' => '@Oro\\Bundle\\MarketingActivityBundle\\QueryDesigner\\HardBounceTypeCountFunction',
          'name_label' => 'oro.query_designer.aggregates.marketing_activity_type.HardBounceCount.name',
          'hint_label' => 'oro.query_designer.aggregates.marketing_activity_type.HardBounceCount.hint',
        ),
        5 => 
        array (
          'name' => 'UnsubscribeCount',
          'return_type' => 'integer',
          'expr' => '@Oro\\Bundle\\MarketingActivityBundle\\QueryDesigner\\UnsubscribeTypeCountFunction',
          'name_label' => 'oro.query_designer.aggregates.marketing_activity_type.UnsubscribeCount.name',
          'hint_label' => 'oro.query_designer.aggregates.marketing_activity_type.UnsubscribeCount.hint',
        ),
      ),
      'query_type' => 
      array (
        0 => 'segment',
        1 => 'report',
      ),
    ),
    'opportunity_status' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'entity' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
          'field' => 'status',
        ),
      ),
      'functions' => 
      array (
        0 => 
        array (
          'name' => 'WonCount',
          'return_type' => 'integer',
          'expr' => '@Oro\\Bundle\\SalesBundle\\QueryDesigner\\WonOpportunityStatusCountFunction',
          'name_label' => 'oro.query_designer.aggregates.opportunity_status.WonCount.name',
          'hint_label' => 'oro.query_designer.aggregates.opportunity_status.WonCount.hint',
        ),
        1 => 
        array (
          'name' => 'LostCount',
          'return_type' => 'integer',
          'expr' => '@Oro\\Bundle\\SalesBundle\\QueryDesigner\\LostOpportunityStatusCountFunction',
          'name_label' => 'oro.query_designer.aggregates.opportunity_status.LostCount.name',
          'hint_label' => 'oro.query_designer.aggregates.opportunity_status.LostCount.hint',
        ),
        2 => 
        array (
          'name' => 'InProgressCount',
          'return_type' => 'integer',
          'expr' => '@Oro\\Bundle\\SalesBundle\\QueryDesigner\\SolutionDevelopmentOpportunityStatusCountFunction',
          'name_label' => 'oro.query_designer.aggregates.opportunity_status.InProgressCount.name',
          'hint_label' => 'oro.query_designer.aggregates.opportunity_status.InProgressCount.hint',
        ),
      ),
      'query_type' => 
      array (
        0 => 'report',
      ),
    ),
    'opportunity' => 
    array (
      'applicable' => 
      array (
        0 => 
        array (
          'entity' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
          'field' => 'closeRevenueBaseCurrency',
        ),
      ),
      'functions' => 
      array (
        0 => 
        array (
          'name' => 'WonRevenueSumFunction',
          'return_type' => 'money',
          'expr' => '@Oro\\Bundle\\SalesBundle\\QueryDesigner\\WonRevenueSumFunction',
          'name_label' => 'oro.query_designer.aggregates.opportunity.WonRevenueSumFunction.name',
          'hint_label' => 'oro.query_designer.aggregates.opportunity.WonRevenueSumFunction.hint',
        ),
      ),
      'query_type' => 
      array (
        0 => 'report',
      ),
    ),
  ),
);