<?php return array (
  'base-email-grid' => 
  array (
    'acl_resource' => 'oro_email_email_user_view',
    'source' => 
    array (
      'type' => 'orm',
      'count_query' => 
      array (
        'select' => 
        array (
          0 => 'eu.id',
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'eu.email',
              'alias' => 'e',
            ),
            1 => 
            array (
              'join' => 'eu.folders',
              'alias' => 'f',
            ),
            2 => 
            array (
              'join' => 'f.origin',
              'alias' => 'o',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'o.isActive = true',
          ),
        ),
        'groupBy' => 'eu.id',
      ),
      'query' => 
      array (
        'select' => 
        array (
          0 => 'eu.id AS id',
          1 => 'eu.seen AS seen',
          2 => 'eu.receivedAt AS receivedAt',
          3 => 'IDENTITY(eu.origin) AS originId',
          4 => 'IDENTITY(eu.owner) AS ownerId',
          5 => 'e.id AS emailId',
          6 => 'e.subject AS subject',
          7 => 'e.sentAt AS sentAt',
          8 => 'e.fromName AS fromName',
          9 => 'IDENTITY(e.fromEmailAddress) AS fromEmailAddressId',
          10 => 'IDENTITY(e.thread) AS threadId',
          11 => 'eb.textBody AS body_content',
          12 => 'CASE
    WHEN e.thread IS NULL THEN eb.hasAttachments
    WHEN EXISTS(
        SELECT 1
        FROM Oro\\Bundle\\EmailBundle\\Entity\\EmailAttachment _ea
        JOIN _ea.emailBody _eb
        JOIN _eb.email _e
        JOIN _e.thread _t
        WHERE _t = e.thread
    ) THEN true
    ELSE false
END AS has_attachments
',
          13 => 'CASE WHEN eu.seen = true THEN 0 ELSE 1 END AS is_new',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EmailBundle\\Entity\\EmailUser',
            'alias' => 'eu',
          ),
        ),
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'eu.email',
              'alias' => 'e',
            ),
          ),
          'left' => 
          array (
            0 => 
            array (
              'join' => 'e.emailBody',
              'alias' => 'eb',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'EXISTS (
    SELECT 1 FROM Oro\\Bundle\\EmailBundle\\Entity\\EmailUser act_eu
    JOIN act_eu.folders act_f
    JOIN act_f.origin act_o
    WHERE act_o.isActive = true AND eu.id = act_eu.id
)
',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'mailbox' => 
      array (
        'data_name' => 'origin',
        'label' => 'oro.email.mailbox.entity_label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroEmail/Email/Datagrid/Property/mailbox.html.twig',
        'renderable' => false,
      ),
      'contacts' => 
      array (
        'data_name' => NULL,
        'type' => 'twig',
        'label' => 'oro.email.contact.label',
        'frontend_type' => 'html',
        'template' => '@OroEmail/Email/Datagrid/Property/contacts.html.twig',
      ),
      'subject' => 
      array (
        'data_name' => 'subject',
        'type' => 'twig',
        'label' => 'oro.email.subject.label',
        'frontend_type' => 'html',
        'template' => '@OroEmail/Email/Datagrid/Property/subject.html.twig',
      ),
      'attachments' => 
      array (
        'data_name' => 'has_attachments',
        'type' => 'twig',
        'label' => NULL,
        'notMarkAsBlank' => true,
        'frontend_type' => 'html',
        'template' => '@OroEmail/Email/Datagrid/Property/attachments.html.twig',
        'manageable' => false,
      ),
      'receivedAt' => 
      array (
        'data_name' => 'receivedAt',
        'type' => 'twig',
        'label' => 'oro.email.date.label',
        'frontend_type' => 'html',
        'template' => '@OroEmail/Email/Datagrid/Property/date.html.twig',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'subject' => 
        array (
          'data_name' => 'subject',
        ),
        'receivedAt' => 
        array (
          'data_name' => 'receivedAt',
        ),
        'mailbox' => 
        array (
          'data_name' => 'originId',
        ),
      ),
      'default' => 
      array (
        'receivedAt' => 'DESC',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.email.entity_plural_label',
    ),
  ),
);