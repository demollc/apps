<?php

class appsHubFrontend_topic_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'top_block',
  1 => 'bottom_block',
)){
		$event = wa('apps')->event('hub.frontend_topic_edit', $params, $array_keys);
        return ifempty($event);
    }
}
