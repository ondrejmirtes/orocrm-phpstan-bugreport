<?php return array (
  'activity-contact-last-contacted-date-data-mixin' => 
  array (
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => '__root_entity__.ac_last_contact_date as lastContactedDate',
        ),
      ),
    ),
    'columns' => 
    array (
      'lastContactedDate' => 
      array (
        'label' => 'oro.activity_contact.ac_last_contact_date.label',
        'frontend_type' => 'datetime',
      ),
    ),
  ),
);