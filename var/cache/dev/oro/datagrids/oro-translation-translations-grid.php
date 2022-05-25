<?php return array (
  'oro-translation-translations-grid' => 
  array (
    'acl_resource' => 'oro_translation_translation_index',
    'extended_entity_name' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Translation',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'translation.id',
          1 => 'language.code',
          2 => 'translation.value as value',
          3 => 'translationKey.key as key',
          4 => 'translationKey.domain as domain',
          5 => '(CASE WHEN translation.value IS NULL THEN false ELSE true END) as status',
          6 => 'translationEn.value as englishValue',
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
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'Oro\\Bundle\\TranslationBundle\\Entity\\TranslationKey',
              'alias' => 'translationKey',
              'conditionType' => 'WITH',
              'condition' => '1 = 1',
            ),
          ),
          'left' => 
          array (
            0 => 
            array (
              'join' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Translation',
              'alias' => 'translation',
              'conditionType' => 'WITH',
              'condition' => 'translation.language = language AND translation.translationKey = translationKey',
            ),
            1 => 
            array (
              'join' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Translation',
              'alias' => 'translationEn',
              'conditionType' => 'WITH',
              'condition' => 'translationEn.translationKey = translationKey AND translationEn.language = :en_language',
            ),
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 
        array (
          'name' => 'en_language',
        ),
      ),
    ),
    'inline_editing' => 
    array (
      'enable' => true,
      'behaviour' => 'enable_selected',
      'entity_name' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Translation',
      'acl_resource' => 'oro_translation_language_translate',
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.translation.translation.id.label',
        'renderable' => false,
      ),
      'language' => 
      array (
        'label' => 'oro.translation.translation.language.label',
      ),
      'status' => 
      array (
        'label' => 'oro.translation.translation.status.label',
        'frontend_type' => 'boolean',
      ),
      'englishTranslation' => 
      array (
        'label' => 'oro.translation.translation.english_translation.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroTranslation/Translation/Datagrid/englishTranslation.html.twig',
      ),
      'value' => 
      array (
        'label' => 'oro.translation.translation.value.label',
        'inline_editing' => 
        array (
          'enable' => true,
          'editor' => 
          array (
            'view' => 'orotranslation/js/app/views/editor/text-editor-view',
          ),
          'save_api_accessor' => 
          array (
            'route' => 'oro_api_patch_translation',
            'query_parameter_names' => 
            array (
              0 => 'key',
              1 => 'locale',
              2 => 'domain',
            ),
          ),
        ),
      ),
      'current' => 
      array (
        'label' => 'oro.translation.translation.current.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroTranslation/Translation/Datagrid/current.html.twig',
      ),
      'key' => 
      array (
        'label' => 'oro.translation.translation_key.key.label',
      ),
      'domain' => 
      array (
        'label' => 'oro.translation.translation_key.domain.label',
      ),
      'context' => 
      array (
        'label' => 'oro.translation.translation.context.label',
      ),
    ),
    'sorters' => 
    array (
      'multiple_sorting' => true,
      'columns' => 
      array (
        'language' => 
        array (
          'data_name' => 'language.id',
        ),
        'status' => 
        array (
          'data_name' => 'status',
        ),
        'englishTranslation' => 
        array (
          'data_name' => 'englishValue',
        ),
        'value' => 
        array (
          'data_name' => 'value',
        ),
        'key' => 
        array (
          'data_name' => 'key',
        ),
        'domain' => 
        array (
          'data_name' => 'domain',
        ),
      ),
      'default' => 
      array (
        'language' => 'ASC',
      ),
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
        'status' => 
        array (
          'type' => 'boolean',
          'data_name' => 'status',
        ),
        'englishTranslation' => 
        array (
          'type' => 'string',
          'data_name' => 'englishValue',
        ),
        'value_trans' => 
        array (
          'label' => 'oro.translation.translation.value.label',
          'type' => 'string',
          'data_name' => 'value',
        ),
        'key' => 
        array (
          'type' => 'string',
          'data_name' => 'key',
        ),
        'domain' => 
        array (
          'type' => 'choice',
          'data_name' => 'domain',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_translation.provider.translation_domain->getAvailableDomains',
              'multiple' => true,
            ),
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'context' => 
      array (
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_translation.provider.translation_context',
          1 => 'resolveContext',
        ),
        'params' => 
        array (
          0 => 'key',
        ),
      ),
      'locale' => 
      array (
        'data_name' => 'code',
      ),
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