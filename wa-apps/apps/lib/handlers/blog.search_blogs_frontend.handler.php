<?php

class appsBlogSearch_blogs_frontendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.search_blogs_frontend', $params, $array_keys);
    }
}
