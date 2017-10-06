<?php

return array(
    'id' => 'contacts',
    'hooks' => array (
        //contacts v1.1.6.20
          'backend_assets'  => array(
              'params' => false,
              ),
          'backend_contact_info'  => array(
              'params' => true,
              ),
          'backend_last_view_context'  => array(
              'params' => true,
              ),
          'backend_sidebar'  => array(
              'params' => true,
              'array_keys' => array('top_li'),
              ),
          'backend_templates'  => array(
              'params' => false,
              ),
          'links'  => array(
              'params' => true,
              ),
          'profile.tab'  => array(
              'params' => true,
              ),
          'rights.config'  => array(
              'params' => true,
              ),
        //wa()->event(array('contacts', 'merge'), $params);
        //wa()->event(array('contacts', 'routing'), $routes);
        //wa('contacts')->event(array('contacts', 'search_form'));
        //wa('contacts')->event('contacts.contacts_collection', $params);
        //wa('contacts')->event('mailer.recipients.form', $params);
        //wa('contacts')->event('shop.backend_customers_list', $params);
        ),
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/contacts/lib/config/contactsRightConfig.class.php:wa()->event('rights.config', $this)
// wa-apps/contacts/lib/config/contactsConfig.class.php:wa()->event(array('contacts', 'routing'), $routes)
// wa-apps/contacts/lib/classes/contactsHelper.class.php:wa('contacts')->event(array('contacts', 'search_form'))
// wa-apps/contacts/lib/handlers/shop.backend_customers_list.handler.php:wa('contacts')->event('shop.backend_customers_list', $params)
// wa-apps/contacts/lib/handlers/mailer.recipients.form.handler.php:wa('contacts')->event('mailer.recipients.form', $params)
// wa-apps/contacts/lib/handlers/contacts.contacts_collection.handler.php:wa('contacts')->event('contacts.contacts_collection', $params)
// wa-apps/contacts/lib/actions/backend/contactsBackendSidebar.action.php:wa()->event('backend_sidebar', $event_params, array('top_li')))
// wa-apps/contacts/lib/actions/contacts/contactsContactsMergeSelectMaster.action.php:wa()->event('links', $params)
// wa-apps/contacts/lib/actions/contacts/contactsContactsLinks.action.php:wa()->event('links', $ids)
// wa-apps/contacts/lib/actions/contacts/contactsContactsDelete.controller.php:wa()->event('links', $contacts)))
// wa-apps/contacts/lib/actions/contacts/contactsContactsMerge.controller.php:wa()->event(array('contacts', 'merge'), $params)
// wa-apps/contacts/lib/actions/contacts/contactsContactsInfo.action.php:wa()->event('profile.tab', $this->id) as $app_id => $one_or_more_links)
// wa-apps/contacts/lib/actions/contacts/contactsContactsInfo.action.php:wa()->event('backend_assets'))
// wa-apps/contacts/lib/actions/contacts/contactsContactsInfo.action.php:wa()->event('backend_contact_info', $backend_contact_info_params))
// wa-apps/contacts/lib/actions/contacts/contactsContactsInfo.action.php:wa()->event('backend_last_view_context', $params)
// wa-apps/contacts/lib/layouts/contactsDefault.layout.php:wa()->event('backend_assets'))
// wa-apps/contacts/lib/layouts/contactsDefault.layout.php:wa()->event('backend_templates'))
