<?php

class appsBlogSearch_posts_backendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('blog.search_posts_backend', $params, $array_keys);
        return ifempty($event);
    }
}
