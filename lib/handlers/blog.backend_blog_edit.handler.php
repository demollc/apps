<?php

class appsBlogBackend_blog_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("settings"))
    {
        $event = wa('apps')->event('blog.backend_blog_edit', $params, $array_keys);
        return ifempty($event);
    }
}
