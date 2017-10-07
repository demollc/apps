<?php

class appsBlogBlog_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('blog.blog_delete', $params, $array_keys);
        return ifempty($event);
    }
}
