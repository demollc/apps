<?php

class appsBlogBackend_post_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'sidebar',
  1 => 'toolbar',
  2 => 'editor_tab',
)){
        return wa('apps')->event('blog.backend_post_edit', $params, $array_keys);
    }
}
