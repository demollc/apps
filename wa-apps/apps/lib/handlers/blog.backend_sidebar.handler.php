<?php

class appsBlogBackend_sidebarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'menu',
  1 => 'section',
  2 => 'system',
)){
		$event = wa('apps')->event('blog.backend_sidebar', $params, $array_keys);
        return ifempty($event);
    }
}
