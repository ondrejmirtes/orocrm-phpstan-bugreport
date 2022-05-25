<?php return array (
  'user-login-attempts-grid' => 
  array (
    'acl_resource' => 'oro_view_user_login_attempt',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'partial ul.{ id }',
          1 => 'ul.id',
          2 => 'ul.attemptAt',
          3 => 'ul.success',
          4 => 'ul.source',
          5 => 'ul.username',
          6 => 'ul.ip',
          7 => 'ul.userAgent',
          8 => 'CONCAT_WS(\' \', user.firstName, user.lastName) as userInfo',
          9 => 'user',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\UserBundle\\Entity\\UserLoginAttempt',
            'alias' => 'ul',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'ul.user',
              'alias' => 'user',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.user.userloginattempt.id.label',
        'renderable' => false,
      ),
      'attemptAt' => 
      array (
        'label' => 'oro.user.userloginattempt.attempt_at.label',
        'frontend_type' => 'datetime',
      ),
      'success' => 
      array (
        'label' => 'oro.user.userloginattempt.success.label',
        'frontend_type' => 'boolean',
      ),
      'source' => 
      array (
        'label' => 'oro.user.userloginattempt.source.label',
        'frontend_type' => 'select',
        'choices' => '@oro_user.logger.user_login_attempt->getSourceChoices()',
      ),
      'username' => 
      array (
        'label' => 'oro.user.userloginattempt.username.label',
      ),
      'user' => 
      array (
        'label' => 'oro.user.userloginattempt.user.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroUser/Datagrid/Column/user.html.twig',
      ),
      'ip' => 
      array (
        'label' => 'oro.user.userloginattempt.ip.label',
      ),
      'userAgent' => 
      array (
        'label' => 'oro.user.userloginattempt.user_agent.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroUser/Datagrid/Column/userAgentColumn.html.twig',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'attemptAt' => 
        array (
          'data_name' => 'ul.attemptAt',
        ),
        'success' => 
        array (
          'data_name' => 'ul.updatedAt',
        ),
        'username' => 
        array (
          'data_name' => 'ul.username',
        ),
        'user' => 
        array (
          'data_name' => 'userInfo',
        ),
        'source' => 
        array (
          'data_name' => 'ul.source',
        ),
        'ip' => 
        array (
          'data_name' => 'ul.ip',
        ),
        'userAgent' => 
        array (
          'data_name' => 'ul.userAgent',
        ),
      ),
      'default' => 
      array (
        'attemptAt' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'type' => 'string',
          'data_name' => 'ul.id',
        ),
        'success' => 
        array (
          'data_name' => 'ul.success',
          'type' => 'boolean',
        ),
        'attemptAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'ul.createdAt',
        ),
        'username' => 
        array (
          'type' => 'string',
          'data_name' => 'ul.username',
        ),
        'source' => 
        array (
          'type' => 'choice',
          'data_name' => 'ul.source',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_user.logger.user_login_attempt->getSourceChoices()',
              'multiple' => true,
            ),
          ),
        ),
        'user' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.user.userloginattempt.user.label',
          'data_name' => 'ul.user',
          'autocomplete_alias' => 'users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'ip' => 
        array (
          'type' => 'string',
          'data_name' => 'ul.ip',
        ),
        'userAgent' => 
        array (
          'type' => 'string',
          'data_name' => 'ul.userAgent',
        ),
      ),
    ),
  ),
);