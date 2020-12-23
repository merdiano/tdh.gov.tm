<?php

return [
    'plugin' => [
        'name' => 'Mailgun Endpoint',
        'description' => 'No description provided yet...',
    ],
    'permissions' => [
        'some_permission' => 'Permission example',
    ],
    'components' => [
        'mailgunendpoint' => [
            'name' => 'MailgunEndpoint Component',
            'description' => 'No description provided yet...',
        ],
    ],
    'mailgunnotification' => [
        'new' => 'New Mailgun Notification',
        'label' => 'Mailgun Notification',
        'create_title' => 'Create Mailgun Notification',
        'update_title' => 'Edit Mailgun Notification',
        'preview_title' => 'Preview Mailgun Notification',
        'list_title' => 'Manage Mailgun Notifications',
    ],
    'mailgunnotifications' => [
        'delete_selected_confirm' => 'Delete the selected Mailgun Notifications?',
        'menu_label' => 'Mailgun Notifications',
        'return_to_list' => 'Return to Mailgun Notifications',
        'delete_confirm' => 'Do you really want to delete this Mailgun Notification?',
        'delete_selected_success' => 'Successfully deleted the selected Mailgun Notifications.',
        'delete_selected_empty' => 'There are no selected Mailgun Notifications to delete.',
    ],
];