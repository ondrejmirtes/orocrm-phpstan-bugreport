<?php return array (
  'config' => 
  array (
    'api_plain.yml' => 
    array (
      'entities' => 
      array (
        'Oro\\Bundle\\ContactBundle\\Entity\\Contact' => 
        array (
          'fields' => 
          array (
            'addresses' => 
            array (
              'collapse' => false,
              'fields' => 
              array (
                'owner' => 
                array (
                  'exclude' => true,
                ),
                'types' => 
                array (
                  'order_by' => 
                  array (
                    'name' => 'ASC',
                  ),
                ),
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer' => 
        array (
          'fields' => 
          array (
            'shippingAddress' => 
            array (
              'collapse' => false,
              'fields' => 
              array (
                'owner' => 
                array (
                  'exclude' => true,
                ),
              ),
            ),
            'billingAddress' => 
            array (
              'collapse' => false,
              'fields' => 
              array (
                'owner' => 
                array (
                  'exclude' => true,
                ),
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\Lead' => 
        array (
          'fields' => 
          array (
            'addresses' => 
            array (
              'collapse' => false,
              'fields' => 
              array (
                'owner' => 
                array (
                  'exclude' => true,
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'api.yml' => 
    array (
      'entities' => 
      array (
        'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroOrganizationBundle/Resources/doc/api/business_unit.md',
          ),
          'actions' => 
          array (
            'delete' => 
            array (
              'exclude' => false,
            ),
            'delete_list' => 
            array (
              'exclude' => false,
            ),
            'create' => 
            array (
              'exclude' => false,
            ),
            'update' => 
            array (
              'exclude' => false,
            ),
          ),
        ),
        'Oro\\Bundle\\OrganizationBundle\\Entity\\Organization' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroOrganizationBundle/Resources/doc/api/organization.md',
          ),
          'actions' => 
          array (
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\AttachmentBundle\\Entity\\Attachment' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroAttachmentBundle/Resources/doc/api/attachment.md',
          ),
          'fields' => 
          array (
            'target' => 
            array (
              'data_type' => 'association:manyToOne',
            ),
          ),
        ),
        'Oro\\Bundle\\AttachmentBundle\\Entity\\File' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroAttachmentBundle/Resources/doc/api/file.md',
          ),
          'fields' => 
          array (
            'uuid' => 
            array (
              'form_options' => 
              array (
                'mapped' => false,
              ),
            ),
            'filename' => 
            array (
              'exclude' => true,
            ),
            'extension' => 
            array (
              'exclude' => true,
            ),
            'content' => 
            array (
              'data_type' => 'string',
              'property_path' => '_',
              'depends_on' => 
              array (
                0 => 'filename',
              ),
              'form_options' => 
              array (
                'property_path' => 'externalFile',
                'allow_file_upload' => true,
              ),
            ),
            'parent' => 
            array (
              'data_type' => 'nestedAssociation',
              'fields' => 
              array (
                '__class__' => 
                array (
                  'property_path' => 'parentEntityClass',
                ),
                'id' => 
                array (
                  'property_path' => 'parentEntityId',
                ),
              ),
            ),
            'parentFieldName' => 
            array (
              'property_path' => 'parentEntityFieldName',
            ),
          ),
          'actions' => 
          array (
            'get_list' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\EmailBundle\\Entity\\Email' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroEmailBundle/Resources/doc/api/email.md',
          ),
          'actions' => 
          array (
            'get' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
          ),
          'subresources' => 
          array (
            'recipients' => 
            array (
              'exclude' => true,
            ),
            'suggestions' => 
            array (
              'target_class' => 'Oro\\Bundle\\ApiBundle\\Model\\EntityIdentifier',
              'target_type' => 'to-many',
              'actions' => 
              array (
                'get_relationship' => 
                array (
                  'exclude' => true,
                ),
                'update_relationship' => 
                array (
                  'exclude' => true,
                ),
                'add_relationship' => 
                array (
                  'exclude' => true,
                ),
                'delete_relationship' => 
                array (
                  'exclude' => true,
                ),
              ),
              'filters' => 
              array (
                'fields' => 
                array (
                  'exclude-current-user' => 
                  array (
                    'data_type' => 'boolean',
                  ),
                ),
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\UserBundle\\Entity\\Group' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroUserBundle/Resources/doc/api/group.md',
          ),
        ),
        'Oro\\Bundle\\UserBundle\\Entity\\Role' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroUserBundle/Resources/doc/api/role.md',
          ),
        ),
        'Oro\\Bundle\\UserBundle\\Entity\\User' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroUserBundle/Resources/doc/api/user.md',
          ),
          'fields' => 
          array (
            'emails' => 
            array (
              'data_type' => 'objects',
              'exclusion_policy' => 'all',
              'fields' => 
              array (
                'email' => 
                array (
                ),
              ),
            ),
            'emailLowercase' => 
            array (
              'exclude' => true,
            ),
            'usernameLowercase' => 
            array (
              'exclude' => true,
            ),
            'passwordChangedAt' => 
            array (
              'form_options' => 
              array (
                'mapped' => false,
              ),
            ),
            'passwordRequestedAt' => 
            array (
              'form_options' => 
              array (
                'mapped' => false,
              ),
            ),
            'loginCount' => 
            array (
              'form_options' => 
              array (
                'mapped' => false,
              ),
            ),
            'lastLogin' => 
            array (
              'form_options' => 
              array (
                'mapped' => false,
              ),
            ),
          ),
          'actions' => 
          array (
            'delete' => 
            array (
              'exclude' => false,
            ),
            'delete_list' => 
            array (
              'exclude' => false,
            ),
            'create' => 
            array (
              'exclude' => false,
              'fields' => 
              array (
                'password' => 
                array (
                  'exclude' => false,
                  'form_options' => 
                  array (
                    'property_path' => 'plainPassword',
                  ),
                ),
              ),
            ),
            'update' => 
            array (
              'exclude' => false,
            ),
          ),
        ),
        'Extend\\Entity\\EV_Auth_Status' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroUserBundle/Resources/doc/api/user.md',
          ),
        ),
        'Oro\\Bundle\\UserBundle\\Entity\\Email' => 
        array (
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\UserBundle\\Api\\Model\\UserProfile' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroUserBundle/Resources/doc/api/user_profile.md',
          ),
          'actions' => 
          array (
            'get' => 
            array (
              'description' => 'Get current logged in user',
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\EntityBundle\\Entity\\EntityFieldFallbackValue' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroEntityBundle/Resources/doc/api/entity_field_fallback_value.md',
          ),
          'actions' => 
          array (
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\EntityBundle\\Model\\EntityStructure' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroEntityBundle/Resources/doc/api/entity_structure.md',
          ),
          'disable_meta_properties' => true,
          'identifier_field_names' => 
          array (
            0 => 'id',
          ),
          'fields' => 
          array (
            'id' => 
            array (
              'data_type' => 'string',
            ),
            'label' => 
            array (
              'data_type' => 'string',
            ),
            'pluralLabel' => 
            array (
              'data_type' => 'string',
            ),
            'alias' => 
            array (
              'data_type' => 'string',
            ),
            'pluralAlias' => 
            array (
              'data_type' => 'string',
            ),
            'className' => 
            array (
              'data_type' => 'string',
            ),
            'icon' => 
            array (
              'data_type' => 'string',
            ),
            'fields' => 
            array (
              'data_type' => 'objects',
              'target_class' => 'Oro\\Bundle\\EntityBundle\\Model\\EntityFieldStructure',
              'target_type' => 'to-many',
              'fields' => 
              array (
                'label' => 
                array (
                  'data_type' => 'string',
                ),
                'name' => 
                array (
                  'data_type' => 'string',
                ),
                'type' => 
                array (
                  'data_type' => 'string',
                ),
                'relationType' => 
                array (
                  'data_type' => 'string',
                ),
                'relatedEntityName' => 
                array (
                  'data_type' => 'string',
                ),
                'options' => 
                array (
                  'data_type' => 'object',
                ),
              ),
            ),
            'options' => 
            array (
              'data_type' => 'object',
            ),
            'routes' => 
            array (
              'data_type' => 'object',
            ),
          ),
          'actions' => 
          array (
            'get_list' => 
            array (
              'page_size' => -1,
              'disable_sorting' => true,
              'max_results' => -1,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\LocaleBundle\\Entity\\Localization' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroLocaleBundle/Resources/doc/api/localization.md',
          ),
          'actions' => 
          array (
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\LocaleBundle\\Entity\\LocalizedFallbackValue' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroLocaleBundle/Resources/doc/api/localization.md',
          ),
          'actions' => 
          array (
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\EntityConfigBundle\\Attribute\\Entity\\AttributeFamily' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroEntityConfigBundle/Resources/doc/api/attribute_family.md',
          ),
          'fields' => 
          array (
            'entityClass' => 
            array (
              'exclude' => true,
            ),
          ),
          'actions' => 
          array (
            'create' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\IntegrationBundle\\Entity\\Channel' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroIntegrationBundle/Resources/doc/api/channel.md',
          ),
          'fields' => 
          array (
            'mappingSettings' => 
            array (
              'exclude' => true,
            ),
            'connectors' => 
            array (
              'exclude' => true,
            ),
            'editMode' => 
            array (
              'exclude' => true,
            ),
            'previouslyEnabled' => 
            array (
              'exclude' => true,
            ),
            'synchronizationSettings' => 
            array (
              'exclude' => true,
            ),
            'defaultBusinessUnitOwner' => 
            array (
              'exclude' => true,
            ),
            'defaultUserOwner' => 
            array (
              'exclude' => true,
            ),
            'organization' => 
            array (
              'exclude' => true,
            ),
          ),
          'actions' => 
          array (
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\AddressBundle\\Entity\\Address' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroAddressBundle/Resources/doc/api/address.md',
          ),
          'fields' => 
          array (
            'createdAt' => 
            array (
              'property_path' => 'created',
            ),
            'updatedAt' => 
            array (
              'property_path' => 'updated',
            ),
            'customRegion' => 
            array (
              'exclude' => false,
              'property_path' => 'regionText',
            ),
          ),
        ),
        'Oro\\Bundle\\AddressBundle\\Entity\\AddressType' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroAddressBundle/Resources/doc/api/address.md',
          ),
          'filters' => 
          array (
            'fields' => 
            array (
              'name' => 
              array (
                'allow_array' => true,
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\AddressBundle\\Entity\\Region' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroAddressBundle/Resources/doc/api/region.md',
          ),
          'filters' => 
          array (
            'fields' => 
            array (
              'combinedCode' => 
              array (
                'allow_array' => true,
              ),
              'country' => 
              array (
                'allow_array' => true,
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\AddressBundle\\Entity\\Country' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroAddressBundle/Resources/doc/api/country.md',
          ),
          'fields' => 
          array (
            'regions' => 
            array (
              'max_results' => -1,
            ),
          ),
          'filters' => 
          array (
            'fields' => 
            array (
              'iso2Code' => 
              array (
                'allow_array' => true,
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\ApiBundle\\Model\\EntityIdentifier' => 
        array (
          'identifier_field_names' => 
          array (
            0 => 'id',
          ),
          'fields' => 
          array (
            '__class__' => 
            array (
              'meta_property' => true,
              'data_type' => 'string',
            ),
            'id' => 
            array (
              'data_type' => 'string',
            ),
          ),
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\ApiBundle\\Entity\\AsyncOperation' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroApiBundle/Resources/doc/api/async_operation.md',
          ),
          'fields' => 
          array (
            'entityType' => 
            array (
              'data_type' => 'entityType',
              'property_path' => 'entityClass',
            ),
            'summary' => 
            array (
              'depends_on' => 
              array (
                0 => 'status',
              ),
            ),
            'hasErrors' => 
            array (
              'exclude' => true,
            ),
            'jobId' => 
            array (
              'exclude' => true,
            ),
            'dataFileName' => 
            array (
              'exclude' => true,
            ),
            'actionName' => 
            array (
              'exclude' => true,
            ),
          ),
          'actions' => 
          array (
            'get' => 
            array (
              'description' => 'Get asynchronous operation',
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
          ),
          'subresources' => 
          array (
            'owner' => 
            array (
              'actions' => 
              array (
                'get_relationship' => 
                array (
                  'exclude' => true,
                ),
                'get_subresource' => 
                array (
                  'exclude' => true,
                ),
              ),
            ),
            'organization' => 
            array (
              'actions' => 
              array (
                'get_relationship' => 
                array (
                  'exclude' => true,
                ),
                'get_subresource' => 
                array (
                  'exclude' => true,
                ),
              ),
            ),
            'errors' => 
            array (
              'target_class' => 'Oro\\Bundle\\ApiBundle\\Batch\\Model\\BatchError',
              'target_type' => 'to-many',
              'actions' => 
              array (
                'get_subresource' => 
                array (
                  'description' => 'Get errors occurred when processing an asynchronous operation',
                  'disable_fieldset' => true,
                  'disable_inclusion' => true,
                  'disable_sorting' => true,
                ),
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\ApiBundle\\Batch\\Model\\BatchError' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroApiBundle/Resources/doc/api/async_operation.md',
          ),
          'disable_meta_properties' => true,
          'identifier_field_names' => 
          array (
            0 => 'id',
          ),
          'fields' => 
          array (
            'id' => 
            array (
              'data_type' => 'string',
            ),
            'status' => 
            array (
              'data_type' => 'string',
              'property_path' => 'statusCode',
            ),
            'title' => 
            array (
              'data_type' => 'string',
            ),
            'detail' => 
            array (
              'data_type' => 'string',
            ),
            'source' => 
            array (
              'data_type' => 'object',
            ),
          ),
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\ConfigBundle\\Api\\Model\\ConfigurationSection' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroConfigBundle/Resources/doc/api/configuration.md',
          ),
          'disable_meta_properties' => true,
          'identifier_field_names' => 
          array (
            0 => 'id',
          ),
          'fields' => 
          array (
            'id' => 
            array (
              'data_type' => 'string',
            ),
            'options' => 
            array (
              'target_class' => 'Oro\\Bundle\\ConfigBundle\\Api\\Model\\ConfigurationOption',
              'target_type' => 'to-many',
              'max_results' => -1,
            ),
          ),
          'actions' => 
          array (
            'get' => 
            array (
              'acl_resource' => 'oro_config_system',
            ),
            'get_list' => 
            array (
              'acl_resource' => 'oro_config_system',
              'page_size' => -1,
              'disable_sorting' => true,
              'max_results' => -1,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\ConfigBundle\\Api\\Model\\ConfigurationOption' => 
        array (
          'disable_meta_properties' => true,
          'identifier_field_names' => 
          array (
            0 => 'key',
          ),
          'fields' => 
          array (
            'key' => 
            array (
              'data_type' => 'string',
            ),
            'scope' => 
            array (
              'data_type' => 'string',
            ),
            'dataType' => 
            array (
              'data_type' => 'string',
            ),
            'value' => 
            array (
              'data_type' => 'string',
            ),
            'createdAt' => 
            array (
              'data_type' => 'datetime',
            ),
            'updatedAt' => 
            array (
              'data_type' => 'datetime',
            ),
          ),
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\NoteBundle\\Entity\\Note' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroNoteBundle/Resources/doc/api/note.md',
          ),
        ),
        'Oro\\Bundle\\SearchBundle\\Api\\Model\\SearchEntity' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSearchBundle/Resources/doc/api/search_entity.md',
          ),
          'disable_meta_properties' => true,
          'disable_fieldset' => true,
          'identifier_field_names' => 
          array (
            0 => 'id',
          ),
          'fields' => 
          array (
            'id' => 
            array (
              'data_type' => 'string',
            ),
            'entityType' => 
            array (
              'data_type' => 'string',
            ),
            'entityName' => 
            array (
              'data_type' => 'string',
            ),
            'searchable' => 
            array (
              'data_type' => 'bool',
            ),
          ),
          'filters' => 
          array (
            'fields' => 
            array (
              'searchable' => 
              array (
                'data_type' => 'boolean',
                'operators' => 
                array (
                  0 => 'eq',
                ),
                'property_path' => '_',
              ),
            ),
          ),
          'actions' => 
          array (
            'get_list' => 
            array (
              'page_size' => -1,
              'disable_sorting' => true,
              'max_results' => -1,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\SearchBundle\\Api\\Model\\SearchItem' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSearchBundle/Resources/doc/api/search.md',
          ),
          'identifier_field_names' => 
          array (
            0 => 'id',
          ),
          'disable_meta_properties' => true,
          'fields' => 
          array (
            'id' => 
            array (
              'data_type' => 'integer',
            ),
            'entityTitle' => 
            array (
              'data_type' => 'string',
            ),
            'entity' => 
            array (
              'data_type' => 'nestedAssociation',
              'fields' => 
              array (
                '__class__' => 
                array (
                  'property_path' => 'entityClass',
                ),
                'id' => 
                array (
                  'property_path' => 'entityId',
                ),
              ),
            ),
            'entityClass' => 
            array (
              'data_type' => 'string',
            ),
            'entityId' => 
            array (
              'data_type' => 'string',
            ),
            'entityUrl' => 
            array (
              'data_type' => 'string',
            ),
          ),
          'filters' => 
          array (
            'fields' => 
            array (
              'searchText' => 
              array (
                'data_type' => 'string',
                'operators' => 
                array (
                  0 => 'eq',
                ),
                'property_path' => '_',
              ),
              'entities' => 
              array (
                'data_type' => 'string',
                'allow_array' => true,
                'operators' => 
                array (
                  0 => 'eq',
                ),
                'property_path' => '_',
              ),
            ),
          ),
          'actions' => 
          array (
            'get_list' => 
            array (
              'disable_sorting' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\TagBundle\\Entity\\Tag' => 
        array (
        ),
        'Oro\\Bundle\\TagBundle\\Entity\\Taxonomy' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroTagBundle/Resources/doc/api/taxonomic_unit.md',
          ),
          'fields' => 
          array (
            'createdAt' => 
            array (
              'property_path' => 'created',
            ),
            'updatedAt' => 
            array (
              'property_path' => 'updated',
            ),
          ),
          'actions' => 
          array (
            'delete' => 
            array (
              'exclude' => false,
            ),
            'delete_list' => 
            array (
              'exclude' => false,
            ),
          ),
        ),
        'Oro\\Bundle\\CommentBundle\\Entity\\Comment' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroCommentBundle/Resources/doc/api/comment.md',
          ),
          'fields' => 
          array (
            'target' => 
            array (
              'data_type' => 'association:manyToOne',
            ),
          ),
        ),
        'Extend\\Entity\\EV_Ce_Attendee_Status' => 
        array (
        ),
        'Extend\\Entity\\EV_Ce_Attendee_Type' => 
        array (
        ),
        'Oro\\Bundle\\ContactBundle\\Entity\\Contact' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroContactBundle/Resources/doc/api/contact.md',
          ),
          'fields' => 
          array (
            'email' => 
            array (
              'exclude' => true,
            ),
            'phones' => 
            array (
              'data_type' => 'objects',
              'exclusion_policy' => 'all',
              'fields' => 
              array (
                'phone' => 
                array (
                ),
              ),
            ),
            'primaryPhone' => 
            array (
              'data_type' => 'string',
              'depends_on' => 
              array (
                0 => 'phones.phone',
                1 => 'phones.primary',
              ),
              'property_path' => '_',
            ),
            'emails' => 
            array (
              'data_type' => 'objects',
              'exclusion_policy' => 'all',
              'fields' => 
              array (
                'email' => 
                array (
                ),
              ),
            ),
            'primaryEmail' => 
            array (
              'data_type' => 'string',
              'depends_on' => 
              array (
                0 => 'emails.email',
                1 => 'emails.primary',
              ),
              'form_options' => 
              array (
                'constraints' => 
                array (
                  0 => 
                  array (
                    'Email' => NULL,
                  ),
                ),
              ),
              'property_path' => '_',
            ),
          ),
          'filters' => 
          array (
            'fields' => 
            array (
              'phones' => 
              array (
                'data_type' => 'string',
                'allow_array' => true,
                'property_path' => 'phones.phone',
              ),
              'primaryPhone' => 
              array (
                'data_type' => 'string',
                'type' => 'primaryField',
                'property_path' => 'phones',
                'options' => 
                array (
                  'data_field' => 'phone',
                ),
              ),
              'emails' => 
              array (
                'data_type' => 'string',
                'allow_array' => true,
                'property_path' => 'emails.email',
              ),
              'primaryEmail' => 
              array (
                'data_type' => 'string',
                'property_path' => 'emails',
                'type' => 'primaryField',
                'options' => 
                array (
                  'data_field' => 'email',
                ),
              ),
            ),
          ),
          'sorters' => 
          array (
            'fields' => 
            array (
              'phones' => 
              array (
                'property_path' => 'phones.phone',
              ),
              'emails' => 
              array (
                'property_path' => 'emails.email',
              ),
            ),
          ),
          'subresources' => 
          array (
            'addresses' => 
            array (
              'actions' => 
              array (
                'update_relationship' => 
                array (
                  'exclude' => true,
                ),
                'add_relationship' => 
                array (
                  'exclude' => true,
                ),
                'delete_relationship' => 
                array (
                  'exclude' => true,
                ),
              ),
            ),
          ),
          'actions' => 
          array (
            'update_list' => 
            array (
              'exclude' => false,
            ),
          ),
        ),
        'Oro\\Bundle\\ContactBundle\\Entity\\ContactAddress' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroContactBundle/Resources/doc/api/contact_address.md',
          ),
          'fields' => 
          array (
            'createdAt' => 
            array (
              'property_path' => 'created',
            ),
            'updatedAt' => 
            array (
              'property_path' => 'updated',
            ),
            'customRegion' => 
            array (
              'exclude' => false,
              'property_path' => 'regionText',
            ),
          ),
          'actions' => 
          array (
            'update' => 
            array (
              'fields' => 
              array (
                'owner' => 
                array (
                  'form_options' => 
                  array (
                    'mapped' => false,
                  ),
                ),
              ),
            ),
          ),
          'subresources' => 
          array (
            'owner' => 
            array (
              'actions' => 
              array (
                'update_relationship' => 
                array (
                  'exclude' => true,
                ),
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\ContactBundle\\Entity\\ContactEmail' => 
        array (
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\ContactBundle\\Entity\\ContactPhone' => 
        array (
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\ContactBundle\\Entity\\Group' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroContactBundle/Resources/doc/api/group.md',
          ),
        ),
        'Oro\\Bundle\\ContactBundle\\Entity\\Method' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroContactBundle/Resources/doc/api/contact.md',
          ),
        ),
        'Oro\\Bundle\\ContactBundle\\Entity\\Source' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroContactBundle/Resources/doc/api/contact.md',
          ),
        ),
        'Oro\\Bundle\\AccountBundle\\Entity\\Account' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroAccountBundle/Resources/doc/api/account.md',
          ),
          'actions' => 
          array (
            'update_list' => 
            array (
              'exclude' => false,
            ),
          ),
        ),
        'Oro\\Bundle\\CallBundle\\Entity\\Call' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroCallBundle/Resources/doc/api/call.md',
          ),
          'fields' => 
          array (
            'direction' => 
            array (
              'exclude' => false,
            ),
          ),
          'filters' => 
          array (
            'fields' => 
            array (
              'updatedAt' => 
              array (
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\CallBundle\\Entity\\CallDirection' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroCallBundle/Resources/doc/api/call.md',
          ),
        ),
        'Oro\\Bundle\\CallBundle\\Entity\\CallStatus' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroCallBundle/Resources/doc/api/call.md',
          ),
        ),
        'Oro\\Bundle\\CampaignBundle\\Entity\\Campaign' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroCampaignBundle/Resources/doc/api/campaign.md',
          ),
          'fields' => 
          array (
            'combinedName' => 
            array (
              'exclude' => true,
            ),
            'reportRefreshDate' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\ChannelBundle\\Entity\\Channel' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroChannelBundle/Resources/doc/api/channel.md',
          ),
          'fields' => 
          array (
            'id' => 
            array (
            ),
            'name' => 
            array (
            ),
            'active' => 
            array (
              'property_path' => 'status',
            ),
            'owner' => 
            array (
              'exclude' => true,
            ),
            'customerIdentity' => 
            array (
              'exclude' => true,
            ),
            'entities' => 
            array (
              'data_type' => 'entityType[]',
              'exclusion_policy' => 'all',
              'collapse' => true,
              'fields' => 
              array (
                'name' => 
                array (
                  'data_type' => 'entityType',
                ),
              ),
            ),
            'data' => 
            array (
              'exclude' => true,
            ),
          ),
          'actions' => 
          array (
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\ChannelBundle\\Entity\\EntityName' => 
        array (
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\TaskBundle\\Entity\\Task' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroTaskBundle/Resources/doc/api/task.md',
          ),
          'filters' => 
          array (
            'fields' => 
            array (
              'ownerUsername' => 
              array (
                'data_type' => 'string',
                'property_path' => 'owner.username',
              ),
            ),
          ),
          'subresources' => 
          array (
            'createdBy' => 
            array (
              'actions' => 
              array (
                'get_subresource' => 
                array (
                  'exclude' => false,
                ),
                'get_relationship' => 
                array (
                  'exclude' => false,
                ),
                'update_relationship' => 
                array (
                  'exclude' => true,
                ),
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\TaskBundle\\Entity\\TaskPriority' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroTaskBundle/Resources/doc/api/task.md',
          ),
        ),
        'Extend\\Entity\\EV_Task_Status' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroTaskBundle/Resources/doc/api/task.md',
          ),
        ),
        'Oro\\Bundle\\MarketingActivityBundle\\Entity\\MarketingActivity' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroMarketingActivityBundle/Resources/doc/api/marketing_activity.md',
          ),
          'fields' => 
          array (
            'actionDate' => 
            array (
              'form_options' => 
              array (
                'constraints' => 
                array (
                  0 => 
                  array (
                    'NotBlank' => NULL,
                  ),
                ),
              ),
            ),
            'marketingActivityType' => 
            array (
              'property_path' => 'type',
              'form_options' => 
              array (
                'constraints' => 
                array (
                  0 => 
                  array (
                    'NotBlank' => NULL,
                  ),
                ),
              ),
            ),
            'entity' => 
            array (
              'data_type' => 'nestedAssociation',
              'fields' => 
              array (
                '__class__' => 
                array (
                  'property_path' => 'entityClass',
                ),
                'id' => 
                array (
                  'property_path' => 'entityId',
                ),
              ),
              'form_options' => 
              array (
                'constraints' => 
                array (
                  0 => 
                  array (
                    'NotBlank' => NULL,
                  ),
                ),
              ),
            ),
            'relatedCampaign' => 
            array (
              'data_type' => 'nestedAssociation',
              'fields' => 
              array (
                '__class__' => 
                array (
                  'property_path' => 'relatedCampaignClass',
                ),
                'id' => 
                array (
                  'property_path' => 'relatedCampaignId',
                ),
              ),
            ),
          ),
        ),
        'Extend\\Entity\\EV_Ma_Type' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroMarketingActivityBundle/Resources/doc/api/marketing_activity.md',
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSalesBundle/Resources/doc/api/b2b_customer.md',
          ),
          'fields' => 
          array (
            'phones' => 
            array (
              'data_type' => 'objects',
              'exclusion_policy' => 'all',
              'fields' => 
              array (
                'phone' => 
                array (
                ),
              ),
            ),
            'primaryPhone' => 
            array (
              'data_type' => 'string',
              'depends_on' => 
              array (
                0 => 'phones.phone',
                1 => 'phones.primary',
              ),
              'property_path' => '_',
            ),
            'emails' => 
            array (
              'data_type' => 'objects',
              'exclusion_policy' => 'all',
              'fields' => 
              array (
                'email' => 
                array (
                ),
              ),
            ),
            'primaryEmail' => 
            array (
              'data_type' => 'string',
              'depends_on' => 
              array (
                0 => 'emails.email',
                1 => 'emails.primary',
              ),
              'form_options' => 
              array (
                'constraints' => 
                array (
                  0 => 
                  array (
                    'Email' => NULL,
                  ),
                ),
              ),
              'property_path' => '_',
            ),
          ),
          'filters' => 
          array (
            'fields' => 
            array (
              'phones' => 
              array (
                'data_type' => 'string',
                'allow_array' => true,
                'property_path' => 'phones.phone',
              ),
              'primaryPhone' => 
              array (
                'data_type' => 'string',
                'type' => 'primaryField',
                'property_path' => 'phones',
                'options' => 
                array (
                  'data_field' => 'phone',
                ),
              ),
              'emails' => 
              array (
                'data_type' => 'string',
                'allow_array' => true,
                'property_path' => 'emails.email',
              ),
              'primaryEmail' => 
              array (
                'data_type' => 'string',
                'property_path' => 'emails',
                'type' => 'primaryField',
                'options' => 
                array (
                  'data_field' => 'email',
                ),
              ),
            ),
          ),
          'sorters' => 
          array (
            'fields' => 
            array (
              'phones' => 
              array (
                'property_path' => 'phones.phone',
              ),
              'emails' => 
              array (
                'property_path' => 'emails.email',
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomerPhone' => 
        array (
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomerEmail' => 
        array (
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\Lead' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSalesBundle/Resources/doc/api/lead.md',
          ),
          'fields' => 
          array (
            'phones' => 
            array (
              'data_type' => 'objects',
              'exclusion_policy' => 'all',
              'fields' => 
              array (
                'phone' => 
                array (
                ),
              ),
            ),
            'primaryPhone' => 
            array (
              'data_type' => 'string',
              'depends_on' => 
              array (
                0 => 'phones.phone',
                1 => 'phones.primary',
              ),
              'property_path' => '_',
            ),
            'emails' => 
            array (
              'data_type' => 'objects',
              'exclusion_policy' => 'all',
              'fields' => 
              array (
                'email' => 
                array (
                ),
              ),
            ),
            'primaryEmail' => 
            array (
              'data_type' => 'string',
              'depends_on' => 
              array (
                0 => 'emails.email',
                1 => 'emails.primary',
              ),
              'form_options' => 
              array (
                'constraints' => 
                array (
                  0 => 
                  array (
                    'Email' => NULL,
                  ),
                ),
              ),
              'property_path' => '_',
            ),
            'account' => 
            array (
              'property_path' => 'customerAssociation.account',
            ),
            'customer' => 
            array (
              'property_path' => 'customerAssociation.target',
            ),
          ),
          'filters' => 
          array (
            'fields' => 
            array (
              'phones' => 
              array (
                'data_type' => 'string',
                'allow_array' => true,
                'property_path' => 'phones.phone',
              ),
              'primaryPhone' => 
              array (
                'data_type' => 'string',
                'type' => 'primaryField',
                'property_path' => 'phones',
                'options' => 
                array (
                  'data_field' => 'phone',
                ),
              ),
              'emails' => 
              array (
                'data_type' => 'string',
                'allow_array' => true,
                'property_path' => 'emails.email',
              ),
              'primaryEmail' => 
              array (
                'data_type' => 'string',
                'property_path' => 'emails',
                'type' => 'primaryField',
                'options' => 
                array (
                  'data_field' => 'email',
                ),
              ),
            ),
          ),
          'sorters' => 
          array (
            'fields' => 
            array (
              'phones' => 
              array (
                'property_path' => 'phones.phone',
              ),
              'emails' => 
              array (
                'property_path' => 'emails.email',
              ),
            ),
          ),
          'subresources' => 
          array (
            'addresses' => 
            array (
              'actions' => 
              array (
                'update_relationship' => 
                array (
                  'exclude' => true,
                ),
                'add_relationship' => 
                array (
                  'exclude' => true,
                ),
                'delete_relationship' => 
                array (
                  'exclude' => true,
                ),
              ),
            ),
          ),
          'actions' => 
          array (
            'update_list' => 
            array (
              'exclude' => false,
            ),
          ),
        ),
        'Extend\\Entity\\EV_Lead_Status' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSalesBundle/Resources/doc/api/lead.md',
          ),
        ),
        'Extend\\Entity\\EV_Lead_Source' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSalesBundle/Resources/doc/api/lead.md',
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\LeadPhone' => 
        array (
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\LeadEmail' => 
        array (
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSalesBundle/Resources/doc/api/opportunity.md',
          ),
          'fields' => 
          array (
            'closedAt' => 
            array (
              'exclude' => true,
            ),
            'account' => 
            array (
              'property_path' => 'customerAssociation.account',
            ),
            'customer' => 
            array (
              'property_path' => 'customerAssociation.target',
            ),
          ),
          'actions' => 
          array (
            'update_list' => 
            array (
              'exclude' => false,
            ),
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\OpportunityCloseReason' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSalesBundle/Resources/doc/api/opportunity.md',
          ),
        ),
        'Extend\\Entity\\EV_Opportunity_Status' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSalesBundle/Resources/doc/api/opportunity.md',
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\Customer' => 
        array (
          'fields' => 
          array (
            'target' => 
            array (
              'data_type' => 'association:manyToOne:customer',
            ),
          ),
          'actions' => 
          array (
            'options' => 
            array (
              'exclude' => true,
            ),
            'get_list' => 
            array (
              'exclude' => true,
            ),
            'get' => 
            array (
              'exclude' => true,
            ),
            'delete' => 
            array (
              'exclude' => true,
            ),
            'delete_list' => 
            array (
              'exclude' => true,
            ),
            'create' => 
            array (
              'exclude' => true,
            ),
            'update' => 
            array (
              'exclude' => true,
            ),
            'update_list' => 
            array (
              'exclude' => true,
            ),
            'get_subresource' => 
            array (
              'exclude' => true,
            ),
            'delete_subresource' => 
            array (
              'exclude' => true,
            ),
            'add_subresource' => 
            array (
              'exclude' => true,
            ),
            'update_subresource' => 
            array (
              'exclude' => true,
            ),
            'get_relationship' => 
            array (
              'exclude' => true,
            ),
            'delete_relationship' => 
            array (
              'exclude' => true,
            ),
            'add_relationship' => 
            array (
              'exclude' => true,
            ),
            'update_relationship' => 
            array (
              'exclude' => true,
            ),
            'unhandled_error' => 
            array (
              'exclude' => true,
            ),
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\SalesFunnel' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSalesBundle/Resources/doc/api/sale_funnel.md',
          ),
        ),
        'Oro\\Bundle\\SalesBundle\\Entity\\LeadAddress' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroSalesBundle/Resources/doc/api/lead_address.md',
          ),
          'fields' => 
          array (
            'createdAt' => 
            array (
              'property_path' => 'created',
            ),
            'updatedAt' => 
            array (
              'property_path' => 'updated',
            ),
            'customRegion' => 
            array (
              'exclude' => false,
              'property_path' => 'regionText',
            ),
          ),
          'actions' => 
          array (
            'update' => 
            array (
              'fields' => 
              array (
                'owner' => 
                array (
                  'form_options' => 
                  array (
                    'mapped' => false,
                  ),
                ),
              ),
            ),
          ),
          'subresources' => 
          array (
            'owner' => 
            array (
              'actions' => 
              array (
                'update_relationship' => 
                array (
                  'exclude' => true,
                ),
              ),
            ),
          ),
        ),
        'Oro\\Bundle\\ContactUsBundle\\Entity\\ContactReason' => 
        array (
        ),
        'Oro\\Bundle\\CaseBundle\\Entity\\CaseComment' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroCaseBundle/Resources/doc/api/case_comment.md',
          ),
        ),
        'Oro\\Bundle\\CaseBundle\\Entity\\CaseEntity' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroCaseBundle/Resources/doc/api/case.md',
          ),
        ),
        'Oro\\Bundle\\CaseBundle\\Entity\\CasePriority' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroCaseBundle/Resources/doc/api/case.md',
          ),
        ),
        'Oro\\Bundle\\CaseBundle\\Entity\\CaseSource' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroCaseBundle/Resources/doc/api/case.md',
          ),
        ),
        'Oro\\Bundle\\CaseBundle\\Entity\\CaseStatus' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroCaseBundle/Resources/doc/api/case.md',
          ),
        ),
        'Oro\\Bundle\\ZendeskBundle\\Entity\\Ticket' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroZendeskBundle/Resources/doc/api/ticket.md',
          ),
        ),
        'Oro\\Bundle\\ZendeskBundle\\Entity\\TicketPriority' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroZendeskBundle/Resources/doc/api/ticket.md',
          ),
        ),
        'Oro\\Bundle\\ZendeskBundle\\Entity\\TicketStatus' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroZendeskBundle/Resources/doc/api/ticket.md',
          ),
        ),
        'Oro\\Bundle\\ZendeskBundle\\Entity\\TicketType' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroZendeskBundle/Resources/doc/api/ticket.md',
          ),
        ),
        'Oro\\Bundle\\ZendeskBundle\\Entity\\TicketComment' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroZendeskBundle/Resources/doc/api/ticket_comment.md',
          ),
        ),
        'Oro\\Bundle\\ZendeskBundle\\Entity\\User' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroZendeskBundle/Resources/doc/api/user.md',
          ),
        ),
        'Oro\\Bundle\\ZendeskBundle\\Entity\\UserRole' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroZendeskBundle/Resources/doc/api/user_role.md',
          ),
        ),
        'Extend\\Entity\\EV_Dm_Ab_Cnt_Exp_Type' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroDotmailerBundle/Resources/doc/api/address_book.md',
          ),
        ),
        'Extend\\Entity\\EV_Dm_Ab_Visibility' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroDotmailerBundle/Resources/doc/api/address_book.md',
          ),
        ),
        'Extend\\Entity\\EV_Dm_Cmp_Reply_Action' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroDotmailerBundle/Resources/doc/api/campaign.md',
          ),
        ),
        'Extend\\Entity\\EV_Dm_Cmp_Status' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroDotmailerBundle/Resources/doc/api/campaign.md',
          ),
        ),
        'Extend\\Entity\\EV_Dm_Cnt_Email_Type' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroDotmailerBundle/Resources/doc/api/contact.md',
          ),
        ),
        'Extend\\Entity\\EV_Dm_Cnt_Opt_In_Type' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroDotmailerBundle/Resources/doc/api/contact.md',
          ),
        ),
        'Extend\\Entity\\EV_Dm_Cnt_Status' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroDotmailerBundle/Resources/doc/api/contact.md',
          ),
        ),
        'Extend\\Entity\\EV_Dm_Import_Status' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroDotmailerBundle/Resources/doc/api/contact.md',
          ),
        ),
        'Extend\\Entity\\EV_Dm_Df_Type' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroDotmailerBundle/Resources/doc/api/data_field.md',
          ),
        ),
        'Extend\\Entity\\EV_Dm_Df_Visibility' => 
        array (
          'documentation_resource' => 
          array (
            0 => '@OroDotmailerBundle/Resources/doc/api/data_field.md',
          ),
        ),
      ),
    ),
  ),
  'aliases' => 
  array (
    'Extend\\Entity\\EV_Auth_Status' => 
    array (
      'alias' => 'userauthstatus',
      'plural_alias' => 'userauthstatuses',
    ),
    'Oro\\Bundle\\UserBundle\\Api\\Model\\UserProfile' => 
    array (
      'alias' => 'userprofile',
      'plural_alias' => 'userprofile',
    ),
    'Oro\\Bundle\\EntityBundle\\Model\\EntityStructure' => 
    array (
      'alias' => 'entitystructure',
      'plural_alias' => 'entitystructures',
    ),
    'Oro\\Bundle\\EntityBundle\\Model\\EntityFieldStructure' => 
    array (
      'alias' => 'entityfieldstructure',
      'plural_alias' => 'entityfieldstructures',
    ),
    'Oro\\Bundle\\ApiBundle\\Model\\EntityIdentifier' => 
    array (
      'alias' => 'entityidentifier',
      'plural_alias' => 'entityidentifiers',
    ),
    'Oro\\Bundle\\ApiBundle\\Batch\\Model\\BatchError' => 
    array (
      'alias' => 'asyncoperationerror',
      'plural_alias' => 'asyncoperationerrors',
    ),
    'Oro\\Bundle\\ConfigBundle\\Api\\Model\\ConfigurationSection' => 
    array (
      'alias' => 'configuration',
      'plural_alias' => 'configuration',
    ),
    'Oro\\Bundle\\ConfigBundle\\Api\\Model\\ConfigurationOption' => 
    array (
      'alias' => 'configurationoption',
      'plural_alias' => 'configurationoptions',
    ),
    'Oro\\Bundle\\SearchBundle\\Api\\Model\\SearchEntity' => 
    array (
      'alias' => 'searchentity',
      'plural_alias' => 'searchentities',
    ),
    'Oro\\Bundle\\SearchBundle\\Api\\Model\\SearchItem' => 
    array (
      'alias' => 'search',
      'plural_alias' => 'search',
    ),
    'Extend\\Entity\\EV_Ma_Type' => 
    array (
      'alias' => 'marketingactivitytype',
      'plural_alias' => 'marketingactivitytypes',
    ),
  ),
  'substitutions' => 
  array (
  ),
  'excluded_entities' => 
  array (
    0 => 'Oro\\Bundle\\TagBundle\\Entity\\Tag',
    1 => 'Extend\\Entity\\EV_Ce_Attendee_Status',
    2 => 'Extend\\Entity\\EV_Ce_Attendee_Type',
    3 => 'Oro\\Bundle\\ContactUsBundle\\Entity\\ContactReason',
  ),
  'exclusions' => 
  array (
    0 => 
    array (
      'entity' => 'Oro\\Bundle\\TagBundle\\Entity\\Tag',
    ),
    1 => 
    array (
      'entity' => 'Extend\\Entity\\EV_Ce_Attendee_Status',
    ),
    2 => 
    array (
      'entity' => 'Extend\\Entity\\EV_Ce_Attendee_Type',
    ),
    3 => 
    array (
      'entity' => 'Oro\\Bundle\\ContactUsBundle\\Entity\\ContactReason',
    ),
  ),
  'inclusions' => 
  array (
    0 => 
    array (
      'entity' => 'Oro\\Bundle\\AddressBundle\\Entity\\Address',
      'field' => 'customRegion',
    ),
    1 => 
    array (
      'entity' => 'Oro\\Bundle\\ContactBundle\\Entity\\ContactAddress',
      'field' => 'customRegion',
    ),
    2 => 
    array (
      'entity' => 'Oro\\Bundle\\CallBundle\\Entity\\Call',
      'field' => 'direction',
    ),
    3 => 
    array (
      'entity' => 'Oro\\Bundle\\SalesBundle\\Entity\\LeadAddress',
      'field' => 'customRegion',
    ),
  ),
);