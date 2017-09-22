<?php

class appsBlogSearch_posts_frontendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.search_posts_frontend', $params, $array_keys);
    }
}
