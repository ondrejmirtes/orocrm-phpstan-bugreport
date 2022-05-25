<?php return array (
  'activity-contact-days-since-last-contact-hidden-mixin' => 
  array (
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'DATE_DIFF(CURRENT_DATE(), __root_entity__.ac_last_contact_date) as daysSinceLastContact',
        ),
      ),
    ),
    'columns' => 
    array (
      'daysSinceLastContact' => 
      array (
        'label' => 'oro.activity_contact.days_since_last_contact.label',
        'frontend_type' => 'integer',
        'renderable' => false,
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'daysSinceLastContact' => 
        array (
          'data_name' => 'daysSinceLastContact',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'daysSinceLastContact' => 
        array (
          'type' => 'number-range',
          'data_name' => 'daysSinceLastContact',
          'renderable' => false,
        ),
      ),
    ),
  ),
);