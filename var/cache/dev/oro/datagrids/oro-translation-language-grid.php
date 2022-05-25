<?php return array (
  'oro-translation-language-grid' => 
  array (
    'acl_resource' => 'oro_translation_language_index',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'language.id',
          1 => 'language.code',
          2 => 'language.enabled',
          3 => 'language.createdAt',
          4 => 'language.updatedAt',
          5 => 'CONCAT_WS(\' \', languageOwner.firstName, languageOwner.lastName) as ownerName',
          6 => 'languageOwner.id as owner',
          7 => 'COUNT(translation) as translationCount',
          8 => 'language.installedBuildDate',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Language',
            'alias' => 'language',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'language.owner',
              'alias' => 'languageOwner',
            ),
            1 => 
            array (
              'join' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Translation',
              'alias' => 'translation',
              'conditionType' => 'WITH',
              'condition' => 'translation.language = language',
            ),
          ),
        ),
      ),
    ),
    'inline_editing' => 
    array (
      'enable' => true,
      'behaviour' => 'enable_selected',
      'entity_name' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Language',
    ),
    'columns' => 
    array (
      'language' => 
      array (
        'label' => 'oro.translation.language.entity_label',
      ),
      'ownerName' => 
      array (
        'label' => 'oro.translation.language.owner.label',
        'frontend_type' => 'relation',
        'inline_editing' => 
        array (
          'enable' => true,
          'editor' => 
          array (
            'view' => 'oroform/js/app/views/editor/related-id-relation-editor-view',
            'view_options' => 
            array (
              'value_field_name' => 'owner',
            ),
          ),
          'autocomplete_api_accessor' => 
          array (
            'class' => 'orouser/js/tools/acl-users-search-api-accessor',
            'permission_check_entity_name' => 'Oro_Bundle_TranslationBundle_Entity_Language',
            'permission' => 'EDIT',
          ),
        ),
        'renderable' => false,
      ),
      'enabled' => 
      array (
        'label' => 'oro.translation.language.enabled.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroTranslation/Language/Datagrid/enabled.html.twig',
      ),
      'translationCompleteness' => 
      array (
        'label' => 'oro.translation.language.translation_completeness.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroTranslation/Language/Datagrid/translationCompleteness.html.twig',
      ),
      'translationStatus' => 
      array (
        'label' => 'oro.translation.language.translation_status.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroTranslation/Language/Datagrid/translationStatus.html.twig',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
        'renderable' => false,
      ),
      'updatedAt' => 
      array (
        'label' => 'oro.ui.updated_at',
        'frontend_type' => 'datetime',
        'renderable' => false,
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'enabled' => 
        array (
          'data_name' => 'language.enabled',
        ),
        'createdAt' => 
        array (
          'data_name' => 'language.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'language.updatedAt',
        ),
      ),
      'disable_default_sorting' => true,
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'language' => 
        array (
          'type' => 'language',
          'data_name' => 'language',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
            ),
          ),
        ),
        'enabled' => 
        array (
          'type' => 'choice',
          'data_name' => 'CAST(language.enabled as int)',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'oro.translation.language.status.enabled' => 1,
                'oro.translation.language.status.disabled' => 0,
              ),
            ),
          ),
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'language.createdAt',
          'renderable' => false,
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'language.updatedAt',
          'renderable' => false,
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'owner' => NULL,
      'language' => 
      array (
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_locale.formatter.language_code',
          1 => 'formatLocale',
        ),
        'params' => 
        array (
          0 => 'code',
        ),
      ),
    ),
  ),
);