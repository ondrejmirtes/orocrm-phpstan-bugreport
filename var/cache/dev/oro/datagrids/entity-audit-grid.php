<?php return array (
  'entity-audit-grid' => 
  array (
    'options' => 
    array (
      'entityHint' => 'oro.entity_config.config_log.entity_plural_label',
    ),
    'acl_resource' => 'oro_entityconfig_manage',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'log',
          1 => 'CONCAT(
  CONCAT(
      CONCAT(u.firstName, \' \'),
      CONCAT(u.lastName, \' \')
  ),
  CONCAT(\' - \', u.email)
) as author
',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EntityConfigBundle\\Audit\\Entity\\ConfigLog',
            'alias' => 'log',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            'user' => 
            array (
              'join' => 'log.user',
              'alias' => 'u',
            ),
          ),
          'inner' => 
          array (
            'diffs' => 
            array (
              'join' => 'log.diffs',
              'alias' => 'diff',
              'conditionType' => 'WITH',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'author' => 
      array (
        'label' => 'oro.entity_config.config_log.user.label',
        'type' => 'field',
        'frontend_type' => 'string',
      ),
      'diffs' => 
      array (
        'label' => 'oro.entity_config.config_log.diffs.label',
        'type' => 'twig',
        'template' => '@OroEntityConfig/Audit/data.html.twig',
        'frontend_type' => 'html',
        'context' => 
        array (
          'config_manager' => '@oro_entity_config.config_manager',
        ),
      ),
      'loggedAt' => 
      array (
        'label' => 'oro.entity_config.config_log.logged_at.label',
        'type' => 'field',
        'frontend_type' => 'datetime',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'author' => 
        array (
          'data_name' => 'author',
        ),
        'loggedAt' => 
        array (
          'data_name' => 'log.loggedAt',
        ),
      ),
      'default' => 
      array (
        'loggedAt' => 'DESC',
      ),
    ),
  ),
);