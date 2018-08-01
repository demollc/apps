<?php

return array(
    'id' => 'site',
    'hooks' => array(
        //site 2.2.13 41
          'backend_personal' => array(
              'params' => false,
              ),
          'domain_delete' => array(
              'params' => true,
              ),
          'domain_save' => array(
              'params' => true,
              ),
          'backend_settings' => array(
              'params' => true,
              'array_keys' => array(
                'action_button_li',
                'section')),
          'backend_sidebar'=> array(
              'params' => false,
              ),
          'update.route' =>  array(
              'params' => true,
          ),
          'routing' =>  array(
              'params' => true,
          ),
          'backend_pages_sidebar' => array(
              'params' => true,
              'void' => false,
              ),
          'backend_page_edit' => array(
              'params' => true,
              'array_keys' => array('action_button_li', 'section', 'settings_section'),
              ),
          'page_save' => array(
              'params' => true,
              'void' => true,
              ),
          'page_edit' => array(
              'params' => true,
              'void' => false,
              ),
          'page_delete' => array(
              'params' => true,
              'void' => true,
              ),
        )
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/site/lib/config/siteConfig.class.php:wa()->event(array('site', 'routing'), $routes)
// wa-apps/site/lib/actions/personal/sitePersonalSettings.action.php:wa('site')->event('backend_personal')
// wa-apps/site/lib/actions/personal/sitePersonalApp.action.php:wa($app_id)->event(array($app_id, 'personal.settings'), $event_params)
// wa-apps/site/lib/actions/settings/siteSettingsSave.controller.php:wa('site')->event('domain_save', $event_params)
// wa-apps/site/lib/actions/settings/siteSettingsDelete.controller.php:wa('site')->event('domain_delete', $domain)
// wa-apps/site/lib/actions/routing/siteRoutingSave.controller.php:wa()->event('update.route', $params)
// wa-apps/site/lib/actions/domains/siteDomainsSave.controller.php:wa('site')->event('domain_save', $event_params)
// wa-apps/site/lib/layouts/siteDefault.layout.php:wa()->event('backend_sidebar'))
