<?php

class appsBlogBlog_predeleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('blog.blog_predelete', $params, $array_keys);
        return ifempty($event);
    }
}
