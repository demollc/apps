<?php

class appsBlogBackend_streamHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'menu',
)){
        return wa('apps')->event('blog.backend_stream', $params, $array_keys);
    }
}
