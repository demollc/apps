<?php

class appsBlogBackend_postHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'footer',
)){
        return wa('apps')->event('blog.backend_post', $params, $array_keys);
    }
}
