<?php

return array(
    'id' => 'crm',
    'hooks' => array (
          'backend_assets'  => array(
              'params' => false,
              ),
        'pbx_numbers_assigned'  => array(
              'params' => true,
              ),
        'invoice_info'  => array(
              'params' => true,
              ),
        'invoice_actions'  => array(
              'params' => true,
              ),
        'invoice_payment'  => array(
              'params' => true,
              ),
        'invoice_activate'  => array(
              'params' => true,
              ),
        'backend_notification_save'  => array(
              'params' => true,
              ),
        'search.config'  => array(
              'params' => true,
              ),
        'start_notification_birthday_worker'  => array(
              'params' => true,
              ),
        'start_source_email_worker'  => array(
              'params' => true,
              ),
        'invoice_refund'  => array(
              'params' => true,
              ),
        'invoice_paid'  => array(
              'params' => true,
              ),
        ),
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/crm/lib/layouts/crmDefault.layout.php:wa()->event('backend_assets'))
// wa-apps/crm/lib/actions/settings/pbx/crmSettingsPBX.action.php:wa('crm')->event('pbx_numbers_assigned', $rows)
// wa-apps/crm/lib/actions/contact/merge/crmContactMergeRun.controller.php:wa()->event(array('contacts', 'merge'), $params)
// wa-apps/crm/lib/actions/contact/merge/crmContactMerge.action.php:wa()->event(array('contacts', 'links'), $params)
// wa-apps/crm/lib/actions/invoice/crmInvoiceId.action.php:wa()->event('invoice_info', $params)
// wa-apps/crm/lib/actions/invoice/crmInvoiceId.action.php:wa()->event('invoice_actions', $params)
// wa-apps/crm/lib/actions/invoice/crmInvoiceHandleTransaction.controller.php:wa()->event('invoice_payment', $params)
// wa-apps/crm/lib/actions/invoice/crmInvoiceHandleTransaction.controller.php:wa()->event('invoice_payment', $params)
// wa-apps/crm/lib/actions/invoice/crmInvoiceHandleTransaction.controller.php:wa()->event('invoice_activate', $params)
// wa-apps/crm/lib/classes/crmNotification.class.php:wa()->event('backend_notification_save', $event_params)
// wa-apps/crm/lib/classes/search/crmContactsSearchHelper.class.php:wa('crm')->event('search.config')
// wa-apps/crm/lib/classes/operation/crmContactOperationDelete.class.php:wa()->event(array('contacts', 'links'), $contact_ids)
// wa-apps/crm/lib/classes/crmNotificationBirthdayWorker.class.php:wa('crm')->event('start_notification_birthday_worker')
// wa-apps/crm/lib/classes/source/crmSourceEmailWorker.class.php:wa('crm')->event('start_source_email_worker')
// wa-apps/crm/lib/classes/crmPayment.class.php:wa()->event('invoice_refund', $params)
// wa-apps/crm/lib/classes/crmPayment.class.php:wa()->event('invoice_payment', $params)
// wa-apps/crm/lib/classes/crmPayment.class.php:wa()->event('invoice_paid', $params)
// wa-apps/crm/lib/classes/crmFrontController.class.php:wa('crm')->event('controller_before.'.$class, $evt_params)
// wa-apps/crm/lib/classes/crmFrontController.class.php:wa('crm')->event('controller_after.'.$class, $params)
// wa-apps/crm/lib/config/crmRightConfig.class.php:wa()->event('rights.config', $this)
// wa-apps/crm/lib/config/crmConfig.class.php:wa()->event(array($this->application, 'routing'), $route)