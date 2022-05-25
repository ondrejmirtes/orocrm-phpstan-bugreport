<?php return array (
  'operations' => 
  array (
    'oro_cache_invalidate' => 
    array (
      'label' => 'oro.cache.invalidate.label',
      'page_reload' => false,
      'button_options' => 
      array (
        'icon' => 'fa-clock-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'frontend_options' => 
      array (
        'template' => '@OroCache/Action/invalidate.html.twig',
        'title' => 'oro.cache.invalidate.label',
        'options' => 
        array (
          'width' => 505,
          'modal' => false,
          'stateEnabled' => false,
          'incrementalPosition' => false,
          'allowMaximize' => false,
          'allowMinimize' => false,
          'maximizedHeightDecreaseBy' => 'minimize-bar',
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'attributes' => 
      array (
        'invalidateService' => 
        array (
          'label' => 'oro.cache.invalidate_service.label',
          'type' => 'string',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
        'invalidateType' => 
        array (
          'label' => 'oro.cache.invalidate.label',
          'type' => 'string',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
        'invalidateCacheAt' => 
        array (
          'label' => 'oro.cache.invalidate.invalidate_cache_at.label',
          'type' => 'object',
          'options' => 
          array (
            'class' => 'DateTime',
          ),
          'property_path' => NULL,
        ),
        'invalidateNow' => 
        array (
          'label' => 'oro.cache.invalidate.invalidate_now.label',
          'type' => 'string',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
      ),
      'form_options' => 
      array (
        'attribute_fields' => 
        array (
          'invalidateType' => 
          array (
            'form_type' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType',
            'options' => 
            array (
              'placeholder' => false,
              'choices' => 
              array (
                'oro.cache.invalidate.type.scheduled' => 'scheduled',
                'oro.cache.invalidate.type.immediate' => 'immediate',
              ),
            ),
          ),
          'invalidateCacheAt' => 
          array (
            'form_type' => 'Oro\\Bundle\\FormBundle\\Form\\Type\\OroDateTimeType',
            'options' => 
            array (
            ),
          ),
          'invalidateNow' => 
          array (
            'form_type' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType',
            'options' => 
            array (
            ),
          ),
        ),
        'attribute_default_values' => 
        array (
          'invalidateCacheAt' => '$.invalidateCacheAt',
        ),
        'validation_groups' => 
        array (
        ),
      ),
      'form_init' => 
      array (
        0 => 
        array (
          '@call_method' => 
          array (
            'object' => '$.dataStorage',
            'method' => 'set',
            'method_parameters' => 
            array (
              0 => '$.paramHandlerServiceName',
              1 => '$.invalidateService',
            ),
          ),
        ),
        1 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_cache.action.provider.invalidate_cache_time',
            'method' => 'getByDataStorage',
            'method_parameters' => 
            array (
              0 => '$.dataStorage',
            ),
            'attribute' => '$.invalidateCacheAt',
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@create_object' => 
          array (
            'class' => 'Oro\\Bundle\\CacheBundle\\Action\\DataStorage\\InvalidateCacheDataStorage',
            'attribute' => '$.dataStorage',
          ),
        ),
        1 => 
        array (
          '@assign_constant_value' => 
          array (
            'attribute' => '$.paramInvalidateTime',
            'value' => 'Oro\\Bundle\\CacheBundle\\Action\\Handler\\InvalidateCacheActionScheduledHandler::PARAM_INVALIDATE_TIME',
          ),
        ),
        2 => 
        array (
          '@assign_constant_value' => 
          array (
            'attribute' => '$.paramHandlerServiceName',
            'value' => 'Oro\\Bundle\\CacheBundle\\Action\\Handler\\InvalidateCacheActionScheduledHandler::PARAM_HANDLER_SERVICE_NAME',
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@call_method' => 
          array (
            'object' => '$.dataStorage',
            'method' => 'set',
            'method_parameters' => 
            array (
              0 => '$.paramInvalidateTime',
              1 => '$.invalidateCacheAt',
            ),
          ),
        ),
        1 => 
        array (
          '@call_method' => 
          array (
            'object' => '$.dataStorage',
            'method' => 'set',
            'method_parameters' => 
            array (
              0 => '$.paramHandlerServiceName',
              1 => '$.invalidateService',
            ),
          ),
        ),
        2 => 
        array (
          '@call_service_method' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.invalidateNow',
                1 => true,
              ),
            ),
            'parameters' => 
            array (
              'service' => '$.invalidateService',
              'method' => 'handle',
              'method_parameters' => 
              array (
                0 => '$.dataStorage',
              ),
            ),
          ),
        ),
        3 => 
        array (
          '@call_service_method' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.invalidateNow',
                1 => false,
              ),
            ),
            'parameters' => 
            array (
              'service' => 'oro_cache.action.handler.invalidate_scheduled',
              'method' => 'handle',
              'method_parameters' => 
              array (
                0 => '$.dataStorage',
              ),
            ),
          ),
        ),
        4 => 
        array (
          '@flash_message' => 
          array (
            'conditions' => 
            array (
              '@not_empty' => '$.invalidateNow',
            ),
            'message' => 'oro.cache.invalidate.flash.invalidate_success',
            'type' => 'success',
          ),
        ),
        5 => 
        array (
          '@flash_message' => 
          array (
            'conditions' => 
            array (
              '@empty' => '$.invalidateNow',
            ),
            'message' => 'oro.cache.invalidate.flash.save_success',
            'type' => 'success',
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'order' => 0,
      'enabled' => true,
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'DELETE' => 
    array (
      'label' => 'oro.action.delete',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-trash-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@or' => 
            array (
              0 => 
              array (
                '@blank' => '$.gridName',
              ),
              1 => 
              array (
                '@blank' => '$.requestRoute',
              ),
              2 => 
              array (
                '@and' => 
                array (
                  0 => 
                  array (
                    '@not_blank' => '$.routes[name]',
                  ),
                  1 => 
                  array (
                    '@eq' => 
                    array (
                      0 => '$.routes[name]',
                      1 => '$.requestRoute',
                    ),
                  ),
                ),
              ),
            ),
          ),
          2 => 
          array (
            '@or' => 
            array (
              0 => 
              array (
                '@not_blank' => '$.routes[name]',
              ),
              1 => 
              array (
                '@not_blank' => '$.gridName',
              ),
            ),
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
      ),
      'exclude_datagrids' => 
      array (
        0 => 'jobs-grid',
        1 => 'owner-users-select-grid',
        2 => 'users-grid',
        3 => 'oro-locale-localizations-grid',
        4 => 'entityconfig-grid',
        5 => 'oro-integration-grid',
        6 => 'oro-campaign-grid',
        7 => 'oro-email-campaign-grid',
      ),
      'exclude_entities' => 
      array (
        0 => 'Oro\\Bundle\\UserBundle\\Entity\\Role',
        1 => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        2 => 'Oro\\Bundle\\LocaleBundle\\Entity\\Localization',
        3 => 'Oro\\Bundle\\IntegrationBundle\\Entity\\Channel',
        4 => 'Oro\\Bundle\\WorkflowBundle\\Entity\\WorkflowDefinition',
        5 => 'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign',
        6 => 'Oro\\Bundle\\CampaignBundle\\Entity\\Campaign',
      ),
      'acl_resource' => 
      array (
        0 => 'DELETE',
        1 => '$.data',
      ),
      'order' => 520,
      'for_all_entities' => true,
      'for_all_datagrids' => true,
      'groups' => 
      array (
        0 => 'view_navButtons',
        1 => 'update_navButtons',
        2 => 'datagridRowAction',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.delete_entity',
        'options' => 
        array (
          'ariaLabel' => 'oro.action.delete_entity.aria_label',
        ),
        'confirmation' => 
        array (
          'title' => 'oro.action.delete_entity',
          'message' => 'oro.action.delete_confirm',
          'okText' => 'oro.action.button.delete',
          'component' => 'oroui/js/delete-confirmation',
          'message_parameters' => 
          array (
            'entityLabel' => '$.entityLabel',
          ),
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'DELETE',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
            ),
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.action.delete_message',
            'type' => 'success',
            'message_parameters' => 
            array (
              'entityLabel' => '$.entityLabel',
            ),
          ),
        ),
        2 => 
        array (
          '@redirect' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.gridName',
                ),
                1 => 
                array (
                  '@not_empty' => '$.routes[name]',
                ),
              ),
            ),
            'parameters' => 
            array (
              'route' => '$.routes[name]',
            ),
          ),
        ),
        3 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.routes[name]',
                ),
                1 => 
                array (
                  '@not_empty' => '$.gridName',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => '$.gridName',
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'entities' => 
      array (
      ),
      'datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'clone_role' => 
    array (
      'label' => 'oro.action.clone',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-files-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@or' => 
            array (
              0 => 
              array (
                '@not_blank' => '$.routes[name]',
              ),
              1 => 
              array (
                '@not_blank' => '$.gridName',
              ),
            ),
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
        1 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_action.helper.default_operation_request',
            'method' => 'isExecutionRouteRequest',
            'attribute' => '$.isExecutionRequest',
          ),
        ),
        2 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@not_blank' => '$.data',
                ),
                1 => 
                array (
                  '@eq' => 
                  array (
                    0 => '$.requestRoute',
                    1 => 'oro_action_widget_form',
                  ),
                ),
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@clone_object' => 
                array (
                  'target' => '$.data',
                  'attribute' => '$.clone',
                ),
              ),
            ),
          ),
        ),
        3 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@not_blank' => '$.data',
                ),
                1 => 
                array (
                  '@eq' => 
                  array (
                    0 => '$.isExecutionRequest',
                    1 => true,
                  ),
                ),
                2 => 
                array (
                  '@empty' => '$.clone',
                ),
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@clone_entity' => 
                array (
                  'target' => '$.data',
                  'attribute' => '$.clone',
                  'flush' => true,
                ),
              ),
            ),
          ),
        ),
        4 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@eq' => 
                  array (
                    0 => '$.requestRoute',
                    1 => 'oro_action_widget_form',
                  ),
                ),
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@trans' => 
                array (
                  'id' => 'oro.action.clone.label',
                  'attribute' => '$.clone.label',
                  'params' => 
                  array (
                    '{label}' => '$.clone.label',
                  ),
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'attribute' => '$.aclRoleHandler',
                  'service' => 'service_container',
                  'method' => 'get',
                  'method_parameters' => 
                  array (
                    0 => 'oro_user.form.handler.acl_role',
                  ),
                ),
              ),
              2 => 
              array (
                '@call_method' => 
                array (
                  'object' => '$.aclRoleHandler',
                  'method' => 'createForm',
                  'method_parameters' => 
                  array (
                    0 => '$.clone',
                  ),
                ),
              ),
              3 => 
              array (
                '@call_method' => 
                array (
                  'object' => '$.aclRoleHandler',
                  'method' => 'process',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                  ),
                ),
              ),
              4 => 
              array (
                '@call_method' => 
                array (
                  'attribute' => '$.formView',
                  'object' => '$.aclRoleHandler',
                  'method' => 'createView',
                ),
              ),
              5 => 
              array (
                '@call_service_method' => 
                array (
                  'attribute' => '$.privilegesConfig',
                  'service' => 'service_container',
                  'method' => 'getParameter',
                  'method_parameters' => 
                  array (
                    0 => 'oro_user.privileges',
                  ),
                ),
              ),
              6 => 
              array (
                '@call_service_method' => 
                array (
                  'attribute' => '$.categoryProvider',
                  'service' => 'service_container',
                  'method' => 'get',
                  'method_parameters' => 
                  array (
                    0 => 'oro_user.provider.role_privilege_category_provider',
                  ),
                ),
              ),
              7 => 
              array (
                '@call_method' => 
                array (
                  'attribute' => '$.tabs',
                  'object' => '$.categoryProvider',
                  'method' => 'getTabs',
                ),
              ),
              8 => 
              array (
                '@call_service_method' => 
                array (
                  'attribute' => '$.privilegeCapabilityProvider',
                  'service' => 'service_container',
                  'method' => 'get',
                  'method_parameters' => 
                  array (
                    0 => 'oro_user.provider.role_privilege_capability_provider',
                  ),
                ),
              ),
              9 => 
              array (
                '@call_method' => 
                array (
                  'attribute' => '$.capabilitySetOptions',
                  'object' => '$.privilegeCapabilityProvider',
                  'method' => 'getCapabilitySetOptions',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'order' => 4,
      'groups' => 
      array (
        0 => 'view_navButtons',
        1 => 'update_navButtons',
        2 => 'datagridRowAction',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.clone_entity',
        'show_dialog' => false,
        'template' => '@OroUser/Role/clone.html.twig',
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
      ),
      'datagrids' => 
      array (
        0 => 'roles-grid',
      ),
      'routes' => 
      array (
        0 => 'oro_user_role_index',
        1 => 'oro_user_role_update',
        2 => 'oro_user_role_view',
      ),
      'acl_resource' => 
      array (
        0 => 'CREATE',
        1 => 'entity:Oro\\Bundle\\UserBundle\\Entity\\Role',
      ),
      'attributes' => 
      array (
        'entity' => 
        array (
          'label' => ' ',
          'type' => 'entity',
          'options' => 
          array (
            'class' => 'Oro\\Bundle\\UserBundle\\Entity\\Role',
          ),
          'property_path' => NULL,
        ),
      ),
      'form_options' => 
      array (
        'attribute_fields' => 
        array (
          'entity' => 
          array (
            'form_type' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
            'options' => 
            array (
            ),
          ),
        ),
        'validation_groups' => 
        array (
        ),
        'attribute_default_values' => 
        array (
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'actions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_user_edit_role' => 
    array (
      'label' => 'oro.user.role.actions.edit',
      'routes' => 
      array (
        0 => 'oro_user_role_view',
      ),
      'acl_resource' => 
      array (
        0 => 'EDIT',
        1 => 'entity:Oro\\Bundle\\UserBundle\\Entity\\Role',
      ),
      'order' => 10,
      'groups' => 
      array (
        0 => 'view_navButtons',
      ),
      'button_options' => 
      array (
        'icon' => 'fa-pencil-square-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@redirect' => 
          array (
            'parameters' => 
            array (
              'route' => 'oro_user_role_update',
              'route_parameters' => 
              array (
                'id' => '$id',
              ),
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preactions' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'preconditions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'reset_password' => 
    array (
      'label' => 'oro.user.password.reset_password.label',
      'groups' => 
      array (
        0 => 'datagridRowAction',
      ),
      'datagrids' => 
      array (
        0 => 'users-grid',
      ),
      'routes' => 
      array (
        0 => 'oro_user_index',
        1 => 'oro_user_view',
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@or' => 
            array (
              0 => 
              array (
                '@not_blank' => '$.routes[name]',
              ),
              1 => 
              array (
                '@not_blank' => '$.gridName',
              ),
            ),
          ),
        ),
      ),
      'order' => 50,
      'acl_resource' => 
      array (
        0 => 'password_management',
      ),
      'button_options' => 
      array (
        'icon' => 'fa-unlock-alt',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'frontend_options' => 
      array (
        'confirmation' => 
        array (
          'title' => 'oro.user.reset_password.popup.title',
          'okText' => 'oro.user.reset_password.popup.label',
          'message' => 'oro.user.reset_password.popup.question',
          'message_parameters' => 
          array (
            'user' => '$.data.username',
          ),
          'component' => 'oroui/js/standart-confirmation',
        ),
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
          'type' => 'resetpassword',
          'label' => 'oro.user.password.reset_password.label',
          'icon' => 'unlock-alt',
          'route' => 'oro_user_mass_password_reset',
          'data_identifier' => 'u.id',
          'confirmation' => true,
          'defaultMessages' => 
          array (
            'confirm_title' => 'oro.user.reset_password.mass_action.title',
            'confirm_content' => 'oro.user.reset_password.mass_action.question',
            'confirm_ok' => 'oro.user.reset_password.mass_action.label',
          ),
          'acl_resource' => 'password_management',
          'frontend_options' => 
          array (
            'title' => 'oro.user.reset_password.popup.title',
            'dialogOptions' => 
            array (
              'modal' => true,
            ),
          ),
          'messages' => 
          array (
            0 => 
            array (
              'success' => 'oro.user.password.force_reset.mass_action.success',
            ),
            1 => 
            array (
              'failure' => 'oro.user.password.force_reset.mass_action.failure',
            ),
          ),
        ),
        'data' => 
        array (
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'resetPassword',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
            ),
          ),
        ),
        1 => 
        array (
          '@redirect' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.gridName',
                ),
                1 => 
                array (
                  '@not_empty' => '$.routes[name]',
                ),
              ),
            ),
            'parameters' => 
            array (
              'route' => '$.routes[name]',
            ),
          ),
        ),
        2 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.routes[name]',
                ),
                1 => 
                array (
                  '@not_empty' => '$.gridName',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => '$.gridName',
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'preactions' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'user_enable' => 
    array (
      'label' => 'oro.user.action.enable.label',
      'acl_resource' => 'oro_user_user_update',
      'routes' => 
      array (
        0 => 'oro_user_view',
        1 => 'oro_user_index',
      ),
      'datagrids' => 
      array (
        0 => 'users-grid',
      ),
      'groups' => 
      array (
        0 => 'datagridRowAction',
        1 => 'view_navButtons',
      ),
      'order' => 45,
      'button_options' => 
      array (
        'icon' => 'fa-check',
        'class' => 'btn-success icons-holder-text',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
          'type' => 'enableusers',
          'label' => 'oro.user.mass_actions.enable_users.label',
          'handler' => 'oro_datagrid.mass_action.users_enable_switch.handler.enable',
          'route_parameters' => 
          array (
          ),
          'icon' => 'check',
          'data_identifier' => 'u.id',
          'object_identifier' => 'u',
          'defaultMessages' => 
          array (
            'confirm_title' => 'oro.user.mass_actions.enable_users.confirm_title',
            'confirm_content' => 'oro.user.mass_actions.enable_users.confirm_content',
            'confirm_ok' => 'oro.user.mass_actions.enable_users.confirm_ok',
          ),
          'acl_resource' => 'oro_user_user_update',
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@equal' => 
        array (
          0 => false,
          1 => '$isEnabled',
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'enableUser',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
            ),
          ),
        ),
        1 => 
        array (
          '@redirect' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.gridName',
                ),
                1 => 
                array (
                  '@not_empty' => '$.routes[name]',
                ),
              ),
            ),
            'parameters' => 
            array (
              'route' => '$.routes[name]',
            ),
          ),
        ),
        2 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.routes[name]',
                ),
                1 => 
                array (
                  '@not_empty' => '$.gridName',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => '$.gridName',
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'preactions' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'user_disable' => 
    array (
      'label' => 'oro.user.action.disable.label',
      'acl_resource' => 'oro_user_user_update',
      'routes' => 
      array (
        0 => 'oro_user_view',
        1 => 'oro_user_index',
      ),
      'datagrids' => 
      array (
        0 => 'users-grid',
      ),
      'groups' => 
      array (
        0 => 'datagridRowAction',
        1 => 'view_navButtons',
      ),
      'order' => 45,
      'button_options' => 
      array (
        'icon' => 'fa-ban',
        'class' => 'btn-danger icons-holder-text',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
          'type' => 'disableusers',
          'label' => 'oro.user.mass_actions.disable_users.label',
          'handler' => 'oro_datagrid.mass_action.users_enable_switch.handler.disable',
          'route_parameters' => 
          array (
          ),
          'icon' => 'ban',
          'data_identifier' => 'u.id',
          'object_identifier' => 'u',
          'defaultMessages' => 
          array (
            'confirm_title' => 'oro.user.mass_actions.disable_users.confirm_title',
            'confirm_content' => 'oro.user.mass_actions.disable_users.confirm_content',
            'confirm_ok' => 'oro.user.mass_actions.disable_users.confirm_ok',
          ),
          'acl_resource' => 'oro_user_user_update',
        ),
        'data' => 
        array (
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@get_active_user' => '$.currentUser',
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@equal' => 
            array (
              0 => true,
              1 => '$isEnabled',
            ),
          ),
          1 => 
          array (
            '@not_equal' => 
            array (
              0 => '$id',
              1 => '$.currentUser.id',
            ),
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'disableUser',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
            ),
          ),
        ),
        1 => 
        array (
          '@redirect' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.gridName',
                ),
                1 => 
                array (
                  '@not_empty' => '$.routes[name]',
                ),
              ),
            ),
            'parameters' => 
            array (
              'route' => '$.routes[name]',
            ),
          ),
        ),
        2 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.routes[name]',
                ),
                1 => 
                array (
                  '@not_empty' => '$.gridName',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => '$.gridName',
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_language_add' => 
    array (
      'label' => 'oro.translation.action.add',
      'acl_resource' => 'oro_translation_language_create',
      'applications' => 
      array (
        0 => 'default',
      ),
      'routes' => 
      array (
        0 => 'oro_translation_language_index',
      ),
      'button_options' => 
      array (
        'icon' => 'fa-plus',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
          'width' => 375,
          'height' => 150,
          'minHeight' => 150,
          'okText' => 'oro.translation.action.add',
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'attributes' => 
      array (
        'language_code' => 
        array (
          'label' => 'oro.translation.language.entity_label',
          'type' => 'string',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
      ),
      'form_options' => 
      array (
        'attribute_fields' => 
        array (
          'language_code' => 
          array (
            'form_type' => 'Oro\\Bundle\\TranslationBundle\\Form\\Type\\AddLanguageType',
            'options' => 
            array (
              'required' => true,
              'constraints' => 
              array (
                0 => 
                array (
                  'NotBlank' => NULL,
                ),
              ),
            ),
          ),
        ),
        'validation_groups' => 
        array (
        ),
        'attribute_default_values' => 
        array (
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@create_entity' => 
          array (
            'class' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Language',
            'attribute' => '$.language',
            'data' => 
            array (
              'code' => '$.language_code',
            ),
            'flush' => true,
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.translation.language.message.added',
            'type' => 'success',
          ),
        ),
        2 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'oro_translation_language_update_cache_message',
          ),
        ),
        3 => 
        array (
          '@refresh_grid' => 'oro-translation-language-grid',
        ),
      ),
      'replace' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'order' => 0,
      'enabled' => true,
      'page_reload' => true,
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preactions' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'preconditions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_language_disable' => 
    array (
      'label' => 'oro.translation.action.disable',
      'acl_resource' => 
      array (
        0 => 'EDIT',
        1 => '$.data',
      ),
      'applications' => 
      array (
        0 => 'default',
      ),
      'datagrids' => 
      array (
        0 => 'oro-translation-language-grid',
      ),
      'order' => 10,
      'button_options' => 
      array (
        'icon' => 'fa-close',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_equal' => 
            array (
              0 => '$code',
              1 => 'en',
            ),
          ),
          1 => 
          array (
            '@not' => 
            array (
              0 => 
              array (
                '@is_default_language' => '$.data',
              ),
            ),
          ),
          2 => 
          array (
            '@equal' => 
            array (
              0 => '$enabled',
              1 => true,
            ),
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'oro_translation_language_set_enabled',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
              'value' => false,
            ),
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.translation.language.message.disabled',
            'type' => 'success',
          ),
        ),
        2 => 
        array (
          '@refresh_grid' => 'oro-translation-language-grid',
        ),
      ),
      'replace' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preactions' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_language_enable' => 
    array (
      'label' => 'oro.translation.action.enable',
      'acl_resource' => 
      array (
        0 => 'EDIT',
        1 => '$.data',
      ),
      'applications' => 
      array (
        0 => 'default',
      ),
      'datagrids' => 
      array (
        0 => 'oro-translation-language-grid',
      ),
      'order' => 10,
      'button_options' => 
      array (
        'icon' => 'fa-check',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@equal' => 
        array (
          0 => '$enabled',
          1 => false,
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'oro_translation_language_set_enabled',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
              'value' => true,
            ),
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.translation.language.message.enabled',
            'type' => 'success',
          ),
        ),
        2 => 
        array (
          '@refresh_grid' => 'oro-translation-language-grid',
        ),
      ),
      'replace' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preactions' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_language_import' => 
    array (
      'label' => 'oro.translation.action.import',
      'acl_resource' => 
      array (
        0 => 'TRANSLATE',
        1 => '$.data',
      ),
      'datagrids' => 
      array (
        0 => 'oro-translation-language-grid',
      ),
      'order' => 20,
      'datagrid_options' => 
      array (
        'data' => 
        array (
          'type' => 'import',
          'entity_class' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Translation',
          'importProcessor' => 'oro_translation_translation',
          'importJob' => 'language_translations_import_from_csv',
        ),
        'mass_action' => 
        array (
        ),
      ),
      'button_options' => 
      array (
        'icon' => 'upload',
        'data' => 
        array (
          'options' => 
          array (
            'refreshPageOnSuccess' => '$.isDefaultLanguage',
            'importTitle' => '$.importTitle',
            'datagridName' => NULL,
            'routeOptions' => 
            array (
              'language_code' => '$code',
            ),
          ),
        ),
        'page_component_options' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@acl' => 'oro_importexport_import',
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@check_if_default_language' => 
          array (
            'language' => '$.data',
            'result' => '$.isDefaultLanguage',
          ),
        ),
        1 => 
        array (
          '@trans' => 
          array (
            'attribute' => '$.entityLabel',
            'id' => 'oro.translation.language.entity_label',
          ),
        ),
        2 => 
        array (
          '@trans' => 
          array (
            'attribute' => '$.importTitle',
            'id' => 'oro.importexport.import.entity',
          ),
        ),
        3 => 
        array (
          '@format_string' => 
          array (
            'attribute' => '$.importTitle',
            'string' => '$.importTitle',
            'arguments' => 
            array (
              'entityName' => '$.entityLabel',
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'form_init' => 
      array (
      ),
      'actions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_language_export' => 
    array (
      'acl_resource' => 
      array (
        0 => 'TRANSLATE',
        1 => '$.data',
      ),
      'datagrids' => 
      array (
        0 => 'oro-translation-language-grid',
      ),
      'label' => 'oro.translation.action.export',
      'order' => 30,
      'datagrid_options' => 
      array (
        'data' => 
        array (
          'type' => 'export',
          'entity_class' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Translation',
          'exportProcessor' => 'oro_translation_translation',
          'exportJob' => 'language_translations_export_to_csv',
        ),
        'mass_action' => 
        array (
        ),
      ),
      'button_options' => 
      array (
        'icon' => 'download',
        'data' => 
        array (
          'options' => 
          array (
            'filePrefix' => '$.filePrefix',
            'routeOptions' => 
            array (
              'language_code' => '$code',
            ),
          ),
        ),
        'page_component_options' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@acl' => 'oro_importexport_export',
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@format_string' => 
          array (
            'attribute' => '$.filePrefix',
            'string' => 'translations-%lang%',
            'arguments' => 
            array (
              'lang' => '$code',
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'form_init' => 
      array (
      ),
      'actions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_language_load_base' => 
    array (
      'label' => 'oro.translation.action.install',
      'acl_resource' => 
      array (
        0 => 'TRANSLATE',
        1 => '$.data',
      ),
      'frontend_options' => 
      array (
        'template' => '@OroTranslation/Operation/loadLanguage.html.twig',
        'title_parameters' => 
        array (
          '%language%' => '$.languageName',
        ),
        'options' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'button_options' => 
      array (
        'data' => 
        array (
          'fullRedirect' => true,
        ),
        'page_component_options' => 
        array (
        ),
      ),
      'attributes' => 
      array (
        'language_code' => 
        array (
          'label' => 'Language code',
          'type' => 'string',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
      ),
      'form_init' => 
      array (
        0 => 
        array (
          '@get_language_translation_metrics' => 
          array (
            'language' => '$code',
            'result' => '$.stat',
          ),
        ),
      ),
      'form_options' => 
      array (
        'attribute_fields' => 
        array (
          'language_code' => 
          array (
            'form_type' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType',
            'options' => 
            array (
              'required' => true,
            ),
          ),
        ),
        'attribute_default_values' => 
        array (
          'language_code' => '$code',
        ),
        'validation_groups' => 
        array (
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_locale.formatter.language_code',
            'method' => 'formatLocale',
            'method_parameters' => 
            array (
              0 => '$code',
            ),
            'attribute' => '$.languageName',
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@download_update_language_translation' => 
          array (
            'language' => '$.data',
            'result' => '$.installed',
          ),
        ),
        1 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.installed',
                1 => true,
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@flash_message' => 
                array (
                  'message' => '$.successMessage',
                  'type' => 'success',
                ),
              ),
              1 => 
              array (
                '@run_action_group' => 
                array (
                  'action_group' => 'oro_translation_language_update_cache_message',
                ),
              ),
            ),
          ),
        ),
        2 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.installed',
                1 => false,
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@flash_message' => 
                array (
                  'message' => '$.errorMessage',
                  'type' => 'error',
                ),
              ),
            ),
          ),
        ),
        3 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@not' => 
              array (
                0 => 
                array (
                  '@is_default_language' => '$.data',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => 'oro-translation-language-grid',
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'order' => 0,
      'enabled' => true,
      'page_reload' => true,
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_language_install' => 
    array (
      'label' => 'oro.translation.action.install',
      'acl_resource' => 
      array (
        0 => 'TRANSLATE',
        1 => '$.data',
      ),
      'frontend_options' => 
      array (
        'template' => '@OroTranslation/Operation/loadLanguage.html.twig',
        'title_parameters' => 
        array (
          '%language%' => '$.languageName',
        ),
        'title' => 'oro.translation.action.install.title',
        'options' => 
        array (
          'okText' => 'oro.translation.action.install',
        ),
        'show_dialog' => true,
      ),
      'button_options' => 
      array (
        'data' => 
        array (
          'fullRedirect' => true,
        ),
        'icon' => 'fa-cloud-download',
        'page_component_options' => 
        array (
        ),
      ),
      'attributes' => 
      array (
        'language_code' => 
        array (
          'label' => 'Language code',
          'type' => 'string',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
      ),
      'form_init' => 
      array (
        0 => 
        array (
          '@get_language_translation_metrics' => 
          array (
            'language' => '$code',
            'result' => '$.stat',
          ),
        ),
      ),
      'form_options' => 
      array (
        'attribute_fields' => 
        array (
          'language_code' => 
          array (
            'form_type' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType',
            'options' => 
            array (
              'required' => true,
            ),
          ),
        ),
        'attribute_default_values' => 
        array (
          'language_code' => '$code',
        ),
        'validation_groups' => 
        array (
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_locale.formatter.language_code',
            'method' => 'formatLocale',
            'method_parameters' => 
            array (
              0 => '$code',
            ),
            'attribute' => '$.languageName',
          ),
        ),
        1 => 
        array (
          '@assign_value' => 
          array (
            0 => '$.successMessage',
            1 => 'oro.translation.language.message.installed',
          ),
        ),
        2 => 
        array (
          '@assign_value' => 
          array (
            0 => '$.errorMessage',
            1 => 'oro.translation.language.error.install',
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@download_update_language_translation' => 
          array (
            'language' => '$.data',
            'result' => '$.installed',
          ),
        ),
        1 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.installed',
                1 => true,
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@flash_message' => 
                array (
                  'message' => '$.successMessage',
                  'type' => 'success',
                ),
              ),
              1 => 
              array (
                '@run_action_group' => 
                array (
                  'action_group' => 'oro_translation_language_update_cache_message',
                ),
              ),
            ),
          ),
        ),
        2 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.installed',
                1 => false,
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@flash_message' => 
                array (
                  'message' => '$.errorMessage',
                  'type' => 'error',
                ),
              ),
            ),
          ),
        ),
        3 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@not' => 
              array (
                0 => 
                array (
                  '@is_default_language' => '$.data',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => 'oro-translation-language-grid',
            ),
          ),
        ),
      ),
      'datagrids' => 
      array (
        0 => 'oro-translation-language-grid',
      ),
      'preconditions' => 
      array (
        '@is_language_translation_install_available' => '$.data',
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'order' => 0,
      'enabled' => true,
      'page_reload' => true,
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_language_update' => 
    array (
      'label' => 'oro.translation.action.update',
      'acl_resource' => 
      array (
        0 => 'TRANSLATE',
        1 => '$.data',
      ),
      'frontend_options' => 
      array (
        'template' => '@OroTranslation/Operation/loadLanguage.html.twig',
        'title_parameters' => 
        array (
          '%language%' => '$.languageName',
        ),
        'title' => 'oro.translation.action.update.title',
        'options' => 
        array (
          'okText' => 'oro.translation.action.update',
        ),
        'show_dialog' => true,
      ),
      'button_options' => 
      array (
        'data' => 
        array (
          'fullRedirect' => true,
        ),
        'icon' => 'fa-cloud-download',
        'page_component_options' => 
        array (
        ),
      ),
      'attributes' => 
      array (
        'language_code' => 
        array (
          'label' => 'Language code',
          'type' => 'string',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
      ),
      'form_init' => 
      array (
        0 => 
        array (
          '@get_language_translation_metrics' => 
          array (
            'language' => '$code',
            'result' => '$.stat',
          ),
        ),
      ),
      'form_options' => 
      array (
        'attribute_fields' => 
        array (
          'language_code' => 
          array (
            'form_type' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType',
            'options' => 
            array (
              'required' => true,
            ),
          ),
        ),
        'attribute_default_values' => 
        array (
          'language_code' => '$code',
        ),
        'validation_groups' => 
        array (
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_locale.formatter.language_code',
            'method' => 'formatLocale',
            'method_parameters' => 
            array (
              0 => '$code',
            ),
            'attribute' => '$.languageName',
          ),
        ),
        1 => 
        array (
          '@assign_value' => 
          array (
            0 => '$.successMessage',
            1 => 'oro.translation.language.message.updated',
          ),
        ),
        2 => 
        array (
          '@assign_value' => 
          array (
            0 => '$.errorMessage',
            1 => 'oro.translation.language.error.update',
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@download_update_language_translation' => 
          array (
            'language' => '$.data',
            'result' => '$.installed',
          ),
        ),
        1 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.installed',
                1 => true,
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@flash_message' => 
                array (
                  'message' => '$.successMessage',
                  'type' => 'success',
                ),
              ),
              1 => 
              array (
                '@run_action_group' => 
                array (
                  'action_group' => 'oro_translation_language_update_cache_message',
                ),
              ),
            ),
          ),
        ),
        2 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.installed',
                1 => false,
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@flash_message' => 
                array (
                  'message' => '$.errorMessage',
                  'type' => 'error',
                ),
              ),
            ),
          ),
        ),
        3 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@not' => 
              array (
                0 => 
                array (
                  '@is_default_language' => '$.data',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => 'oro-translation-language-grid',
            ),
          ),
        ),
      ),
      'datagrids' => 
      array (
        0 => 'oro-translation-language-grid',
      ),
      'preconditions' => 
      array (
        '@is_language_translation_update_available' => '$.data',
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'order' => 0,
      'enabled' => true,
      'page_reload' => true,
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_rebuild_cache' => 
    array (
      'label' => 'oro.translation.action.rebuild_cache.label',
      'applications' => 
      array (
        0 => 'default',
      ),
      'routes' => 
      array (
        0 => 'oro_translation_translation_index',
      ),
      'button_options' => 
      array (
        'icon' => 'fa-refresh',
        'class' => 'btn-danger icons-holder-text',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'acl_resource' => 'oro_translation_language_translate',
      'actions' => 
      array (
        0 => 
        array (
          '@rebuild_translation_cache' => 
          array (
            'attribute' => '$.result',
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.result[successful]',
                1 => true,
              ),
            ),
            'message' => 'oro.translation.translation.message.rebuild_cache',
            'type' => 'success',
          ),
        ),
        2 => 
        array (
          '@flash_message' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.result[successful]',
                1 => false,
              ),
            ),
            'message' => '$.result[message]',
            'translate' => false,
            'type' => 'error',
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'order' => 0,
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preactions' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'preconditions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_translation_reset' => 
    array (
      'label' => 'oro.translation.action.reset.hint',
      'frontend_options' => 
      array (
        'confirmation' => 
        array (
          'title' => 'oro.translation.action.reset.confirm_title',
          'message' => 'oro.translation.action.reset.message',
          'okText' => 'oro.translation.action.reset.confirm_ok',
          'component' => 'oroui/js/delete-confirmation',
        ),
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'acl_resource' => 
      array (
        0 => 'TRANSLATE',
        1 => '$language',
      ),
      'applications' => 
      array (
        0 => 'default',
      ),
      'datagrids' => 
      array (
        0 => 'oro-translation-translations-grid',
      ),
      'button_options' => 
      array (
        'icon' => 'fa-refresh',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
          'type' => 'reset_translations',
          'label' => 'oro.translation.action.reset.label',
          'icon' => 'refresh',
          'route' => 'oro_translation_mass_reset',
          'handler' => 'oro_translation.mass_action.reset_translation_handler',
          'data_identifier' => 'translation.id',
          'entity_name' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Translation',
          'acl_resource' => 'oro_translation_language_translate',
          'confirmation' => true,
          'defaultMessages' => 
          array (
            'confirm_title' => 'oro.translation.action.reset.confirm_title',
            'confirm_content' => 'oro.translation.action.reset.confirm_content',
            'confirm_ok' => 'oro.translation.action.reset.confirm_ok',
          ),
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@not_blank' => '$id',
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_translation.manager.translation',
            'method' => 'saveTranslation',
            'method_parameters' => 
            array (
              0 => '$translationKey.key',
              1 => NULL,
              2 => '$language.code',
              3 => '$translationKey.domain',
              4 => '$scope',
            ),
          ),
        ),
        1 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_translation.manager.translation',
            'method' => 'flush',
          ),
        ),
        2 => 
        array (
          '@refresh_grid' => 'oro-translation-translations-grid',
        ),
      ),
      'replace' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'order' => 0,
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'preactions' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'CREATE_DRAFT' => 
    array (
      'label' => 'oro.draft.operations.create.label',
      'acl_resource' => 
      array (
        0 => 'CREATE_DRAFT',
        1 => '$.data',
      ),
      'groups' => 
      array (
        0 => 'view_navButtons',
      ),
      'button_options' => 
      array (
        'icon' => 'fa-files-o',
        'class' => 'btn',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'frontend_options' => 
      array (
        'confirmation' => 
        array (
          'content' => '$.confirmationContent',
          'component' => 'oroui/js/standart-confirmation',
        ),
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@instanceof' => 
            array (
              0 => '$.data',
              1 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
            ),
          ),
          2 => 
          array (
            '@equal' => 
            array (
              0 => '$.data.draftUuid',
              1 => NULL,
            ),
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@assign_draftable_fields' => 
          array (
            'object' => '$.data',
            'attribute' => '$.draftableFields',
          ),
        ),
        1 => 
        array (
          '@render_template' => 
          array (
            'attribute' => '$.confirmationContent',
            'template' => '@OroDraft/Draft/draftConfirmation.html.twig',
            'params' => 
            array (
              'draftableFields' => '$.draftableFields',
            ),
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'oro_draft_create',
            'parameters_mapping' => 
            array (
              'source' => '$.data',
            ),
            'results' => 
            array (
              'redirectUrl' => '$.redirectUrl',
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'order' => 0,
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'PUBLISH_DRAFT' => 
    array (
      'label' => 'oro.draft.operations.publish.label',
      'acl_resource' => 
      array (
        0 => 'PUBLISH_DRAFT',
        1 => '$.data',
      ),
      'order' => 10,
      'button_options' => 
      array (
        'icon' => 'fa-share-square-o',
        'class' => 'btn',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'groups' => 
      array (
        0 => 'datagridRowAction',
        1 => 'view_navButtons',
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@instanceof' => 
            array (
              0 => '$.data',
              1 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
            ),
          ),
          2 => 
          array (
            '@not_equal' => 
            array (
              0 => '$.data.draftUuid',
              1 => NULL,
            ),
          ),
          3 => 
          array (
            '@not_equal' => 
            array (
              0 => '$.data.draftSource',
              1 => NULL,
            ),
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'oro_draft_publish',
            'parameters_mapping' => 
            array (
              'source' => '$.data',
            ),
            'results' => 
            array (
              'redirectUrl' => '$.redirectUrl',
            ),
          ),
        ),
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.draft.operations.publish.label',
        'confirmation' => 
        array (
          'title' => 'oro.draft.operations.publish.label',
          'message' => 'oro.draft.operations.publish.message',
          'component' => 'oroui/js/standart-confirmation',
        ),
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preactions' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'DUPLICATE_DRAFT' => 
    array (
      'label' => 'oro.draft.operations.duplicate.label',
      'acl_resource' => 
      array (
        0 => 'CREATE_DRAFT',
        1 => '$.data',
      ),
      'groups' => 
      array (
        0 => 'datagridRowAction',
        1 => 'view_navButtons',
      ),
      'button_options' => 
      array (
        'icon' => 'fa-files-o',
        'class' => 'btn',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'frontend_options' => 
      array (
        'confirmation' => 
        array (
          'content' => '$.confirmationContent',
          'component' => 'oroui/js/standart-confirmation',
        ),
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@instanceof' => 
            array (
              0 => '$.data',
              1 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
            ),
          ),
          2 => 
          array (
            '@instanceof' => 
            array (
              0 => '$.data.draftSource',
              1 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
            ),
          ),
          3 => 
          array (
            '@not_equal' => 
            array (
              0 => '$.data.draftUuid',
              1 => NULL,
            ),
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@assign_draftable_fields' => 
          array (
            'object' => '$.data',
            'attribute' => '$.draftableFields',
          ),
        ),
        1 => 
        array (
          '@render_template' => 
          array (
            'attribute' => '$.confirmationContent',
            'template' => '@OroDraft/Draft/draftConfirmation.html.twig',
            'params' => 
            array (
              'draftableFields' => '$.draftableFields',
            ),
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'oro_draft_create',
            'parameters_mapping' => 
            array (
              'source' => '$.data',
            ),
            'results' => 
            array (
              'redirectUrl' => '$.redirectUrl',
            ),
          ),
        ),
      ),
      'order' => 20,
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'UPDATE_DRAFT' => 
    array (
      'label' => 'oro.action.edit',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-pencil-square-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@instanceof' => 
            array (
              0 => '$.data',
              1 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
            ),
          ),
          2 => 
          array (
            '@not_blank' => '$.routes[update]',
          ),
          3 => 
          array (
            '@not_equal' => 
            array (
              0 => '$.data.draftUuid',
              1 => NULL,
            ),
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
      ),
      'acl_resource' => 
      array (
        0 => 'EDIT',
        1 => '$.data',
      ),
      'order' => 510,
      'groups' => 
      array (
        0 => 'datagridRowAction',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.edit_entity',
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@redirect' => 
          array (
            'route' => '$.routes[update]',
            'route_parameters' => 
            array (
              'id' => '$id',
            ),
          ),
        ),
      ),
      'for_all_entities' => false,
      'for_all_datagrids' => false,
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'DELETE_DRAFT' => 
    array (
      'label' => 'oro.action.delete',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-trash-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@instanceof' => 
            array (
              0 => '$.data',
              1 => 'Oro\\Bundle\\DraftBundle\\Entity\\DraftableInterface',
            ),
          ),
          2 => 
          array (
            '@not_equal' => 
            array (
              0 => '$.data.draftUuid',
              1 => NULL,
            ),
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
      ),
      'exclude_datagrids' => 
      array (
        0 => 'jobs-grid',
        1 => 'owner-users-select-grid',
        2 => 'users-grid',
        3 => 'oro-locale-localizations-grid',
        4 => 'entityconfig-grid',
        5 => 'oro-integration-grid',
        6 => 'oro-campaign-grid',
        7 => 'oro-email-campaign-grid',
      ),
      'exclude_entities' => 
      array (
        0 => 'Oro\\Bundle\\UserBundle\\Entity\\Role',
        1 => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        2 => 'Oro\\Bundle\\LocaleBundle\\Entity\\Localization',
        3 => 'Oro\\Bundle\\IntegrationBundle\\Entity\\Channel',
        4 => 'Oro\\Bundle\\WorkflowBundle\\Entity\\WorkflowDefinition',
        5 => 'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign',
        6 => 'Oro\\Bundle\\CampaignBundle\\Entity\\Campaign',
      ),
      'acl_resource' => 
      array (
        0 => 'DELETE',
        1 => '$.data',
      ),
      'order' => 520,
      'for_all_entities' => false,
      'for_all_datagrids' => false,
      'groups' => 
      array (
        0 => 'datagridRowAction',
        1 => 'for_all_entities',
        2 => 'for_all_datagrids',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.delete_entity',
        'options' => 
        array (
          'ariaLabel' => 'oro.action.delete_entity.aria_label',
        ),
        'confirmation' => 
        array (
          'title' => 'oro.action.delete_entity',
          'message' => 'oro.action.delete_confirm',
          'okText' => 'oro.action.button.delete',
          'component' => 'oroui/js/delete-confirmation',
          'message_parameters' => 
          array (
            'entityLabel' => '$.entityLabel',
          ),
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'DELETE',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
            ),
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.action.delete_message',
            'type' => 'success',
            'message_parameters' => 
            array (
              'entityLabel' => '$.entityLabel',
            ),
          ),
        ),
        2 => 
        array (
          '@redirect' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.gridName',
                ),
                1 => 
                array (
                  '@not_empty' => '$.routes[name]',
                ),
              ),
            ),
            'parameters' => 
            array (
              'route' => '$.routes[name]',
            ),
          ),
        ),
        3 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.routes[name]',
                ),
                1 => 
                array (
                  '@not_empty' => '$.gridName',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => '$.gridName',
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'entities' => 
      array (
      ),
      'datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_locale_localization_delete' => 
    array (
      'label' => 'oro.action.delete',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-trash-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@or' => 
            array (
              0 => 
              array (
                '@blank' => '$.gridName',
              ),
              1 => 
              array (
                '@blank' => '$.requestRoute',
              ),
              2 => 
              array (
                '@and' => 
                array (
                  0 => 
                  array (
                    '@not_blank' => '$.routes[name]',
                  ),
                  1 => 
                  array (
                    '@eq' => 
                    array (
                      0 => '$.routes[name]',
                      1 => '$.requestRoute',
                    ),
                  ),
                ),
              ),
            ),
          ),
          2 => 
          array (
            '@or' => 
            array (
              0 => 
              array (
                '@not_blank' => '$.routes[name]',
              ),
              1 => 
              array (
                '@not_blank' => '$.gridName',
              ),
            ),
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
      ),
      'acl_resource' => 
      array (
        0 => 'DELETE',
        1 => '$.data',
      ),
      'order' => 520,
      'for_all_entities' => false,
      'for_all_datagrids' => false,
      'groups' => 
      array (
        0 => 'view_navButtons',
        1 => 'update_navButtons',
        2 => 'datagridRowAction',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.delete_entity',
        'options' => 
        array (
          'ariaLabel' => 'oro.action.delete_entity.aria_label',
        ),
        'confirmation' => 
        array (
          'title' => 'oro.action.delete_entity',
          'message' => 'oro.locale.localization.delete_confirm',
          'okText' => 'oro.action.button.delete',
          'component' => 'oroui/js/delete-confirmation',
          'message_parameters' => 
          array (
            'entityLabel' => '$.entityLabel',
          ),
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'DELETE',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
            ),
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.action.delete_message',
            'type' => 'success',
            'message_parameters' => 
            array (
              'entityLabel' => '$.entityLabel',
            ),
          ),
        ),
        2 => 
        array (
          '@redirect' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.gridName',
                ),
                1 => 
                array (
                  '@not_empty' => '$.routes[name]',
                ),
              ),
            ),
            'parameters' => 
            array (
              'route' => '$.routes[name]',
            ),
          ),
        ),
        3 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.routes[name]',
                ),
                1 => 
                array (
                  '@not_empty' => '$.gridName',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => '$.gridName',
            ),
          ),
        ),
        4 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'oro_translation_language_update_cache_message',
          ),
        ),
      ),
      'entities' => 
      array (
        0 => 'Oro\\Bundle\\LocaleBundle\\Entity\\Localization',
      ),
      'datagrids' => 
      array (
        0 => 'oro-locale-localizations-grid',
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'digital_asset_delete' => 
    array (
      'label' => 'oro.action.delete',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-trash-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
      ),
      'exclude_datagrids' => 
      array (
        0 => 'jobs-grid',
        1 => 'owner-users-select-grid',
        2 => 'users-grid',
        3 => 'oro-locale-localizations-grid',
        4 => 'entityconfig-grid',
        5 => 'oro-integration-grid',
        6 => 'oro-campaign-grid',
        7 => 'oro-email-campaign-grid',
      ),
      'exclude_entities' => 
      array (
        0 => 'Oro\\Bundle\\UserBundle\\Entity\\Role',
        1 => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        2 => 'Oro\\Bundle\\LocaleBundle\\Entity\\Localization',
        3 => 'Oro\\Bundle\\IntegrationBundle\\Entity\\Channel',
        4 => 'Oro\\Bundle\\WorkflowBundle\\Entity\\WorkflowDefinition',
        5 => 'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign',
        6 => 'Oro\\Bundle\\CampaignBundle\\Entity\\Campaign',
      ),
      'acl_resource' => 
      array (
        0 => 'DELETE',
        1 => '$.data',
      ),
      'order' => 520,
      'for_all_entities' => false,
      'for_all_datagrids' => false,
      'groups' => 
      array (
        0 => 'view_navButtons',
        1 => 'update_navButtons',
        2 => 'datagridRowAction',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.delete_entity',
        'options' => 
        array (
          'ariaLabel' => 'oro.action.delete_entity.aria_label',
        ),
        'confirmation' => 
        array (
          'title' => 'oro.digitalasset.dam.dialog.delete_confirmation.title',
          'message' => 'oro.digitalasset.dam.dialog.delete_confirmation.message',
          'okText' => 'oro.action.button.delete',
          'component' => 'oroui/js/delete-confirmation',
          'message_parameters' => 
          array (
            'entityLabel' => '$.entityLabel',
          ),
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'DELETE',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
            ),
          ),
        ),
        1 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@not_empty' => '$.gridName',
            ),
            'parameters' => 
            array (
              0 => '$.gridName',
            ),
          ),
        ),
        2 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.digitalasset.dam.dialog.delete_message',
            'type' => 'success',
          ),
        ),
      ),
      'datagrids' => 
      array (
        0 => 'digital-asset-select-file-grid',
        1 => 'digital-asset-select-image-grid',
      ),
      'page_reload' => false,
      'preconditions' => 
      array (
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'entities' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'attributes' => 
      array (
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_integration_activate' => 
    array (
      'label' => 'oro.integration.activate',
      'applications' => 
      array (
        0 => 'default',
      ),
      'acl_resource' => 
      array (
        0 => 'EDIT',
        1 => '$.data',
      ),
      'order' => 20,
      'datagrids' => 
      array (
        0 => 'oro-integration-grid',
      ),
      'routes' => 
      array (
        0 => 'oro_integration_update',
      ),
      'button_options' => 
      array (
        'icon' => 'fa-check',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'attributes' => 
      array (
        'actionAllowed' => 
        array (
          'label' => 'oro.integration.operation.attribute.actionAllowed.label',
          'type' => 'boolean',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
        'actionSuccess' => 
        array (
          'label' => 'oro.integration.operation.attribute.actionSuccess.label',
          'type' => 'boolean',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_integration.utils.edit_mode',
            'method' => 'isSwitchEnableAllowed',
            'method_parameters' => 
            array (
              0 => '$.data.editMode',
            ),
            'attribute' => '$.actionAllowed',
          ),
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@equal' => 
            array (
              0 => '$.actionAllowed',
              1 => true,
            ),
          ),
          1 => 
          array (
            '@equal' => 
            array (
              0 => '$.data.enabled',
              1 => false,
            ),
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_integration.action_handler.channel_enable',
            'method' => 'handleAction',
            'method_parameters' => 
            array (
              0 => '$.data',
            ),
            'attribute' => '$.actionSuccess',
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.actionSuccess',
                1 => true,
              ),
            ),
            'message' => 'oro.integration.notification.channel.activated',
            'type' => 'success',
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_integration_deactivate' => 
    array (
      'label' => 'oro.integration.deactivate',
      'applications' => 
      array (
        0 => 'default',
      ),
      'acl_resource' => 
      array (
        0 => 'EDIT',
        1 => '$.data',
      ),
      'order' => 20,
      'datagrids' => 
      array (
        0 => 'oro-integration-grid',
      ),
      'routes' => 
      array (
        0 => 'oro_integration_update',
      ),
      'button_options' => 
      array (
        'icon' => 'fa-close',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'attributes' => 
      array (
        'actionAllowed' => 
        array (
          'label' => 'oro.integration.operation.attribute.actionAllowed.label',
          'type' => 'boolean',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
        'actionSuccess' => 
        array (
          'label' => 'oro.integration.operation.attribute.actionSuccess.label',
          'type' => 'boolean',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_integration.utils.edit_mode',
            'method' => 'isSwitchEnableAllowed',
            'method_parameters' => 
            array (
              0 => '$.data.editMode',
            ),
            'attribute' => '$.actionAllowed',
          ),
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@equal' => 
            array (
              0 => '$.actionAllowed',
              1 => true,
            ),
          ),
          1 => 
          array (
            '@equal' => 
            array (
              0 => '$.data.enabled',
              1 => true,
            ),
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_integration.action_handler.channel_disable',
            'method' => 'handleAction',
            'method_parameters' => 
            array (
              0 => '$.data',
            ),
            'attribute' => '$.actionSuccess',
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.actionSuccess',
                1 => true,
              ),
            ),
            'message' => 'oro.integration.notification.channel.deactivated',
            'type' => 'success',
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_integration_delete' => 
    array (
      'label' => 'oro.integration.delete',
      'applications' => 
      array (
        0 => 'default',
      ),
      'acl_resource' => 
      array (
        0 => 'DELETE',
        1 => '$.data',
      ),
      'order' => 50,
      'datagrids' => 
      array (
        0 => 'oro-integration-grid',
      ),
      'routes' => 
      array (
        0 => 'oro_integration_update',
      ),
      'frontend_options' => 
      array (
        'confirmation' => 
        array (
          'message' => 'oro.integration.delete_sync_integration_window.content',
          'component' => 'oroui/js/delete-confirmation',
        ),
        'show_dialog' => true,
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
      ),
      'button_options' => 
      array (
        'icon' => 'fa-trash-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'attributes' => 
      array (
        'actionAllowed' => 
        array (
          'label' => 'oro.integration.operation.attribute.actionAllowed.label',
          'type' => 'boolean',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
        'actionSuccess' => 
        array (
          'label' => 'oro.integration.operation.attribute.actionSuccess.label',
          'type' => 'boolean',
          'property_path' => NULL,
          'options' => 
          array (
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_integration.utils.edit_mode',
            'method' => 'isEditAllowed',
            'method_parameters' => 
            array (
              0 => '$.data.editMode',
            ),
            'attribute' => '$.actionAllowed',
          ),
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@equal' => 
            array (
              0 => '$.actionAllowed',
              1 => true,
            ),
          ),
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_integration.action_handler.channel_delete',
            'method' => 'handleAction',
            'method_parameters' => 
            array (
              0 => '$.data',
            ),
            'attribute' => '$.actionSuccess',
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.actionSuccess',
                1 => true,
              ),
            ),
            'message' => 'oro.integration.notification.channel.deleted',
            'type' => 'success',
          ),
        ),
        2 => 
        array (
          '@redirect' => 
          array (
            'route' => 'oro_integration_index',
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'CRUD_ACTION' => 
    array (
      'label' => 'CRUD_ACTION',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@or' => 
            array (
              0 => 
              array (
                '@blank' => '$.gridName',
              ),
              1 => 
              array (
                '@blank' => '$.requestRoute',
              ),
              2 => 
              array (
                '@and' => 
                array (
                  0 => 
                  array (
                    '@not_blank' => '$.routes[name]',
                  ),
                  1 => 
                  array (
                    '@eq' => 
                    array (
                      0 => '$.routes[name]',
                      1 => '$.requestRoute',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'order' => 0,
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'actions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'UPDATE' => 
    array (
      'label' => 'oro.action.edit',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-pencil-square-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@or' => 
            array (
              0 => 
              array (
                '@blank' => '$.gridName',
              ),
              1 => 
              array (
                '@blank' => '$.requestRoute',
              ),
              2 => 
              array (
                '@and' => 
                array (
                  0 => 
                  array (
                    '@not_blank' => '$.routes[name]',
                  ),
                  1 => 
                  array (
                    '@eq' => 
                    array (
                      0 => '$.routes[name]',
                      1 => '$.requestRoute',
                    ),
                  ),
                ),
              ),
            ),
          ),
          2 => 
          array (
            '@not_blank' => '$.routes[update]',
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
      ),
      'acl_resource' => 
      array (
        0 => 'EDIT',
        1 => '$.data',
      ),
      'order' => 510,
      'for_all_entities' => true,
      'for_all_datagrids' => true,
      'groups' => 
      array (
        0 => 'view_navButtons',
        1 => 'datagridRowAction',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.edit_entity',
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@redirect' => 
          array (
            'route' => '$.routes[update]',
            'route_parameters' => 
            array (
              'id' => '$id',
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'CLONE' => 
    array (
      'label' => 'oro.action.clone',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-files-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@or' => 
            array (
              0 => 
              array (
                '@not_blank' => '$.routes[name]',
              ),
              1 => 
              array (
                '@not_blank' => '$.gridName',
              ),
            ),
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
        1 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_action.helper.default_operation_request',
            'method' => 'isExecutionRouteRequest',
            'attribute' => '$.isExecutionRequest',
          ),
        ),
        2 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@not_blank' => '$.data',
                ),
                1 => 
                array (
                  '@eq' => 
                  array (
                    0 => '$.requestRoute',
                    1 => 'oro_action_widget_form',
                  ),
                ),
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@clone_object' => 
                array (
                  'target' => '$.data',
                  'attribute' => '$.clone',
                ),
              ),
            ),
          ),
        ),
        3 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@not_blank' => '$.data',
                ),
                1 => 
                array (
                  '@eq' => 
                  array (
                    0 => '$.isExecutionRequest',
                    1 => true,
                  ),
                ),
                2 => 
                array (
                  '@empty' => '$.clone',
                ),
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@clone_entity' => 
                array (
                  'target' => '$.data',
                  'attribute' => '$.clone',
                  'flush' => true,
                ),
              ),
            ),
          ),
        ),
      ),
      'order' => 30,
      'groups' => 
      array (
        0 => 'view_navButtons',
        1 => 'update_navButtons',
        2 => 'datagridRowAction',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.clone_entity',
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'datagrids' => 
      array (
      ),
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'actions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'clone_workflow' => 
    array (
      'label' => 'oro.action.clone',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-files-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@and' => 
        array (
          0 => 
          array (
            '@not_blank' => '$.data',
          ),
          1 => 
          array (
            '@is_workflow_configuration_clean' => 
            array (
              'parameters' => '$.data',
              'message' => 'oro.workflow.notification.workflow.could_not_be_cloned',
            ),
          ),
          2 => 
          array (
            '@or' => 
            array (
              0 => 
              array (
                '@not_blank' => '$.routes[name]',
              ),
              1 => 
              array (
                '@not_blank' => '$.gridName',
              ),
            ),
          ),
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_action.helper.default_operation_request',
            'method' => 'getRequestRoute',
            'attribute' => '$.requestRoute',
          ),
        ),
        1 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_entity_config.helper.entity_config',
            'method' => 'getRoutes',
            'method_parameters' => 
            array (
              0 => '$.data',
              1 => 
              array (
                0 => 'name',
              ),
            ),
            'attribute' => '$.routes',
          ),
        ),
        2 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@not_blank' => '$.data',
                ),
                1 => 
                array (
                  '@eq' => 
                  array (
                    0 => '$.requestRoute',
                    1 => 'oro_action_widget_form',
                  ),
                ),
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_workflow.translation.processor',
                  'method' => 'translateWorkflowDefinitionFields',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => true,
                  ),
                ),
              ),
              1 => 
              array (
                '@clone_object' => 
                array (
                  'target' => '$.data',
                  'attribute' => '$.clone',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity.entity_provider',
                  'method' => 'getEntities',
                  'attribute' => '$.systemEntities',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => 'oro.action.clone.label',
                  'attribute' => '$.clone.label',
                  'params' => 
                  array (
                    '{label}' => '$.clone.label',
                  ),
                ),
              ),
              4 => 
              array (
                '@call_service_method' => 
                array (
                  'attribute' => '$.form',
                  'service' => 'form.factory',
                  'method' => 'createNamed',
                  'method_parameters' => 
                  array (
                    0 => 'oro_workflow_definition_form',
                    1 => 'Oro\\Bundle\\WorkflowBundle\\Form\\Type\\WorkflowDefinitionType',
                    2 => NULL,
                  ),
                ),
              ),
              5 => 
              array (
                '@call_method' => 
                array (
                  'object' => '$.form',
                  'method' => 'setData',
                  'method_parameters' => 
                  array (
                    0 => '$.clone',
                  ),
                ),
              ),
              6 => 
              array (
                '@call_method' => 
                array (
                  'attribute' => '$.formView',
                  'object' => '$.form',
                  'method' => 'createView',
                ),
              ),
            ),
          ),
        ),
      ),
      'order' => 30,
      'groups' => 
      array (
        0 => 'view_navButtons',
        1 => 'update_navButtons',
        2 => 'datagridRowAction',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.clone_entity',
        'show_dialog' => false,
        'template' => '@OroWorkflow/WorkflowDefinition/clone.html.twig',
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
      ),
      'entities' => 
      array (
        0 => 'Oro\\Bundle\\WorkflowBundle\\Entity\\WorkflowDefinition',
      ),
      'datagrids' => 
      array (
        0 => 'workflow-definitions-grid',
      ),
      'acl_resource' => 
      array (
        0 => 'CREATE',
        1 => 'entity:Oro\\Bundle\\WorkflowBundle\\Entity\\WorkflowDefinition',
      ),
      'attributes' => 
      array (
        'entity' => 
        array (
          'label' => ' ',
          'type' => 'entity',
          'options' => 
          array (
            'class' => 'Oro\\Bundle\\WorkflowBundle\\Entity\\WorkflowDefinition',
          ),
          'property_path' => NULL,
        ),
      ),
      'form_options' => 
      array (
        'attribute_fields' => 
        array (
          'entity' => 
          array (
            'form_type' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType',
            'options' => 
            array (
            ),
          ),
        ),
        'validation_groups' => 
        array (
        ),
        'attribute_default_values' => 
        array (
        ),
      ),
      'form_init' => 
      array (
        0 => 
        array (
          '@assign_value' => 
          array (
            0 => '$.entityFields',
            1 => 
            array (
            ),
          ),
        ),
        1 => 
        array (
          '@call_service_method' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data.relatedEntity',
            ),
            'parameters' => 
            array (
              'service' => 'oro_workflow.entity_field_list_provider',
              'method' => 'getFields',
              'method_parameters' => 
              array (
                0 => false,
                1 => false,
                2 => true,
                3 => false,
                4 => true,
                5 => true,
              ),
              'attribute' => '$.entityFields',
            ),
          ),
        ),
        2 => 
        array (
          '@assign_constant_value' => 
          array (
            0 => '$.availableDestinations',
            1 => 'Oro\\Bundle\\ActionBundle\\Resolver\\DestinationPageResolver::AVAILABLE_DESTINATIONS',
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'actions' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_workflow_definition_configure' => 
    array (
      'label' => 'oro.workflow.workflowdefinition.configuration.label',
      'routes' => 
      array (
        0 => 'oro_workflow_definition_view',
      ),
      'datagrids' => 
      array (
        0 => 'workflow-definitions-grid',
      ),
      'acl_resource' => 
      array (
        0 => 'CONFIGURE',
        1 => 'entity:Oro\\Bundle\\WorkflowBundle\\Entity\\WorkflowDefinition',
      ),
      'order' => 10,
      'button_options' => 
      array (
        'icon' => 'fa-cog',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_workflow.manager.system',
            'method' => 'getWorkflow',
            'method_parameters' => 
            array (
              0 => '$.data.name',
            ),
            'attribute' => '$.workflow',
          ),
        ),
        1 => 
        array (
          '@call_method' => 
          array (
            'object' => '$.workflow',
            'method' => 'getVariables',
            'attribute' => '$.variables',
          ),
        ),
      ),
      'preconditions' => 
      array (
        '@has_elements' => '$.variables',
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@redirect' => 
          array (
            'parameters' => 
            array (
              'route' => 'oro_workflow_definition_configure',
              'route_parameters' => 
              array (
                'name' => '$name',
              ),
            ),
          ),
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'groups' => 
      array (
      ),
      'for_all_entities' => false,
      'entities' => 
      array (
      ),
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'frontend_options' => 
      array (
        'options' => 
        array (
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_campaign_delete' => 
    array (
      'label' => 'oro.action.delete',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-trash-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@not_blank' => '$.data',
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
      ),
      'acl_resource' => 
      array (
        0 => 'DELETE',
        1 => '$.data',
      ),
      'order' => 520,
      'groups' => 
      array (
        0 => 'view_navButtons',
        1 => 'update_navButtons',
        2 => 'datagridRowAction',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.delete_entity',
        'options' => 
        array (
          'ariaLabel' => 'oro.action.delete_entity.aria_label',
        ),
        'confirmation' => 
        array (
          'title' => 'oro.action.delete_entity',
          'message' => 'oro.action.delete_confirm',
          'okText' => 'oro.action.button.delete',
          'component' => 'oroui/js/delete-confirmation',
          'message_parameters' => 
          array (
            'entityLabel' => '$.entityLabel',
          ),
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'DELETE',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
            ),
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.action.delete_message',
            'type' => 'success',
            'message_parameters' => 
            array (
              'entityLabel' => '$.entityLabel',
            ),
          ),
        ),
        2 => 
        array (
          '@redirect' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.gridName',
                ),
                1 => 
                array (
                  '@not_empty' => '$.routes[name]',
                ),
              ),
            ),
            'parameters' => 
            array (
              'route' => '$.routes[name]',
            ),
          ),
        ),
        3 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.routes[name]',
                ),
                1 => 
                array (
                  '@not_empty' => '$.gridName',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => '$.gridName',
            ),
          ),
        ),
        4 => 
        array (
          '@redirect' => 
          array (
            'parameters' => 
            array (
              'route' => 'oro_campaign_index',
            ),
          ),
        ),
      ),
      'entities' => 
      array (
        0 => 'Oro\\Bundle\\CampaignBundle\\Entity\\Campaign',
      ),
      'datagrids' => 
      array (
        0 => 'oro-campaign-grid',
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
          'entity_name' => 'Oro\\Bundle\\CampaignBundle\\Entity\\Campaign',
          'data_identifier' => 'c.id',
          'type' => 'delete',
          'label' => 'oro.grid.action.delete',
          'link' => 'delete_link',
          'icon' => 'trash-o',
        ),
        'data' => 
        array (
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_email_campaign_delete' => 
    array (
      'label' => 'oro.action.delete',
      'button_options' => 
      array (
        'template' => '@OroAction/Operation/crud-button.html.twig',
        'icon' => 'fa-trash-o',
        'page_component_options' => 
        array (
        ),
        'data' => 
        array (
        ),
      ),
      'preconditions' => 
      array (
        '@not_blank' => '$.data',
      ),
      'preactions' => 
      array (
        0 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@not_blank' => '$.data',
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_action.helper.default_operation_request',
                  'method' => 'getRequestRoute',
                  'attribute' => '$.requestRoute',
                ),
              ),
              1 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getRoutes',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 
                    array (
                      0 => 'name',
                      1 => 'update',
                    ),
                  ),
                  'attribute' => '$.routes',
                ),
              ),
              2 => 
              array (
                '@call_service_method' => 
                array (
                  'service' => 'oro_entity_config.helper.entity_config',
                  'method' => 'getConfigValue',
                  'method_parameters' => 
                  array (
                    0 => '$.data',
                    1 => 'label',
                    2 => false,
                  ),
                  'attribute' => '$.entityLabel',
                ),
              ),
              3 => 
              array (
                '@trans' => 
                array (
                  'id' => '$.entityLabel',
                  'attribute' => '$.entityLabel',
                ),
              ),
            ),
          ),
        ),
      ),
      'acl_resource' => 
      array (
        0 => 'DELETE',
        1 => '$.data',
      ),
      'order' => 520,
      'groups' => 
      array (
        0 => 'view_navButtons',
        1 => 'update_navButtons',
        2 => 'datagridRowAction',
      ),
      'frontend_options' => 
      array (
        'title' => 'oro.action.delete_entity',
        'options' => 
        array (
          'ariaLabel' => 'oro.action.delete_entity.aria_label',
        ),
        'confirmation' => 
        array (
          'title' => 'oro.action.delete_entity',
          'message' => 'oro.action.delete_confirm',
          'okText' => 'oro.action.button.delete',
          'component' => 'oroui/js/delete-confirmation',
          'message_parameters' => 
          array (
            'entityLabel' => '$.entityLabel',
          ),
        ),
        'title_parameters' => 
        array (
        ),
        'show_dialog' => true,
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@run_action_group' => 
          array (
            'action_group' => 'DELETE',
            'parameters_mapping' => 
            array (
              'data' => '$.data',
            ),
          ),
        ),
        1 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.action.delete_message',
            'type' => 'success',
            'message_parameters' => 
            array (
              'entityLabel' => '$.entityLabel',
            ),
          ),
        ),
        2 => 
        array (
          '@redirect' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.gridName',
                ),
                1 => 
                array (
                  '@not_empty' => '$.routes[name]',
                ),
              ),
            ),
            'parameters' => 
            array (
              'route' => '$.routes[name]',
            ),
          ),
        ),
        3 => 
        array (
          '@refresh_grid' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@empty' => '$.routes[name]',
                ),
                1 => 
                array (
                  '@not_empty' => '$.gridName',
                ),
              ),
            ),
            'parameters' => 
            array (
              0 => '$.gridName',
            ),
          ),
        ),
        4 => 
        array (
          '@redirect' => 
          array (
            'route' => 'oro_email_campaign_index',
          ),
        ),
      ),
      'entities' => 
      array (
        0 => 'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign',
      ),
      'datagrids' => 
      array (
        0 => 'oro-email-campaign-grid',
      ),
      'datagrid_options' => 
      array (
        'mass_action' => 
        array (
          'entity_name' => 'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign',
          'data_identifier' => 'ec.id',
          'type' => 'delete',
          'label' => 'oro.grid.action.delete',
          'link' => 'delete_link',
          'icon' => 'trash-o',
        ),
        'data' => 
        array (
        ),
      ),
      'replace' => 
      array (
      ),
      'applications' => 
      array (
      ),
      'for_all_entities' => false,
      'exclude_entities' => 
      array (
      ),
      'for_all_datagrids' => false,
      'exclude_datagrids' => 
      array (
      ),
      'routes' => 
      array (
      ),
      'enabled' => true,
      'page_reload' => true,
      'attributes' => 
      array (
      ),
      'form_init' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
  ),
  'action_groups' => 
  array (
    'resetPassword' => 
    array (
      'parameters' => 
      array (
        'data' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_user.handler.reset_password_handler',
            'method' => 'resetPasswordAndNotify',
            'method_parameters' => 
            array (
              0 => '$.data',
            ),
            'attribute' => '$.sent',
          ),
        ),
        1 => 
        array (
          '@flush_entity' => '$.data',
        ),
        2 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@eq' => 
                  array (
                    0 => '$.sent',
                    1 => true,
                  ),
                ),
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@flash_message' => 
                array (
                  'message' => 'oro.user.password.force_reset.success.message',
                  'type' => 'success',
                  'message_parameters' => 
                  array (
                    'email' => '$.data.email',
                  ),
                ),
              ),
            ),
          ),
        ),
        3 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@and' => 
              array (
                0 => 
                array (
                  '@eq' => 
                  array (
                    0 => '$.sent',
                    1 => false,
                  ),
                ),
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@flash_message' => 
                array (
                  'message' => 'oro.user.password.force_reset.failure.message',
                  'type' => 'error',
                  'message_parameters' => 
                  array (
                    'email' => '$.data.email',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'conditions' => 
      array (
      ),
    ),
    'enableUser' => 
    array (
      'parameters' => 
      array (
        'data' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@assign_value' => 
          array (
            0 => '$.data.enabled',
            1 => true,
          ),
        ),
        1 => 
        array (
          '@flush_entity' => '$.data',
        ),
        2 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.user.action.enable.success',
            'type' => 'success',
            'message_parameters' => 
            array (
              'username' => '$.data.username',
            ),
          ),
        ),
        3 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => '$.data.auth_status.id',
                1 => 'expired',
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@run_action_group' => 
                array (
                  'action_group' => 'resetPassword',
                  'parameters_mapping' => 
                  array (
                    'data' => '$.data',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'conditions' => 
      array (
      ),
    ),
    'disableUser' => 
    array (
      'parameters' => 
      array (
        'data' => 
        array (
          'type' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@assign_value' => 
          array (
            0 => '$.data.enabled',
            1 => false,
          ),
        ),
        1 => 
        array (
          '@flush_entity' => '$.data',
        ),
        2 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.user.action.disable.success',
            'type' => 'success',
            'message_parameters' => 
            array (
              'username' => '$.data.username',
            ),
          ),
        ),
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_translation_language_set_enabled' => 
    array (
      'parameters' => 
      array (
        'data' => 
        array (
          'type' => 'Oro\\Bundle\\TranslationBundle\\Entity\\Language',
        ),
        'value' => 
        array (
          'type' => 'boolean',
        ),
      ),
      'acl_resource' => 
      array (
        0 => 'EDIT',
        1 => '$.data',
      ),
      'conditions' => 
      array (
        '@not_equal' => 
        array (
          0 => '$.data.enabled',
          1 => '$.value',
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@assign_value' => 
          array (
            0 => '$.data.enabled',
            1 => '$.value',
          ),
        ),
        1 => 
        array (
          '@flush_entity' => '$.data',
        ),
      ),
    ),
    'oro_translation_language_update_cache_message' => 
    array (
      'acl_resource' => 'oro_translation_translation_update',
      'actions' => 
      array (
        0 => 
        array (
          '@assign_url' => 
          array (
            'attribute' => '$.rebuildCacheUrl',
            'route' => 'oro_translation_translation_index',
          ),
        ),
        1 => 
        array (
          '@trans' => 
          array (
            'attribute' => '$.rebuildCacheMessage',
            'id' => 'oro.translation.translation.rebuild_cache_required',
            'params' => 
            array (
              '%path%' => '$.rebuildCacheUrl',
            ),
          ),
        ),
        2 => 
        array (
          '@flash_message' => 
          array (
            'message' => '$.rebuildCacheMessage',
            'type' => 'warning',
          ),
        ),
      ),
      'parameters' => 
      array (
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_draft_create' => 
    array (
      'parameters' => 
      array (
        'source' => 
        array (
          'type' => 'object',
        ),
        'flush' => 
        array (
          'type' => 'boolean',
          'default' => true,
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@draft_create' => 
          array (
            'source' => '$.source',
            'target' => '$.target',
          ),
        ),
        1 => 
        array (
          '@tree' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => true,
                1 => '$.flush',
              ),
            ),
            'actions' => 
            array (
              0 => 
              array (
                '@flush_entity' => '$.target',
              ),
              1 => 
              array (
                '@flash_message' => 
                array (
                  'message' => 'oro.draft.operations.create.success',
                  'type' => 'success',
                ),
              ),
              2 => 
              array (
                '@draft_redirect' => 
                array (
                  'source' => '$.target',
                  'route' => '$.routes[update]',
                ),
              ),
            ),
          ),
        ),
      ),
      'conditions' => 
      array (
      ),
    ),
    'oro_draft_publish' => 
    array (
      'parameters' => 
      array (
        'source' => 
        array (
          'type' => 'object',
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@draft_publish' => 
          array (
            'source' => '$.source',
            'target' => '$.target',
          ),
        ),
        1 => 
        array (
          '@remove_entity' => '$.source',
        ),
        2 => 
        array (
          '@flush_entity' => '$.target',
        ),
        3 => 
        array (
          '@flash_message' => 
          array (
            'message' => 'oro.draft.operations.publish.success',
            'type' => 'success',
          ),
        ),
        4 => 
        array (
          '@draft_redirect' => 
          array (
            'source' => '$.target',
            'route' => '$.routes[view]',
          ),
        ),
      ),
      'conditions' => 
      array (
      ),
    ),
    'DELETE' => 
    array (
      'parameters' => 
      array (
        'data' => 
        array (
        ),
      ),
      'acl_resource' => 
      array (
        0 => 'DELETE',
        1 => '$.data',
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@call_service_method' => 
          array (
            'service' => 'oro_action.handler.delete',
            'method' => 'handleDelete',
            'method_parameters' => 
            array (
              0 => '$.data',
            ),
          ),
        ),
      ),
      'conditions' => 
      array (
      ),
    ),
    'transit_workflow_by_record_group' => 
    array (
      'parameters' => 
      array (
        'entity' => 
        array (
          'type' => 'object',
        ),
        'transition' => 
        array (
          'type' => 'string',
        ),
        'recordGroup' => 
        array (
          'type' => 'string',
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@get_available_workflow_by_record_group' => 
          array (
            'attribute' => '$.currentWorkflow',
            'entity_class' => '$.entity',
            'group_name' => '$.recordGroup',
          ),
        ),
        1 => 
        array (
          '@transit_workflow' => 
          array (
            'entity' => '$.entity',
            'workflow' => '$.currentWorkflow.name',
            'transition' => '$.transition',
          ),
        ),
      ),
      'conditions' => 
      array (
      ),
    ),
    'update_workflow_item_by_record_group' => 
    array (
      'parameters' => 
      array (
        'entity' => 
        array (
          'type' => 'object',
        ),
        'recordGroup' => 
        array (
          'type' => 'string',
        ),
        'data' => 
        array (
          'type' => 'array',
        ),
        'flush' => 
        array (
          'type' => 'bool',
          'default' => true,
        ),
      ),
      'actions' => 
      array (
        0 => 
        array (
          '@get_available_workflow_by_record_group' => 
          array (
            'attribute' => '$.currentWorkflow',
            'entity_class' => '$.entity',
            'group_name' => '$.recordGroup',
          ),
        ),
        1 => 
        array (
          '@call_service_method' => 
          array (
            'attribute' => '$.workflowItem',
            'service' => 'oro_workflow.manager',
            'method' => 'getWorkflowItem',
            'method_parameters' => 
            array (
              0 => '$.entity',
              1 => '$.currentWorkflow.name',
            ),
          ),
        ),
        2 => 
        array (
          '@copy_values' => 
          array (
            0 => '$.workflowItem.data',
            1 => '$.data',
          ),
        ),
        3 => 
        array (
          '@call_method' => 
          array (
            'object' => '$.workflowItem',
            'method' => 'setUpdated',
          ),
        ),
        4 => 
        array (
          '@flush_entity' => 
          array (
            'conditions' => 
            array (
              '@equal' => 
              array (
                0 => true,
                1 => '$.flush',
              ),
            ),
            'parameters' => 
            array (
              0 => '$.workflowItem',
            ),
          ),
        ),
      ),
      'conditions' => 
      array (
      ),
    ),
  ),
);