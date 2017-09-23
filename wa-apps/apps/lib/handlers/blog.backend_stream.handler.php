<?php

class appsBlogBackend_streamHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'menu',
)){
		$event = wa('apps')->event('blog.backend_stream', $params, $array_keys);
        return ifempty($event);
    }
}
