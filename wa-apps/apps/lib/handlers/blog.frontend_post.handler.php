<?php

class appsBlogFrontend_postHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'footer',
)){
		$event = wa('apps')->event('blog.frontend_post', $params, $array_keys);
        return ifempty($event);
    }
}
