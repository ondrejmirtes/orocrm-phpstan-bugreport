<?php return array (
  'base-oro-locale-localizations-grid' => 
  array (
    'acl_resource' => 'oro_locale_localization_view',
    'options' => 
    array (
      'entityHint' => 'oro.locale.localization.entity_plural_label',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'l.id',
          1 => 'l.name as name',
          2 => 'lng.code AS languageCode',
          3 => 'l.formattingCode',
          4 => 'l.rtlMode',
          5 => 'l.createdAt',
          6 => 'l.updatedAt',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\LocaleBundle\\Entity\\Localization',
            'alias' => 'l',
          ),
        ),
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'l.language',
              'alias' => 'lng',
            ),
          ),
          'left' => 
          array (
            0 => 
            array (
              'join' => 'l.parentLocalization',
              'alias' => 'pl',
            ),
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'title_localized' => 
      array (
        'type' => 'localized_value',
        'data_name' => 'titles',
      ),
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_locale_localization_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'link' => 'view_link',
        'icon' => 'eye',
        'acl_resource' => 'oro_locale_localization_view',
        'rowAction' => true,
      ),
    ),
  ),
);