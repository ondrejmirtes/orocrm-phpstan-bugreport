<?php return array (
  'Oro\\Bundle\\OrganizationBundle\\Entity\\Organization' => 
  array (
    'alias' => 'oro_organization',
    'search_template' => '@OroOrganization/Search/organizationResult.html.twig',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'target_type' => 'integer',
        'target_fields' => 
        array (
          0 => 'oro_organization_id',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit' => 
  array (
    'alias' => 'oro_business_unit',
    'search_template' => '@OroOrganization/Search/businessUnitResult.html.twig',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'target_type' => 'integer',
        'target_fields' => 
        array (
          0 => 'id',
          1 => 'oro_business_unit_id',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\EmailBundle\\Entity\\EmailUser' => 
  array (
    'alias' => 'oro_email',
    'label' => 'Emails',
    'search_template' => '@OroEmail/Email/searchResult.html.twig',
    'route' => 
    array (
      'name' => 'oro_email_thread_view',
      'parameters' => 
      array (
        'id' => 'email.id',
      ),
    ),
    'title_fields' => 
    array (
      0 => 'email.subject',
    ),
    'fields' => 
    array (
      'email' => 
      array (
        'name' => 'email',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'subject',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'isEmailPrivate' => 
      array (
        'name' => 'isEmailPrivate',
        'target_type' => 'integer',
        'target_fields' => 
        array (
          0 => 'email_user_private',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\UserBundle\\Entity\\User' => 
  array (
    'alias' => 'oro_user',
    'title_fields' => 
    array (
      0 => 'username',
    ),
    'route' => 
    array (
      'name' => 'oro_user_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroUser/Search/result.html.twig',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'target_type' => 'integer',
        'target_fields' => 
        array (
          0 => 'oro_user_id',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'username' => 
      array (
        'name' => 'username',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'username',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'email' => 
      array (
        'name' => 'email',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'email',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'phone',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'namePrefix' => 
      array (
        'name' => 'namePrefix',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'namePrefix',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'firstName' => 
      array (
        'name' => 'firstName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'firstName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'middleName' => 
      array (
        'name' => 'middleName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'middleName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'lastName' => 
      array (
        'name' => 'lastName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'lastName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'nameSuffix' => 
      array (
        'name' => 'nameSuffix',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'nameSuffix',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'birthday' => 
      array (
        'name' => 'birthday',
        'target_type' => 'datetime',
        'target_fields' => 
        array (
          0 => 'birthday',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'organizations' => 
      array (
        'name' => 'organizations',
        'relation_type' => 'many-to-many',
        'relation_fields' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'target_type' => 'integer',
            'target_fields' => 
            array (
              0 => 'assigned_organization_id',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'emails' => 
      array (
        'name' => 'emails',
        'relation_type' => 'one-to-many',
        'relation_fields' => 
        array (
          'email' => 
          array (
            'name' => 'email',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'email',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\UserBundle\\Entity\\Role' => 
  array (
    'alias' => 'oro_access_role',
    'title_fields' => 
    array (
      0 => 'label',
    ),
    'search_template' => '@OroUser/Role/Search/result.html.twig',
    'route' => 
    array (
      'name' => 'oro_user_role_index',
      'parameters' => 
      array (
      ),
    ),
    'fields' => 
    array (
      'label' => 
      array (
        'name' => 'label',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'label',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\LocaleBundle\\Entity\\Localization' => 
  array (
    'alias' => 'oro_localization',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'route' => 
    array (
      'name' => 'oro_locale_localization_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroLocale/Localization/searchResult.html.twig',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'target_type' => 'integer',
        'target_fields' => 
        array (
          0 => 'id',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\ReportBundle\\Entity\\Report' => 
  array (
    'alias' => 'oro_report',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'route' => 
    array (
      'name' => 'oro_report_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroReport/Search/result.html.twig',
    'fields' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'description' => 
      array (
        'name' => 'description',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'description',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\TagBundle\\Entity\\Tag' => 
  array (
    'alias' => 'oro_tag',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'search_template' => '@OroTag/Search/result.html.twig',
    'route' => 
    array (
      'name' => 'oro_tag_search',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'fields' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\TagBundle\\Entity\\Taxonomy' => 
  array (
    'alias' => 'oro_taxonomy',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'search_template' => '@OroTag/Search/result.html.twig',
    'route' => 
    array (
      'name' => 'oro_taxonomy_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'fields' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent' => 
  array (
    'alias' => 'oro_clendar_event',
    'title_fields' => 
    array (
      0 => 'title',
    ),
    'route' => 
    array (
      'name' => 'oro_calendar_event_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroCalendar/Search/result.html.twig',
    'fields' => 
    array (
      'title' => 
      array (
        'name' => 'title',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'title',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'description' => 
      array (
        'name' => 'description',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'description',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'start' => 
      array (
        'name' => 'start',
        'target_type' => 'datetime',
        'target_fields' => 
        array (
          0 => 'start',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'end' => 
      array (
        'name' => 'end',
        'target_type' => 'datetime',
        'target_fields' => 
        array (
          0 => 'end',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\ContactBundle\\Entity\\Contact' => 
  array (
    'alias' => 'oro_contact',
    'label' => 'oro.contact.entity_plural_label',
    'title_fields' => 
    array (
      0 => 'namePrefix',
      1 => 'firstName',
      2 => 'lastName',
    ),
    'route' => 
    array (
      'name' => 'oro_contact_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroContact/Contact/searchResult.html.twig',
    'fields' => 
    array (
      'namePrefix' => 
      array (
        'name' => 'namePrefix',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'namePrefix',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'firstName' => 
      array (
        'name' => 'firstName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'firstName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'middleName' => 
      array (
        'name' => 'middleName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'middleName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'lastName' => 
      array (
        'name' => 'lastName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'lastName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'nameSuffix' => 
      array (
        'name' => 'nameSuffix',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'nameSuffix',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'description' => 
      array (
        'name' => 'description',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'description',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'primaryEmail' => 
      array (
        'name' => 'primaryEmail',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'primaryEmail',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'primaryPhone' => 
      array (
        'name' => 'primaryPhone',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'primaryPhone',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'fax' => 
      array (
        'name' => 'fax',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'fax',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'skype' => 
      array (
        'name' => 'skype',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'skype',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'jobTitle' => 
      array (
        'name' => 'jobTitle',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'jobTitle',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'twitter' => 
      array (
        'name' => 'twitter',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'twitter',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'facebook' => 
      array (
        'name' => 'facebook',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'facebook',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'linkedIn' => 
      array (
        'name' => 'linkedIn',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'linkedIn',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'googlePlus' => 
      array (
        'name' => 'googlePlus',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'googlePlus',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'phones' => 
      array (
        'name' => 'phones',
        'relation_type' => 'one-to-many',
        'relation_fields' => 
        array (
          'phone' => 
          array (
            'name' => 'phone',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'contactPhones',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'emails' => 
      array (
        'name' => 'emails',
        'relation_type' => 'one-to-many',
        'relation_fields' => 
        array (
          'email' => 
          array (
            'name' => 'email',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'email',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
    ),
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\MarketingListBundle\\Entity\\MarketingList' => 
  array (
    'alias' => 'oro_marketing_list',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'label' => 'oro.marketinglist.entity_plural_label',
    'route' => 
    array (
      'name' => 'oro_marketing_list_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroMarketingList/MarketingList/searchResult.html.twig',
    'fields' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'description' => 
      array (
        'name' => 'description',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'description',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\AccountBundle\\Entity\\Account' => 
  array (
    'alias' => 'oro_account',
    'label' => 'oro.account.entity_plural_label',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'route' => 
    array (
      'name' => 'oro_account_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroAccount/Account/searchResult.html.twig',
    'fields' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'defaultContact' => 
      array (
        'name' => 'defaultContact',
        'relation_type' => 'one-to-one',
        'relation_fields' => 
        array (
          'namePrefix' => 
          array (
            'name' => 'namePrefix',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'namePrefix',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'firstName' => 
          array (
            'name' => 'firstName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'firstName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'middleName' => 
          array (
            'name' => 'middleName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'middleName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'lastName' => 
          array (
            'name' => 'lastName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'lastName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'nameSuffix' => 
          array (
            'name' => 'nameSuffix',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'nameSuffix',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'primaryEmail' => 
          array (
            'name' => 'primaryEmail',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'primaryEmail',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'primaryPhone' => 
          array (
            'name' => 'primaryPhone',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'primaryPhone',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'phones' => 
          array (
            'name' => 'phones',
            'relation_type' => 'one-to-many',
            'relation_fields' => 
            array (
              'phone' => 
              array (
                'name' => 'phone',
                'target_type' => 'text',
                'target_fields' => 
                array (
                  0 => 'contactPhones',
                ),
                'relation_fields' => 
                array (
                ),
              ),
            ),
            'target_fields' => 
            array (
            ),
          ),
          'emails' => 
          array (
            'name' => 'emails',
            'relation_type' => 'one-to-many',
            'relation_fields' => 
            array (
              'email' => 
              array (
                'name' => 'email',
                'target_type' => 'text',
                'target_fields' => 
                array (
                  0 => 'email',
                ),
                'relation_fields' => 
                array (
                ),
              ),
            ),
            'target_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'contacts' => 
      array (
        'name' => 'contacts',
        'relation_type' => 'many-to-many',
        'relation_fields' => 
        array (
          'namePrefix' => 
          array (
            'name' => 'namePrefix',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'namePrefix',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'firstName' => 
          array (
            'name' => 'firstName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'firstName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'middleName' => 
          array (
            'name' => 'middleName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'middleName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'lastName' => 
          array (
            'name' => 'lastName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'lastName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'nameSuffix' => 
          array (
            'name' => 'nameSuffix',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'nameSuffix',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'primaryEmail' => 
          array (
            'name' => 'primaryEmail',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'primaryEmail',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'primaryPhone' => 
          array (
            'name' => 'primaryPhone',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'primaryPhone',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'phones' => 
          array (
            'name' => 'phones',
            'relation_type' => 'one-to-many',
            'relation_fields' => 
            array (
              'phone' => 
              array (
                'name' => 'phone',
                'target_type' => 'text',
                'target_fields' => 
                array (
                  0 => 'contactPhones',
                ),
                'relation_fields' => 
                array (
                ),
              ),
            ),
            'target_fields' => 
            array (
            ),
          ),
          'emails' => 
          array (
            'name' => 'emails',
            'relation_type' => 'one-to-many',
            'relation_fields' => 
            array (
              'email' => 
              array (
                'name' => 'email',
                'target_type' => 'text',
                'target_fields' => 
                array (
                  0 => 'email',
                ),
                'relation_fields' => 
                array (
                ),
              ),
            ),
            'target_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
    ),
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\CallBundle\\Entity\\Call' => 
  array (
    'alias' => 'oro_call',
    'label' => 'oro.call.entity_plural_label',
    'title_fields' => 
    array (
      0 => 'subject',
      1 => 'phoneNumber',
    ),
    'route' => 
    array (
      'name' => 'oro_call_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroCall/Call/searchResult.html.twig',
    'fields' => 
    array (
      'subject' => 
      array (
        'name' => 'subject',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'subject',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'phoneNumber' => 
      array (
        'name' => 'phoneNumber',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'phoneNumber',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'notes' => 
      array (
        'name' => 'notes',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'notes',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'direction' => 
      array (
        'name' => 'direction',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'directionName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'label' => 
          array (
            'name' => 'label',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'directionLabel',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
    ),
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\CampaignBundle\\Entity\\Campaign' => 
  array (
    'alias' => 'oro_campaign',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'label' => 'oro.campaign.entity_plural_label',
    'route' => 
    array (
      'name' => 'oro_campaign_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroCampaign/Campaign/searchResult.html.twig',
    'fields' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'description' => 
      array (
        'name' => 'description',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'description',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'code' => 
      array (
        'name' => 'code',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'code',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign' => 
  array (
    'alias' => 'oro_email_campaign',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'label' => 'oro.email_campaign.entity_plural_label',
    'route' => 
    array (
      'name' => 'oro_email_campaign_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroCampaign/EmailCampaign/searchResult.html.twig',
    'fields' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'description' => 
      array (
        'name' => 'description',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'description',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'campaign' => 
      array (
        'name' => 'campaign',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'name',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'marketingList' => 
      array (
        'name' => 'marketingList',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'name',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
    ),
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\TaskBundle\\Entity\\Task' => 
  array (
    'alias' => 'oro_task',
    'title_fields' => 
    array (
      0 => 'subject',
    ),
    'route' => 
    array (
      'name' => 'oro_task_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroTask/Search/result.html.twig',
    'fields' => 
    array (
      'subject' => 
      array (
        'name' => 'subject',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'subject',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'description' => 
      array (
        'name' => 'description',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'description',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\SalesBundle\\Entity\\Lead' => 
  array (
    'alias' => 'oro_sales_lead',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'route' => 
    array (
      'name' => 'oro_sales_lead_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroSales/Lead/searchResult.html.twig',
    'fields' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'namePrefix' => 
      array (
        'name' => 'namePrefix',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'namePrefix',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'firstName' => 
      array (
        'name' => 'firstName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'firstName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'middleName' => 
      array (
        'name' => 'middleName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'middleName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'lastName' => 
      array (
        'name' => 'lastName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'lastName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'nameSuffix' => 
      array (
        'name' => 'nameSuffix',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'nameSuffix',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'companyName' => 
      array (
        'name' => 'companyName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'companyName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'emails' => 
      array (
        'name' => 'emails',
        'relation_type' => 'one-to-many',
        'relation_fields' => 
        array (
          'email' => 
          array (
            'name' => 'email',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'email',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'dataChannel' => 
      array (
        'name' => 'dataChannel',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'target_type' => 'integer',
            'target_fields' => 
            array (
              0 => 'dataChannelId',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'phones' => 
      array (
        'name' => 'phones',
        'relation_type' => 'one-to-many',
        'relation_fields' => 
        array (
          'phone' => 
          array (
            'name' => 'phone',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'phone',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity' => 
  array (
    'alias' => 'oro_sales_opportunity',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'route' => 
    array (
      'name' => 'oro_sales_opportunity_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroSales/Opportunity/searchResult.html.twig',
    'fields' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'customer' => 
      array (
        'name' => 'customer',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'accountName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'contact' => 
      array (
        'name' => 'contact',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'namePrefix' => 
          array (
            'name' => 'namePrefix',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'namePrefix',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'firstName' => 
          array (
            'name' => 'firstName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'firstName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'middleName' => 
          array (
            'name' => 'middleName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'middleName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'lastName' => 
          array (
            'name' => 'lastName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'lastName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'nameSuffix' => 
          array (
            'name' => 'nameSuffix',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'nameSuffix',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'emails' => 
          array (
            'name' => 'emails',
            'relation_type' => 'one-to-many',
            'relation_fields' => 
            array (
              'email' => 
              array (
                'name' => 'email',
                'target_type' => 'text',
                'target_fields' => 
                array (
                  0 => 'email',
                ),
                'relation_fields' => 
                array (
                ),
              ),
            ),
            'target_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'dataChannel' => 
      array (
        'name' => 'dataChannel',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'target_type' => 'integer',
            'target_fields' => 
            array (
              0 => 'dataChannelId',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\SalesBundle\\Entity\\SalesFunnel' => 
  array (
    'alias' => 'oro_sales_funnel',
    'title_fields' => 
    array (
      0 => 'lead',
      1 => 'opportunity',
    ),
    'route' => 
    array (
      'name' => 'oro_sales_salesfunnel_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroSales/SalesFunnel/searchResult.html.twig',
    'fields' => 
    array (
      'lead' => 
      array (
        'name' => 'lead',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'leadName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'namePrefix' => 
          array (
            'name' => 'namePrefix',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'namePrefix',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'firstName' => 
          array (
            'name' => 'firstName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'firstName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'middleName' => 
          array (
            'name' => 'middleName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'middleName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'lastName' => 
          array (
            'name' => 'lastName',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'lastName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'nameSuffix' => 
          array (
            'name' => 'nameSuffix',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'nameSuffix',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'opportunity' => 
      array (
        'name' => 'opportunity',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'opportunityName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'dataChannel' => 
      array (
        'name' => 'dataChannel',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'target_type' => 'integer',
            'target_fields' => 
            array (
              0 => 'dataChannelId',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer' => 
  array (
    'alias' => 'oro_sales_b2bcustomer',
    'title_fields' => 
    array (
      0 => 'name',
    ),
    'route' => 
    array (
      'name' => 'oro_sales_b2bcustomer_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroSales/B2bCustomer/searchResult.html.twig',
    'fields' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'name',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'account' => 
      array (
        'name' => 'account',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'accountName',
            ),
            'relation_fields' => 
            array (
            ),
          ),
          'defaultContact' => 
          array (
            'name' => 'defaultContact',
            'relation_type' => 'one-to-one',
            'relation_fields' => 
            array (
              'emails' => 
              array (
                'name' => 'emails',
                'relation_type' => 'one-to-many',
                'relation_fields' => 
                array (
                  'email' => 
                  array (
                    'name' => 'email',
                    'target_type' => 'text',
                    'target_fields' => 
                    array (
                      0 => 'email',
                    ),
                  ),
                ),
                'target_fields' => 
                array (
                ),
              ),
            ),
            'target_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'dataChannel' => 
      array (
        'name' => 'dataChannel',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'target_type' => 'integer',
            'target_fields' => 
            array (
              0 => 'dataChannelId',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'contact' => 
      array (
        'name' => 'contact',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'emails' => 
          array (
            'name' => 'emails',
            'relation_type' => 'one-to-many',
            'relation_fields' => 
            array (
              'email' => 
              array (
                'name' => 'email',
                'target_type' => 'text',
                'target_fields' => 
                array (
                  0 => 'email',
                ),
                'relation_fields' => 
                array (
                ),
              ),
            ),
            'target_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\ContactUsBundle\\Entity\\ContactRequest' => 
  array (
    'alias' => 'oro_contactus_request',
    'title_fields' => 
    array (
      0 => 'firstName',
      1 => 'lastName',
    ),
    'route' => 
    array (
      'name' => 'oro_contactus_request_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroContactUs/Search/result.html.twig',
    'fields' => 
    array (
      'contactReason' => 
      array (
        'name' => 'contactReason',
        'relation_type' => 'many-to-one',
        'relation_fields' => 
        array (
          'defaultTitle' => 
          array (
            'name' => 'defaultTitle',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'contactReason',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
      'firstName' => 
      array (
        'name' => 'firstName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'firstName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'lastName' => 
      array (
        'name' => 'lastName',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'lastName',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'emailAddress' => 
      array (
        'name' => 'emailAddress',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'emailAddress',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'phone',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'comment' => 
      array (
        'name' => 'comment',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'comment',
        ),
        'relation_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\CaseBundle\\Entity\\CaseEntity' => 
  array (
    'alias' => 'oro_case',
    'title_fields' => 
    array (
      0 => 'subject',
    ),
    'route' => 
    array (
      'name' => 'oro_case_view',
      'parameters' => 
      array (
        'id' => 'id',
      ),
    ),
    'search_template' => '@OroCase/Case/searchResult.html.twig',
    'fields' => 
    array (
      'subject' => 
      array (
        'name' => 'subject',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'subject',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'description' => 
      array (
        'name' => 'description',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'description',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'resolution' => 
      array (
        'name' => 'resolution',
        'target_type' => 'text',
        'target_fields' => 
        array (
          0 => 'resolution',
        ),
        'relation_fields' => 
        array (
        ),
      ),
      'comments' => 
      array (
        'name' => 'comments',
        'relation_type' => 'one-to-many',
        'relation_fields' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'target_type' => 'text',
            'target_fields' => 
            array (
              0 => 'message',
            ),
            'relation_fields' => 
            array (
            ),
          ),
        ),
        'target_fields' => 
        array (
        ),
      ),
    ),
    'label' => NULL,
    'mode' => 'normal',
  ),
  'Oro\\Bundle\\CaseBundle\\Entity\\CaseMailboxProcessSettings' => 
  array (
    'alias' => 'oro_case_mailbox_process_settings',
    'search_template' => '@OroCase/CaseMailboxProcessSettings/searchResult.html.twig',
    'label' => NULL,
    'title_fields' => 
    array (
    ),
    'mode' => 'normal',
    'fields' => 
    array (
    ),
  ),
);