<?php return array (
  'oro-locale-localizations-children-grid' => 
  array (
    'extends' => 'base-oro-locale-localizations-grid',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => 'l.parentLocalization = :localization_id',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'localization_id',
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
      ),
    ),
  ),
);