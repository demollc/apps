<?php

return array(
    'id' => 'webasyst',
    'hooks' => array (
          'backend_dispatch_miss'  => array(
              'params' => true,
              'void' => false,
              ),
          'backend_header' => array(
              'params' => false,
              'void' => false,
              'array_keys' => array('html'),
              ),
          'backend_personal_profile' => array(
              'params' => true,
              ),
          'backend_page_edit'  => array(
              'params' => true,
              ),
          'backend_pages_sidebar'  => array(
              'params' => true,
              'void' => false,
              ),
          'page_delete'  => array(
              'params' => true,
              'void' => true,
              ),
          'page_edit'  => array(
              'params' => true,
              'void' => false,
              ),
          'page_save'  => array(
              'params' => true,
              'void' => true,
              ),
          'profile.tab'  => array(
              'params' => true,
              ),
          'signup'  => array(
              'params' => true,
              'void' => true,
              ),
        ),
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-system/helper/view.php:wa()->event(array('webasyst', 'backend_header'), $params, array('html'))
// wa-system/webasyst/lib/models/waContact.model.php:wa()->event(array('contacts', 'delete'), $id)
// wa-system/webasyst/lib/actions/profile/webasystProfilePage.action.php:wa()->event(array('webasyst', 'backend_personal_profile'), $params)
// wa-system/_.waSystem.class.1.php:wa('webasyst', 1)->event('backend_dispatch_miss', $app))
// wa-system/waSystem.class.php:wa('webasyst', 1)->event('backend_dispatch_miss', $app))
// wa-system/view/waViewHelper.class.php:wa()->event(array('contacts', 'profile.tab'), $id)
// wa-system/page/actions/waPage.actions.php:wa()->event('backend_pages_sidebar', $event_params)
// wa-system/page/actions/waPage.actions.php:wa()->event('page_edit', $data)
// wa-system/page/actions/waPage.actions.php:wa()->event('page_save', $event_params)
// wa-system/page/actions/waPage.actions.php:wa()->event('page_delete', $event_params)
// wa-system/controller/waOAuthController.class.php:wa()->event('signup', $contact)
// wa-system/controller/waSignupAction.class.php:wa()->event('signup', $contact)
// wa-system/contact/waContactsCollection.class.php:wa()->event(array('contacts', 'contacts_collection'), $params))
// wa-system/contact/waContact.class.php:wa()->event(array('contacts', 'save'), $this)
