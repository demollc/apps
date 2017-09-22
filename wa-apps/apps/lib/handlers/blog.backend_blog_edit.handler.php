<?php

class appsBlogBackend_blog_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'settings',
)){
        return wa('apps')->event('blog.backend_blog_edit', $params, $array_keys);
    }
}
