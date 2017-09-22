<?php

class appsBlogBackend_commentsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'toolbar',
)){
        return wa('apps')->event('blog.backend_comments', $params, $array_keys);
    }
}
