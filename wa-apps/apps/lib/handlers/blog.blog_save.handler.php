<?php

class appsBlogBlog_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.blog_save', $params, $array_keys);
    }
}
