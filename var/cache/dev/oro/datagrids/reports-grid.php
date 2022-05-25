<?php return array (
  'reports-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\ReportBundle\\Entity\\Report',
    'acl_resource' => 'oro_report_view',
    'features' => 
    array (
      'entity_class_name_path' => 'r.entity',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'r.id',
          1 => 'r.name',
          2 => 'r.entity',
          3 => 'type.label as reportType',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\ReportBundle\\Entity\\Report',
            'alias' => 'r',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'r.type',
              'alias' => 'type',
            ),
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_report_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_report_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'clone_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_report_clone',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_report',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.report.name.label',
      ),
      'entity' => 
      array (
        'label' => 'oro.report.entity.label',
        'type' => 'twig',
        'template' => '@OroEntity/Datagrid/Property/entity.html.twig',
        'frontend_type' => 'html',
        'context' => 
        array (
          'entity_provider' => '@oro_report.entity_provider',
        ),
      ),
      'reportType' => 
      array (
        'label' => 'oro.report.type.label',
        'type' => 'translatable',
        'choices' => '@oro_report.report_manager->getReportTypeChoices',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'r.name',
        ),
      ),
      'default' => 
      array (
        'name' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'r.name',
        ),
        'entity' => 
        array (
          'type' => 'choice',
          'data_name' => 'r.entity',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_entity.datagrid_helper->getEntityNames',
              'translatable_options' => false,
            ),
          ),
        ),
        'reportType' => 
        array (
          'type' => 'choice',
          'data_name' => 'r.type',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_report.report_manager->getReportTypeChoices',
            ),
          ),
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_report_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_report_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
        'launcherOptions' => 
        array (
          'className' => 'no-hash mobile-hide',
        ),
      ),
      'clone' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_report_create',
        'label' => 'oro.report.action.clone.button.label',
        'icon' => 'files-o',
        'link' => 'clone_link',
        'launcherOptions' => 
        array (
          'className' => 'no-hash mobile-hide',
        ),
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_report_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
        'launcherOptions' => 
        array (
          'className' => 'no-hash mobile-hide',
        ),
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.report.entity_plural_label',
    ),
  ),
);