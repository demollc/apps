<?php

class appsHubFrontend_topic_addHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'top_block',
  1 => 'bottom_block',
)){
        return wa('apps')->event('hub.frontend_topic_add', $params, $array_keys);
    }
}
