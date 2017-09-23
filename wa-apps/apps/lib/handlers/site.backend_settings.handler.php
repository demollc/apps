<?php

class appsSiteBackend_settingsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'action_button_li',
  1 => 'section',
)){
		$event = wa('apps')->event('site.backend_settings', $params, $array_keys);
        return ifempty($event);
    }
}
