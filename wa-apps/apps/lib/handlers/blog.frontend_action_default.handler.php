<?php

class appsBlogFrontend_action_defaultHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'nav_before',
  1 => 'footer',
  2 => 'head',
  3 => 'sidebar',
)){
		$event = wa('apps')->event('blog.frontend_action_default', $params, $array_keys);
        return ifempty($event);
    }
}
