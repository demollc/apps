<?php

return array(
    'id' => 'team',
    'hooks' => array (
        'backend_assets'  => array(
              'params' => false,
              ),
        'backend_schedule_settings'  => array(
              'params' => true,
              ),
        'routing_backend'  => array(
              'params' => true,
              ),
        'rights.config'  => array(
              'params' => true,
              ),
        ),
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/team/lib/config/teamRightConfig.class.php:wa()->event('rights.config', $this)
// wa-apps/team/lib/config/teamConfig.class.php:wa()->event(array($this->application, 'routing_backend'), $route)
// wa-apps/team/lib/classes/teamFrontController.class.php:wa('team')->event('controller_before.'.$class, $evt_params)
// wa-apps/team/lib/classes/teamFrontController.class.php:wa('team')->event('controller_after.'.$class, $params)
// wa-apps/team/lib/handlers/contacts.contacts_collection.handler.php:wa('team')->event('contacts_collection', $params)
// wa-apps/team/lib/handlers/contacts.profile.tab.handler.php:wa()->event(array('team', 'profile_tab'), $params)
// wa-apps/team/lib/handlers/contacts.delete.handler.php:wa('team')->event('contacts_delete', $params)
// wa-apps/team/lib/actions/schedule/teamScheduleSettings.action.php:wa()->event('backend_schedule_settings', $params)
// wa-apps/team/lib/actions/users/teamUsersPrepareDelete.action.php:wa()->event(array('contacts', 'links'), $allowed_ids) as $app_id => $app_links)
// wa-apps/team/lib/layouts/teamDefault.layout.php:wa()->event('backend_assets'))
