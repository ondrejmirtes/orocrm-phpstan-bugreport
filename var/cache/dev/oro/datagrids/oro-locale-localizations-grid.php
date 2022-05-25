<?php return array (
  'oro-locale-localizations-grid' => 
  array (
    'extends' => 'base-oro-locale-localizations-grid',
    'options' => 
    array (
      'entity_pagination' => true,
    ),
    'mass_actions' => 
    array (
      'delete' => 
      array (
        'disabled' => true,
      ),
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'pl.name as parentName',
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.locale.localization.name.label',
      ),
      'title' => 
      array (
        'label' => 'oro.locale.localization.title.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroLocale/Localization/Datagrid/title.html.twig',
      ),
      'language' => 
      array (
        'label' => 'oro.locale.localization.language.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroLocale/Localization/Datagrid/languageCode.html.twig',
      ),
      'formattingCode' => 
      array (
        'label' => 'oro.locale.localization.formatting_code.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroLocale/Localization/Datagrid/formattingCode.html.twig',
      ),
      'rtlMode' => 
      array (
        'label' => 'oro.locale.localization.rtl_mode.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroLocale/Localization/Datagrid/rtlMode.html.twig',
      ),
      'parentName' => 
      array (
        'label' => 'oro.locale.localization.parent_localization.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroLocale/Localization/Datagrid/parentName.html.twig',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
      'updatedAt' => 
      array (
        'label' => 'oro.ui.updated_at',
        'frontend_type' => 'datetime',
      ),
    ),
    'sorters' => 
    array (
      'default' => 
      array (
        'name' => 'ASC',
        'parentName' => 'DESC',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'name',
        ),
        'title' => 
        array (
          'data_name' => 'title_localized',
        ),
        'language' => 
        array (
          'data_name' => 'languageCode',
        ),
        'formattingCode' => 
        array (
          'data_name' => 'formattingCode',
        ),
        'rtlMode' => 
        array (
          'data_name' => 'rtlMode',
        ),
        'parentName' => 
        array (
          'data_name' => 'parentName',
        ),
        'createdAt' => 
        array (
          'data_name' => 'createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'updatedAt',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'l.name',
        ),
        'title' => 
        array (
          'type' => 'string',
          'data_name' => 'title_localized',
        ),
        'language' => 
        array (
          'type' => 'choice',
          'data_name' => 'lng.id',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_locale.provider.localization_choices->getLanguageChoices',
              'translatable_options' => false,
            ),
          ),
        ),
        'formattingCode' => 
        array (
          'type' => 'choice',
          'data_name' => 'l.formattingCode',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_locale.provider.localization_choices->getFormattingChoices',
              'translatable_options' => false,
            ),
          ),
        ),
        'rtlMode' => 
        array (
          'type' => 'boolean',
          'data_name' => 'l.rtlMode',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'Yes' => 1,
                'No' => 2,
              ),
            ),
          ),
        ),
        'parentName' => 
        array (
          'type' => 'choice',
          'data_name' => 'pl.id',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_locale.provider.localization_choices->getLocalizationChoices',
              'translatable_options' => false,
            ),
          ),
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'l.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'l.updatedAt',
        ),
      ),
    ),
  ),
);