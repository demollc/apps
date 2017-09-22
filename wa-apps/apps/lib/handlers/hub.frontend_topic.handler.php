<?php

class appsHubFrontend_topicHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'title_suffix',
  1 => 'body',
  2 => 'comments',
)){
        return wa('apps')->event('hub.frontend_topic', $params, $array_keys);
    }
}
