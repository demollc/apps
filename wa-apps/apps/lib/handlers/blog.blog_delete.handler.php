<?php

class appsBlogBlog_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.blog_delete', $params, $array_keys);
    }
}
