<?php

class appsHelpdeskBackend_page_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'action_button_li',
  1 => 'section',
  2 => 'settings_section',
)){
		$event = wa('apps')->event('helpdesk.backend_page_edit', $params, $array_keys);
        return ifempty($event);
    }
}
