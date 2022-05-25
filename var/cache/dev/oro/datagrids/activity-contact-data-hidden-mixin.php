<?php return array (
  'activity-contact-data-hidden-mixin' => 
  array (
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => '__root_entity__.ac_contact_count as timesContacted',
          1 => '__root_entity__.ac_contact_count_in as timesContactedIn',
          2 => '__root_entity__.ac_contact_count_out as timesContactedOut',
          3 => '__root_entity__.ac_last_contact_date as lastContactedDate',
          4 => '__root_entity__.ac_last_contact_date_in as lastContactedDateIn',
          5 => '__root_entity__.ac_last_contact_date_out as lastContactedDateOut',
        ),
      ),
    ),
    'columns' => 
    array (
      'timesContacted' => 
      array (
        'label' => 'oro.activity_contact.ac_contact_count.label',
        'frontend_type' => 'integer',
        'renderable' => false,
      ),
      'timesContactedIn' => 
      array (
        'label' => 'oro.activity_contact.ac_contact_count_in.label',
        'frontend_type' => 'integer',
        'renderable' => false,
      ),
      'timesContactedOut' => 
      array (
        'label' => 'oro.activity_contact.ac_contact_count_out.label',
        'frontend_type' => 'integer',
        'renderable' => false,
      ),
      'lastContactedDate' => 
      array (
        'label' => 'oro.activity_contact.ac_last_contact_date.label',
        'frontend_type' => 'datetime',
        'renderable' => false,
      ),
      'lastContactedDateIn' => 
      array (
        'label' => 'oro.activity_contact.ac_last_contact_date_in.label',
        'frontend_type' => 'datetime',
        'renderable' => false,
      ),
      'lastContactedDateOut' => 
      array (
        'label' => 'oro.activity_contact.ac_last_contact_date_out.label',
        'frontend_type' => 'datetime',
        'renderable' => false,
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'timesContacted' => 
        array (
          'data_name' => 'timesContacted',
        ),
        'timesContactedIn' => 
        array (
          'data_name' => 'timesContactedIn',
        ),
        'timesContactedOut' => 
        array (
          'data_name' => 'timesContactedOut',
        ),
        'lastContactedDate' => 
        array (
          'data_name' => 'lastContactedDate',
        ),
        'lastContactedDateIn' => 
        array (
          'data_name' => 'lastContactedDateIn',
        ),
        'lastContactedDateOut' => 
        array (
          'data_name' => 'lastContactedDateOut',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'timesContacted' => 
        array (
          'type' => 'number-range',
          'data_name' => 'timesContacted',
          'renderable' => false,
        ),
        'timesContactedIn' => 
        array (
          'type' => 'number-range',
          'data_name' => 'timesContactedIn',
          'renderable' => false,
        ),
        'timesContactedOut' => 
        array (
          'type' => 'number-range',
          'data_name' => 'timesContactedOut',
          'renderable' => false,
        ),
        'lastContactedDate' => 
        array (
          'type' => 'datetime',
          'data_name' => 'lastContactedDate',
          'renderable' => false,
        ),
        'lastContactedDateIn' => 
        array (
          'type' => 'datetime',
          'data_name' => 'lastContactedDateIn',
          'renderable' => false,
        ),
        'lastContactedDateOut' => 
        array (
          'type' => 'datetime',
          'data_name' => 'lastContactedDateOut',
          'renderable' => false,
        ),
      ),
    ),
  ),
);