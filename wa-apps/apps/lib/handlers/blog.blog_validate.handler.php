<?php

class appsBlogBlog_validateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.blog_validate', $params, $array_keys);
    }
}
