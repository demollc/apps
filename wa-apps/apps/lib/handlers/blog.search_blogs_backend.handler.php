<?php

class appsBlogSearch_blogs_backendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.search_blogs_backend', $params, $array_keys);
    }
}
