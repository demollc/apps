<?php
//'version'  => '1.3.1.197',
return array (
    'id' => 'crm',
    'hooks' => array (
        'backend_assets' => array (
            'params' => false,
        ),
        'backend_invoice' => array (
            'params' => true,
        ),
        'backend_invoice_refund' => array (
            'params' => true,
        ),
        'backend_invoice_save' => array (
            'params' => true,
        ),
        'backend_notification_save' => array (
            'params' => true,
        ),
        'backend_profile_log' => array (
            'params' => true,
        ),
        'backend_reminders_settings_save' => array (
            'params' => false,
        ),
        'backend_settings_messages_block' => array (
            'params' => false,
        ),
        'backend_settings_notification_edit' => array (
            'params' => false,
        ),
        'deal_create' => array (
            'params' => true,
        ),
        'deal_lost' => array (
            'params' => true,
        ),
        'deal_move' => array (
            'params' => true,
        ),
        'deal_restore' => array (
            'params' => true,
        ),
        'deal_stage_overdue' => array (
            'params' => true,
        ),
        'deal_won' => array (
            'params' => true,
        ),
        'form_settings_save' => array (
            'params' => true,
        ),
        'invoice_actions' => array (
            'params' => true,
        ),
        'invoice_activate' => array (
            'params' => true,
        ),
        'invoice_cancel' => array (
            'params' => true,
        ),
        'invoice_expire' => array (
            'params' => true,
        ),
        'invoice_info' => array (
            'params' => true,
        ),
        'invoice_paid' => array (
            'params' => true,
        ),
        'invoice_payment' => array (
            'params' => true,
        ),
        'invoice_refund' => array (
            'params' => true,
        ),
        'message_create' => array (
            'params' => true,
        ),
        'notification_save' => array (
            'params' => true,
        ),
        'pbx_numbers_added' => array (
            'params' => true,
        ),
        'pbx_numbers_assigned' => array (
            'params' => true,
        ),
        'pbx_numbers_deleted' => array (
            'params' => true,
        ),
        'rights.config' => array (
            'params' => true,
        ),
        'routing' => array (
            'params' => true,
        ),
        'search.config' => array (
            'params' => true,
        ),
        'source_settings_save' => array (
            'params' => true,
        ),
        'start_calls_cleanup_worker' => array (
            'params' => false,
        ),
        'start_check' => array (
            'params' => false,
        ),
        'start_currencies_copy_worker' => array (
            'params' => false,
        ),
        'start_deal_stages_overdue_worker' => array (
            'params' => false,
        ),
        'start_do_all_sources_work' => array (
            'params' => true,
        ),
        'start_invoices_archive_worker' => array (
            'params' => false,
        ),
        'start_notification_birthday_worker' => array (
            'params' => false,
        ),
        'start_reminders_recap_worker' => array (
            'params' => false,
        ),
        'start_source_email_worker' => array (
            'params' => false,
        ),
),
);
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/crm/lib/classes/crmFrontController.class.php:        $handled = wa('crm')->event('controller_before.'.$class, $evt_params);
// wa-apps/crm/lib/classes/crmFrontController.class.php:        wa('crm')->event('controller_after.'.$class, $params);

