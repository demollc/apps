<?php

return array(
    'id' => 'helpdesk',
    'hooks' => array(
    //helpdesk 1.2.3 35
          'action_editor' => array(
              'params' => true,
              ),
          'backend_layout' => array(
              'params' => true,
              ),
          'before_uninstall' => array(
              'params' => false,
              ),
          'cron' => array(
              'params' => true,
              ),
          'installed' => array(
              'params' => false,
              ),
          'json_controller' => array(
              'params' => true,
              ),
          'request_action' => array(
              'params' => true,
              ),
          'request_created' => array(
              'params' => true,
              ),
          'requests_delete' => array(
              'params' => true,
              ),
          'sidebar' => array(
              'params' => true,
              ),
          'source_editor' => array(
              'params' => true,
              ),
          'view_action' => array(
              'params' => true,
              ),
          'view_workflow_action' => array(
              'params' => true,
              ),
          'workflow_action_presend_messages' => array(
              'params' => true,
              ),
          'frontend_error' => array(
              'params' => true,
              ),
          'requests_collection_filter' => array(
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
        ),
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/helpdesk/lib/model/helpdeskRequest.model.php:wa('helpdesk')->event('requests_delete', $params)
// wa-apps/helpdesk/lib/config/uninstall.php:wa('helpdesk')->event('before_uninstall')
// wa-apps/helpdesk/lib/config/install.php:wa('helpdesk')->event('installed')
// wa-apps/helpdesk/lib/classes/helpdeskHelper.class.php:wa('helpdesk')->event('request_action', $params)
// wa-apps/helpdesk/lib/classes/helpdeskHelper.class.php:wa('contacts')->event('profile.tab', $id) as $app_id => $one_or_more_links)
// wa-apps/helpdesk/lib/classes/helpdeskFrontendView.action.php:wa()->event('frontend_error', $params)
// wa-apps/helpdesk/lib/classes/helpdeskJson.controller.php:wa('helpdesk')->event('json_controller', $params)
// wa-apps/helpdesk/lib/classes/helpdeskRequestsCollection.class.php:wa()->event('requests_collection_filter', $params)
// wa-apps/helpdesk/lib/classes/helpdeskView.action.php:wa('helpdesk')->event('view_action', $params)
// wa-apps/helpdesk/lib/sources/helpdeskCommonST.class.php:wa('helpdesk')->event('request_created', $message)
// wa-apps/helpdesk/lib/sources/helpdeskBackendSourceType.class.php:wa('helpdesk')->event('request_created', $message)
// wa-apps/helpdesk/lib/workflow/helpdeskWorkflowBasicAction.class.php:wa('helpdesk')->event('workflow_action_presend_messages', $params)
// wa-apps/helpdesk/lib/workflow/helpdeskWorkflowAction.class.php:wa('helpdesk')->event('view_workflow_action', $params)
// wa-apps/helpdesk/lib/actions/backend/helpdeskBackendSidebar.action.php:wa('helpdesk')->event('sidebar', $this))
// wa-apps/helpdesk/lib/actions/editor/helpdeskEditorAction.controller.php:wa('helpdesk')->event('action_editor', $params)
// wa-apps/helpdesk/lib/actions/helpdeskCron.cli.php:wa('helpdesk')->event('cron', $params)
// wa-apps/helpdesk/lib/actions/sources/helpdeskSourcesEditor.action.php:wa('helpdesk')->event('source_editor', $params)
// wa-apps/helpdesk/lib/layouts/helpdeskBackend.layout.php:wa('helpdesk')->event('backend_layout', $params)
