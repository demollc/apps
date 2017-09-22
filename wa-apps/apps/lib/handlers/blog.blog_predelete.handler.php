<?php

class appsBlogBlog_predeleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.blog_predelete', $params, $array_keys);
    }
}
