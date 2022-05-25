<?php
/**
 * This file has been auto-generated
 * by the PubSubRouterBundle.
 */
return [
    [ // $staticRoutes
        'oro/ping' => [['oro_sync.ping', [], 'oro/ping', 'oro_sync.ping', [], [], ['compiler_class' => 'Gos\\Bundle\\PubSubRouterBundle\\Router\\RouteCompiler']]],
        'oro/data/update' => [['oro_sync.data_update', [], 'oro/data/update', 'oro_sync.data_update', [], [], ['compiler_class' => 'Gos\\Bundle\\PubSubRouterBundle\\Router\\RouteCompiler']]],
        'oro/maintenance' => [['oro_sync.maintenance', [], 'oro/maintenance', 'oro_sync.maintenance', [], [], ['compiler_class' => 'Gos\\Bundle\\PubSubRouterBundle\\Router\\RouteCompiler']]],
        'oro/message_queue_heartbeat' => [['oro_message_queue.message_queue_heartbeat', [], 'oro/message_queue_heartbeat', 'oro_message_queue.message_queue_heartbeat', [], [], ['compiler_class' => 'Gos\\Bundle\\PubSubRouterBundle\\Router\\RouteCompiler']]],
        'oro/outdated_user_page' => [['oro_user.outdated_user_page', [], 'oro/outdated_user_page', 'oro_user.outdated_user_page', [], [], ['compiler_class' => 'Gos\\Bundle\\PubSubRouterBundle\\Router\\RouteCompiler']]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|oro/(?'
                    .'|email_event/(\\d+)/(\\d+|\\*)(*:40)'
                    .'|attribute_import/(\\d+)/(\\d+)(*:75)'
                    .'|imap_sync_fail/(\\d+|\\*)(*:105)'
                    .'|reminder_remind/(\\d+)(*:134)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        40 => [['oro_email.event', ['user_id', 'organization_id'], 'oro/email_event/{user_id}/{organization_id}', 'oro_email.event', [], ['user_id' => '\\d+', 'organization_id' => '\\d+|\\*'], ['compiler_class' => 'Gos\\Bundle\\PubSubRouterBundle\\Router\\RouteCompiler']]],
        75 => [['oro_entity_config.attribute_import', ['user_id', 'config_model_id'], 'oro/attribute_import/{user_id}/{config_model_id}', 'oro_entity_config.attribute_import', [], ['user_id' => '\\d+', 'config_model_id' => '\\d+'], ['compiler_class' => 'Gos\\Bundle\\PubSubRouterBundle\\Router\\RouteCompiler']]],
        105 => [['oro_imap.sync_fail', ['user_id'], 'oro/imap_sync_fail/{user_id}', 'oro_imap.sync_fail', [], ['user_id' => '\\d+|\\*'], ['compiler_class' => 'Gos\\Bundle\\PubSubRouterBundle\\Router\\RouteCompiler']]],
        134 => [
            ['oro_reminder.remind', ['user_id'], 'oro/reminder_remind/{user_id}', 'oro_reminder.remind', [], ['user_id' => '\\d+'], ['compiler_class' => 'Gos\\Bundle\\PubSubRouterBundle\\Router\\RouteCompiler']],
            [null, null, null, null, false, false, 0],
        ],
    ],
];