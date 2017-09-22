<?php

class appsBlogSearch_posts_backendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.search_posts_backend', $params, $array_keys);
    }
}
